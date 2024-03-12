<?php

namespace App\Controllers;

use App\Models\CompanyModel;
use App\Models\CompanyuserModel;
use App\Models\UserlogsModel;
use App\Models\UsersModel;

use function PHPUnit\Framework\isEmpty;

class Home extends BaseController
{
    private $usersModel;
    private $userlogsModel;
    private $companyuserModel;
    private $companyModel;
    public function __construct()
    {
        $this->usersModel = new UsersModel();
        $this->userlogsModel = new UserlogsModel();
        $this->companyuserModel = new CompanyuserModel();
        $this->companyModel = new CompanyModel();
    }
    public function home()
    {
        $data['pageTitle'] = 'Pathfinder | Landing';
        $data['logo'] = 'app-assets/images/logo_pathafinder.png';
        $data['active'] = 'home';
        $data['css'] = array(
            base_url('app-assets/landing/style.css')
        );
        return view('talent', $data);
    }
    public function price()
    {
        $data['pageTitle'] = 'Pathfinder | Pricing';
        $data['logo'] = 'app-assets/images/logo_pathafinder.png';
        $data['active'] = 'price';
        $data['css'] = array(
            base_url('app-assets/pricing/style.css'),
            base_url('app-assets/landing/style.css')
        );
        return view('price', $data);
    }
    public function jobseeker()
    {
        $data['pageTitle'] = 'Pathfinder | Security';
        $data['logo'] = 'app-assets/images/logo_pathafinder.png';
        return view('jobseeker', $data);
    }
    public function jobseekerSave()
    {
        $validation = $this->validate([
            'email' => [
                'rules'  => 'required|is_not_unique[users.email]',
                'errors' => [
                    'required' => 'Email is required.',
                    'is_not_unique' => 'Email not registered in our server.'
                ],
            ],
            'username' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Username is required.',
                ],
            ],
            'fullname' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Fullname is required.',
                ],
            ],
            'mobile' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Mobile is required.',
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
            'password2' => [
                'rules'  => 'required|min_length[5]|max_length[20]|matches[password]',
                'errors' => [
                    'required' => 'Password is required.',
                    'min_length' => 'Password must have atleast 5 characters in length.',
                    'max_length' => 'Password must not have characters more thant 20 in length.',
                    'matches' => 'Password Not Matching'
                ],
            ],
        ]);
        if (!$validation) {
            return  redirect()->to('#hired-talent-form-section')->with('validation', $this->validator)->withInput();
        } else {
            $file = array(
                'email'   => $this->request->getVar('email'),
                'password'         => md5($this->request->getVar('password')),
                'phone'         => $this->request->getVar('mobile'),
                'username'    => $this->request->getVar('username'),
                'fullname' => $this->request->getVar('fullname'),
                "IP" => $_SERVER['REMOTE_ADDR'],
                'joined' => time(),
                'joined_date' => date("n-Y"),
                'active'    => '1',
                'user_role' => $this->request->getVar('user_role') != '' ? $this->request->getVar('user_role') : 7
            );
            $fileResult = $this->usersModel->insert($file);
            if ($fileResult) {
                return  redirect()->back()->with('success', 'Registration Done.')->withInput();
            } else {
                return  redirect()->back()->with('fail', 'Incorect password.')->withInput();
            }
        }
    }
    public function hired()
    {
        $data['pageTitle'] = 'Pathfinder | Security';
        $data['logo'] = 'app-assets/images/logo_pathafinder.png';
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
    public function employer()
    {
        $data['pageTitle'] = 'Pathfinder | Security';
        $data['logo'] = 'app-assets/images/logo_pathafinder.png';
        return view('employer', $data);
    }
    public function employerSave()
    {
        $validation = $this->validate([
            'company_email' => [
                'rules'  => 'required|is_not_unique[tb_company_user.company_email]',
                'errors' => [
                    'required' => 'Email is required.',
                    'is_not_unique' => 'Email not registered in our server.'
                ],
            ],
            'company_name' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Company Name is required.',
                ],
            ],
            'contact_number' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Contact Number is required.',
                ],
            ],
            'ssm_number' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'SSM Number is required.',
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
            'password2' => [
                'rules'  => 'required|min_length[5]|max_length[20]|matches[password]',
                'errors' => [
                    'required' => 'Password is required.',
                    'min_length' => 'Password must have atleast 5 characters in length.',
                    'max_length' => 'Password must not have characters more thant 20 in length.',
                    'matches' => 'Password Not Matching'
                ],
            ],
        ]);
        if (!$validation) {
            return  redirect()->back()->with('validation', $this->validator)->withInput();
        } else {
            $file = array(
                'company_email'   => $this->request->getVar('company_email'),
                'company_password'         => md5($this->request->getVar('password')),
                'company_level'          => '3',
                'ssm_number'         => $this->request->getVar('ssm_number'),
                'contact_number'    => $this->request->getVar('contact_number'),
                'contact_email' => $this->request->getVar('company_email'),
                'active'    => '1'
            );
            $fileResult = $this->companyuserModel->insert($file);
            $row = $this->companyuserModel->where('company_email', $this->request->getVar('company_email'))->first();
            $tb_company_id = $row['tb_company_user_id'];
            $file2 = array(
                'tb_company_id'   => $tb_company_id,
                'tb_company_user_id'   => $tb_company_id,
                'tb_company_id'   => $tb_company_id,
                'company_name'   => $this->request->getVar('company_name')
            );
            $fileResult2 = $this->companyModel->insert($file2);
            if ($fileResult && $fileResult2) {
                return  redirect()->back()->with('success', 'Registration Done.')->withInput();
            } else {
                return  redirect()->back()->with('fail', 'Incorect password.')->withInput();
            }
        }
    }
    public function talent()
    {
        $data['pageTitle'] = 'Pathfinder | Security';
        $data['logo'] = 'app-assets/images/logo_pathafinder.png';
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
            $loggedData = session()->get('LoggedData');
            if ($loggedData['hired']) {
                session()->remove('LoggedData');
                return  redirect()->to('hired')->with('fail', 'You are now logged out.');
            }
            if ($loggedData['talent']) {
                session()->remove('LoggedData');
                return  redirect()->to('talent')->with('fail', 'You are now logged out.');
            }
        } else {
            return  redirect()->to('');
        }
    }
}
