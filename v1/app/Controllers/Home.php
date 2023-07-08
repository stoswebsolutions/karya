<?php

namespace App\Controllers;

use App\Models\UserlogsModel;
use App\Models\UsersModel;

class Home extends BaseController
{
    private $usersModel;
    private $userlogsModel;
    public function __construct()
    {
        $this->usersModel = new UsersModel();
        $this->userlogsModel = new UserlogsModel();
    }
    public function login()
    {
        $data['pageTitle'] = 'Karya | Security';
        $data['logo'] = 'app-assets/images/logo_karya.png';
        return view('login', $data);
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
            return  redirect()->back()->with('validation', $this->validator)->withInput();
        } else {
            $email = $this->request->getVar('email');
            $password = $this->request->getVar('password');
            $row = $this->usersModel->where('email', $email)->first();
            if (!$this->passwordHash->CheckPassword($password, $row['password'])) {
                return  redirect()->back()->with('fail', 'Incorect password.')->withInput();
            } else {
                $talentID = $row['ID'];
                if (empty($row['token'])) {
                    // Generate a token
                    $token = rand(1, 100000) . $email;
                    $token = md5(sha1($token));
                    // Store it
                    $this->usersModel->update($talentID, array('token' => $token));
                } else {
                    if ($row['online_timestamp'] + (3600 * 24 * 30 * 2) < time()) {
                        // Generate a token
                        $token = rand(1, 100000) . $email;
                        $token = md5(sha1($token));
                        // Store it
                        $this->usersModel->update($talentID, array('token' => $token));
                    } else {
                        $token = $row['token'];
                    }
                }
                $logData = array(
                    "userid" => $talentID,
                    "IP" => $_SERVER['REMOTE_ADDR'],
                    "user_agent" => $_SERVER['HTTP_USER_AGENT'],
                    "timestamp" => time(),
                    "message" => lang("ctn_435")
                );
                $log = $this->userlogsModel->insert($logData);
                $this->usersModel->update($talentID, array('is_online' => 2));
                session()->set('HiredData', $row);
                return  redirect()->to('hired/dashboard');
            }
        }
    }
    public function action()
    {
        $number = $this->request->getVar('number');
        if ($number == 'talent') {
            session()->set('isLoggedIn', $number);
            return redirect()->to(base_url('hired/dashboard'));
        } else if ($number == 'company') {
            session()->set('isLoggedIn', $number);
            return redirect()->to(base_url('company/dashboard'));
        } else {
            return redirect()->back()->withInput();
        }
    }
    public function logout()
    {
        if (session()->has('HiredData')) {
            session()->remove('HiredData');
            return  redirect()->to('login')->with('fail', 'You are now logged out.');
        }
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
            base_url('app-assets/pricing/style.css')
        );
        return view('price', $data);
    }
}
