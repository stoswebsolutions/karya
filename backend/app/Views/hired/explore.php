<?= $this->extend("layouts/hired") ?>
<?= $this->section("body") ?>
<?php

use App\Models\CompanyModel;

$companyModel = new CompanyModel();
?>
<!-- explore jobs tab -->
<div class="data explore-jobs-data">
    <!-- career roles -->
    <div class="career-roles d-none-mobile">
        <ul class="nav nav-pills profile-nav-pills mb-3 d-flex justify-content-center mb-4" id="career-roles-tab" role="tablist">
            <li class="nav-item me-1" role="presentation">
                <button class="nav-link active text-uppercase w-100" id="targeted-career-tab" data-bs-toggle="pill" data-bs-target="#targeted-career" type="button" role="tab" aria-controls="targeted-career" aria-selected="true">
                    targeted career role
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link text-uppercase w-100" id="suitable-career-tab" data-bs-toggle="pill" data-bs-target="#suitable-career" type="button" role="tab" aria-controls="suitable-career" aria-selected="false">
                    suitable career roles
                </button>
            </li>
        </ul>
        <div class="tab-content" id="career-roles-tabContent">
            <div class="tab-pane fade show active" id="targeted-career" role="tabpanel" aria-labelledby="targeted-career-tab" tabindex="0">
                <div class="roles-container bg-white">
                    <div class="row gx-0">
                        <?php
                        foreach ($explores as $index => $row) {
                            $companyInfo = $companyModel->where('tb_company_id', $row['companyId'])->findAll();
                            if (!empty($companyInfo[0]['company_name'])){
                                ?>
                                    <div class="col-sm-6 col-lg-4 col-xl-3">
                                        <div class="role-card">
                                            <!-- <h6 class="role"><?= $row['role_id'] ?></h6> -->
                                            <h6 class="company">
                                                Company:
                                                <span class="name"><?= $companyInfo[0]['company_name'] ?></span>
                                            </h6>
                                            <h6 class="location"><?= $row['int_city'] ?></h6>
                                            <h6 class="rm">
                                                <span>RM <?= $row['rng_from'] ?></span> -
                                                <span>RM <?= $row['rng_to'] ?></span>
                                            </h6>
                                            <div class="summary-dets">
                                                <h6 class="title">Summary</h6>
                                                <p class="summary">
                                                    <?php
                                                    $out = (strlen($row['short_desc']) > 20 ? substr($row['short_desc'],0,20)."..." :  (strlen($row['short_desc']) > 0 ? $row['short_desc'] : "<br>")); 
                                                    echo $out;
                                                    ?>
                                                </p>
                                            </div>
                                            <h6 class="expire-dets">
                                                Expires on :
                                                <span class="date"><?= $row['expiry_date'] ?></span>
                                            </h6>
                                            <button class="btn card-btn">read more</button>
                                        </div>
                                    </div>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade suitable-career-tab-content" id="suitable-career" role="tabpanel" aria-labelledby="suitable-career-tab" tabindex="0">
                <div class="roles-container bg-white">
                    <div class="row gx-0">
                        <?php
                        foreach ($explores as $index => $row) {
                        ?>
                            <div class="col-sm-6 col-lg-4 col-xl-3">
                                <div class="role-card">
                                    <h6 class="role">Corporate Finance Advisor</h6>
                                    <h6 class="company">
                                        Company:
                                        <span class="name">Code Life Solution</span>
                                    </h6>
                                    <h6 class="location">Kuala Lumpur</h6>
                                    <h6 class="rm">
                                        <span>RM 10000</span> -
                                        <span>RM 20000</span>
                                    </h6>
                                    <div class="summary-dets">
                                        <h6 class="title">Summary</h6>
                                        <p class="summary">
                                            Responsible for investment planning, analysis And
                                            forecasting future investment returns...
                                        </p>
                                    </div>
                                    <h6 class="expire-dets">
                                        Expires on :
                                        <span class="date">2023-04-30</span>
                                    </h6>
                                    <button class="btn card-btn">read more</button>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="accordion profile-accordion roles-accordion mobile-only" id="roles-accordion">
        <div class="accordion-item">
            <h2 class="accordion-header" id="targeted-hdr">
                <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#targeted-collapse" aria-expanded="false" aria-controls="targeted-collapse">
                    targeted career role
                </button>
            </h2>
            <div id="targeted-collapse" class="accordion-collapse collapse" aria-labelledby="targeted-hdr" data-bs-parent="#roles-accordion">
                <div class="accordion-body p-0">
                    <div class="roles-container bg-white">
                        <div class="row gx-0">
                            <?php
                            foreach ($explores as $index => $row) {
                            ?>
                                <div class="col-12">
                                    <div class="role-card">
                                        <h6 class="role">Corporate Finance Advisor</h6>
                                        <h6 class="company">
                                            Company:
                                            <span class="name">Code Life Solution</span>
                                        </h6>
                                        <h6 class="location">Kuala Lumpur</h6>
                                        <h6 class="rm">
                                            <span>RM 10000</span> -
                                            <span>RM 20000</span>
                                        </h6>
                                        <div class="summary-dets">
                                            <h6 class="title">Summary</h6>
                                            <p class="summary">
                                                Responsible for investment planning, analysis
                                                And forecasting future investment returns...
                                            </p>
                                        </div>
                                        <h6 class="expire-dets">
                                            Expires on :
                                            <span class="date">2023-04-30</span>
                                        </h6>
                                        <button class="btn card-btn">read more</button>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="suitable-hdr">
                <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#suitable-collapse" aria-expanded="false" aria-controls="suitable-collapse">
                    suitable career roles
                </button>
            </h2>
            <div id="suitable-collapse" class="accordion-collapse collapse" aria-labelledby="suitable-hdr" data-bs-parent="#roles-accordion">
                <div class="accordion-body p-0">
                    <div class="roles-container bg-white">
                        <div class="row gx-0">
                            <?php
                            foreach ($explores as $index => $row) {
                            ?>
                                <div class="col-12">
                                    <div class="role-card">
                                        <h6 class="role">Corporate Finance Advisor</h6>
                                        <h6 class="company">
                                            Company:
                                            <span class="name">Code Life Solution</span>
                                        </h6>
                                        <h6 class="location">Kuala Lumpur</h6>
                                        <h6 class="rm">
                                            <span>RM 10000</span> -
                                            <span>RM 20000</span>
                                        </h6>
                                        <div class="summary-dets">
                                            <h6 class="title">Summary</h6>
                                            <p class="summary">
                                                Responsible for investment planning, analysis
                                                And forecasting future investment returns...
                                            </p>
                                        </div>
                                        <h6 class="expire-dets">
                                            Expires on :
                                            <span class="date">2023-04-30</span>
                                        </h6>
                                        <button class="btn card-btn">read more</button>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ends::career roles -->
</div>
<!-- ends::explore jobs tab -->
<?= $this->endSection() ?>