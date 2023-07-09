<?= $this->extend("layouts/hired") ?>
<?= $this->section("body") ?>
<?php

use App\Models\CompanyphotoModel;

$companyphotoModel = new CompanyphotoModel();
?>
<div class="data explore-jobs-data">
    <!-- technology -->
    <div class="technology d-none-mobile">
        <ul class="nav nav-pills profile-nav-pills mb-3 d-flex justify-content-center mb-4" id="technology-tab" role="tablist">
            <li class="nav-item me-1" role="presentation">
                <button class="nav-link active text-uppercase w-100" id="technology-jobs-tab" data-bs-toggle="pill" data-bs-target="#technology-jobs" type="button" role="tab" aria-controls="technology-jobs" aria-selected="true">
                    <?= $companyName ?>
                </button>
            </li>
        </ul>
        <div class="tab-content" id="technology-tabContent">
            <div class="tab-pane fade show active" id="technology-jobs" role="tabpanel" aria-labelledby="technology-jobs-tab" tabindex="0">
                <div class="technology-container">
                    <div class="row g-2">
                        <?php
                        if (!empty($companyDetails)) {
                            foreach ($companyDetails as $index => $row) {
                                $companyphoto = $companyphotoModel->where('tb_company_id', $row['tb_company_id'])->first();
                                if (!empty($companyphoto[0]['company_photo_file_name']) && $companyphoto[0]['company_photo_file_name'] != 'default.png') {
                                    $imagePath = site_url() . 'assets/uploads/company/' . $row['tb_company_id'] . '/' . $companyphoto[0]['company_photo_file_name'];
                                } else {
                                    $imagePath = site_url() . 'assets/uploads/user_profile/default_user_icon.png';
                                }
                        ?>
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="tech-card">
                                        <img src="<?= $imagePath ?>" alt="image">
                                        <h6 class="company"><?= $row['company_name'] ?></h6>
                                        <h6 class="location">
                                            <?= $row['company_city'] ?>, <?= $row['company_state'] ?>
                                        </h6>
                                        <h6 class="strength">
                                            <span class="members"><?= $row['company_size'] ?></span>
                                        </h6>
                                        <a href="<?= site_url() ?>hired/exploreCompanies/<?= $row['tb_company_id'] ?>" class="btn karya-btn get-btn">
                                            get to know the employer
                                        </a>
                                    </div>
                                </div>
                            <?php
                            }
                        } else {
                            ?>
                            <h5 class="text-center">No Data Found</h5>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="accordion profile-accordion technology-accordion mobile-only" id="technology-accordion">
        <div class="accordion-item">
            <h2 class="accordion-header" id="technology-hdr">
                <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#technology-collapse" aria-expanded="false" aria-controls="technology-collapse">
                    technology
                </button>
            </h2>
            <div id="technology-collapse" class="accordion-collapse collapse" aria-labelledby="technology-hdr" data-bs-parent="#technology-accordion">
                <div class="accordion-body p-0">
                    <div class="technology-container">
                        <div class="row g-2">
                            <div class="col-sm-6 col-lg-4 col-xl-3">
                                <div class="tech-card">
                                    <img src="<?= site_url() ?>app-assets/images/company.jpg" alt="image">
                                    <h6 class="company">code life solution</h6>
                                    <h6 class="location">
                                        Kuala Lumpur, Wilayah Persekutuan
                                    </h6>
                                    <h6 class="strength">
                                        <span>Conglomerate</span>
                                        -
                                        <span class="members">1000</span>
                                        and above
                                        personnel
                                    </h6>
                                    <button class="btn karya-btn get-btn">
                                        get to know the employer
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 col-xl-3">
                                <div class="tech-card">
                                    <img src="<?= site_url() ?>app-assets/images/no-profile.png" alt="image">
                                    <h6 class="company">code life solution</h6>
                                    <h6 class="location">
                                        Kuala Lumpur, Wilayah Persekutuan
                                    </h6>
                                    <h6 class="strength">
                                        <span>Conglomerate</span>
                                        -
                                        <span class="members">1000</span>
                                        and above
                                        personnel
                                    </h6>
                                    <button class="btn karya-btn get-btn">
                                        get to know the employer
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 col-xl-3">
                                <div class="tech-card">
                                    <img src="<?= site_url() ?>app-assets/images/no-profile.png" alt="image">
                                    <h6 class="company">code life solution</h6>
                                    <h6 class="location">
                                        Kuala Lumpur, Wilayah Persekutuan
                                    </h6>
                                    <h6 class="strength">
                                        <span>Conglomerate</span>
                                        -
                                        <span class="members">1000</span>
                                        and above
                                        personnel
                                    </h6>
                                    <button class="btn karya-btn get-btn">
                                        get to know the employer
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 col-xl-3">
                                <div class="tech-card">
                                    <img src="<?= site_url() ?>app-assets/images/company.jpg" alt="image">
                                    <h6 class="company">code life solution</h6>
                                    <h6 class="location">
                                        Kuala Lumpur, Wilayah Persekutuan
                                    </h6>
                                    <h6 class="strength">
                                        <span>Conglomerate</span>
                                        -
                                        <span class="members">1000</span>
                                        and above
                                        personnel
                                    </h6>
                                    <button class="btn karya-btn get-btn">
                                        get to know the employer
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 col-xl-3">
                                <div class="tech-card">
                                    <img src="<?= site_url() ?>app-assets/images/company.jpg" alt="image">
                                    <h6 class="company">code life solution</h6>
                                    <h6 class="location">
                                        Kuala Lumpur, Wilayah Persekutuan
                                    </h6>
                                    <h6 class="strength">
                                        <span>Conglomerate</span>
                                        -
                                        <span class="members">1000</span>
                                        and above
                                        personnel
                                    </h6>
                                    <button class="btn karya-btn get-btn">
                                        get to know the employer
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ends::technology -->
</div>
<?= $this->endSection() ?>