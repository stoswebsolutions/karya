<?= $this->extend("layouts/hired") ?>
<?= $this->section("body") ?>
<?php
use App\Models\CompanyModel;

$companyModel = new CompanyModel();

$jobDataRow = $jobData[0];
$companyInfo = $companyModel->where('tb_company_id', $jobDataRow['companyId'])->findAll();
$companyInfoRow = $companyInfo[0];
$applyDataRow = $applyData[0];
$questionsDataRow = $questionsData[0];
$answersDataRow = $answersData[0];


?>
<!-- explore jobs tab -->
<div class="data explore-jobs-data">
    <!-- web editor -->
    <div class="web-editor d-none-mobile">
        <ul class="nav nav-pills profile-nav-pills mb-3 d-flex justify-content-center mb-4" id="web-editor-tab" role="tablist">
            <li class="nav-item me-1" role="presentation">
                <button class="nav-link active text-uppercase w-100" id="web-editor-CLS-tab" data-bs-toggle="pill" data-bs-target="#web-editor-CLS" type="button" role="tab" aria-controls="web-editor-CLS" aria-selected="true">
                    web editor-code life solutions sdn bhd
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
                                        <h6 class="job">Corporate Finanace Adviser</h6>
                                        <h6 class="company"><?= $companyInfoRow['company_name'] ?></h6>
                                        <h6 class="location"><?= $jobDataRow['int_city'] ?></h6>
                                    </div>
                                    <div class="content-right">
                                        <h6 class="job">Corporate Finanace Adviser</h6>
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
                                <ol>
                                    <li>1. <?= $questionsDataRow['question1'] ?> </li>
                                    <li>2. <?= $questionsDataRow['question2'] ?> </li>
                                    <li>3. <?= $questionsDataRow['question3'] ?> </li>
                                    <li>4. <?= $questionsDataRow['question4'] ?> </li>
                                    <li>5. <?= $questionsDataRow['question5'] ?> </li>
                                </ol>
                                <div class="apply-btn-container">
                                    <button class="btn karya-btn apply-btn">
                                        Apply
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="intervoew-qstns">
                                <video controls class="w-100 hoverable">
                                    <source src="<?= site_url() ?>app-assets/images/video.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <h5 class="hdr">Your Video Job Application</h5>
                                <p class="note">
                                    Apply for job vacancy through a video application
                                    and get better and faster results.
                                </p>
                                <input type="file" class="form-control" id="job-application-video-upload">
                                <span class="video-note">
                                    Allowed &lt; 30 MB size Video
                                </span>
                            </div>
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
                    web editor-code life solutions sdn bhd
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
                                            <h6 class="job">Corporate Finanace Adviser</h6>
                                            <h6 class="company">Code Life Solution</h6>
                                            <h6 class="location">Kuala Lumpur</h6>
                                        </div>
                                        <div class="content-right">
                                            <h6 class="job">Corporate Finanace Adviser</h6>
                                            <h6 class="rm">RM 10000 - RM 20000</h6>
                                            <h6 class="expire-date">
                                                Last date to Apply:
                                                <span class="date">2023-04-30</span>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="job-desc">
                                        <h6 class="title">JOB DESCRIPTION</h6>
                                        <p class="desc mb-0">
                                            A generally-accepted distinction between
                                            corporate finance roles and investment banking
                                            roles is that a corporate finance professional
                                            deals with day-to-day financial operations and
                                            handles short- and long-term business goals,
                                            while an investment banker focuses on raising
                                            capital in the public markets. An investment
                                            banker also runs private placements of equity
                                            and debt capital and conducts merger and
                                            acquisition (M&A) deals.It could also be said
                                            that investment banking roles are tasked with
                                            growing a company from a capital perspective,
                                            while the corporate finance industry is employed
                                            in order to manage a company's capital and
                                            strategic finance-related decisions.Investment
                                            banks raise capital for other companies through
                                            securities operations in the debt and equity
                                            markets. Investment banks also help coordinate
                                            and execute mergers and acquisitions (M&A). They
                                            offer advisory services to big clients and
                                            perform complex financial analyses. Investment
                                            banking is considered one of the premier fields
                                            in the financial industry. There are two
                                            standard paths to an investment banking career:
                                            attend a noted undergraduate university and
                                            enter on the ground level as an analyst, or go
                                            to business school, earn a Master of Business
                                            Administration (MBA) graduate degree, and break
                                            through as an associate.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="editor-item">
                                    <div class="job-details">
                                        <div class="content">
                                            <h6 class="summary-hdr">Summary</h6>
                                            <p class="desc mb-0">
                                                Responsible for investment planning, analysis
                                                and forecasting future investment returns.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="job-desc">
                                        <h6 class="title">JOB REQUIREMENTS</h6>
                                        <p class="desc mb-0">
                                            A generally-accepted distinction between
                                            corporate finance roles and investment banking
                                            roles is that a corporate finance professional
                                            deals with day-to-day financial operations and
                                            handles short- and long-term business goals,
                                            while an investment banker focuses on raising
                                            capital in the public markets. An investment
                                            banker also runs private placements of equity
                                            and debt capital and conducts merger and
                                            acquisition (M&A) deals.It could also be said
                                            that investment banking roles are tasked with
                                            growing a company from a capital perspective,
                                            while the corporate finance industry is employed
                                            in order to manage a company's capital and
                                            strategic finance-related decisions.Investment
                                            banks raise capital for other companies through
                                            securities operations in the debt and equity
                                            markets. Investment banks also help coordinate
                                            and execute mergers and acquisitions (M&A). They
                                            offer advisory services to big clients and
                                            perform complex financial analyses. Investment
                                            banking is considered one of the premier fields
                                            in the financial industry. There are two
                                            standard paths to an investment banking career:
                                            attend a noted undergraduate university and
                                            enter on the ground level as an analyst, or go
                                            to business school, earn a Master of Business
                                            Administration (MBA) graduate degree, and break
                                            through as an associate.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="intervoew-qstns">
                                    <h5 class="hdr">Video Job Interview Questions</h5>
                                    <ol>
                                        <li>What are your strengths?</li>
                                        <li>
                                            Are you an effective leader? State past
                                            experiences.
                                        </li>
                                        <li>
                                            How can you contribute to this role you are
                                            applying to?
                                        </li>
                                        <li>What do you do in your spare time?</li>
                                        <li>How do you overcome pressure and stress?</li>
                                    </ol>
                                    <div class="apply-btn-container">
                                        <button class="btn karya-btn apply-btn">
                                            Apply
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="intervoew-qstns">
                                    <video controls class="w-100 hoverable">
                                        <source src="<?= site_url() ?>app-assets/images/video.mp4" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                    <h5 class="hdr">Your Video Job Application</h5>
                                    <p class="note">
                                        Apply for job vacancy through a video application
                                        and get better and faster results.
                                    </p>
                                    <input type="file" class="form-control" id="job-application-video-upload">
                                    <span class="video-note">
                                        Allowed &lt; 30 MB size Video
                                    </span>
                                </div>
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