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
            <div class="personality-assessment position-relative">
                <div class="progress-lines d-flex align-items-center start">
                    <span class="hor-line"></span>
                    <span class="circle"></span>
                </div>
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
        <form action="" class="bg-white">
            <div class="row gx-3">
                <div class="col-12 col-sm-6">
                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                        <span class="input-group-text bg-transparent pe-0">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                        <input type="text" class="form-control border-start-0 full-name" placeholder="Full name">
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                        <span class="input-group-text bg-transparent pe-0">
                            <i class="fa fa-credit-card" aria-hidden="true"></i>
                        </span>
                        <input type="text" class="form-control border-start-0 ic-nmbr" placeholder="IC Number">
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                        <select id="gender" class="form-select gender-slct">
                            <option selected disabled>Select Gender</option>
                            <option value="m">Male</option>
                            <option value="f">Female</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                        <span class="input-group-text bg-transparent pe-0">
                            <i class="fa fa-phone-square" aria-hidden="true"></i>
                        </span>
                        <input type="number" class="form-control border-start-0 phone-nmbr" placeholder="Telephone Number">
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                        <input type="text" class="form-control adrs-1" placeholder="Address 1">
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                        <input type="text" class="form-control adrs-2" placeholder="Address 2">
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                        <input type="text" class="form-control poscode" placeholder="Poscode">
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                        <input type="text" class="form-control city" placeholder="City">
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                        <input type="text" class="form-control state" placeholder="State">
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                        <input type="text" class="form-control country" placeholder="Country">
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                        <select id="status" class="form-select status-slct">
                            <option selected disabled>Select your Status</option>
                            <option value="s1">Status 1</option>
                            <option value="s2">Status 2</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                        <input type="text" class="form-control company-university" placeholder="Current Company/University">
                    </div>
                </div>
                <div class="col-12 col-sm-4 col-lg-3">
                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                        <input type="number" class="form-control experience" placeholder="Working Experience">
                    </div>
                </div>
                <div class="col-12 col-sm-8 col-lg-4">
                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                        <select id="work-type" class="form-select work-type-slct">
                            <option selected disabled>
                                What type of work are you considering?
                            </option>
                            <option value="w1">Work 1</option>
                            <option value="w2">Work 2</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-sm-8 col-lg-4">
                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                        <select id="remote-work" class="form-select remote-work-slct">
                            <option selected disabled>
                                Are you interested in remote(Work from Home)?
                            </option>
                            <option value="y">yeah</option>
                            <option value="n">Nope</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-sm-4 col-lg-3">
                    <div class="input-group input-group-sm mb-2 mb-sm-3">
                        <input type="text" class="form-control location" placeholder="Preferred Location">
                    </div>
                </div>
            </div>
        </form>
        <div class="vacancy-details">
            <div class="row gx-0">
                <div class="col-12 col-sm-6">
                    <h6 class="mb-0 pri-clr vacancy-hdr">
                        Type in the job vacancy that you are currently pursuing.
                    </h6>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="vacancy-btns">
                        <button class="btn activeBtn profile-forms-btn">
                            Targeted Career
                        </button>
                        <button class="btn inactiveBtn">
                            Type in the job role
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <form action="" class="form-2 bg-white">
            <div class="row gx-3">
                <div class="col-12 col-lg-6">
                    <div class="input-group input-group-sm mb-2 mb-sm-3 d-flex flex-column">
                        <select id="remote-work" class="form-select relocate-select w-100">
                            <option disabled selected>
                                Are you willing to relocate to a different city or
                                country?
                            </option>
                            <option value="y">yes</option>
                            <option value="n">no</option>
                        </select>
                        <div class="info-txt">
                            This will increase ur profile by 4%
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="input-group input-group-sm mb-2 mb-sm-3 d-flex flex-column">
                        <select id="remote-work" class="form-select employment-level-select w-100">
                            <option disabled selected>
                                What level is your most recent employment position?
                            </option>
                            <option value="l1">L1</option>
                            <option value="l2">L2</option>
                        </select>
                        <div class="info-txt">
                            This will increase ur profile by 2%
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="input-group input-group-sm mb-2 mb-sm-3 d-flex flex-column">
                        <select id="remote-work" class="form-select edu-level-select w-100">
                            <option disabled selected>
                                What level is your highest level of education?
                            </option>
                            <option value="e1">E1</option>
                            <option value="e2">E2</option>
                        </select>
                        <div class="info-txt">
                            This will increase ur profile by 2%
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="input-group input-group-sm mb-2 mb-sm-3 d-flex flex-column">
                        <select id="remote-work" class="form-select work-exp-select w-100">
                            <option disabled selected>
                                How many years of work experience have you had?
                            </option>
                            <option value="1">&gt;1</option>
                            <option value="5">&gt;5</option>
                        </select>
                        <div class="info-txt">
                            This will increase ur profile by 2%
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="input-group input-group-sm mb-2 mb-sm-3 d-flex flex-column">
                        <select id="remote-work" class="form-select sal-range-select w-100">
                            <option disabled selected>
                                What is your expected salary range?
                            </option>
                            <option value="5l">&gt;5L</option>
                            <option value="10l">&gt;10L</option>
                        </select>
                        <div class="info-txt">
                            This will increase ur profile by 2%
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="input-group input-group-sm mb-2 mb-sm-3 d-flex flex-column">
                        <select id="remote-work" class="form-select work-hrs-select w-100">
                            <option disabled selected>
                                Will you be willing to work beyond the daily 8 hours
                                of work?
                            </option>
                            <option value="y">yes</option>
                            <option value="n">no</option>
                        </select>
                        <div class="info-txt">
                            This will increase ur profile by 4%
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="input-group input-group-sm mb-2 mb-sm-3 d-flex flex-column">
                        <select id="remote-work" class="form-select extra-duties-select w-100">
                            <option disabled selected>
                                Will you be willing to perform relevant duties beyond
                                your job description?
                            </option>
                            <option value="y">yes</option>
                            <option value="n">no</option>
                        </select>
                        <div class="info-txt">
                            This will increase ur profile by 4%
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="input-group input-group-sm mb-2 mb-sm-3 d-flex flex-column">
                        <select id="remote-work" class="form-select culture-select w-100">
                            <option disabled selected>
                                What kind of corporate culture would you prefer?
                            </option>
                            <option value="c1">culture 1</option>
                            <option value="c2">culture 2</option>
                        </select>
                        <div class="info-txt">
                            This will increase ur profile by 2%
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="input-group input-group-sm mb-2 mb-sm-3 d-flex flex-column">
                        <select id="remote-work" class="form-select job-function-select w-100">
                            <option disabled selected>
                                What kind of job function would suit you best?
                            </option>
                            <option value="f1">function 1</option>
                            <option value="f2">function 2</option>
                        </select>
                        <div class="info-txt">
                            This will increase ur profile by 4%
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="to-fro-btns">
            <button class="btn back-btn personal-info-back">Go Back</button>
            <button class="btn next-btn personal-info-next">Next</button>
        </div>
    </div>
    <!-- ends::personal info -->
</div>
<!-- ends::profile tab -->
<?= $this->endSection() ?>