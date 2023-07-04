<?= $this->extend("layouts/talent") ?>
<?= $this->section("body") ?>
<!-- dashboard tab -->
<div class="data dashboard-data">
    <h5 class="black-clr fw-600 info">
        Welcome! We are thrilled that you have decided to take the first
        step towards finding the most suitable talent to fill up your
        vacancy. Karya is designed to connect you with the right talents
        with the strengths, skills and experience suited to fill your
        vacancy. To ensure that we can help you, we ask that you take a
        few moments to complete your profile and provide us with all the
        necessary information. This will enable us to accurately match you
        with potential talents that meet your preferences. So don't wait
        any longer, take the time to complete your profile today and get
        started on your journey to finding the best candidate to fill your
        vacancy. We're excited to help you find you!
    </h5>
    <div class="row gx-5rem m-0">
        <div class="col-4">
            <div class="step">
                <div class="step-banner">
                    <span class="step-num">STEP 1</span>
                    <i class="fa fa-comments-o" aria-hidden="true"></i>
                </div>
                <h5 class="title">Brand Your Company</h5>
                <p class="step-info">
                    Provide information about your company and complete the
                    value metrics assessment.
                </p>
            </div>
        </div>
        <div class="col-4">
            <div class="step">
                <div class="step-banner">
                    <span class="step-num">STEP 2</span>
                    <i class="fa fa-tags" aria-hidden="true"></i>
                </div>
                <h5 class="title">Post Jobs</h5>
                <p class="step-info">
                    Select the role you wish to fill and we will suggest you the
                    job descriptions and requirements for you.
                </p>
            </div>
        </div>
        <div class="col-4">
            <div class="step">
                <div class="step-banner">
                    <span class="step-num">STEP 3</span>
                    <i class="fa fa-users" aria-hidden="true"></i>
                </div>
                <h5 class="title">Explore Talents</h5>
                <p class="step-info">
                    Explore suitable talents and video pitch applicants and
                    connect with them via text, voice and video calls.
                </p>
            </div>
        </div>
    </div>
</div>
<!-- ends::dashboard tab -->
<?= $this->endSection() ?>