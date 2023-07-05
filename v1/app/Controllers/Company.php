<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Company extends BaseController
{
    public function dashboard()
    {
        $data['pageTitle'] = 'Karya | Dashboard';
        $data['logo'] = 'app-assets/images/logo_karya.png';
        $data['active'] = 'dashboard';
        $data['css'] = array(
            base_url('app-assets/talent/style.css')
        );
        return view('company/dashboard', $data);
    }
    public function profile()
    {
        $data['pageTitle'] = 'Karya | Dashboard';
        $data['logo'] = 'app-assets/images/logo_karya.png';
        $data['active'] = 'profile';
        $data['css'] = array(
            base_url('app-assets/talent/style.css')
        );
        return view('company/profile', $data);
    }
    public function cart()
    {
        $data['pageTitle'] = 'Karya | Dashboard';
        $data['logo'] = 'app-assets/images/logo_karya.png';
        $data['active'] = 'cart';
        $data['css'] = array(
            base_url('app-assets/talent/style.css')
        );
        return view('company/cart', $data);
    }
    public function status()
    {
        $data['pageTitle'] = 'Karya | Dashboard';
        $data['logo'] = 'app-assets/images/logo_karya.png';
        $data['active'] = 'status';
        $data['css'] = array(
            base_url('app-assets/talent/style.css')
        );
        return view('company/status', $data);
    }
    public function vacancies()
    {
        $data['pageTitle'] = 'Karya | Dashboard';
        $data['logo'] = 'app-assets/images/logo_karya.png';
        $data['active'] = 'vacancies';
        $data['css'] = array(
            base_url('app-assets/talent/style.css')
        );
        return view('company/vacancies', $data);
    }
    public function explore()
    {
        $data['pageTitle'] = 'Karya | Dashboard';
        $data['logo'] = 'app-assets/images/logo_karya.png';
        $data['active'] = 'explore';
        $data['css'] = array(
            base_url('app-assets/talent/style.css')
        );
        return view('company/explore', $data);
    }
    public function myaccount()
    {
        $data['pageTitle'] = 'Karya | Dashboard';
        $data['logo'] = 'app-assets/images/logo_karya.png';
        $data['active'] = 'myaccount';
        $data['css'] = array(
            base_url('app-assets/talent/style.css')
        );
        return view('company/myaccount', $data);
    }
}
