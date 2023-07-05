<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function __construct()
    {
    }
    public function login()
    {
        $data['pageTitle'] = 'Karya | Security';
        $data['logo'] = 'app-assets/images/logo_karya.png';
        return view('login', $data);
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
        if (session()->has('isLoggedIn')) {
            session()->remove('isLoggedIn');
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
