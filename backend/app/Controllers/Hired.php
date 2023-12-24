<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ApplypostsModel;
use App\Models\AptitudeModel;
use App\Models\AvkModel;
use App\Models\BoughtModel;
use App\Models\CompanyModel;
use App\Models\CompanyphotoModel;
use App\Models\CompanyrequirementsModel;
use App\Models\CompanysectorModel;
use App\Models\CompassessmentModel;
use App\Models\CompetitionModel;
use App\Models\CompgalleryModel;
use App\Models\DiscModel;
use App\Models\EmployeeratingModel;
use App\Models\EmployeeskillsModel;
use App\Models\EventsdetailsModel;
use App\Models\JobapplicationModel;
use App\Models\LiteModel;
use App\Models\LpjeModel;
use App\Models\MensaModel;
use App\Models\OccupationsModel;
use App\Models\ProfcertificatesModel;
use App\Models\RolecertskillsModel;
use App\Models\SkillModel;
use App\Models\SkillsModel;
use App\Models\UniversityapplicationModel;
use App\Models\UserrolesModel;
use App\Models\UsersmarkModel;
use App\Models\UsersModel;
use App\Models\UsersviewerModel;
use App\Models\UseruploadsModel;
use App\Models\PortfolioModel;
use App\Models\ResultdiscModel;

use function PHPUnit\Framework\isNull;

