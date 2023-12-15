<?= $this->extend("layouts/hired") ?>
<?= $this->section("body") ?>
<!-- profile tab -->
<div class="data profile-data">
    <!-- my profile -->
    <div class="my-profile d-none-mobile">
        <ul class="nav nav-pills profile-nav-pills mb-3 d-flex justify-content-center mb-4" id="my-profile-tab" role="tablist">
            <li class="nav-item me-1" role="presentation">
                <button class="nav-link active text-uppercase w-100" id="my-resume-tab" data-bs-toggle="pill" data-bs-target="#my-resume" type="button" role="tab" aria-controls="my-resume" aria-selected="true">
                    resume
                </button>
            </li>
            <li class="nav-item me-1" role="presentation">
                <button class="nav-link text-uppercase w-100" id="profiling-tab" data-bs-toggle="pill" data-bs-target="#profiling" type="button" role="tab" aria-controls="profiling" aria-selected="false">
                    profiling
                </button>
            </li>
            <li class="nav-item me-1" role="presentation">
                <button class="nav-link text-uppercase w-100" id="video-pitch-tab" data-bs-toggle="pill" data-bs-target="#video-pitch" type="button" role="tab" aria-controls="video-pitch" aria-selected="false">
                    video pitch
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link text-uppercase w-100" id="achievements-tab" data-bs-toggle="pill" data-bs-target="#achievements" type="button" role="tab" aria-controls="achievements" aria-selected="false">
                    achievements
                </button>
            </li>
        </ul>
        <div class="tab-content" id="my-profile-tabContent">
            <div class="tab-pane fade show active" id="my-resume" role="tabpanel" aria-labelledby="my-resume-tab" tabindex="0">
                <div class="resume-container">
                    <!-- load resume here -->
                    <img src="<?= site_url() ?>app-assets/images/resume.PNG" alt="resume" class="w-100">
                    <!-- ends::load resume here -->
                </div>
            </div>
            <div class="tab-pane fade profiling-tab-content" id="profiling" role="tabpanel" aria-labelledby="profiling-tab" tabindex="0">
                <div class="dominant-data">
                    <div class="row gx-0">
                        <div class="col-6">
                            <div class="content">
                                <h5 class="hdr mb-0 text-uppercase">
                                    primary character
                                </h5>
                                <h2 class="sub-hdr mb-3 text-uppercase">
                                    - <?= $discOne[0]['result_full_name'] ?>
                                </h2>
                                <h6 class="sub-sub-hdr mb-3">
                                    <?= stripslashes($discOne[0]['tagline']) ?>
                                </h6>
                                <span class="text-white"><?= stripslashes($discOne[0]['result_DISC_description']); ?></span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="content content-right">
                                <h5 class="hdr mb-3 text-uppercase">
                                    <?= stripslashes($discOne[0]['style_title']) ?>
                                </h5>
                                <span class="justify text-white"><?= stripslashes($discOne[0]['person_style']) ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="competency-data">
                    <h1 class="hdr mt-4 mb-2">
                        COMPETENCY ASSESSMENT: Fund Manager
                    </h1>
                    <div class="content">
                        <div class="row gx-0">
                            <div class="col-6">
                                <div class="graph-data h-100 me-4">
                                    <h5 class="title">Competency Assessment</h5>
                                    <div class="graph">
                                        <!-- add graph here -->
                                        <img src="<?= site_url() ?>app-assets/images/competency-graph.PNG" alt="graph" class="w-100">
                                        <!-- ends::add graph here -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="graph-data h-100 ms-4">
                                    <h5 class="title">RATING</h5>
                                    <div class="graph">
                                        <!-- add graph here -->
                                        <img src="<?= site_url() ?>app-assets/images/rating-graph.PNG" alt="graph" class="w-100">
                                        <!-- ends::add graph here -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <ol class="list text-white fw-500">
                                    <li>
                                        <p class="ms-2">
                                            Have you successfully managed diversified
                                            investment portfolios across different asset
                                            classes, such as equities, fixed income, and
                                            alternative investments?
                                        </p>
                                    </li>
                                    <li>
                                        <p class="ms-2">
                                            Are you proficient in utilizing financial
                                            analysis techniques, such as ratio analysis,
                                            discounted cash flow (DCF) analysis, or relative
                                            valuation methods?
                                        </p>
                                    </li>
                                    <li>
                                        <p class="ms-2">
                                            Have you actively employed risk management
                                            strategies, such as setting stop-loss orders or
                                            implementing hedging techniques, to mitigate
                                            investment risks?
                                        </p>
                                    </li>
                                    <li>
                                        <p class="ms-2">
                                            Are you familiar with regulatory compliance
                                            requirements related to fund management, such as
                                            reporting obligations or investor disclosure
                                            obligations?
                                        </p>
                                    </li>
                                    <li>
                                        <p class="ms-2 mb-0">
                                            Have you actively monitored and evaluated
                                            performance metrics of investment portfolios
                                            such as Sharpe ratio, alpha, or tracking error?
                                        </p>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="video-pitch" role="tabpanel" aria-labelledby="video-pitch-tab" tabindex="0">
                <?php
                foreach ($videos as $v1 => $vrow) {
                    ?>
                    <div class="video-container">
                        <video controls poster="<?= site_url() ?>app-assets/images/poster.jpg" class="w-100 hoverable">
                            <source src="<?= site_url() ?>assets/uploads/video_cv/<?= $vrow['video_path'] ?>" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <?php
                }
                ?>
            </div>
            <div class="tab-pane fade" id="achievements" role="tabpanel" aria-labelledby="achievements" tabindex="0">
                <div class="achievements-container bg-white px-2 pt-1 pb-3">
                    <div class="row g-2 m-0">
                        <?php
                        foreach ($portfolio as $p1 => $prow) {
                            ?>
                            <div class="col-6">
                                <img src="<?= site_url() ?>assets/uploads/achievements/<?= $prow['image_path'] ?>" alt="image path not exist" class="w-100 h-100">
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="accordion profile-accordion my-profile-accordion mobile-only" id="my-profile-accordion">
        <div class="accordion-item">
            <h2 class="accordion-header" id="resume-hdr">
                <button class="accordion-button text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#resume-collapse" aria-expanded="true" aria-controls="resume-collapse">
                    resume
                </button>
            </h2>
            <div id="resume-collapse" class="accordion-collapse collapse show" aria-labelledby="resume-hdr" data-bs-parent="#my-profile-accordion">
                <div class="accordion-body p-0">
                    <!-- load resume here -->
                    <div class="resume-container">
                        <img src="<?= site_url() ?>app-assets/images/resume.PNG" alt="resume" class="w-100">
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="profiling-hdr">
                <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#profiling-collapse" aria-expanded="false" aria-controls="profiling-collapse">
                    profiling
                </button>
            </h2>
            <div id="profiling-collapse" class="accordion-collapse collapse" aria-labelledby="profiling-hdr" data-bs-parent="#my-profile-accordion">
                <div class="accordion-body p-0">
                    <div class="dominant-data">
                        <div class="row gx-0">
                            <div class="col-12">
                                <div class="content">
                                    <h5 class="hdr mb-0 text-uppercase">
                                        primary character
                                    </h5>
                                    <h2 class="sub-hdr mb-3 text-uppercase">
                                        - dominant (d)
                                    </h2>
                                    <h6 class="sub-sub-hdr mb-3">
                                        Commanding & Task Oriented
                                    </h6>
                                    <dl class="row mb-0">
                                        <dt class="col-3 title">FOCUS</dt>
                                        <dd class="col-9">
                                            <p class="mb-0 txt">
                                                Take care of circumstances by persuading
                                                others to have a common vision.
                                            </p>
                                        </dd>
                                        <dt class="col-3 title">ACTIONS</dt>
                                        <dd class="col-9">
                                            <p class="mb-0 txt">
                                                Look at the bigger picture, assert for
                                                results, take risks and loves adventures.
                                            </p>
                                        </dd>
                                        <dt class="col-3 title">APPROACH</dt>
                                        <dd class="col-9">
                                            <p class="mb-0 txt">Am direct and blunt.</p>
                                        </dd>
                                        <dt class="col-3 title">TENDENCIES</dt>
                                        <dd class="col-9">
                                            <p class="mb-0 txt">
                                                Innovate, crave for results, creates commotion
                                                and loves challenges.
                                            </p>
                                        </dd>
                                        <dt class="col-3 title">RESPONSE</dt>
                                        <dd class="col-9">
                                            <p class="mb-0 txt">
                                                Give short answers and makes fast decisions.
                                            </p>
                                        </dd>
                                        <dt class="col-3 title">MOTIVATION</dt>
                                        <dd class="col-9">
                                            <p class="mb-0 txt">
                                                Thirive for authority, opportunity and
                                                prestige.
                                            </p>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="content content-right">
                                    <h5 class="hdr mb-3 text-uppercase">
                                        a dominant person
                                    </h5>
                                    <p class="txt">
                                        Is not afraid to confront tough issues and
                                        situations and can make a decision when no one
                                        else wants to.
                                    </p>
                                    <p class="txt">
                                        Accept change as a personal challenge and keeps
                                        the team focused and on task.
                                    </p>
                                    <p class="txt">
                                        May come across as unapproachable and insensitive.
                                    </p>
                                    <p class="txt mb-0">
                                        Is objective driven and results oriented hence
                                        impatient with others and doesn't favour intricate
                                        details.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="competency-data">
                        <h1 class="hdr mt-4 mb-2 mx-3">
                            COMPETENCY ASSESSMENT: Fund Manager
                        </h1>
                        <div class="content">
                            <div class="row gx-0">
                                <div class="col-6">
                                    <div class="graph-data h-100 me-4">
                                        <h5 class="title">Competency Assessment</h5>
                                        <div class="graph">
                                            <!-- add graph here -->
                                            <img src="<?= site_url() ?>app-assets/images/competency-graph.PNG" alt="graph" class="w-100">
                                            <!-- ends::add graph here -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="graph-data h-100 ms-4">
                                        <h5 class="title">RATING</h5>
                                        <div class="graph">
                                            <!-- add graph here -->
                                            <img src="<?= site_url() ?>app-assets/images/rating-graph.PNG" alt="graph" class="w-100">
                                            <!-- ends::add graph here -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <ol class="list text-white fw-500">
                                        <li>
                                            <p class="ms-2 mb-1">
                                                Have you successfully managed diversified
                                                investment portfolios across different asset
                                                classes, such as equities, fixed income, and
                                                alternative investments?
                                            </p>
                                        </li>
                                        <li>
                                            <p class="ms-2 mb-1">
                                                Are you proficient in utilizing financial
                                                analysis techniques, such as ratio analysis,
                                                discounted cash flow (DCF) analysis, or
                                                relative valuation methods?
                                            </p>
                                        </li>
                                        <li>
                                            <p class="ms-2 mb-1">
                                                Have you actively employed risk management
                                                strategies, such as setting stop-loss orders
                                                or implementing hedging techniques, to
                                                mitigate investment risks?
                                            </p>
                                        </li>
                                        <li>
                                            <p class="ms-2 mb-1">
                                                Are you familiar with regulatory compliance
                                                requirements related to fund management, such
                                                as reporting obligations or investor
                                                disclosure obligations?
                                            </p>
                                        </li>
                                        <li>
                                            <p class="ms-2 mb-0">
                                                Have you actively monitored and evaluated
                                                performance metrics of investment portfolios
                                                such as Sharpe ratio, alpha, or tracking
                                                error?
                                            </p>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="video-pitch-hdr">
                <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#video-pitch-collapse" aria-expanded="false" aria-controls="video-pitch-collapse">
                    video pitch
                </button>
            </h2>
            <div id="video-pitch-collapse" class="accordion-collapse collapse" aria-labelledby="video-pitch-hdr" data-bs-parent="#my-profile-accordion">
                <div class="accordion-body p-0">
                    <div class="video-container">
                        <video controls poster="<?= site_url() ?>app-assets/images/poster.jpg" class="w-100 hoverable">
                            <source src="<?= site_url() ?>app-assets/images/video.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="achievements-hdr">
                <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#achievements-collapse" aria-expanded="false" aria-controls="achievements-collapse">
                    achievements
                </button>
            </h2>
            <div id="achievements-collapse" class="accordion-collapse collapse" aria-labelledby="achievements-hdr" data-bs-parent="#my-profile-accordion">
                <div class="accordion-body p-0">
                    <div class="achievements-container bg-dark px-1 pb-2">
                        <div class="row g-2 m-0">
                            <div class="col-12">
                                <img src="<?= site_url() ?>app-assets/images/achievement-1.PNG" alt="achievement" class="w-100 h-100">
                            </div>
                            <div class="col-12">
                                <img src="<?= site_url() ?>app-assets/images/achievement-2.PNG" alt="achievement" class="w-100 h-100">
                            </div>
                            <div class="col-12">
                                <img src="<?= site_url() ?>app-assets/images/achievement-3.PNG" alt="achievement" class="w-100 h-100">
                            </div>
                            <div class="col-12">
                                <img src="<?= site_url() ?>app-assets/images/achievement-4.PNG" alt="achievement" class="w-100 h-100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ends::my profile -->
</div>
<!-- ends::profile tab -->
<?= $this->endSection() ?>