<?= $this->extend("layouts/hired") ?>
<?= $this->section("body") ?>
<!-- dashboard tab -->
<div class="data dashboard-data">
    <h5 class="black-clr fw-600 info">
        <?= $loggedHired['aboutme'] ?>
    </h5>
    <div class="row gx-5rem m-0">
        <div class="col-4">
            <div class="step">
                <div class="step-banner">
                    <span class="step-num">STEP 1</span>
                    <i class="fa fa-comments-o" aria-hidden="true"></i>
                </div>
                <h5 class="title">Discover Strengths</h5>
                <p class="step-info">
                    Provide us with a few details of yourself do a personality
                    assessment and upload your resume. We will reveal your
                    unique strengths.
                </p>
            </div>
        </div>
        <div class="col-4">
            <div class="step">
                <div class="step-banner">
                    <span class="step-num">STEP 2</span>
                    <i class="fa fa-tags" aria-hidden="true"></i>
                </div>
                <h5 class="title">Showcase Yourself</h5>
                <p class="step-info">
                    With our customised interview preparation module, you will
                    be able to produce a video pitch to showcase to prospective
                    employers.
                </p>
            </div>
        </div>
        <div class="col-4">
            <div class="step">
                <div class="step-banner">
                    <span class="step-num">STEP 3</span>
                    <i class="fa fa-users" aria-hidden="true"></i>
                </div>
                <h5 class="title">Contact Employers</h5>
                <p class="step-info">
                    Explore the current and suggested job vacancies and connect
                    seamlessly with employers via text, Voice and video calls.
                </p>
            </div>
        </div>
    </div>
    <div class="start-btn-container">
        <button class="btn karya-btn start-btn">
            <a href="<?= site_url() ?>hired/perAssessment" class="text-decoration-none">Start Now</a>
        </button>
    </div>
</div>
<!-- ends::dashboard tab -->
<?= $this->endSection() ?>