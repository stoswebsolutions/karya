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
            <div class="personal-info position-relative completed">
                <div class="progress-lines d-flex align-items-center">
                    <span class="hor-line"></span>
                    <span class="ver-line"></span>
                </div>
            </div>
            <div class="upload-resume position-relative completed">
                <div class="progress-lines d-flex align-items-center">
                    <span class="hor-line"></span>
                    <span class="ver-line"></span>
                </div>
            </div>
            <div class="personality-assessment position-relative completed">
                <div class="progress-lines d-flex align-items-center">
                    <span class="hor-line"></span>
                    <span class="ver-line"></span>
                </div>
            </div>
            <div class="interview-prep position-relative completed">
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
    <!-- interview prep -->
    <div class="interview-prep-section">
        <div class="intro">
            <h1 class="pri-clr interview-prep-intor-hdr py-4 py-xl-5">
                <p>
                    Next, we will be customising personalised interview pitches
                    to help you prepare and ace your interviews. We have a
                    recommended pitch that we believe will work best for you.
                </p>
                <p class="mb-0">
                    We will also provide you with the industry outlook and a
                    list of potential questions that could arise during the
                    interview so that you can prepare effectively. Practice
                    makes perfect. The more you practice, the more confident and
                    prepared you will be when it comes time for the interview.
                    All the best!
                </p>
            </h1>
            <button class="btn profile-forms-btn okay-btn">Okay</button>
        </div>
        <form class="" id="" action="<?= base_url('hired/interviewPrepSubmit') ?>" method="post" enctype="multipart/form-data">
            <div class="interview-pitches d-none-mobile d-none">
                <ul class="nav nav-pills profile-nav-pills mb-3 d-flex justify-content-center mb-4" id="interview-prep-tab" role="tablist">
                    <li class="nav-item me-1" role="presentation">
                        <button class="nav-link active text-uppercase w-100" id="general-pitch-tab" data-bs-toggle="pill" data-bs-target="#general-pitch" type="button" role="tab" aria-controls="general-pitch" aria-selected="true">
                            career trajectory
                        </button>
                    </li>
                    <li class="nav-item me-1" role="presentation">
                        <button class="nav-link text-uppercase w-100" id="advance-pitch-tab" data-bs-toggle="pill" data-bs-target="#advance-pitch" type="button" role="tab" aria-controls="advance-pitch" aria-selected="false">
                            advance pitch
                        </button>
                    </li>
                    <li class="nav-item me-1" role="presentation">
                        <button class="nav-link text-uppercase w-100" id="sector-forecast-tab" data-bs-toggle="pill" data-bs-target="#sector-forecast" type="button" role="tab" aria-controls="sector-forecast" aria-selected="false">
                            sector forecast
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-uppercase w-100" id="spot-qstns-tab" data-bs-toggle="pill" data-bs-target="#spot-qstns" type="button" role="tab" aria-controls="spot-qstns" aria-selected="false">
                            spot questions
                        </button>
                    </li>
                </ul>
                <div class="tab-content" id="interview-prep-tabContent">
                    <div class="tab-pane fade show active" id="general-pitch" role="tabpanel" aria-labelledby="general-pitch-tab" tabindex="0">
                        <?php
                        $trajectory1 = explode("/\r\n|\n|\r/", $trajectory);
                        foreach ($trajectory1 as $i => $row) {
                            $traject = trim($row);
                        ?>
                            <p><?= $traject ?></p>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="tab-pane fade" id="advance-pitch" role="tabpanel" aria-labelledby="advance-pitch-tab" tabindex="0">
                        <?php
                        $advancepitch1 = explode("/\r\n|\n|\r/", $advancepitch);
                        foreach ($advancepitch1 as $i => $row) {
                            $advan = trim($row);
                        ?>
                            <p class="spot-qstns-list px-3 mb-3"><?= $advan ?></p>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="tab-pane fade" id="sector-forecast" role="tabpanel" aria-labelledby="sector-forecast-tab" tabindex="0">
                        <?php
                        $sectorforecast1 = explode("/\r\n|\n|\r/", $sectorforecast);
                        foreach ($sectorforecast1 as $i => $row) {
                            $sector = trim($row);
                        ?>
                            <p><?= $sector ?></p>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="tab-pane fade" id="spot-qstns" role="tabpanel" aria-labelledby="spot-qstns-tab" tabindex="0">
                        <?php
                        $spotqstns1 = explode('?', $spotqstns);
                        foreach ($spotqstns1 as $i => $row) {
                            $spot = trim($row);
                        ?>
                            <p class="spot-qstns-list px-3 mb-3"><?= $spot ?></p>
                        <?php
                        }
                        ?>
                        <div class="to-fro-btns">
                            <a href="<?= site_url() ?>hired/perAssessment" class="btn back-btn interview-prep-back"> Go Back </a>
                            <button class="btn next-btn interview-prep-next" type="submit">
                                Next
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion profile-accordion interview-pitches-accordion mobile-only d-none" id="interview-pitches-accordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="general-pitch-hdr">
                        <button class="accordion-button text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#general-pitch-collapse" aria-expanded="true" aria-controls="general-pitch-collapse">
                            career trajectory
                        </button>
                    </h2>
                    <div id="general-pitch-collapse" class="accordion-collapse collapse show" aria-labelledby="general-pitch-hdr" data-bs-parent="#interview-pitches-accordion">
                        <div class="accordion-body">
                            <?php
                            $trajectory1 = explode("/\r\n|\n|\r/", $trajectory);
                            foreach ($trajectory1 as $i => $row) {
                                $traject = trim($row);
                            ?>
                                <p><?= $traject ?></p>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="advance-pitch-hdr">
                        <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#advance-pitch-collapse" aria-expanded="false" aria-controls="advance-pitch-collapse">
                            advance pitch
                        </button>
                    </h2>
                    <div id="advance-pitch-collapse" class="accordion-collapse collapse" aria-labelledby="advance-pitch-hdr" data-bs-parent="#interview-pitches-accordion">
                        <div class="accordion-body">
                            <?php
                            $advancepitch2 = explode("/\r\n|\n|\r/", $advancepitch);
                            foreach ($advancepitch2 as $i => $row) {
                                $advan = trim($row);
                            ?>
                                <p class="spot-qstns-list px-3 mb-3"><?= $advan ?></p>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="sector-forecast-hdr">
                        <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#sector-forecast-collapse" aria-expanded="false" aria-controls="sector-forecast-collapse">
                            sector forecast
                        </button>
                    </h2>
                    <div id="sector-forecast-collapse" class="accordion-collapse collapse" aria-labelledby="sector-forecast-hdr" data-bs-parent="#interview-pitches-accordion">
                        <div class="accordion-body">
                            <?php
                            $sectorforecast2 = explode("/\r\n|\n|\r/", $sectorforecast);
                            foreach ($sectorforecast2 as $i => $row) {
                                $sector = trim($row);
                            ?>
                                <p><?= $sector ?></p>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="spot-qstns-hdr">
                        <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#spot-qstns-collapse" aria-expanded="false" aria-controls="spot-qstns-collapse">
                            spot questions
                        </button>
                    </h2>
                    <div id="spot-qstns-collapse" class="accordion-collapse collapse" aria-labelledby="spot-qstns-hdr" data-bs-parent="#interview-pitches-accordion">
                        <div class="accordion-body">
                            <?php
                            $spotqstns2 = explode('?', $spotqstns);
                            foreach ($spotqstns2 as $i => $row) {
                                $spot = trim($row);
                            ?>
                                <p class="spot-qstns-list px-3 mb-3"><?= $spot ?></p>
                            <?php
                            }
                            ?>
                            <div class="to-fro-btns">
                                <a href="<?= site_url() ?>hired/perAssessment" class="btn back-btn interview-prep-back"> Go Back </a>
                                <button class="btn next-btn interview-prep-next" type="button">
                                    Next
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- ends::interview prep -->
</div>
<!-- ends::profile tab -->
<?= $this->endSection() ?>