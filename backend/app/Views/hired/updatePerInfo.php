<?= $this->extend("layouts/hired") ?>
<?= $this->section("body") ?>
<!-- profile tab -->
<div class="data profile-data">
    <!-- stepper -->
    <div class="for-stepper d-flex align-items-center justify-content-center">
        <div class="stepper-container">
            <div class="start">
                <span class="txt">Start</span>
                <span class="circle"></span>
            </div>
            <div class="personal-info position-relative">
                <div class="progress-lines d-flex align-items-center">
                    <span class="hor-line"></span>
                    <span class="ver-line"></span>
                </div>
            </div>
            <div class="upload-resume position-relative">
                <div class="progress-lines d-flex align-items-center">
                    <span class="hor-line"></span>
                    <span class="ver-line"></span>
                </div>
            </div>
            <div class="personality-assessment position-relative">
                <div class="progress-lines d-flex align-items-center">
                    <span class="hor-line"></span>
                    <span class="ver-line"></span>
                </div>
            </div>
            <div class="interview-prep position-relative">
                <div class="progress-lines d-flex align-items-center">
                    <span class="hor-line"></span>
                    <span class="ver-line"></span>
                </div>
            </div>
            <div class="upload-vid position-relative">
                <div class="progress-lines d-flex align-items-center">
                    <span class="hor-line"></span>
                    <span class="ver-line"></span>
                </div>
            </div>
            <div class="incomplete">
                <span class="hor-line"></span>
                <span class="circle"></span>
                <span class="txt">Complete</span>
            </div>
        </div>
    </div>
    <!-- ends::stepper -->
    <!-- personal info -->
    <div class="personal-info-form">
        <form class="bg-white" id="personal-info-form" action="<?= base_url('hired/updatePerInfoSubmit') ?>" method="post">
            <?= csrf_field(); ?>
            <div class="row">
                <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                <?php elseif (!empty(session()->getFlashdata('success'))) : ?>
                    <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
                <?php endif ?>
            </div>
            <div class="row gx-3">
                <div class="col-12 col-sm-6">
                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                        <span class="input-group-text bg-transparent pe-0">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                        <input type="text" class="form-control border-start-0 full-name" name="fullname" id="fullname" value="<?= $loggedHired['fullname'] ?>" placeholder="Full name">
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                        <span class="input-group-text bg-transparent pe-0">
                            <i class="fa fa-credit-card" aria-hidden="true"></i>
                        </span>
                        <input type="text" class="form-control border-start-0 ic-nmbr" name="IC" id="IC" value="<?= $loggedHired['ic'] ?>" placeholder="IC Number">
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                        <select id="gender" name="gender" class="form-select gender-slct">
                            <option selected disabled>Select Gender</option>
                            <option value="Male" <?= $loggedHired['gender'] == 'Male' ? 'selected' : '' ?>>Male</option>
                            <option value="Female" <?= $loggedHired['gender'] == 'Female' ? 'selected' : '' ?>>Female</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                        <span class="input-group-text bg-transparent pe-0">
                            <i class="fa fa-phone-square" aria-hidden="true"></i>
                        </span>
                        <input type="number" class="form-control border-start-0 phone-nmbr" name="phone" id="phone" value="<?= $loggedHired['phone'] ?>" placeholder="Telephone Number">
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                        <input type="text" class="form-control adrs-1" name="address_1" id="address_1" value="<?= $loggedHired['address_1'] ?>" placeholder=" Address 1">
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                        <input type="text" class="form-control adrs-2" name="address_2" id="address_2" value="<?= $loggedHired['address_2'] ?>" placeholder="Address 2">
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                        <input type="text" class="form-control poscode" name="zipcode" id="zipcode" value="<?= $loggedHired['zipcode'] ?>" placeholder="Poscode">
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                        <input type="text" class="form-control city" name="city" id="city" value="<?= $loggedHired['city'] ?>" placeholder="City">
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                        <input type="text" class="form-control state" name="state" id="state" value="<?= $loggedHired['state'] ?>" placeholder="State">
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                        <input type="text" class="form-control country" name="country" id="country" value="<?= $loggedHired['country'] ?>" placeholder="Country">
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                        <select name="current_job" id="current_job" class="form-select status-slct">
                            <option selected disabled>Select your Status</option>
                            <option value="Student" <?= $loggedHired['current_job'] == 'Student' ? 'selected' : '' ?>>Currently Studying</option>
                            <option value="Working" <?= $loggedHired['current_job'] == 'Working' ? 'selected' : '' ?>>Currently Working</option>
                            <option value="Unemployed" <?= $loggedHired['current_job'] == 'Unemployed' ? 'selected' : '' ?>>Currently Unemployed</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                        <input type="text" class="form-control company-university" name="current_company" id="current_company" value="<?= $loggedHired['current_company'] ?>" placeholder="Current Company/University">
                    </div>
                </div>
                <div class="col-12 col-sm-4 col-lg-3">
                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                        <input type="number" class="form-control experience" name="job_experience" id="job_experience" value="<?= $loggedHired['job_experience'] ?>" placeholder="Working Experience">
                    </div>
                </div>
                <div class="col-12 col-sm-8 col-lg-4">
                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                        <select name="work_type" id="work_type" class="form-select work-type-slct">
                            <option selected disabled>
                                What type of work are you considering?
                            </option>
                            <option value="Full time" <?= $usersProfile[0]['work_type'] == 'Full time' ? 'selected' : '' ?>>Looking for Full time work</option>
                            <option value="Part Time" <?= $usersProfile[0]['work_type'] == 'Part Time' ? 'selected' : '' ?>>Looking for Part Time work</option>
                            <option value="Internship" <?= $usersProfile[0]['work_type'] == 'Internship' ? 'selected' : '' ?>>Looking for Internship</option>
                            <option value="Freelance" <?= $usersProfile[0]['work_type'] == 'Freelance' ? 'selected' : '' ?>>Looking for Freelance work</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-sm-8 col-lg-4">
                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                        <select name="remote_work" id="remote_work" class="form-select remote-work-slct">
                            <option selected disabled>
                                Are you interested in remote(Work from Home)?
                            </option>
                            <option value="Yes" <?= $usersProfile[0]['remote_work'] == 'Yes' ? 'selected' : '' ?>>Yes</option>
                            <option value="No" <?= $usersProfile[0]['remote_work'] == 'No' ? 'selected' : '' ?>>No</option>
                            <option value="Maybe">Maybe</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-sm-4 col-lg-3">
                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                        <input type="text" class="form-control location" name="preferred_location" id="preferred_location" value="<?= $usersProfile[0]['preferred_location'] ?>" placeholder="Preferred Location">
                    </div>
                </div>
            </div>
            <div class="vacancy-details">
                <div class="row gx-0">
                    <div class="col-12 col-sm-6">
                        <h6 class="mb-0 pri-clr vacancy-hdr">
                            Type in the job vacancy that you are currently pursuing.
                        </h6>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="vacancy-btns">
                            <button class="btn activeBtn profile-forms-btn" type="button" >
                                Targeted Career
                            </button>
                            <div class="input-group input-group-sm mb-2 mb-sm-3">
                                <input type="text" class="form-control" name="" id="" value="" placeholder="">
                            </div>
                            <!-- <button class="btn inactiveBtn">
                                Type in the job role
                            </button> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-2 bg-white">
                <div class="row gx-3">
                    <div class="col-12 col-lg-6">
                        <div class="input-group input-group-sm mb-2 mb-sm-3 d-flex flex-column">
                            <select name="relocate" id="relocate" class="form-select relocate-select w-100">
                                <option disabled selected>
                                    Are you willing to relocate to a different city or
                                    country?
                                </option>
                                <option value="Yes" <?= $personalData[0]['relocate'] == 'Yes' ? 'selected' : '' ?>>Yes</option>
                                <option value="No" <?= $personalData[0]['relocate'] == 'No' ? 'selected' : '' ?>>No</option>
                            </select>
                            <div class="info-txt">
                                This will increase ur profile by 4%
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="input-group input-group-sm mb-2 mb-sm-3 d-flex flex-column">
                            <select name="occupationLevel" id="occupationLevel" class="form-select employment-level-select w-100">
                                <option disabled selected>
                                    What level is your most recent employment position?
                                </option>
                                <option value="No Experience" <?= $personalData[0]['occupationLevel'] == 'No Experience' ? 'selected' : '' ?>>No Experience</option>
                                <option value="Executive" <?= $personalData[0]['occupationLevel'] == 'Executive' ? 'selected' : '' ?>>Executive</option>
                                <option value="Managerial" <?= $personalData[0]['occupationLevel'] == 'Managerial' ? 'selected' : '' ?>>Managerial</option>
                            </select>
                            <div class="info-txt">
                                This will increase ur profile by 2%
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="input-group input-group-sm mb-2 mb-sm-3 d-flex flex-column">
                            <select name="highestEducation" id="highestEducation" class="form-select edu-level-select w-100">
                                <option disabled selected>
                                    What level is your highest level of education?
                                </option>
                                <option value="Certificate" <?= $personalData[0]['highestEducation'] == 'Certificate' ? 'selected' : '' ?>>Certificate</option>
                                <option value="Degree" <?= $personalData[0]['highestEducation'] == 'Degree' ? 'selected' : '' ?>>Degree</option>
                                <option value="Post Graduate Degree" <?= $personalData[0]['highestEducation'] == 'Post Graduate Degree' ? 'selected' : '' ?>>Post Graduate Degree</option>
                                <option value="Doctorate" <?= $personalData[0]['highestEducation'] == 'Doctorate' ? 'selected' : '' ?>>Doctorate</option>
                            </select>
                            <div class="info-txt">
                                This will increase ur profile by 2%
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="input-group input-group-sm mb-2 mb-sm-3 d-flex flex-column">
                            <select name="totalExperience" id="totalExperience" class="form-select work-exp-select w-100">
                                <option disabled selected>
                                    How many years of work experience have you had?
                                </option>
                                <option value="0 to 4 years" <?= $personalData[0]['totalExperience'] == '0 to 4 years' ? 'selected' : '' ?>>0 to 4 years</option>
                                <option value="5 to 9 years" <?= $personalData[0]['totalExperience'] == '5 to 9 years' ? 'selected' : '' ?>>5 to 9 years</option>
                                <option value="Above 10 years" <?= $personalData[0]['totalExperience'] == 'Above 10 years' ? 'selected' : '' ?>>Above 10 years</option>
                            </select>
                            <div class="info-txt">
                                This will increase ur profile by 2%
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="input-group input-group-sm mb-2 mb-sm-3 d-flex flex-column">
                            <select name="expectedSalary" id="expectedSalary" class="form-select sal-range-select w-100">
                                <option disabled selected>
                                    What is your expected salary range?
                                </option>
                                <option value="RM 1,000 to RM 5,000" <?= $personalData[0]['expectedSalary'] == 'RM 1,000 to RM 5,000' ? 'selected' : '' ?>>RM 1,000 to RM 5,000</option>
                                <option value="RM 5,001 to RM 10,000" <?= $personalData[0]['expectedSalary'] == 'RM 5,001 to RM 10,000' ? 'selected' : '' ?>>RM 5,001 to RM 10,000</option>
                                <option value="Above RM 10,001" <?= $personalData[0]['expectedSalary'] == 'Above RM 10,001' ? 'selected' : '' ?>>Above RM 10,001</option>
                            </select>
                            <div class="info-txt">
                                This will increase ur profile by 2%
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="input-group input-group-sm mb-2 mb-sm-3 d-flex flex-column">
                            <select name="workTime" id="workTime" class="form-select work-hrs-select w-100">
                                <option disabled selected>
                                    Will you be willing to work beyond the daily 8 hours
                                    of work?
                                </option>
                                <option value="Yes" <?= $personalData[0]['workTime'] == 'Yes' ? 'selected' : '' ?>>Yes</option>
                                <option value="No" <?= $personalData[0]['workTime'] == 'No' ? 'selected' : '' ?>>No</option>
                            </select>
                            <div class="info-txt">
                                This will increase ur profile by 4%
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="input-group input-group-sm mb-2 mb-sm-3 d-flex flex-column">
                            <select name="jobRoleLimitation" id="jobRoleLimitation" class="form-select extra-duties-select w-100">
                                <option disabled selected>
                                    Will you be willing to perform relevant duties beyond
                                    your job description?
                                </option>
                                <option value="Yes" <?= $personalData[0]['jobRoleLimitation'] == 'Yes' ? 'selected' : '' ?>>Yes</option>
                                <option value="No" <?= $personalData[0]['jobRoleLimitation'] == 'No' ? 'selected' : '' ?>>No</option>
                            </select>
                            <div class="info-txt">
                                This will increase ur profile by 4%
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="input-group input-group-sm mb-2 mb-sm-3 d-flex flex-column">
                            <select name="preferredCulture" id="preferredCulture" class="form-select culture-select w-100">
                                <option disabled selected>
                                    What kind of corporate culture would you prefer?
                                </option>
                                <option title="Policies, procedural and rational decisions" value="Hierarchy Culture" <?= $personalData[0]['preferredCulture'] == 'Hierarchy Culture' ? 'selected' : '' ?>>Hierarchy Culture</option>
                                <option title="Results focused, high performance and competitive" value="Market Driven Culture" <?= $personalData[0]['preferredCulture'] == 'Market Driven Culture' ? 'selected' : '' ?>>Market Driven Culture</option>
                                <option title="Trust, openness and collaborative" value="Collaborative Culture" <?= $personalData[0]['preferredCulture'] == 'Collaborative Culture' ? 'selected' : '' ?>>Collaborative Culture</option>
                                <option title="Innovative, creative and flexible" value="Dynamic Culture" <?= $personalData[0]['preferredCulture'] == 'Dynamic Culture' ? 'selected' : '' ?>>Dynamic Culture</option>
                            </select>
                            <div class="info-txt">
                                This will increase ur profile by 2%
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="input-group input-group-sm mb-2 mb-sm-3 d-flex flex-column">
                            <select name="jobCategory" id="jobCategory" class="form-select job-function-select w-100">
                                <option disabled selected>
                                    What kind of job function would suit you best?
                                </option>
                                <option value="Technical and mechanical" <?= $personalData[0]['jobCategory'] == 'Technical and mechanical' ? 'selected' : '' ?>>Technical and mechanical</option>
                                <option value="Communications and marketing" <?= $personalData[0]['jobCategory'] == 'Communications and marketing' ? 'selected' : '' ?>>Communications and marketing</option>
                                <option value="Organisational and administrative" <?= $personalData[0]['jobCategory'] == 'Organisational and administrative' ? 'selected' : '' ?>>Organisational and administrative</option>
                                <option value="Analytical and critical thinking" <?= $personalData[0]['jobCategory'] == 'Analytical and critical thinking' ? 'selected' : '' ?>>Analytical and critical thinking</option>
                            </select>
                            <div class="info-txt">
                                This will increase ur profile by 4%
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="to-fro-btns">
                <!-- <a href="<?= site_url() ?>hired/perAssessment" class="btn back-btn personal-info-back"> Go Back </a> -->
                <button class="btn next-btn personal-info-next" type="submit">Next</button>
            </div>
        </form>
    </div>
    <!-- ends::personal info -->
</div>
<!-- ends::profile tab -->
<?= $this->endSection() ?>