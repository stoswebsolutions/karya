<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function home()
    {
        $data['pageTitle'] = 'Karya | Home';
        $data['logo'] = 'app-assets/images/logo_karya.png';
        $data['active'] = 'home';
        $data['css'] = array(
            base_url('app-assets/hired/style.css')
        );
        return view('dashboard/home', $data);
    }
    public function status()
    {
        $data['pageTitle'] = 'Karya | Home';
        $data['logo'] = 'app-assets/images/logo_karya.png';
        $data['active'] = 'status';
        $data['css'] = array(
            base_url('app-assets/hired/style.css')
        );
        return view('dashboard/status', $data);
    }
    public function profile()
    {
        $data['pageTitle'] = 'Karya | Home';
        $data['logo'] = 'app-assets/images/logo_karya.png';
        $data['active'] = 'profile';
        $data['css'] = array(
            base_url('app-assets/hired/style.css')
        );
        return view('dashboard/profile', $data);
    }
    public function explore()
    {
        $data['pageTitle'] = 'Karya | Home';
        $data['logo'] = 'app-assets/images/logo_karya.png';
        $data['active'] = 'explore';
        $data['css'] = array(
            base_url('app-assets/hired/style.css')
        );
        return view('dashboard/explore', $data);
    }
}
