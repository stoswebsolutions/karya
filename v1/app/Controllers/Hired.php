<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ApplypostsModel;
use App\Models\BoughtModel;
use App\Models\CompanyModel;
use App\Models\CompanyphotoModel;
use App\Models\CompanysectorModel;
use App\Models\CompassessmentModel;
use App\Models\CompgalleryModel;
use App\Models\UsersModel;
use App\Models\UsersviewerModel;

class Hired extends BaseController
{
    private $loggedHired;
    private $usersModel;
    private $usersviewerModel;
    private $applypostsModel;
    private $boughtModel;
    private $companyModel;
    private $companyphotoModel;
    private $compgalleryModel;
    private $companysectorModel;
    private $compassessmentModel;
    private $user;
    public function __construct()
    {
        $this->loggedHired = session()->get('HiredData');
        if ($this->loggedHired['user_role'] != 7) {
            echo "Your Not Correct User";
            exit;
        }
        $this->usersModel = new UsersModel();
        $this->user = $this->usersModel->where('ID', $this->loggedHired['ID'])->first();
        $this->usersviewerModel = new UsersviewerModel();
        $this->applypostsModel = new ApplypostsModel();
        $this->boughtModel = new BoughtModel();
        $this->companyModel = new CompanyModel();
        $this->companyphotoModel = new CompanyphotoModel();
        $this->compgalleryModel = new CompgalleryModel();
        $this->companysectorModel = new CompanysectorModel();
        $this->compassessmentModel = new CompassessmentModel();
    }
    public function dashboard()
    {
        $data['pageTitle'] = 'Karya | Dashboard';
        $data['logo'] = 'app-assets/images/logo_karya.png';
        $data['active'] = 'dashboard';
        $data['css'] = array(
            base_url('app-assets/hired/style.css')
        );
        $data['loggedHired'] = $this->loggedHired;
        $data['is_online'] = $this->user['is_online'];
        return view('hired/dashboard', $data);
    }
    public function status()
    {
        $data['pageTitle'] = 'Karya | Status';
        $data['logo'] = 'app-assets/images/logo_karya.png';
        $data['active'] = 'status';
        $data['css'] = array(
            base_url('app-assets/hired/style.css')
        );
        $data['loggedHired'] = $this->loggedHired;
        $data['is_online'] = $this->user['is_online'];
        return view('hired/status', $data);
    }
    public function profile()
    {
        $data['pageTitle'] = 'Karya | Profile';
        $data['logo'] = 'app-assets/images/logo_karya.png';
        $data['active'] = 'profile';
        $data['css'] = array(
            base_url('app-assets/hired/style.css')
        );
        $data['loggedHired'] = $this->loggedHired;
        $data['is_online'] = $this->user['is_online'];
        return view('hired/profile', $data);
    }
    public function explore()
    {
        $data['pageTitle'] = 'Karya | Explore';
        $data['logo'] = 'app-assets/images/logo_karya.png';
        $data['active'] = 'explore';
        $data['css'] = array(
            base_url('app-assets/hired/style.css')
        );
        $data['loggedHired'] = $this->loggedHired;
        $data['is_online'] = $this->user['is_online'];
        return view('hired/explore', $data);
    }
    public function companies($sector_id)
    {
        $data['pageTitle'] = 'Karya | Companies';
        $data['logo'] = 'app-assets/images/logo_karya.png';
        $data['active'] = 'companies';
        $data['css'] = array(
            base_url('app-assets/hired/style.css')
        );
        $data['loggedHired'] = $this->loggedHired;
        $data['is_online'] = $this->user['is_online'];
        $companyDetails = $this->companyModel->where(array('sector' => $sector_id))->findAll();
        $companyName = $this->companysectorModel->where(array('sector_id' => $sector_id))->first();
        $data['companyDetails'] = $companyDetails;
        $data['companyName'] = $companyName['sector_name'];
        return view('hired/companies', $data);
    }
    public function exploreCompanies($company_id)
    {
        $data['pageTitle'] = 'Karya | Companies';
        $data['logo'] = 'app-assets/images/logo_karya.png';
        $data['active'] = 'companies';
        $data['css'] = array(
            base_url('app-assets/hired/style.css')
        );
        $data['loggedHired'] = $this->loggedHired;
        $data['is_online'] = $this->user['is_online'];
        $companyDetails = $this->companyModel->select('*')
            ->join('tb_company_user', 'tb_company_user.tb_company_user_id = tb_company.tb_company_id')
            ->where(array('tb_company_id' => $company_id))
            ->first();
        $companyPhotos = $this->companyphotoModel->where(array('tb_company_id' => $company_id))->first();
        $compGallery = $this->compgalleryModel->where(array('company_id' => $company_id))->findAll();
        $compAssessment = $this->compassessmentModel->where(array('comp_id' => $company_id))->findAll();
        $data['companyDetails'] = $companyDetails;
        $data['companyPhotos'] = $companyPhotos;
        $data['compGallery'] = $compGallery;
        $data['compAssessment'] = $compAssessment;
        return view('hired/exploreCompanies', $data);
    }
    public function myaccount()
    {
        $data['pageTitle'] = 'Karya | MyAccount';
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
        $data['loggedHired'] = $this->loggedHired;
        $data['is_online'] = $this->user['is_online'];

        $data['profileViews'] = $this->usersviewerModel->select('*,count(*) as total')->where(array('user_email' => $this->loggedHired['email']))->groupBy('Viewer_id,viewer_name,created_date')->findAll();
        $data['jobApplications'] = $this->applypostsModel->where(array('user_id' => $this->loggedHired['ID']))->findAll();
        $profileSold = $this->boughtModel->select('*')
            ->join('tb_company', 'tb_bought.company_id = tb_company.tb_company_id')
            ->where(array('user_email' => $this->loggedHired['email']))
            ->orderBy('date,status', 'DESC')
            ->findAll();
        $data['profileSold'] = $profileSold;
        return view('hired/myaccount', $data);
    }
}
