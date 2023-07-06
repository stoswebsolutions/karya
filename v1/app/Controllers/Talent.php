<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ApplypostsModel;
use App\Models\BoughtModel;
use App\Models\CompanyModel;
use App\Models\UsersModel;
use App\Models\UsersviewerModel;

class Talent extends BaseController
{
    private $loggedTalent;
    private $usersModel;
    private $usersviewerModel;
    private $applypostsModel;
    private $boughtModel;
    private $user;
    public function __construct()
    {
        $this->loggedTalent = session()->get('TalentData');
        if ($this->loggedTalent['user_role'] != 7) {
            echo "Your Not Correct User";
            exit;
        }
        $this->usersModel = new UsersModel();
        $this->user = $this->usersModel->where('ID', $this->loggedTalent['ID'])->first();
        $this->usersviewerModel = new UsersviewerModel();
        $this->applypostsModel = new ApplypostsModel();
        $this->boughtModel = new BoughtModel();
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
        $data['is_online'] = $this->user['is_online'];
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
        $data['is_online'] = $this->user['is_online'];
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
        $data['is_online'] = $this->user['is_online'];
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
        $data['is_online'] = $this->user['is_online'];
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
        $data['is_online'] = $this->user['is_online'];
        return view('talent/companies', $data);
    }
    public function myaccount()
    {
        $data['pageTitle'] = 'Karya | Dashboard';
        $data['logo'] = 'app-assets/images/logo_karya.png';
        $data['active'] = 'myaccount';
        $data['css'] = array(
            base_url('app-assets/hired/style.css'),
            base_url('app-assets/libs/datatables/css/bootstrap.min.css'),
            base_url('app-assets/libs/datatables/css/dataTables.bootstrap5.min.css')
        );
        $data['js'] = array(
            base_url('app-assets/libs/datatables/js/jquery-3.5.1.js'),
            base_url('app-assets/libs/datatables/js/jquery.dataTables.min.js'),
            base_url('app-assets/libs/datatables/js/dataTables.bootstrap5.min.js')
        );
        $data['loggedTalent'] = $this->loggedTalent;
        $data['is_online'] = $this->user['is_online'];

        $data['profileViews'] = $this->usersviewerModel->select('*,count(*) as total')->where(array('user_email' => $this->loggedTalent['email']))->groupBy('Viewer_id,viewer_name,created_date')->findAll();
        $data['jobApplications'] = $this->applypostsModel->where(array('user_id' => $this->loggedTalent['ID']))->findAll();
        $profileSold = $this->boughtModel->select('*')
            ->join('tb_company', 'tb_bought.company_id = tb_company.tb_company_id')
            ->where(array('user_email' => $this->loggedTalent['email']))
            ->orderBy('date,status', 'DESC')
            ->findAll();
        $data['profileSold'] = $profileSold;
        return view('talent/myaccount', $data);
    }
}
