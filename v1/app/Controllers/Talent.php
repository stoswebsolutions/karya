<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Talent extends BaseController
{
    public function dashboard()
    {
        $data['pageTitle'] = 'Karya | Talent Home';
        $data['logo'] = 'app-assets/images/logo_karya.png';
        $data['active'] = 'dashboard';
        $data['css'] = array(
            base_url('app-assets/talent/style.css')
        );
        return view('talent/dashboard', $data);
    }
    public function profile()
    {
        $data['pageTitle'] = 'Karya | Talent Home';
        $data['logo'] = 'app-assets/images/logo_karya.png';
        $data['active'] = 'profile';
        $data['css'] = array(
            base_url('app-assets/talent/style.css')
        );
        return view('talent/profile', $data);
    }
    public function cart()
    {
        $data['pageTitle'] = 'Karya | Talent Home';
        $data['logo'] = 'app-assets/images/logo_karya.png';
        $data['active'] = 'cart';
        $data['css'] = array(
            base_url('app-assets/talent/style.css')
        );
        return view('talent/cart', $data);
    }
    public function status()
    {
        $data['pageTitle'] = 'Karya | Talent Home';
        $data['logo'] = 'app-assets/images/logo_karya.png';
        $data['active'] = 'status';
        $data['css'] = array(
            base_url('app-assets/talent/style.css')
        );
        return view('talent/status', $data);
    }
    public function vacancies()
    {
        $data['pageTitle'] = 'Karya | Talent Home';
        $data['logo'] = 'app-assets/images/logo_karya.png';
        $data['active'] = 'vacancies';
        $data['css'] = array(
            base_url('app-assets/talent/style.css')
        );
        return view('talent/vacancies', $data);
    }
    public function explore()
    {
        $data['pageTitle'] = 'Karya | Talent Home';
        $data['logo'] = 'app-assets/images/logo_karya.png';
        $data['active'] = 'explore';
        $data['css'] = array(
            base_url('app-assets/talent/style.css')
        );
        return view('talent/explore', $data);
    }
    public function myaccount()
    {
        $data['pageTitle'] = 'Karya | Talent Home';
        $data['logo'] = 'app-assets/images/logo_karya.png';
        $data['active'] = 'myaccount';
        $data['css'] = array(
            base_url('app-assets/talent/style.css')
        );
        return view('talent/myaccount', $data);
    }
}
