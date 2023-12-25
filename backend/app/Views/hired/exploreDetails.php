<?= $this->extend("layouts/hired") ?>
<?= $this->section("body") ?>
<?php

use App\Models\CompanyModel;
use App\Models\OccupationsModel;

$companyModel = new CompanyModel();
$occupationsModel = new OccupationsModel();

$jobDataRow = $jobData[0];
$companyInfo = $companyModel->where('tb_company_id', $jobDataRow['companyId'])->findAll();
$companyInfoRow = $companyInfo[0];
$roleInfo = $occupationsModel->where('occ_id', $jobDataRow['role_id'])->findAll();
$role_title = $roleInfo[0]['occ_role'];
if (!empty($questionsData)) {
    $questionsDataRow = $questionsData[0];
    $answersDataRow = $answersData[0];
}

?>
<!-- explore jobs tab -->
<div class="data explore-jobs-data">
    <!-- web editor -->
    <div class="web-editor d-none-mobile">
        <ul class="nav nav-pills profile-nav-pills mb-3 d-flex justify-content-center mb-4" id="web-editor-tab" role="tablist">
            <li class="nav-item me-1" role="presentation">
                <button class="nav-link active text-uppercase w-100" id="web-editor-CLS-tab" data-bs-toggle="pill" data-bs-target="#web-editor-CLS" type="button" role="tab" aria-controls="web-editor-CLS" aria-selected="true">
                    <?= $role_title ?>-<?= $companyInfoRow['company_name'] ?>
                </button>
            </li>
        </ul>
        <div class="tab-content" id="web-editor-tabContent">
            <div class="tab-pane fade show active" id="web-editor-CLS" role="tabpanel" aria-labelledby="web-editor-CLS-tab" tabindex="0">
                <div class="web-editor-container bg-white">
                    <div class="row gx-0">
                        <div class="col-6">
                            <div class="editor-item">
                                <div class="job-details">
                                    <div class="content-left">
                                        <h6 class="job"><?= $role_title ?></h6>
                                        <h6 class="company"><?= $companyInfoRow['company_name'] ?></h6>
                                        <h6 class="location"><?= $jobDataRow['int_city'] ?></h6>
                                    </div>
                                    <div class="content-right">
                                        <h6 class="job"><?= $jobDataRow['job_title'] ?></h6>
                                        <h6 class="rm">RM <?= $jobDataRow['rng_from'] ?> - RM <?= $jobDataRow['rng_to'] ?></h6>
                                        <h6 class="expire-date">
                                            Last date to Apply:
                                            <span class="date"><?= $jobDataRow['expiry_date'] ?></span>
                                        </h6>
                                    </div>
                                </div>
                                <div class="job-desc">
                                    <h6 class="title">JOB DESCRIPTION</h6>
                                    <p class="desc mb-0"><?= $jobDataRow['job_desc'] ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="editor-item">
                                <div class="job-details">
                                    <div class="content">
                                        <h6 class="summary-hdr">Summary</h6>
                                        <p class="desc mb-0"><?= $jobDataRow['short_desc'] ?></p>
                                    </div>
                                </div>
                                <div class="job-desc">
                                    <h6 class="title">JOB REQUIREMENTS</h6>
                                    <p class="desc mb-0"><?= $jobDataRow['job_req'] ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="intervoew-qstns">
                                <h5 class="hdr">Video Job Interview Questions</h5>
                                <?php
                                if (!empty($questionsData)) {
                                ?>
                                    <ol>
                                        <li><?= $questionsDataRow['question1'] ?> </li>
                                        <li><?= $questionsDataRow['question2'] ?> </li>
                                        <li><?= $questionsDataRow['question3'] ?> </li>
                                        <li><?= $questionsDataRow['question4'] ?> </li>
                                        <li><?= $questionsDataRow['question5'] ?> </li>
                                    </ol>
                                <?php
                                }
                                ?>
                                <form class="" id="" action="<?= base_url('hired/applyJob') ?>" method="post" enctype="multipart/form-data">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="role_id" value="<?= $jobDataRow['role_id'] ?>">
                                    <input type="hidden" name="cat_id" value="<?= $jobDataRow['cat_id'] ?>">
                                    <input type="hidden" name="companyId" value="<?= $jobDataRow['companyId'] ?>">
                                    <input type="hidden" name="user_email" value="<?= $email ?>">
                                    <input type="hidden" name="job_id" value="<?= $jobDataRow['id'] ?>">
                                    <input type="hidden" name="user_id" value="<?= $user_id ?>">
                                    <?php
                                    $date_now = date("Y-m-d");
                                    $expiry_date = $jobDataRow['expiry_date'];
                                    if (count($applyData) <= 0) {
                                        if ($date_now <= $expiry_date) {
                                    ?>
                                            <div class="apply-btn-container">
                                                <button class="btn karya-btn apply-btn" type="submit">
                                                    Apply
                                                </button>
                                            </div>
                                        <?php
                                        } else {
                                        ?>
                                            <div class="apply-btn-container">
                                                <button class="btn karya-btn apply-btn" type="button">
                                                    Date Expired
                                                </button>
                                            </div>
                                        <?php
                                        }
                                    } else {
                                        ?>
                                        <div class="apply-btn-container">
                                            <button class="btn karya-btn apply-btn" type="button">
                                                Applied
                                            </button>
                                        </div>
                                        <?php
                                        if ($date_now > $expiry_date) {
                                        ?>
                                            <div class="apply-btn-container">
                                                <button class="btn karya-btn apply-btn" type="button">
                                                    Date Expired
                                                </button>
                                            </div>
                                    <?php
                                        }
                                    }
                                    ?>
                                </form>
                            </div>
                        </div>
                        <div class="col-6">
                            <form class="" id="" action="<?= base_url('hired/uploadVideoAns') ?>" method="post" enctype="multipart/form-data">
                                <?= csrf_field(); ?>
                                <?php
                                if (!empty($questionsData)) {
                                    $question_id = $questionsDataRow['question_id'];
                                    $question_video = $questionsDataRow['question_video'];
                                ?>
                                    <div class="intervoew-qstns">
                                        <input type="hidden" name="question_id" value="<?= $question_id ?>">
                                        <input type="hidden" name="job_id" value="<?= $jobDataRow['id'] ?>">
                                        <input type="hidden" name="user_id" value="<?= $user_id ?>">
                                        <video controls class="w-100 hoverable">
                                            <source src="<?= site_url() ?><?= $question_video ?>" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                        <h5 class="hdr">Your Video Job Application</h5>
                                        <?php
                                        if (empty($answersData)) {
                                        ?>
                                            <p class="note">
                                                Apply for job vacancy through a video application
                                                and get better and faster results.
                                            </p>
                                            <input type="file" class="form-control" id="job-application-video-upload" name="jobVideoAns" accept=".mp4" required >
                                            <span class="video-note">
                                                Allowed &lt; 30 MB size Video
                                            </span>
                                            <div class="apply-btn-container">
                                                <button class="btn karya-btn apply-btn" type="submit">
                                                    Upload
                                                </button>
                                            </div>
                                        <?php
                                        } else {
                                        ?>
                                            <video controls class="w-100 hoverable">
                                                <source src="<?= site_url() ?><?= $answersDataRow['answer_video'] ?>" type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                <?php
                                }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="accordion profile-accordion editor-accordion mobile-only" id="editor-accordion">
        <div class="accordion-item">
            <h2 class="accordion-header" id="editor-hdr">
                <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#editor-collapse" aria-expanded="false" aria-controls="editor-collapse">
                    <?= $role_title ?>-<?= $companyInfoRow['company_name'] ?>
                </button>
            </h2>
            <div id="editor-collapse" class="accordion-collapse collapse" aria-labelledby="editor-hdr" data-bs-parent="#editor-accordion">
                <div class="accordion-body p-0">
                    <div class="web-editor-container bg-white">
                        <div class="row gx-0 gy-1">
                            <div class="col-12">
                                <div class="editor-item">
                                    <div class="job-details">
                                        <div class="content-left pe-2">
                                            <h6 class="job"><?= $role_title ?></h6>
                                            <h6 class="company"><?= $companyInfoRow['company_name'] ?></h6>
                                            <h6 class="location"><?= $jobDataRow['int_city'] ?></h6>
                                        </div>
                                        <div class="content-right">
                                            <h6 class="job"><?= $jobDataRow['job_title'] ?></h6>
                                            <h6 class="rm">RM <?= $jobDataRow['rng_from'] ?> - RM <?= $jobDataRow['rng_to'] ?></h6>
                                            <h6 class="expire-date">
                                                Last date to Apply:
                                                <span class="date"><?= $jobDataRow['expiry_date'] ?></span>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="job-desc">
                                        <h6 class="title">JOB DESCRIPTION</h6>
                                        <p class="desc mb-0"><?= $jobDataRow['job_desc'] ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="editor-item">
                                    <div class="job-details">
                                        <div class="content">
                                            <h6 class="summary-hdr">Summary</h6>
                                            <p class="desc mb-0"><?= $jobDataRow['short_desc'] ?></p>
                                        </div>
                                    </div>
                                    <div class="job-desc">
                                        <h6 class="title">JOB REQUIREMENTS</h6>
                                        <p class="desc mb-0"><?= $jobDataRow['job_req'] ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="intervoew-qstns">
                                    <h5 class="hdr">Video Job Interview Questions</h5>
                                    <?php
                                    if (!empty($questionsData)) {
                                    ?>
                                        <ol>
                                            <li><?= $questionsDataRow['question1'] ?> </li>
                                            <li><?= $questionsDataRow['question2'] ?> </li>
                                            <li><?= $questionsDataRow['question3'] ?> </li>
                                            <li><?= $questionsDataRow['question4'] ?> </li>
                                            <li><?= $questionsDataRow['question5'] ?> </li>
                                        </ol>
                                    <?php
                                    }
                                    ?>
                                    <form class="" id="" action="<?= base_url('hired/applyJob') ?>" method="post" enctype="multipart/form-data">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="role_id" value="<?= $jobDataRow['role_id'] ?>">
                                        <input type="hidden" name="cat_id" value="<?= $jobDataRow['cat_id'] ?>">
                                        <input type="hidden" name="companyId" value="<?= $jobDataRow['companyId'] ?>">
                                        <input type="hidden" name="user_email" value="<?= $email ?>">
                                        <input type="hidden" name="job_id" value="<?= $jobDataRow['id'] ?>">
                                        <input type="hidden" name="user_id" value="<?= $user_id ?>">
                                        <?php
                                        $date_now = date("Y-m-d");
                                        $expiry_date = $jobDataRow['expiry_date'];
                                        if (count($applyData) <= 0) {
                                            if ($date_now <= $expiry_date) {
                                        ?>
                                                <div class="apply-btn-container">
                                                    <button class="btn karya-btn apply-btn" type="submit">
                                                        Apply
                                                    </button>
                                                </div>
                                            <?php
                                            } else {
                                            ?>
                                                <div class="apply-btn-container">
                                                    <button class="btn karya-btn apply-btn" type="button">
                                                        Date Expired
                                                    </button>
                                                </div>
                                            <?php
                                            }
                                        } else {
                                            ?>
                                            <div class="apply-btn-container">
                                                <button class="btn karya-btn apply-btn" type="button">
                                                    Applied
                                                </button>
                                            </div>
                                            <?php
                                            if ($date_now > $expiry_date) {
                                            ?>
                                                <div class="apply-btn-container">
                                                    <button class="btn karya-btn apply-btn" type="button">
                                                        Date Expired
                                                    </button>
                                                </div>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </form>
                                </div>
                            </div>
                            <div class="col-12">
                                <form class="" id="" action="<?= base_url('hired/uploadVideoAns') ?>" method="post" enctype="multipart/form-data">
                                    <?= csrf_field(); ?>
                                    <?php
                                    if (!empty($questionsData)) {
                                        $question_id = $questionsDataRow['question_id'];
                                        $question_video = $questionsDataRow['question_video'];
                                    ?>
                                        <div class="intervoew-qstns">
                                            <input type="hidden" name="question_id" value="<?= $question_id ?>">
                                            <input type="hidden" name="job_id" value="<?= $jobDataRow['id'] ?>">
                                            <input type="hidden" name="user_id" value="<?= $user_id ?>">
                                            <video controls class="w-100 hoverable">
                                                <source src="<?= site_url() ?><?= $question_video ?>" type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                            <h5 class="hdr">Your Video Job Application</h5>
                                            <?php
                                            if (empty($answersData)) {
                                            ?>
                                                <p class="note">
                                                    Apply for job vacancy through a video application
                                                    and get better and faster results.
                                                </p>
                                                <input type="file" class="form-control" id="job-application-video-upload" name="jobVideoAns" accept=".mp4" required>
                                                <span class="video-note">
                                                    Allowed &lt; 30 MB size Video
                                                </span>
                                                <div class="apply-btn-container">
                                                    <button class="btn karya-btn apply-btn" type="submit">
                                                        Upload
                                                    </button>
                                                </div>
                                            <?php
                                            } else {
                                            ?>
                                                <video controls class="w-100 hoverable">
                                                    <source src="<?= site_url() ?><?= $answersDataRow['answer_video'] ?>" type="video/mp4">
                                                    Your browser does not support the video tag.
                                                </video>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ends::web editor -->
</div>
<!-- ends::explore jobs tab -->
<?= $this->endSection() ?>