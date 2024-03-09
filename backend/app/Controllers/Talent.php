<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ApplypostsModel;
use App\Models\BoughtModel;
use App\Models\CartModel;
use App\Models\CompanyModel;
use App\Models\CompanyphotoModel;
use App\Models\CompanyrequirementsModel;
use App\Models\CompanyuserModel;
use App\Models\CompgalleryModel;
use App\Models\CoursemanagementModel;
use App\Models\OccupationsModel;
use App\Models\OrdertransactionModel;
use App\Models\PortfolioModel;
use App\Models\QuestionsModel;
use App\Models\ShortlistModel;
use App\Models\UsersModel;
use App\Models\WalletModel;
use App\Models\WalletTransactionsModel;

class Talent extends BaseController
{
    private $loggedData;
    private $loggedTalent;
    private $cartModel;
    private $companyModel;
    private $ordertransactionModel;
    private $usersModel;
    private $boughtModel;
    private $walletModel;
    private $walletTransactionsModel;
    private $shortlistModel;
    private $companyrequirementsModel;
    private $coursemanagementModel;
    private $occupationsModel;
    private $companyuserModel;
    private $companyphotoModel;
    private $compgalleryModel;
    private $portfolioModel;
    private $company_details;
    private $applypostsModel;
    private $questionsModel;
    public function __construct()
    {
        $this->loggedData = session()->get('LoggedData');
        $this->loggedTalent = $this->loggedData['talent'];
        $this->cartModel = new CartModel();
        $this->applypostsModel = new ApplypostsModel();
        $this->companyModel = new CompanyModel();
        $this->ordertransactionModel = new OrdertransactionModel();
        $this->usersModel = new UsersModel();
        $this->boughtModel = new BoughtModel();
        $this->walletModel = new WalletModel();
        $this->walletTransactionsModel = new WalletTransactionsModel();
        $this->shortlistModel = new ShortlistModel();
        $this->companyrequirementsModel = new CompanyrequirementsModel();
        $this->coursemanagementModel = new CoursemanagementModel();
        $this->occupationsModel = new OccupationsModel();
        $this->companyuserModel = new CompanyuserModel();
        $this->companyphotoModel = new CompanyphotoModel();
        $this->compgalleryModel = new CompgalleryModel();
        $this->portfolioModel = new PortfolioModel();
        $this->questionsModel = new QuestionsModel();

        $company_id = $this->loggedTalent['tb_company_user_id'];
        $this->company_details = $this->companyModel->select('*')
            ->join('tb_company_user', 'tb_company.tb_company_id = tb_company_user.tb_company_user_id')
            ->where(array('tb_company_id' => $company_id))
            ->findAll();
    }
    public function dashboard()
    {
        if (empty($this->loggedData['talent'])) {
            return  redirect()->back();
        }
        $company_name = $this->company_details[0]['company_name'];
        $data['company_name'] = $company_name;
        $data['pageTitle'] = 'Karya | Dashboard';
        $data['logo'] = 'app-assets/images/logo_pathafinder.png';
        $data['active'] = 'dashboard';
        $data['css'] = array(
            base_url('app-assets/talent/style.css')
        );
        $data['loggedTalent'] = $this->loggedTalent;
        return view('talent/dashboard', $data);
    }
    public function profile()
    {
        $company_name = $this->company_details[0]['company_name'];
        $data['company_name'] = $company_name;
        $company_id = $this->loggedTalent['tb_company_user_id'];
        $email = $this->loggedTalent['company_email'];

        $data['pageTitle'] = 'Karya | Profile';
        $data['logo'] = 'app-assets/images/logo_pathafinder.png';
        $data['active'] = 'profile';
        $data['css'] = array(
            base_url('app-assets/talent/style.css')
        );
        $data['companyProfile'] = $this->companyuserModel->where(array("tb_company_user_id" => $company_id))->findAll();
        $data['companyDetails'] = $this->companyModel->select('*')
            ->join('tb_company_user', 'tb_company.tb_company_id = tb_company_user.tb_company_user_id')
            ->where(array('tb_company_id' => $company_id))
            ->findAll();
        $data['companyPhotos'] = $this->companyphotoModel->where(array("tb_company_id" => $company_id))->findAll();
        $data['companyGallery'] = $this->compgalleryModel->where(array("company_id" => $company_id))->findAll();
        return view('talent/profile', $data);
    }
    public function companyInfoUpdate()
    {
        $company_id = $this->loggedTalent['tb_company_user_id'];
        $email = $this->loggedTalent['company_email'];
        $company_name = $this->request->getPost('company_name');
        $website_url = $this->request->getPost('website_url');
        $sector = $this->request->getPost('sector');
        $sector_name = '';
        if ($sector == 1) {
            $sector_name = 'Utilities and Energy';
        }
        if ($sector == 2) {
            $sector_name = 'Technology and Media';
        }
        if ($sector == 3) {
            $sector_name = 'Financial';
        }
        if ($sector == 4) {
            $sector_name = 'Consumer';
        }
        if ($sector == 5) {
            $sector_name = 'Industrial';
        }
        if ($sector == 6) {
            $sector_name = 'Law & Order';
        }
        if ($sector == 7) {
            $sector_name = 'Business, Marketing & Sales';
        }
        if ($sector == 8) {
            $sector_name = 'Education & Sports';
        }
        if ($sector == 9) {
            $sector_name = 'Technology';
        }
        $company_size = $this->request->getPost('company_size');
        $company_address1 = $this->request->getPost('company_address1');
        $company_address2 = $this->request->getPost('company_address2');
        $company_zip = $this->request->getPost('company_zip');
        $company_city = $this->request->getPost('company_city');
        $company_state = $this->request->getPost('company_state');
        $company_location_coordinate = $this->request->getPost('company_location_coordinate');
        $company_banefit = $this->request->getPost('company_banefit');
        $company_growth = $this->request->getPost('company_growth');
        $company_history = $this->request->getPost('company_history');
        $culture_style = $this->request->getPost('culture_style');
        $ssm_number = $this->request->getPost('ssm_number');
        $contact_number = $this->request->getPost('contact_number');
        $contact_email = $this->request->getPost('contact_email');
        $updateData1 = array(
            "company_name" => $company_name,
            "culture_style" => $culture_style,
            "website_url" => $website_url,
            "sector" => $sector,
            "sector_name" => $sector_name,
            "company_size" => $company_size,
            "company_address1" => $company_address1,
            "company_address2" => $company_address2,
            "company_zip" => $company_zip,
            "company_city" => $company_city,
            "company_state" => $company_state,
            "company_location_coordinate" => $company_location_coordinate,
            "company_banefit" => $company_banefit,
            "company_growth" => $company_growth,
            "company_history" => $company_history
        );
        $this->companyModel->update(array("tb_company_id" => $company_id), $updateData1);
        $updateData2 = array(
            "ssm_number" => $ssm_number,
            "contact_number" => $contact_number,
            "contact_email" => $contact_email,
        );
        $this->companyuserModel->update(array("tb_company_user_id" => $company_id), $updateData2);
        return  redirect()->back()->with('success', 'Updated Company Information !');
    }
    public function companyPhotosUpdate()
    {
        $company_id = $this->loggedTalent['tb_company_user_id'];
        $file = $this->request->getFile('company_photo_file_name');
        if ($file->isValid()) {
            $path_img = "assets/uploads/company/" . $company_id;
            if (!file_exists($path_img)) {
                mkdir($path_img, 0777, true);
            }
            if (!$file->hasMoved()) {
                $file_path = $file->getRandomName();
                $file->move($path_img, $file_path);
                $this->companyphotoModel->set(array("company_photo_file_name" => $file_path))->where(array("tb_company_id" => $company_id))->update();
            }
        }
        $file1 = $this->request->getFile('companyBgImage');
        if ($file1->isValid()) {
            $path_img1 = "assets/uploads/company/" . $company_id;
            if (!file_exists($path_img1)) {
                mkdir($path_img1, 0777, true);
            }
            if (!$file1->hasMoved()) {
                $file_path1 = $file1->getRandomName();
                $file1->move($path_img1, $file_path1);
                $this->companyphotoModel->set(array("companyBgImage" => $file_path1))->where(array("tb_company_id" => $company_id))->update();
            }
        }
        return  redirect()->back()->with('success', 'Updated Company Photos !');
    }
    public function companyVideoUpdate()
    {
        $company_id = $this->loggedTalent['tb_company_user_id'];
        $file = $this->request->getFile('video_path');
        if ($file->isValid()) {
            $path_img = "assets/uploads/company/" . $company_id;
            if (!file_exists($path_img)) {
                mkdir($path_img, 0777, true);
            }
            if (!$file->hasMoved()) {
                $file_path = $file->getRandomName();
                $file->move($path_img, $file_path);
                $this->companyModel->set(array("video_path" => $file_path))->where(array("tb_company_id" => $company_id))->update();
            }
        }
        return  redirect()->back()->with('success', 'Updated Company Video !');
    }
    public function companyGalleryUpdate()
    {
        $company_id = $this->loggedTalent['tb_company_user_id'];
        if ($this->request->getFileMultiple('userfile')) {
            foreach ($this->request->getFileMultiple('userfile') as $file) {
                if ($file->isValid()) {
                    $path_img = "assets/uploads/company/" . $company_id;
                    if (!file_exists($path_img)) {
                        mkdir($path_img, 0777, true);
                    }
                    if (!$file->hasMoved()) {
                        $file_path = $file->getRandomName();
                        $file->move($path_img, $file_path);
                        $insertGallery = array(
                            'path' => $file_path,
                            'name' => $file_path,
                            'company_id' => $company_id
                        );
                        $this->compgalleryModel->insert($insertGallery);
                    }
                }
            }
        }
        return  redirect()->back()->with('success', 'Updated Company Gallery !');
    }
    public function removeGallery($id)
    {
        $this->compgalleryModel->delete($id);
        return  redirect()->back()->with('success', 'Remove Company Gallery !');
    }
    public function cart()
    {
        $company_name = $this->company_details[0]['company_name'];
        $data['company_name'] = $company_name;
        $data['pageTitle'] = 'Karya | Cart';
        $data['logo'] = 'app-assets/images/logo_pathafinder.png';
        $data['active'] = 'cart';
        $data['css'] = array(
            base_url('app-assets/talent/style.css')
        );
        $data['cartDetails'] = $this->cartModel->select('*')
            ->join('users', 'tb_cart.candidate_id = users.id')
            ->where(array('company_id' => $this->loggedTalent['tb_company_user_id'], 'status' => 1))
            ->findAll();
        return view('talent/cart', $data);
    }
    public function addCart()
    {
        $company_id = $this->loggedTalent['tb_company_user_id'];
        $company_email = $this->loggedTalent['company_email'];

        $candidate_id = $this->request->getPost('candidate_id');
        $user_email = $this->request->getPost('user_email');
        $occ_id = $this->request->getPost('occ_id');

        $data = array(
            "company_id" => $company_id,
            "company_email" => $company_email,
            "user_email" => $user_email,
            "candidate_id" => $candidate_id,
            "occ_id" => $occ_id,
            "status" => 1
        );
        $this->cartModel->insert($data);
        return  redirect()->to('talent/myaccount');
    }
    public function removeCart($cart_id)
    {
        $this->cartModel->update(array('tb_cart_id' => $cart_id), array('status' => 2));
        return  redirect()->to('talent/cart');
    }
    public function ProcessPayAmount()
    {
        $company_id = $this->loggedTalent['tb_company_user_id'];
        $email = $this->loggedTalent['company_email'];
        $sub_type = $this->request->getPost('add_wall');
        if ($sub_type == 1) $amount = "1.50";
        else $amount = "2.00";
        $amount = $sub_type;
        $merchantID = "SB_talentlounge";
        $orderid = "TL" . strtotime(date("Y-m-d H:i:s"));
        $verifykey = "9cab5a9ae8c73cc51a98a12868dc0461";
        $vcode = md5($amount . $merchantID . $orderid . $verifykey);
        $mobile = $this->company_details[0]['contact_number'];
        $country = "MY";
        $description = "Payment Done by Purchase profile of " . $email;
        $name = $this->company_details[0]['company_name'];
        $cart_id = $this->request->getPost('cart_id');
        $inputData = array(
            'comp_id' => $company_id,
            'comp_email' => $email,
            'order_id' => $orderid,
            'pgtrans_ref' => $orderid,
            'trans_amount' => $amount,
            'trans_type' => '2',
            'trans_reason' => 'Payment Done by Purchased profile',
            'cart_id' => $cart_id,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'status' => '2'
        );
        $this->ordertransactionModel->insert($inputData);
        $array = explode('@', $cart_id);
        foreach ($array as $i => $value) {
            if ($i == 0) continue;
            $cart_id = $value;
            $this->cartModel->update(array('tb_cart_id' => $cart_id), array('status' => 3));
        }
        $url = '';
        $url .= "https://sandbox.merchant.razer.com/RMS/pay/SB_talentlounge/?";
        $url .= "amount=" . $amount . "&";
        $url .= "orderid=" . urlencode($orderid) . "&";
        $url .= "bill_name=" . urlencode($name) . "&";
        $url .= "bill_email=" . urlencode($email) . "&";
        $url .= "bill_mobile=" . urlencode($mobile) . "&";
        $url .= "bill_desc=" . urlencode($description) . "&";
        $url .= "country=" . $country . "&";
        $url .= "treq=1&";
        $url .= "vcode=" . $vcode;
        return redirect()->to($url);
        $candidate_ids = $this->request->getPost('candidate_id');
        $array = explode('@', $candidate_ids);
        foreach ($array as $i => $value) {
            if ($i == 0) continue;
            $candidate_id = $value;
            $this->BuyProfileUser($candidate_id);
        }
    }
    public function BuyProfileUser($candidate_id)
    {
        $company_id = $this->loggedTalent['tb_company_user_id'];
        $email = $this->loggedTalent['company_email'];
        $unique_id = rand(100000, 999999);
        $invoice_id = "TL" . $company_id . "-" . $candidate_id . "-" . date("dmY") . "-" . $unique_id;
        $invoice_id_md5 = md5($invoice_id);
        if ($candidate_id) {
            $usersRow = $this->usersModel->where('ID', $candidate_id)->first();
            $candidate_email = $usersRow['email'];
            $candidate_name = $usersRow['fullname'];
            $candidate_exp = $usersRow['job_experience'];
            if ($candidate_exp <= 5) {
                $earning = 20;
                $bill_desc = 'Profile Lvl 1';
            }
            if ($candidate_exp > 5 && $candidate_exp < 10) {
                $earning = 50;
                $bill_desc = 'Profile Lvl 2';
            }
            if ($candidate_exp > 9) {
                $earning = 100;
                $bill_desc = 'Profile Lvl 3';
            }
            $inputData = array(
                'invoice_id' => $invoice_id,
                'invoice_id_md5' => $invoice_id_md5,
                'company_id' => $company_id,
                'company_email' => $email,
                'candidate_id' => $candidate_id,
                'user_email' => $candidate_email,
                'candidate_name' => $candidate_name,
                'earning' => $earning,
                'transfered' => 1,
                'status' => 1
            );
            $this->boughtModel->insert($inputData);
        }

        $data['invoice_id_md5'] = $invoice_id;
        $data['bill_description'] = $bill_desc;
        $data['amount'] = $earning;
        $amount = "50";
        $inputData1 = array(
            'comp_id' => $company_id,
            'comp_email' => $email,
            'order_id' => $invoice_id,
            'pgtrans_ref' => $invoice_id,
            'trans_amount' => $amount,
            'trans_type' => '2',
            'trans_reason' => 'Purchased User Profile',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'status' => 2
        );
        $this->walletTransactionsModel->insert($inputData);
        $updateData = array(
            'wallet_balance' => 'wallet_balance-' . $amount,
            'modified_at' => date('Y-m-d H:i:s'),
        );
        $this->walletModel->update(array('comp_id' => $company_id), $updateData);
    }
    public function status()
    {
        $company_id1 = $this->loggedTalent['tb_company_user_id'];
        $company_name = $this->company_details[0]['company_name'];
        $data['company_name'] = $company_name;
        $data['pageTitle'] = 'Karya | Status';
        $data['logo'] = 'app-assets/images/logo_pathafinder.png';
        $data['active'] = 'status';
        $data['css'] = array(
            base_url('app-assets/talent/style.css')
        );
        $jobCount = $this->applypostsModel->where(array("companyId" => $company_id1, "app_status" => "A"))->countAllResults();
        $data['jobCount'] = $jobCount;
        return view('talent/status', $data);
    }
    public function vacancies()
    {
        $company_name = $this->company_details[0]['company_name'];
        $data['company_name'] = $company_name;
        $company_id = $this->loggedTalent['tb_company_user_id'];
        $email = $this->loggedTalent['company_email'];
        $data['pageTitle'] = 'Karya | Vacancies';
        $data['logo'] = 'app-assets/images/logo_pathafinder.png';
        $data['active'] = 'vacancies';
        $data['css'] = array(
            base_url('app-assets/talent/style.css')
        );
        $data['cat_list'] = $this->coursemanagementModel->orderBy("id", "asc")->findAll();
        $data['role_list'] = $this->occupationsModel->orderBy("occ_id", "asc")->findAll();
        $data['jobDetails'] = $this->companyrequirementsModel->where(array("companyId" => $company_id))->orderBy('id', 'desc')->findAll();
        $data['coursemanagementModel'] = $this->coursemanagementModel;
        $data['occupationsModel'] = $this->occupationsModel;
        $postjobs = $this->postjobs($this->company_details[0]['sector_name']);
        $data['postjobs'] = $postjobs;
        if ($crId = session()->get('crId')) {
            $data['postdata'] = $this->companyrequirementsModel->where("id", $crId)->findAll();
        }
        return view('talent/vacancies', $data);
    }
    public function vacanciespost()
    {
        $company_id = $this->loggedTalent['tb_company_user_id'];
        $postData = $this->request->getPost();
        $postData['data']['companyId'] = $company_id;
        $this->companyrequirementsModel->insert($postData['data']);
        $crId = $this->companyrequirementsModel->getInsertID();
        session()->remove('crId');
        session()->set('crId', $crId);
        return  redirect()->back()->with('success', 'Job Generated !');
    }
    public function postjobs($sector_name)
    {
        $offered = "Technical and mechanical";
        $activities = $sector_name;
        $stakeholders = "an NGO";
        $search1 = "Generate a job posting that consists of a position overview, company, position, job description, responsibilities and job requirements for a position of a " . $offered . " for an " . $sector_name . " that " . $activities . " for " . $stakeholders;
        $data1 = array(
            "model" => "gpt-3.5-turbo",
            "messages" => [
                [
                    "role" => "user",
                    "content" => $search1
                ]
            ],
            "temperature" => 0.9,
            "max_tokens" => 300,
            "top_p" => 1,
            "frequency_penalty" => 0,
            "presence_penalty" => 0.6,
            "stop" => [" Human:", " AI:"]
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.openai.com/v1/chat/completions');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data1));

        $headers = array();
        $headers[] = 'Content-Type: application/json';
        $headers[] = 'Authorization: Bearer ' . getenv('keyGPT');
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        foreach (json_decode($response) as $key => $value) {
            if ($key == "choices") {
                $choices = $value;
                return $choices[0]->message->content;
            }
        }
        curl_close($ch);
    }
    public function vacanciesvideo()
    {
        $company_id = $this->loggedTalent['tb_company_user_id'];
        $job_id = $this->request->getPost('job_id');
        $question1 = $this->request->getPost('question1');
        $question2 = $this->request->getPost('question2');
        $question3 = $this->request->getPost('question3');
        $question4 = $this->request->getPost('question4');
        $question5 = $this->request->getPost('question5');
        $fileVideo = $this->request->getFile('question_video');
        if ($fileVideo->isValid()) {
            if (!$fileVideo->hasMoved()) {
                $fileVideo_path = $fileVideo->getRandomName();
                $fileVideo->move('assets/uploads/questions', $fileVideo_path);
                $insert = [
                    'job_id' => $job_id,
                    'companyId' => $company_id,
                    'question1' => $question1,
                    'question2' => $question2,
                    'question3' => $question3,
                    'question4' => $question4,
                    'question5' => $question5,
                    'question_video' => 'assets/uploads/questions/' . $fileVideo_path
                ];
                $this->questionsModel->insert($insert);
            }
        }
        return  redirect()->back()->with('success', 'Video Uploaded !');
    }
    public function explore()
    {
        $company_name = $this->company_details[0]['company_name'];
        $data['company_name'] = $company_name;
        $data['pageTitle'] = 'Karya | Explore';
        $data['logo'] = 'app-assets/images/logo_pathafinder.png';
        $data['active'] = 'explore';
        $data['css'] = array(
            base_url('app-assets/talent/style.css')
        );
        $data['performance'] = $this->performance();
        $data['potential'] = $this->potential();
        return view('talent/explore', $data);
    }
    public function performance()
    {
        $search1 = "A jobseeker has a (Primary Character) primary personality trait
        and (Secondary Character) secondary personality trait, a (Principal
        Value) principal value system, a (Thinking Style) thinking style,
        having (Number of Years) years of experience as (Name of Various
        Designations Held) and covering (Types of Markets/Industries
        Sectors), and have high competencies in (List Types of
        Responsibilities). Based on the information above, provide a 5
        bullet point summary of how this person can be an effective in
        performance as a (Job Position) at an (Company Type) which
        serves the (Main Stakeholder) and carries out activities such as
        (State Core Activities)";
        $data1 = array(
            "model" => "gpt-3.5-turbo",
            "messages" => [
                [
                    "role" => "user",
                    "content" => $search1
                ]
            ],
            "temperature" => 0.9,
            "max_tokens" => 150,
            "top_p" => 1,
            "frequency_penalty" => 0,
            "presence_penalty" => 0.6,
            "stop" => [" Human:", " AI:"]
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.openai.com/v1/chat/completions');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data1));

        $headers = array();
        $headers[] = 'Content-Type: application/json';
        $headers[] = 'Authorization: Bearer ' . getenv('keyGPT');
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        foreach (json_decode($response) as $key => $value) {
            if ($key == "choices") {
                $choices = $value;
                return $choices[0]->message->content;
            }
        }
        curl_close($ch);
    }
    public function potential()
    {
        $search1 = "Other than the role of a (Job Position), what other roles in this
        industry would this candidate be suited for. State the role and how
        this candidate would be effective.";
        $data1 = array(
            "model" => "gpt-3.5-turbo",
            "messages" => [
                [
                    "role" => "user",
                    "content" => $search1
                ]
            ],
            "temperature" => 0.9,
            "max_tokens" => 150,
            "top_p" => 1,
            "frequency_penalty" => 0,
            "presence_penalty" => 0.6,
            "stop" => [" Human:", " AI:"]
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.openai.com/v1/chat/completions');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data1));

        $headers = array();
        $headers[] = 'Content-Type: application/json';
        $headers[] = 'Authorization: Bearer ' . getenv('keyGPT');
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        foreach (json_decode($response) as $key => $value) {
            if ($key == "choices") {
                $choices = $value;
                return $choices[0]->message->content;
            }
        }
        curl_close($ch);
    }
    public function myaccount()
    {
        $company_name = $this->company_details[0]['company_name'];
        $data['company_name'] = $company_name;
        $company_id = $this->loggedTalent['tb_company_user_id'];
        $data['pageTitle'] = 'Karya | MyAccount';
        $data['logo'] = 'app-assets/images/logo_pathafinder.png';
        $data['active'] = 'myaccount';
        $data['css'] = array(
            base_url('app-assets/talent/style.css')
        );
        $data['boughtDetails'] = $this->boughtModel->where(array('company_id' => $company_id, 'status' => 1))->orderBy('date', 'desc')->findAll();
        $data['shortlistDetails'] = $this->shortlistModel->where(array('company_id' => $company_id))->groupBy('candidate_id')->orderBy('tb_shortlist_id')->findAll();
        $data['transactionsDetails'] = $this->walletTransactionsModel->where(array('comp_id' => $company_id, 'status' => '2'))->orderBy('trans_id', 'desc')->findAll();
        return view('talent/myaccount', $data);
    }
    public function hired_profile($candidate_id)
    {
        $company_name = $this->company_details[0]['company_name'];
        $data['company_name'] = $company_name;
        $company_id = $this->loggedTalent['tb_company_user_id'];
        $data['pageTitle'] = 'Karya | MyAccount';
        $data['logo'] = 'app-assets/images/logo_pathafinder.png';
        $data['active'] = 'Hired Profile';
        $data['css'] = array(
            base_url('app-assets/talent/style.css')
        );
        if ($candidate_id) {
            $usersRow = $this->usersModel->where('ID', $candidate_id)->first();
        }
        $data['usersRow'] = $usersRow;
        $portfolios = $this->portfolioModel->where('user_email', $usersRow['email'])->orderBy('created', 'DESC')->findAll();
        $data['portfolios'] = $portfolios;
        $data['match_rate'] = 0;

        return view('talent/hiredProfile', $data);
    }
    public function bought_update()
    {
        $tb_bought_id = $this->request->getPost('tb_bought_id');
        $bought_type = $this->request->getPost('bought_type');
        $data = array(
            "bought_type" => $bought_type
        );
        $this->boughtModel->update(array('tb_bought_id' => $tb_bought_id), $data);
        echo "Updated";
        exit;
    }
}