class Hired extends BaseController
{
    private $loggedData;
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
    private $occupationsModel;
    private $userrolesModel;
    private $jobapplicationModel;
    private $universityapplicationModel;
    private $useruploadsModel;
    private $competitionModel;
    private $eventsdetailsModel;
    private $employeeratingModel;
    private $employeeskillsModel;
    private $rolecertskillsModel;
    private $profcertificatesModel;
    private $skillsModel;
    private $portfolioModel;
    private $resultdiscModel;
    private $companyrequirementsModel;
    public function __construct()
    {
        $this->loggedData = session()->get('LoggedData');
        $this->loggedHired = $this->loggedData['hired'];
        $this->usersModel = new UsersModel();
        if($this->loggedHired){
            $this->user = $this->usersModel->where('ID', $this->loggedHired['ID'])->first();
        }
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
        $this->occupationsModel = new OccupationsModel();
        $this->userrolesModel = new UserrolesModel();
        $this->jobapplicationModel = new JobapplicationModel();
        $this->universityapplicationModel = new UniversityapplicationModel();
        $this->useruploadsModel = new UseruploadsModel();
        $this->competitionModel = new CompetitionModel();
        $this->eventsdetailsModel = new EventsdetailsModel();
        $this->employeeratingModel = new EmployeeratingModel();
        $this->employeeskillsModel = new EmployeeskillsModel();
        $this->rolecertskillsModel = new RolecertskillsModel();
        $this->profcertificatesModel = new ProfcertificatesModel();
        $this->skillsModel = new SkillsModel();
        $this->portfolioModel = new PortfolioModel();
        $this->resultdiscModel = new ResultdiscModel();
        $this->companyrequirementsModel = new CompanyrequirementsModel();
    }
    public function dashboard()
    {
        if (empty($this->loggedData['hired'])) {
            return  redirect()->back();
        }
        if ($this->loggedHired['user_role'] != 7) {
            return  redirect()->back()->with('fail', 'Your Not Correct User');
        }
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

        return  redirect()->to('hired/updatePerInfo')->with('success', 'Assessment Submited !');
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
        $ID = $this->user['ID'];
        $email = $this->user['email'];
        $profile_status = $this->user['profile_status'];
        if ($profile_status == 3) {
            $discResult = $this->usersmarkModel->where(array("email" => $email))->findAll();
            if (!empty($discResult)) {
                $getRoles = $this->occupationsModel->select('occ_id,cour_catid,cour_catname,occ_role, occ_status')->like('result_DISC', $discResult[0]['DISC_result'])->findAll();
                $prefRoles = $this->userrolesModel->where(array("user_email" => $email))->findAll();
                if (!empty($prefRoles)) {
                    $data['prefRoles'] = explode(',', $prefRoles[0]['role_str']);
                } else {
                    $data['prefRoles'] = '';
                }
                $data['getRoles'] = $getRoles;
            } else {
                $data['getRoles'] = '';
                $data['prefRoles'] = '';
            }
            $tgtRoles = $this->userrolesModel->where(array("user_email" => $email))->findAll();
            if (!empty($tgtRoles)) {
                $data['user_primary'] = $tgtRoles[0]['usr_prim'];
                $data['user_roles'] = $tgtRoles[0]['user_roles'];
            } else {
                $data['user_roles'] =  '';
                $data['user_primary'] = '';
            }
        } else {
            $tgtRoles = $this->userrolesModel->where(array("user_email" => $email))->findAll();
            if (!empty($tgtRoles)) {
                $data['user_primary'] = $tgtRoles[0]['usr_prim'];
                $data['user_roles'] = $tgtRoles[0]['user_roles'];
            } else {
                $data['user_roles'] =  '';
                $data['user_primary'] = '';
            }
        }
        $data['usersInfo'] = $this->usersmarkModel->where(array("email" => $email))->findAll();
        $data['usersProfile'] = $this->usersModel->where(array("email" => $email))->findAll();
        $jobDetails = $this->jobapplicationModel->select('*')
            ->join('tb_company_job_posting', 'tb_company_job_posting.tb_company_job_posting_id = tb_job_application.tb_company_job_posting_id')
            ->where(array("tb_job_application.email" => $email))
            ->orderBy('date_application', 'DESC')->findAll();
        $data['jobDetails'] = $jobDetails;
        $data['jobTotalDetails'] = count($jobDetails);
        $jobParttime = $this->jobapplicationModel->select('*')
            ->join('tb_company_job_posting', 'tb_company_job_posting.tb_company_job_posting_id = tb_job_application.tb_company_job_posting_id')
            ->where(array("tb_job_application.email" => $email, 'tb_job_application.job_status' => 'PartTime'))
            ->orWhere(array('tb_job_application.job_status' => 'SemesterBrake'))
            ->orderBy('date_application', 'DESC')->findAll();
        $data['jobParttime'] = $jobParttime;
        $jobInternship = $this->jobapplicationModel->select('*')
            ->join('tb_company_job_posting', 'tb_company_job_posting.tb_company_job_posting_id = tb_job_application.tb_company_job_posting_id')
            ->where(array("tb_job_application.email" => $email, 'tb_job_application.job_status' => 'Internship'))
            ->orderBy('date_application', 'DESC')->findAll();
        $data['jobInternship'] = $jobInternship;
        $jobVolunteer = $this->jobapplicationModel->select('*')
            ->join('tb_company_job_posting', 'tb_company_job_posting.tb_company_job_posting_id = tb_job_application.tb_company_job_posting_id')
            ->where(array("tb_job_application.email" => $email, 'tb_job_application.job_status' => 'Volunteer'))
            ->orderBy('date_application', 'DESC')->findAll();
        $data['jobVolunteer'] = $jobVolunteer;
        $universityDetails = $this->universityapplicationModel->where(array('email' => $email))->orderBy('date_application', 'DESC')->findAll();
        $data['documentUpload'] = $this->useruploadsModel->where(array('user_email' => $email))->orderBy('upload_date', 'ASC')->findAll();
        $competition = $this->competitionModel->where(array('submit_by' => $email))->orderBy('submit_date', 'ASC')->findAll();
        $IC = $this->useruploadsModel->where(array('user_email' => $email, 'img_for' => 'IC', 'img_name!=' => 'N/A'))->orderBy('upload_date', 'ASC')->findAll();
        $birth = $this->useruploadsModel->where(array('user_email' => $email, 'img_for' => 'BIRTH', 'img_name!=' => 'N/A'))->orderBy('upload_date', 'ASC')->findAll();
        $academic = $this->useruploadsModel->where(array('user_email' => $email, 'img_for' => 'ACADEMIC', 'img_name!=' => 'N/A'))->orderBy('upload_date', 'ASC')->findAll();
        $transcript = $this->useruploadsModel->where(array('user_email' => $email, 'img_for' => 'TRANSCRIPT', 'img_name!=' => 'N/A'))->orderBy('upload_date', 'ASC')->findAll();
        $schoolLeaving = $this->useruploadsModel->where(array('user_email' => $email, 'img_for' => 'SCHOOL_LEAVING', 'img_name!=' => 'N/A'))->findAll();
        $data['videoCV'] = $this->eventsdetailsModel->where(array('user_email' => $email, 'event_title' => 'Video CV'))->findAll();
        $data['error'] = '';
        $data['profileStatus'] = 'YES';
        $IC = $this->useruploadsModel->where(array('user_email' => $email, 'img_for' => 'IC'))->orderBy('upload_date', 'ASC')->findAll();
        $documents_upload = 0;
        $university_application_total = 0;
        $competition_application_total = 0;
        if (count($IC) > 0) {
            $documents_upload++;
            $data['IC'] = $IC;
        }
        if (count($birth) > 0) {
            $documents_upload++;
            $data['birth'] = $birth;
        }
        if (count($academic) > 0) {
            $documents_upload++;
            $data['academic'] = $academic;
        }
        if (count($transcript) > 0) {
            $documents_upload++;
            $data['transcript'] = $transcript;
        }
        if (count($schoolLeaving) > 0) {
            $documents_upload++;
            $data['schoolLeaving'] = $schoolLeaving;
        }
        if (count($universityDetails) > 0) {
            $university_application_total = count($universityDetails);
            $data['universityDetails'] = $universityDetails;
        }
        if (count($competition) > 0) {
            $competition_application_total = count($competition);
            $data['competition'] = $competition;
        }
        $data['universityApplication'] = $university_application_total;
        $data['competitionApplication'] = $competition_application_total;
        $data['uploadRate'] = $conversation_rate = round((($documents_upload / 5) * 100), 2);
        $personalData = $this->employeeratingModel->where(array('userId' => $ID))->orderBy('id', 'DESC')->findAll();
        if (!empty($personalData)) {
            $data['personalData'] = $personalData;
        }
        $keySkills = $this->employeeratingModel->where(array('userId' => $ID))->orderBy('id', 'DESC')->findAll();
        if (!empty($keySkills)) {
            $data['keySkills'] = $keySkills;
        }
        if (!empty($data['user_roles'])) {
            $role_name = $data['user_roles'];
            $role_name = explode($role_name, ',');
            $pcID = $this->rolecertskillsModel->whereIn('occ_id', $role_name)->groupBy('pc_id')->findAll();
            $pcID = explode($pcID[0]['pc_id'], ',');
            $data['certs'] = $this->profcertificatesModel->whereIn('prof_id', $pcID)->findAll();
            $skID = $this->rolecertskillsModel->whereIn('occ_id', $role_name)->groupBy('sk_id')->findAll();
            $skID = explode($skID[0]['sk_id'], ',');
            $data['skills'] = $this->skillsModel->whereIn('skill_id', $skID)->findAll();
        } else {
            $role_name = '-1';
            $data['certs'] = $this->profcertificatesModel->findAll();
            $data['skills'] = $this->skillsModel->findAll();
        }
        return view('hired/updatePerInfo', $data);
    }
    public function updatePerInfoSubmit()
    {
        $email = $this->user['email'];
        $ID = $this->user['ID'];

        $fullname = $this->request->getPost('fullname');
        $IC = $this->request->getPost('IC');
        $gender = $this->request->getPost('gender');
        $phone = $this->request->getPost('phone');
        $address_1 = $this->request->getPost('address_1');
        $address_2 = $this->request->getPost('address_2');
        $zipcode = $this->request->getPost('zipcode');
        $city = $this->request->getPost('city');
        $state = $this->request->getPost('state');
        $country = $this->request->getPost('country');
        $current_job = $this->request->getPost('current_job');
        $current_company = $this->request->getPost('current_company');
        $job_experience = $this->request->getPost('job_experience');
        $work_type = $this->request->getPost('work_type');
        $remote_work = $this->request->getPost('remote_work');
        $preferred_location = $this->request->getPost('preferred_location');
        $inputData = array(
            "fullname" => $fullname,
            "IC" => $IC,
            "gender" => $gender,
            "phone" => $phone,
            "address_1" => $address_1,
            "address_2" => $address_2,
            "zipcode" => $zipcode,
            "city" => $city,
            "state" => $state,
            "country" => $country,
            "current_job" => $current_job,
            "current_company" => $current_company,
            "job_experience" => $job_experience,
            "work_type" => $work_type,
            "remote_work" => $remote_work,
            "preferred_location" => $preferred_location,
            "profile_progress" => 100
        );
        $this->usersModel->update(array("email" => $email, "ID" => $ID), $inputData);
        $this->employeeratingModel->delete(array('userId' => $ID));
        $total = 0;
        if ($relocate = $this->request->getPost('relocate'))
            $total += 4;
        if ($occupationLevel = $this->request->getPost('occupationLevel'))
            $total += 4;
        if ($highestEducation = $this->request->getPost('highestEducation'))
            $total += 2;
        if ($totalExperience = $this->request->getPost('totalExperience'))
            $total += 3;
        if ($expectedSalary = $this->request->getPost('expectedSalary'))
            $total += 3;
        if ($workTime = $this->request->getPost('workTime'))
            $total += 7;
        if ($jobRoleLimitation = $this->request->getPost('jobRoleLimitation'))
            $total += 7;
        if ($preferredCulture = $this->request->getPost('preferredCulture'))
            $total += 6;
        if ($jobCategory = $this->request->getPost('jobCategory'))
            $total += 4;
        $inputData1 = array(
            'userId' => $ID,
            'careerRole' => '',
            'relocate' => $relocate,
            'occupationLevel' => $occupationLevel,
            'highestEducation' => $highestEducation,
            'totalExperience' => $totalExperience,
            'keySkillIds' => '',
            'expectedSalary' => $expectedSalary,
            'workTime' => $workTime,
            'jobRoleLimitation' => $jobRoleLimitation,
            'preferredCulture' => $preferredCulture,
            'jobCategory' => $jobCategory,
            'totalPercentage' => $total,
            'createdAt' => date('Y-m-d H:i:s'),
            'updatedAt' => date('Y-m-d H:i:s')
        );
        $this->employeeratingModel->insert($inputData1);
        return  redirect()->to('hired/uploadResume')->with('success', 'Your Profile Updated !');
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
    public function uploadResumeSubmit()
    {
        $email = $this->user['email'];
        $ID = $this->user['ID'];
        if ($this->request->getFileMultiple('achievements')) {
            foreach ($this->request->getFileMultiple('achievements') as $file) {
                if ($file->isValid()) {
                    if (!$file->hasMoved()) {
                        $file_path = $file->getRandomName();
                        $file->move('assets/uploads/achievements', $file_path);
                        $values = [
                            'user_email' => $email,
                            'image_path' => $file_path,
                            'description' => 'No Description',
                            'created' => date("Y-m-d H:i:s")
                        ];
                        $this->portfolioModel->insert($values);
                    }
                }
            }
        }
        
        $fileResume = $this->request->getFile('resume');
        if ($fileResume->isValid()) {
            if (!$fileResume->hasMoved()) {
                $fileResume_path = $fileResume->getRandomName();
                $fileResume->move('assets/uploads/resume', $fileResume_path);
                $insert = [
                    'user_email' => $email,
                    'image_path' => $fileResume_path,
                    'description' => 'PDF Resume',
                    'created' => date("Y-m-d H:i:s")
                ];
                $this->portfolioModel->insert($insert);
            }
        }
        return  redirect()->to('hired/interviewPrep')->with('success', 'Your Resume Achievements Upload !');
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
    public function interviewPrepSubmit()
    {
        return  redirect()->to('hired/uploadVideo')->with('success', 'your interview preparation !');
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
    public function uploadVideoSubmit()
    {
        $email = $this->user['email'];
        $ID = $this->user['ID'];
        $name = $this->user['fullname'];
        $IC_no = $this->user['ic'];
        $contact_no = $this->user['phone'];
        $university = $this->user['university'];

        $event_title = $this->request->getPost('event_title');
        $from_profile = $this->request->getPost('from_profile');
        $PROFILE_PIC = $this->request->getPost('PROFILE_PIC');
        
        $month = date("M-Y");

        $checkDuplicate = $this->eventsdetailsModel->where(array('user_email' => $email,'event_title' => $event_title))->findAll();
        if(count($checkDuplicate) <=5){
            $fileVideo = $this->request->getFile('video-file-upload');
            if ($fileVideo->isValid()) {
                if (!$fileVideo->hasMoved()) {
                    $fileVideo_path = $fileVideo->getRandomName();
                    $fileVideo->move('assets/uploads/video_cv', $fileVideo_path);
                }
                
                $inputData=array(
                    'event_title'   =>$event_title,
                    'batch'         =>$month,
                    'name'          =>$name,
                    'IC_no'         =>$IC_no,
                    'contact_no'    =>$contact_no,
                    'university'    =>$university,
                    'courses'       =>'Talents',
                    'user_email'    =>$email,
                    'video_for'     =>$event_title,   
                    'video_name'    =>$fileVideo_path,
                    'video_path'    =>$fileVideo_path,
                    'ext'           =>'',
                    'submit_date'   =>date("d-m-Y h:i:s a")
                );
                $this->eventsdetailsModel->delete(array('user_email' => $email,'event_title' => $event_title));
                $this->eventsdetailsModel->insert($inputData);
                $this->usersModel->update(array('email' => $email,'ID' => $ID), array('video_progress' => 100));
            }
            return  redirect()->to('hired/evaluationGen')->with('success', 'your interview preparation !');
        }
        else{
            return  redirect()->back()->with('fail', 'Sorry, your upload has exceed limit for this month, please contact admin for details');
        }
    }
    public function evaluationGen()
    {
        $data['pageTitle'] = 'Karya | Profile';
        $data['logo'] = 'app-assets/images/logo_karya.png';
        $data['active'] = 'Evaluation';
        $data['css'] = array(
            base_url('app-assets/hired/style.css')
        );
        $data['loggedHired'] = $this->loggedHired;
        $data['is_online'] = $this->user['is_online'];
        return view('hired/evaluationGen', $data);
    }
    public function myProfile()
    {
        $email = $this->user['email'];
        $ID = $this->user['ID'];
        
        $data['pageTitle'] = 'Karya | Profile';
        $data['logo'] = 'app-assets/images/logo_karya.png';
        $data['active'] = 'profile';
        $data['css'] = array(
            base_url('app-assets/hired/style.css')
        );
        $data['loggedHired'] = $this->loggedHired;
        $data['is_online'] = $this->user['is_online'];

        $data['videos'] = $this->eventsdetailsModel->where(array('user_email' => $email,'event_title' => 'Video CV'))->orderBy('submit_date','DESC')->findAll();
        $data['portfolio'] = $this->portfolioModel->where(array('user_email' => $email))->findAll();
        $data['resume'] = $this->portfolioModel->where(array('user_email' => $email,'description' => 'PDF Resume'))->orderBy('created','DESC')->findAll();
        $discData = $this->usersmarkModel->where(array("email" => $email))->findAll();
        $discResult = $discData[0]['DISC_result'];
        $arr1 = str_split($discResult);
        $DISC_FIRST = $arr1[0];
        $DISC_SECOND = $arr1[1];
        $data['discOne'] = $this->resultdiscModel->where(array("result_combination" => $DISC_FIRST))->findAll();
        $data['discTwo'] = $this->resultdiscModel->where(array("result_combination" => $DISC_SECOND))->findAll();
        return view('hired/myProfile', $data);
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

    /* UnUsed Methods START */
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
        $data['explores'] = $this->companyrequirementsModel->findAll();
        return view('hired/explore', $data);
    }
    /* UnUsed Methods END */
}
