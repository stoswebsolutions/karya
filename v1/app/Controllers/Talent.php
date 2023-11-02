<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BoughtModel;
use App\Models\CartModel;
use App\Models\CompanyModel;
use App\Models\CompanyrequirementsModel;
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
        $data['pageTitle'] = 'Karya | Profile';
        $data['logo'] = 'app-assets/images/logo_karya.png';
        $data['active'] = 'profile';
        $data['css'] = array(
            base_url('app-assets/talent/style.css')
        );
        return view('talent/profile', $data);
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
        $data['jobDetails'] = $this->companyrequirementsModel->where(array("companyId" => $company_id))->orderBy('id','desc')->findAll();
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
        $data['boughtDetails'] = $this->boughtModel->where(array('company_id' => $company_id, 'status' => '1'))->orderBy('date','desc')->findAll();
        $data['shortlistDetails'] = $this->shortlistModel->where(array('company_id' => $company_id))->groupBy('candidate_id')->orderBy('tb_shortlist_id')->findAll();
        $data['transactionsDetails'] = $this->walletTransactionsModel->where(array('comp_id' => $company_id, 'status' => '2'))->orderBy('trans_id','desc')->findAll();
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
