<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Talent extends BaseController
{
    private $loggedTalent;
    public function __construct()
    {
        $this->loggedTalent = session()->get('TalentData');
        if ($this->loggedTalent['user_role'] != 7) {
            echo "Your Not Correct User";
            exit;
        }
    }
    public function dashboard()
    {
        $data['pageTitle'] = 'Karya | Dashboard';
        $data['logo'] = 'app-assets/images/logo_karya.png';
        $data['active'] = 'dashboard';
        $data['css'] = array(
            base_url('app-assets/hired/style.css')
        );
        $data['loggedTalent'] = $this->loggedTalent;
        return view('talent/dashboard', $data);
    }
    public function status()
    {
        $data['pageTitle'] = 'Karya | Dashboard';
        $data['logo'] = 'app-assets/images/logo_karya.png';
        $data['active'] = 'status';
        $data['css'] = array(
            base_url('app-assets/hired/style.css')
        );
        $data['loggedTalent'] = $this->loggedTalent;
        return view('talent/status', $data);
    }
    public function profile()
    {
        $data['pageTitle'] = 'Karya | Dashboard';
        $data['logo'] = 'app-assets/images/logo_karya.png';
        $data['active'] = 'profile';
        $data['css'] = array(
            base_url('app-assets/hired/style.css')
        );
        $data['loggedTalent'] = $this->loggedTalent;
        return view('talent/profile', $data);
    }
    public function explore()
    {
        $data['pageTitle'] = 'Karya | Dashboard';
        $data['logo'] = 'app-assets/images/logo_karya.png';
        $data['active'] = 'explore';
        $data['css'] = array(
            base_url('app-assets/hired/style.css')
        );
        $data['loggedTalent'] = $this->loggedTalent;
        return view('talent/explore', $data);
    }
    public function companies()
    {
        $data['pageTitle'] = 'Karya | Dashboard';
        $data['logo'] = 'app-assets/images/logo_karya.png';
        $data['active'] = 'companies';
        $data['css'] = array(
            base_url('app-assets/hired/style.css')
        );
        $data['loggedTalent'] = $this->loggedTalent;
        return view('talent/companies', $data);
    }
    public function myaccount()
    {
        $data['pageTitle'] = 'Karya | Dashboard';
        $data['logo'] = 'app-assets/images/logo_karya.png';
        $data['active'] = 'myaccount';
        $data['css'] = array(
            base_url('app-assets/hired/style.css')
        );
        $data['loggedTalent'] = $this->loggedTalent;
        return view('talent/myaccount', $data);
    }
}
