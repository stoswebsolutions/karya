<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ApplypostsModel;
use App\Models\AptitudeModel;
use App\Models\AvkModel;
use App\Models\BoughtModel;
use App\Models\CompanyModel;
use App\Models\CompanyphotoModel;
use App\Models\CompanysectorModel;
use App\Models\CompassessmentModel;
use App\Models\CompgalleryModel;
use App\Models\DiscModel;
use App\Models\LiteModel;
use App\Models\LpjeModel;
use App\Models\MensaModel;
use App\Models\SkillModel;
use App\Models\UsersmarkModel;
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
    private $discModel;
    private $liteModel;
    private $aptitudeModel;
    private $avkModel;
    private $lpjeModel;
    private $mensaModel;
    private $skillModel;
    private $usersmarkModel;
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
        $this->discModel = new DiscModel();
        $this->liteModel = new LiteModel();
        $this->avkModel = new AvkModel();
        $this->lpjeModel = new LpjeModel();
        $this->mensaModel = new MensaModel();
        $this->skillModel = new SkillModel();
        $this->aptitudeModel = new AptitudeModel();
        $this->usersmarkModel = new UsersmarkModel();
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
    public function perAssessment()
    {
        $data['pageTitle'] = 'Karya | Personality Assessment';
        $data['logo'] = 'app-assets/images/logo_karya.png';
        $data['active'] = 'perAssessment';
        $data['css'] = array(
            base_url('app-assets/hired/style.css'),
            base_url('app-assets/hired/questions.css')
        );
        $data['loggedHired'] = $this->loggedHired;
        $data['is_online'] = $this->user['is_online'];
        $data['disc'] = $this->discModel->where(array('is_active' => "A"))->orderBy('disc_id', 'ASC')->findAll();
        $data['lite'] = $this->liteModel->where(array('is_active' => "A"))->orderBy('lite_id', 'ASC')->findAll();
        $data['mensa'] = $this->mensaModel->where(array('is_active' => "A"))->orderBy('mensa_id', 'ASC')->findAll();
        $data['lpje'] = $this->lpjeModel->where(array('is_active' => "A"))->orderBy('lpje_id', 'ASC')->findAll();
        $data['avk'] = $this->avkModel->where(array('is_active' => "A"))->orderBy('avk_id', 'ASC')->findAll();
        $data['skill'] = $this->skillModel->where(array('is_active' => "A"))->orderBy('skill_id', 'ASC')->findAll();
        $data['aptitude'] = $this->aptitudeModel->where(array('is_active' => "A"))->orderBy('appt_id', 'ASC')->findAll();
        return view('hired/perAssessment', $data);
    }
    public function perAssessmentSubmit()
    {
        $D1 = 0;
        $I1 = 0;
        $S1 = 0;
        $C1 = 0;
        if (!empty($this->request->getPost('DISC1'))) {
            $count = 1;
            while ($count < 10) {
                $answer = $this->request->getPost('DISC' . $count);
                if ($answer == "D")
                    $D1++;
                if ($answer == "I")
                    $I1++;
                if ($answer == "S")
                    $S1++;
                if ($answer == "C")
                    $C1++;
                $count++;
            }

            $data = array($D1, $I1, $S1, $C1);
            rsort($data);

            if ($D1 == $data[0] or $D1 == $data[1])
                $DISC_RESULT1 = "D";
            if ($I1 == $data[0] or $I1 == $data[1])
                $DISC_RESULT2 = "I";
            if ($S1 == $data[0] or $S1 == $data[1])
                $DISC_RESULT3 = "S";
            if ($C1 == $data[0] or $C1 == $data[1])
                $DISC_RESULT4 = "C";

            if ($D1 == $data[0])
                $DISC_TOP = "D";
            if ($I1 == $data[0])
                $DISC_TOP = "I";
            if ($S1 == $data[0])
                $DISC_TOP = "S";
            if ($C1 == $data[0])
                $DISC_TOP = "C";

            if ($D1 == $data[1])
                $DISC_2ndTOP = "D";
            if ($I1 == $data[1])
                $DISC_2ndTOP = "I";
            if ($S1 == $data[1])
                $DISC_2ndTOP = "S";
            if ($C1 == $data[1])
                $DISC_2ndTOP = "C";

            $DISC_TOP_CONBINATION = "DI";
            if ($DISC_TOP == "D") {
                if ($DISC_2ndTOP == "I")
                    $DISC_TOP_CONBINATION = "DI";
                if ($DISC_2ndTOP == "S")
                    $DISC_TOP_CONBINATION = "DS";
                if ($DISC_2ndTOP == "C")
                    $DISC_TOP_CONBINATION = "DC";
            }
            if ($DISC_TOP == "I") {
                if ($DISC_2ndTOP == "D")
                    $DISC_TOP_CONBINATION = "DI";
                if ($DISC_2ndTOP == "S")
                    $DISC_TOP_CONBINATION = "IS";
                if ($DISC_2ndTOP == "C")
                    $DISC_TOP_CONBINATION = "IC";
            }
            if ($DISC_TOP == "S") {
                if ($DISC_2ndTOP == "D")
                    $DISC_TOP_CONBINATION = "DS";
                if ($DISC_2ndTOP == "I")
                    $DISC_TOP_CONBINATION = "IS";
                if ($DISC_2ndTOP == "C")
                    $DISC_TOP_CONBINATION = "SC";
            }
            if ($DISC_TOP == "C") {
                if ($DISC_2ndTOP == "D")
                    $DISC_TOP_CONBINATION = "DC";
                if ($DISC_2ndTOP == "I")
                    $DISC_TOP_CONBINATION = "IC";
                if ($DISC_2ndTOP == "S")
                    $DISC_TOP_CONBINATION = "SC";
            }
            $DISC_RESULT = $DISC_TOP_CONBINATION;
        }
        $L2 = 0;
        $I2 = 0;
        $T2 = 0;
        $E2 = 0;
        if (!empty($this->request->getPost('LITE10'))) {
            $count = 10;
            while ($count < 15) {
                $answer = $this->request->getPost('LITE' . $count);
                if ($answer == "L")
                    $L2++;
                if ($answer == "I")
                    $I2++;
                if ($answer == "T")
                    $T2++;
                if ($answer == "E")
                    $E2++;
                $count++;
            }

            $data2 = array($L2, $I2, $T2, $E2);
            rsort($data2);

            if ($L2 == $data2[0])
                $LITE_RESULT_TOP = "L";
            if ($I2 == $data2[0])
                $LITE_RESULT_TOP = "I";
            if ($T2 == $data2[0])
                $LITE_RESULT_TOP = "T";
            if ($E2 == $data2[0])
                $LITE_RESULT_TOP = "E";

            if ($L2 == $data2[1])
                $LITE_RESULT_2TOP = "L";
            if ($I2 == $data2[1])
                $LITE_RESULT_2TOP = "I";
            if ($T2 == $data2[1])
                $LITE_RESULT_2TOP = "T";
            if ($E2 == $data2[1])
                $LITE_RESULT_2TOP = "E";
        }
        $mensa_1 = '';
        $mensa_2 = '';
        $mensa_3 = '';
        $mensa_4 = '';
        $mensa_5 = '';
        if (!empty($this->request->getPost('MENSA15'))) {
            $count = 15;
            while ($count < 20) {
                $answer = $this->request->getPost('MENSA' . $count);
                if ($count == "15")
                    $mensa_1 = $answer;
                if ($count == "16")
                    $mensa_2 = $answer;
                if ($count == "17")
                    $mensa_3 = $answer;
                if ($count == "18")
                    $mensa_4 = $answer;
                if ($count == "19")
                    $mensa_5 = $answer;
                $count++;
            }
        }
        $L4 = 0;
        $P4 = 0;
        $J4 = 0;
        $E4 = 0;
        if (!empty($this->request->getPost('LPJE20'))) {
            $count = 20;
            while ($count < 25) {
                $answer = $this->request->getPost('LPJE' . $count);
                if ($answer == "L")
                    $L4++;
                if ($answer == "P")
                    $P4++;
                if ($answer == "J")
                    $J4++;
                if ($answer == "E")
                    $E4++;
                $count++;
            }

            $data4 = array($L4, $P4, $J4, $E4);
            rsort($data4);

            if ($L4 == $data4[0])
                $LPJE_RESULT_TOP = "L";
            if ($P4 == $data4[0])
                $LPJE_RESULT_TOP = "P";
            if ($J4 == $data4[0])
                $LPJE_RESULT_TOP = "J";
            if ($E4 == $data4[0])
                $LPJE_RESULT_TOP = "E";

            if ($L4 == $data4[1])
                $LPJE_RESULT_2TOP = "L";
            if ($P4 == $data4[1])
                $LPJE_RESULT_2TOP = "P";
            if ($J4 == $data4[1])
                $LPJE_RESULT_2TOP = "J";
            if ($E4 == $data4[1])
                $LPJE_RESULT_2TOP = "E";
        }
        $ENGLISH = 0;
        if (!empty($this->request->getPost('AVK25'))) {
            $count = 25;
            while ($count < 30) {
                $answer = $this->request->getPost('AVK' . $count);
                if ($count == "25") {
                    if ($answer == "C") {
                        $ENGLISH = $ENGLISH + 10;
                    }
                }
                if ($count == "26") {
                    if ($answer == "D") {
                        $ENGLISH = $ENGLISH + 10;
                    }
                }
                if ($count == "27") {
                    if ($answer == "A") {
                        $ENGLISH = $ENGLISH + 10;
                    }
                }
                if ($count == "28") {
                    if ($answer == "B") {
                        $ENGLISH = $ENGLISH + 10;
                    }
                }
                if ($count == "29") {
                    if ($answer == "D") {
                        $ENGLISH = $ENGLISH + 10;
                    }
                }
                $count++;
            }
        }
        $skill_level1 = '';
        $skill_level2 = '';
        $skill_level3 = '';
        $skill_level4 = '';
        $skill_level5 = '';
        $skill_level6 = '';
        $skill_level7 = '';
        $skill_level8 = '';
        $skill_level9 = '';
        $skill_level10 = '';
        $skill_level11 = '';
        $skill_level12 = '';
        $skill_level13 = '';
        $skill_level14 = '';
        $skill_level15 = '';
        $skill_level16 = '';
        if (!empty($this->request->getPost('SKILL30'))) {
            $count = 30;
            while ($count < 37) {
                $answer = $this->request->getPost('SKILL' . $count);
                if ($count == "30")
                    $skill_level1 = $answer;
                if ($count == "31")
                    $skill_level2 = $answer;
                if ($count == "32")
                    $skill_level3 = $answer;
                if ($count == "33")
                    $skill_level4 = $answer;
                if ($count == "34")
                    $skill_level5 = $answer;
                if ($count == "35")
                    $skill_level6 = $answer;
                if ($count == "36")
                    $skill_level7 = $answer;
                $count++;
            }
        }
        $appt_lm_mark = '';
        $appt_ps_mark = '';
        $appt_com_mark = '';
        $appt_time_mark = '';
        $appt_pd_mark = '';
        if (!empty($this->request->getPost('APTITUDE37'))) {
            $count = 37;
            while ($count < 42) {
                $answer = $this->request->getPost('APTITUDE' . $count);
                if ($count == "37")
                    $appt_lm_mark = $answer;
                if ($count == "38")
                    $appt_ps_mark = $answer;
                if ($count == "39")
                    $appt_com_mark = $answer;
                if ($count == "40")
                    $appt_time_mark = $answer;
                if ($count == "41")
                    $appt_pd_mark = $answer;
                $count++;
            }
        }

        $PERSPECTIVE = 'C';
        $DISC_RESULT_FINAL = substr($DISC_RESULT, 0, 2);
        $email = $this->user['email'];
        $ID = $this->user['ID'];
        $usersmark = $this->usersmarkModel->where(array("email" => $email))->orderBy('date_attampt', 'DESC')->first();
        if (!empty($usersmark)) {
            $tb_users_mark_id = $usersmark['tb_users_mark_id'];
            $today = date("F j, Y, g:i a");
            $usersInput = array(
                'email' => $email,
                'DISC_result' => $DISC_RESULT_FINAL,
                'LITE_result' => $LITE_RESULT_TOP,
                'second_top_LITE_result' => $LITE_RESULT_2TOP,
                'LPJE_result' => $LPJE_RESULT_TOP,
                'second_top_LPJE_result' => $LPJE_RESULT_2TOP,
                'DISC_TOP' => $DISC_TOP,
                'english_proficiecy' => $ENGLISH,
                'skill_level1' => $skill_level1,
                'skill_level2' => $skill_level2,
                'skill_level3' => $skill_level3,
                'skill_level4' => $skill_level4,
                'skill_level5' => $skill_level5,
                'skill_level6' => $skill_level6,
                'skill_level7' => $skill_level7,
                'skill_level8' => $skill_level8,
                'skill_level9' => $skill_level9,
                'skill_level10' => $skill_level10,
                'skill_level11' => $skill_level11,
                'skill_level12' => $skill_level12,
                'skill_level13' => $skill_level13,
                'skill_level14' => $skill_level14,
                'skill_level15' => $skill_level15,
                'skill_level16' => $skill_level16,
                'appt_lm' => $appt_lm_mark,
                'appt_ps' => $appt_ps_mark,
                'appt_com' => $appt_com_mark,
                'appt_time' => $appt_time_mark,
                'appt_pd' => $appt_pd_mark,
                'date_attampt' => $today,
                'mensa_intuitive' => $mensa_1,
                'mensa_ambitious' => $mensa_2,
                'mensa_tenacious' => $mensa_3,
                'mensa_practical_planner' => $mensa_4,
                'mensa_social_skill' => $mensa_5
            );
            $marksupdate = $this->usersmarkModel->update(array('tb_users_mark_id' => $tb_users_mark_id), $usersInput);

            $recommended_roles = "";
            $query2 = $this->usersmarkModel->query("SELECT oc.occ_role AS ROLES FROM tb_users_mark mk, tb_occupations oc WHERE mk.email='" . $email . "' AND (oc.result_DISC LIKE CONCAT('%', mk.DISC_result, '%') OR oc.result_LITE LIKE CONCAT('%', mk.LITE_result, '%') OR oc.result_LPJE LIKE CONCAT('%', mk.LPJE_result, '%') OR oc.result_AVK LIKE CONCAT('%', mk.AVK_TOP, '%') OR oc.result_PERSPECTIVE LIKE CONCAT('%', mk.PERSPECTIVE_result, '%') ) GROUP BY oc.occ_role ORDER BY oc.occ_role");

            foreach ($query2->getResult() as $row) {
                $recommended_roles = $recommended_roles . "~" . $row->ROLES;
            }
            $marksrecomupdate = $this->usersmarkModel->update(array('email' => $email), array('recommended_roles_from_test' => $recommended_roles));
        } else {
            $today = date("F j, Y, g:i a");
            $usersInput = array(
                'email' => $email,
                'DISC_result' => $DISC_RESULT_FINAL,
                'LITE_result' => $LITE_RESULT_TOP,
                'second_top_LITE_result' => $LITE_RESULT_2TOP,
                'LPJE_result' => $LPJE_RESULT_TOP,
                'second_top_LPJE_result' => $LPJE_RESULT_2TOP,
                'DISC_TOP' => $DISC_TOP,
                'english_proficiecy' => $ENGLISH,
                'skill_level1' => $skill_level1,
                'skill_level2' => $skill_level2,
                'skill_level3' => $skill_level3,
                'skill_level4' => $skill_level4,
                'skill_level5' => $skill_level5,
                'skill_level6' => $skill_level6,
                'skill_level7' => $skill_level7,
                'skill_level8' => $skill_level8,
                'skill_level9' => $skill_level9,
                'skill_level10' => $skill_level10,
                'skill_level11' => $skill_level11,
                'skill_level12' => $skill_level12,
                'skill_level13' => $skill_level13,
                'skill_level14' => $skill_level14,
                'skill_level15' => $skill_level15,
                'skill_level16' => $skill_level16,
                'appt_lm' => $appt_lm_mark,
                'appt_ps' => $appt_ps_mark,
                'appt_com' => $appt_com_mark,
                'appt_time' => $appt_time_mark,
                'appt_pd' => $appt_pd_mark,
                'date_attampt' => $today,
                'mensa_intuitive' => $mensa_1,
                'mensa_ambitious' => $mensa_2,
                'mensa_tenacious' => $mensa_3,
                'mensa_practical_planner' => $mensa_4,
                'mensa_social_skill' => $mensa_5
            );
            $markssaved = $this->usersmarkModel->insert($usersInput);

            $recommended_roles = "";
            $query2 = $this->usersmarkModel->query("SELECT oc.occ_role AS ROLES FROM tb_users_mark mk, tb_occupations oc WHERE mk.email='" . $email . "' AND (oc.result_DISC LIKE CONCAT('%', mk.DISC_result, '%') OR oc.result_LITE LIKE CONCAT('%', mk.LITE_result, '%') OR oc.result_LPJE LIKE CONCAT('%', mk.LPJE_result, '%') OR oc.result_AVK LIKE CONCAT('%', mk.AVK_TOP, '%') OR oc.result_PERSPECTIVE LIKE CONCAT('%', mk.PERSPECTIVE_result, '%') ) GROUP BY oc.occ_role ORDER BY oc.occ_role");

            foreach ($query2->getResult() as $row) {
                $recommended_roles = $recommended_roles . "~" . $row->ROLES;
            }
            $marksrecomupdate = $this->usersmarkModel->update(array('email' => $email), array('recommended_roles_from_test' => $recommended_roles));
        }
        $usersupdate = $this->usersModel->update(array('email' => $email, 'ID' => $ID), array('test_attempt' => '1', 'disc_progress' => 100));

        return redirect()->back()->withInput();
    }
    public function updatePerInfo()
    {
        $data['pageTitle'] = 'Karya | Profile';
        $data['logo'] = 'app-assets/images/logo_karya.png';
        $data['active'] = 'profile';
        $data['css'] = array(
            base_url('app-assets/hired/style.css')
        );
        $data['loggedHired'] = $this->loggedHired;
        $data['is_online'] = $this->user['is_online'];
        return view('hired/updatePerInfo', $data);
    }
    public function uploadResume()
    {
        $data['pageTitle'] = 'Karya | Profile';
        $data['logo'] = 'app-assets/images/logo_karya.png';
        $data['active'] = 'profile';
        $data['css'] = array(
            base_url('app-assets/hired/style.css')
        );
        $data['loggedHired'] = $this->loggedHired;
        $data['is_online'] = $this->user['is_online'];
        return view('hired/uploadResume', $data);
    }
    public function interviewPrep()
    {
        $data['pageTitle'] = 'Karya | Profile';
        $data['logo'] = 'app-assets/images/logo_karya.png';
        $data['active'] = 'profile';
        $data['css'] = array(
            base_url('app-assets/hired/style.css')
        );
        $data['loggedHired'] = $this->loggedHired;
        $data['is_online'] = $this->user['is_online'];
        return view('hired/interviewPrep', $data);
    }
    public function uploadVideo()
    {
        $data['pageTitle'] = 'Karya | Profile';
        $data['logo'] = 'app-assets/images/logo_karya.png';
        $data['active'] = 'profile';
        $data['css'] = array(
            base_url('app-assets/hired/style.css')
        );
        $data['loggedHired'] = $this->loggedHired;
        $data['is_online'] = $this->user['is_online'];
        return view('hired/uploadVideo', $data);
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
}
