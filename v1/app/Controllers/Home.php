<?php

namespace App\Controllers;

use App\Models\CompanyuserModel;
use App\Models\UserlogsModel;
use App\Models\UsersModel;

class Home extends BaseController
{
    private $usersModel;
    private $userlogsModel;
    private $companyuserModel;
    public function __construct()
    {
        $this->usersModel = new UsersModel();
        $this->userlogsModel = new UserlogsModel();
        $this->companyuserModel = new CompanyuserModel();
    }
    public function home()
    {
        $data['pageTitle'] = 'Karya | Landing';
        $data['logo'] = 'app-assets/images/logo_karya.png';
        $data['active'] = 'home';
        $data['css'] = array(
            base_url('app-assets/landing/style.css')
        );
        return view('home', $data);
    }
    public function price()
    {
        $data['pageTitle'] = 'Karya | Pricing';
        $data['logo'] = 'app-assets/images/logo_karya.png';
        $data['active'] = 'price';
        $data['css'] = array(
            base_url('app-assets/pricing/style.css'),
            base_url('app-assets/landing/style.css')
        );
        return view('price', $data);
    }
    public function hired()
    {
        $data['pageTitle'] = 'Karya | Security';
        $data['logo'] = 'app-assets/images/logo_karya.png';
        return view('hired', $data);
    }
    public function hiredLogin()
    {
        $validation = $this->validate([
            'email' => [
                'rules'  => 'required|is_not_unique[users.email]',
                'errors' => [
                    'required' => 'Email is required.',
                    'is_not_unique' => 'Email not registered in our server.'
                ],
            ],
            'password' => [
                'rules'  => 'required|min_length[5]|max_length[20]',
                'errors' => [
                    'required' => 'Password is required.',
                    'min_length' => 'Password must have atleast 5 characters in length.',
                    'max_length' => 'Password must not have characters more thant 20 in length.',
                ],
            ],
        ]);
        if (!$validation) {
            return  redirect()->to('#hired-talent-form-section')->with('validation', $this->validator)->withInput();
        } else {
            $email = $this->request->getVar('email');
            $password = $this->request->getVar('password');
            $row = $this->usersModel->where('email', $email)->first();
            if (!$this->passwordHash->CheckPassword($password, $row['password'])) {
                return  redirect()->back()->with('fail', 'Incorect password.')->withInput();
            } else {
                $userID = $row['ID'];
                if (empty($row['token'])) {
                    // Generate a token
                    $token = rand(1, 100000) . $email;
                    $token = md5(sha1($token));
                    // Store it
                    $this->usersModel->update($userID, array('token' => $token));
                } else {
                    if ($row['online_timestamp'] + (3600 * 24 * 30 * 2) < time()) {
                        // Generate a token
                        $token = rand(1, 100000) . $email;
                        $token = md5(sha1($token));
                        // Store it
                        $this->usersModel->update($userID, array('token' => $token));
                    } else {
                        $token = $row['token'];
                    }
                }
                $logData = array(
                    "userid" => $userID,
                    "IP" => $_SERVER['REMOTE_ADDR'],
                    "user_agent" => $_SERVER['HTTP_USER_AGENT'],
                    "timestamp" => time(),
                    "message" => lang("ctn_435")
                );
                $log = $this->userlogsModel->insert($logData);
                $this->usersModel->update($userID, array('is_online' => 2));
                session()->set('LoggedData', array("hired" => $row, "talent" => null));
                return  redirect()->to('hired/dashboard');
            }
        }
    }
    public function talent()
    {
        $data['pageTitle'] = 'Karya | Security';
        $data['logo'] = 'app-assets/images/logo_karya.png';
        return view('talent', $data);
    }
    public function talentLogin()
    {
        $validation = $this->validate([
            'email' => [
                'rules'  => 'required|is_not_unique[tb_company_user.company_email]',
                'errors' => [
                    'required' => 'Email is required.',
                    'is_not_unique' => 'Email not registered in our server.'
                ],
            ],
            'password' => [
                'rules'  => 'required|min_length[5]|max_length[20]',
                'errors' => [
                    'required' => 'Password is required.',
                    'min_length' => 'Password must have atleast 5 characters in length.',
                    'max_length' => 'Password must not have characters more thant 20 in length.',
                ],
            ],
        ]);
        if (!$validation) {
            return  redirect()->back()->with('validation', $this->validator)->withInput();
        } else {
            $email = $this->request->getVar('email');
            $password = $this->request->getVar('password');
            $row = $this->companyuserModel->where('company_email', $email)->first();
            $md5pass = md5($password);
            if ($md5pass == $row['company_password']) {
                session()->set('LoggedData', array("talent" => $row, "hired" => null));
                return  redirect()->to('talent/dashboard');
            } else {
                return  redirect()->back()->with('fail', 'Incorect password.')->withInput();
            }
        }
    }
    public function logout()
    {
        if (session()->has('LoggedData')) {
            session()->remove('LoggedData');
            return  redirect()->to('')->with('fail', 'You are now logged out.');
        }
        else{
            return  redirect()->to('');
        }
    }
}
