<?= $this->extend("layouts/app") ?>
<?= $this->section("body") ?>
<?php
if (isset($css) && $css != NULL) {
    foreach ($css as $cs) {
        echo '<link href="' . $cs . '" rel="stylesheet" type="text/css" />';
    }
}
?>
<div class="karya-container">
    <section class="karya-section maths-section">
        <div class="section-info karya-p">
            <h1 class="font-kai pri-clr mb-1 mb-sm-2 title">Do the maths!</h1>
            <h6 class="helper-txt fw-600 mb-0">
                Explore passive income you can generate by selling your profile to
                potential employers.
            </h6>
        </div>
        <div class="row gx-0">
            <div class="d-none-tab col-md-1 col-lg-3"></div>
            <div class="col-sm-12 col-md-11 col-lg-9">
                <div class="income-calc yellow-bg p-5 d-flex align-items-center justify-content-between">
                    <div class="slidecontainer">
                        <label for="sale-range" class="black-clr fw-600">Profile Sale</label>
                        <input type="range" min="0" max="1000" value="0" class="form-range" id="sale-range" />
                        <div class="ranges d-flex align-items-center justify-content-between w-100 black-clr fw-600">
                            <span>0</span>
                            <span class="text-white selected-value">0</span>
                            <span>1,000</span>
                        </div>
                    </div>
                    <div class="result d-flex">
                        <div class="profiles-result d-flex align-items-top">
                            <h3 class="mb-0 text-white">
                                <span class="value profile-val">0</span><span class="label">Profiles</span>
                            </h3>
                        </div>
                        <div class="income-result d-flex align-items-bottom">
                            <h3 class="mb-0 text-white">
                                <span class="value">RM<span class="income-val">0</span></span>
                                <span class="label">Income</span>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="karya-section outcomes-section">
        <div class="section-info karya-p pri-bg">
            <h1 class="font-kai yellow-clr mb-1 mb-sm-2 title">
                Distinctive outcomes
            </h1>
            <h6 class="helper-txt fw-600 mb-0 text-white">
                A different approach with different results for employers.
            </h6>
        </div>
        <div class="row gx-0">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="explore-card karya-py h-100">
                    <div class="outcomeCard h-100">
                        <div class="header-data">
                            <h4 class="font-kai mb-0 title">Explore</h4>
                            <h1 class="plan mb-0 fw-600 text-uppercase">Free</h4>
                                <h6 class="plan-txt mb-0 fw-600">Free plan for all employers</h6>
                        </div>
                        <div class="card-body">
                            <ul class="outcome-list m-0 p-0">
                                <li>
                                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                                    <span class="outcome-type">
                                        <span>1</span> job posting
                                    </span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                                    <span class="outcome-type">
                                        <span>1</span> snapshot view
                                    </span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                                    <span class="outcome-type">
                                        <span>1</span> talent resume view
                                    </span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                                    <span class="outcome-type">
                                        <span>1</span> talent profiling view
                                    </span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                                    <span class="outcome-type">
                                        <span>1</span> talent video pitch view
                                    </span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                                    <span class="outcome-type">
                                        <span>1</span> talent potential role view
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="business-card karya-py h-100">
                    <div class="outcomeCard h-100">
                        <div class="header-data">
                            <h4 class="font-kai mb-0 title">Business</h4>
                            <h1 class="plan mb-0 fw-600 text-uppercase">RM500</h4>
                                <h6 class="plan-txt mb-0 fw-600">Free plan for all employers</h6>
                        </div>
                        <div class="card-body">
                            <ul class="outcome-list m-0 p-0">
                                <li>
                                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                                    <span class="outcome-type">
                                        Unlimited job posting
                                    </span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                                    <span class="outcome-type">
                                        Unlimited snapshot views
                                    </span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                                    <span class="outcome-type">
                                        <span>5</span> talent resume views
                                    </span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                                    <span class="outcome-type">
                                        <span>5</span> talent profiling views
                                    </span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                                    <span class="outcome-type">
                                        <span>5</span> talent video pitch views
                                    </span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                                    <span class="outcome-type">
                                        <span>5</span> talent potential role views
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="corporate-card karya-py h-100">
                    <div class="outcomeCard h-100">
                        <div class="header-data">
                            <h4 class="font-kai mb-0 title">Corporate</h4>
                            <h1 class="plan mb-0 fw-600 text-uppercase">RM1,000</h4>
                                <h6 class="plan-txt mb-0 fw-600">Free plan for all employers</h6>
                        </div>
                        <div class="card-body">
                            <ul class="outcome-list m-0 p-0">
                                <li>
                                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                                    <span class="outcome-type">
                                        Unlimited job posting
                                    </span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                                    <span class="outcome-type">
                                        Unlimited snapshot views
                                    </span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                                    <span class="outcome-type">
                                        <span>15</span> talent resume views
                                    </span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                                    <span class="outcome-type">
                                        <span>15</span> talent profiling views
                                    </span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                                    <span class="outcome-type">
                                        <span>15</span> talent video pitch views
                                    </span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                                    <span class="outcome-type">
                                        <span>15</span> talent potential role views
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="karya-section employer-section pri-bg">
        <div class="row gx-0">
            <h1 class="font-kai yellow-clr karya-p mb-0 section-title">
                Employer
            </h1>
            <div class="col-12 col-md-4">
                <div class="info-card understanding-card">
                    <div class="circle-icon">
                        <div class="minus-icon"></div>
                    </div>
                    <h1 class="font-kai sec-clr">Understanding Your Needs</h1>
                    <h6 class="">
                        Using Al, we analyse your exact needs and generate the necessary
                        details for your job posting and talent match.
                    </h6>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="info-card talent-card">
                    <div class="circle-icon">
                        <div class="minus-icon"></div>
                    </div>
                    <h1 class="font-kai sec-clr">Talent Match and Recommendations</h1>
                    <h6 class="pri-clr">
                        Using Al, we will match the best talents suitable for the vacant
                        role and suggest other possible roles where they could excel.
                    </h6>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="info-card save-card">
                    <div class="circle-icon">
                        <div class="minus-icon"></div>
                    </div>
                    <h1 class="font-kai sec-clr">Save Time and Money</h1>
                    <h6 class="pri-clr">
                        View snapshot details of suitable talents prior to making
                        payment and thereafter are able to seamlessly connect to them.
                    </h6>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection() ?>