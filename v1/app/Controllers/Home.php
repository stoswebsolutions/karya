<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Home extends BaseController
{
    private $usersModel;
    public function __construct()
    {
        $this->usersModel = new UsersModel();
    }
    public function login()
    {
        $data['pageTitle'] = 'Karya | Security';
        $data['logo'] = 'app-assets/images/logo_karya.png';
        return view('login', $data);
    }
    public function talentLogin()
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
                session()->set('TalentData', $row);
                return  redirect()->to('talent/dashboard');
            }
        }
    }
    public function action()
    {
        $number = $this->request->getVar('number');
        if ($number == 'talent') {
            session()->set('isLoggedIn', $number);
            return redirect()->to(base_url('talent/dashboard'));
        } else if ($number == 'company') {
            session()->set('isLoggedIn', $number);
            return redirect()->to(base_url('company/dashboard'));
        } else {
            return redirect()->back()->withInput();
        }
    }
    public function logout()
    {
        if (session()->has('TalentData')) {
            session()->remove('TalentData');
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
