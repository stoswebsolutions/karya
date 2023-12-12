<?php

namespace App\Controllers;

use App\Controllers\BaseController;
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
    public function __construct()
    {
        $this->loggedData = session()->get('LoggedData');
        $this->loggedTalent = $this->loggedData['talent'];
        $this->cartModel = new CartModel();
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
    }
    public function dashboard()
    {
        if (empty($this->loggedData['talent'])) {
            return  redirect()->back();
        }
        $data['pageTitle'] = 'Karya | Dashboard';
        $data['logo'] = 'app-assets/images/logo_karya.png';
        $data['active'] = 'dashboard';
        $data['css'] = array(
            base_url('app-assets/talent/style.css')
        );
        $data['loggedTalent'] = $this->loggedTalent;
        return view('talent/dashboard', $data);
    }
    public function profile()
    {
        $company_id = $this->loggedTalent['tb_company_user_id'];
        $email = $this->loggedTalent['company_email'];

        $data['pageTitle'] = 'Karya | Profile';
        $data['logo'] = 'app-assets/images/logo_karya.png';
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
        $data['pageTitle'] = 'Karya | Cart';
        $data['logo'] = 'app-assets/images/logo_karya.png';
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
    public function removeCart($cart_id)
    {
        $data['pageTitle'] = 'Karya | Cart';
        $data['logo'] = 'app-assets/images/logo_karya.png';
        $data['active'] = 'cart';
        $data['css'] = array(
            base_url('app-assets/talent/style.css')
        );
        $this->cartModel->update(array('tb_cart_id' => $cart_id), array('status' => 2));
        $data['cartDetails'] = $this->cartModel->select('*')
            ->join('users', 'tb_cart.candidate_id = users.id')
            ->where(array('company_id' => $this->loggedTalent['tb_company_user_id'], 'status' => 1))
            ->findAll();
        return view('talent/cart', $data);
    }
    public function ProcessPayAmount()
    {
        $company_id = $this->loggedTalent['tb_company_user_id'];
        $email = $this->loggedTalent['company_email'];
        $company_details = $this->companyModel->select('*')
            ->join('tb_company_user', 'tb_company.tb_company_id = tb_company_user.tb_company_user_id')
            ->where(array('tb_company_id' => $company_id))
            ->findAll();
        $sub_type = $this->request->getPost('add_wall');
        if ($sub_type == 1) $amount = "1.50";
        else $amount = "2.00";
        $amount = $sub_type;
        $merchantID = "SB_talentlounge";
        $orderid = "TL" . strtotime(date("Y-m-d H:i:s"));
        $verifykey = "9cab5a9ae8c73cc51a98a12868dc0461";
        $vcode = md5($amount . $merchantID . $orderid . $verifykey);
        $mobile = $company_details[0]['contact_number'];
        $country = "MY";
        $description = "Payment Done by Purchase profile of " . $email;
        $name = $company_details[0]['company_name'];
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
        $data['pageTitle'] = 'Karya | Status';
        $data['logo'] = 'app-assets/images/logo_karya.png';
        $data['active'] = 'status';
        $data['css'] = array(
            base_url('app-assets/talent/style.css')
        );
        return view('talent/status', $data);
    }
    public function vacancies()
    {
        $company_id = $this->loggedTalent['tb_company_user_id'];
        $email = $this->loggedTalent['company_email'];
        $data['pageTitle'] = 'Karya | Vacancies';
        $data['logo'] = 'app-assets/images/logo_karya.png';
        $data['active'] = 'vacancies';
        $data['css'] = array(
            base_url('app-assets/talent/style.css')
        );
        $data['jobDetails'] = $this->companyrequirementsModel->where(array("companyId" => $company_id))->orderBy('id', 'desc')->findAll();
        $data['coursemanagementModel'] = $this->coursemanagementModel;
        $data['occupationsModel'] = $this->occupationsModel;
        return view('talent/vacancies', $data);
    }
    public function explore()
    {
        $data['pageTitle'] = 'Karya | Explore';
        $data['logo'] = 'app-assets/images/logo_karya.png';
        $data['active'] = 'explore';
        $data['css'] = array(
            base_url('app-assets/talent/style.css')
        );
        return view('talent/explore', $data);
    }
    public function myaccount()
    {
        $company_id = $this->loggedTalent['tb_company_user_id'];
        $data['pageTitle'] = 'Karya | MyAccount';
        $data['logo'] = 'app-assets/images/logo_karya.png';
        $data['active'] = 'myaccount';
        $data['css'] = array(
            base_url('app-assets/talent/style.css')
        );
        $data['boughtDetails'] = $this->boughtModel->where(array('company_id' => $company_id, 'status' => '1'))->orderBy('date', 'desc')->findAll();
        $data['shortlistDetails'] = $this->shortlistModel->where(array('company_id' => $company_id))->groupBy('candidate_id')->orderBy('tb_shortlist_id')->findAll();
        $data['transactionsDetails'] = $this->walletTransactionsModel->where(array('comp_id' => $company_id, 'status' => '2'))->orderBy('trans_id', 'desc')->findAll();
        return view('talent/myaccount', $data);
    }
    public function bought_update()
    {
        $tb_bought_id = $this->request->getPost('tb_bought_id');
        $bought_type = $this->request->getPost('bought_type');
        $data = array(
            "bought_type" => $bought_type
        );
        $this->boughtModel->update(array('tb_bought_id' => $tb_bought_id), $data);
    }
}
