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
            <div class="personality-assessment completed position-relative">
                <div class="progress-lines d-flex align-items-center">
                    <span class="hor-line"></span>
                    <span class="ver-line"></span>
                </div>
            </div>
            <div class="personal-info completed position-relative">
                <div class="progress-lines d-flex align-items-center">
                    <span class="hor-line"></span>
                    <span class="ver-line"></span>
                </div>
            </div>
            <div class="upload-resume completed position-relative">
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
    <!-- resume -->
    <div class="upload-resume-form">
        <form class="bg-white" id="upload-resume-form" action="<?= base_url('hired/uploadResumeSubmit') ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="row">
                <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                <?php elseif (!empty(session()->getFlashdata('success'))) : ?>
                    <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
                <?php endif ?>
            </div>
            <div class="row gx-0">
                <div class="col-12 col-lg-6">
                    <h6 class="mb-0 pri-clr resume-hdr">
                        Thank you for taking the time to fill in your personal
                        information. We invite you to upload your resume and also
                        pictures of your work and achievements. This will allow us
                        to analyse your skills and qualifications more thoroughly,
                        and provide you with a selection of most suitable career
                        roles that suit your personality, strengths, skills and
                        experience.
                    </h6>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="upload-btns">
                        <div class="resume-btn mb-2 mb-sm-3">
                            <label class="custom-file-upload upload-resume">
                                <input type="file" class="form-control" name="resume" id="resume-file-upload" accept=".pdf">
                                <span class="btn profile-forms-btn">UPLOAD RESUME</span>
                            </label>
                        </div>
                        <div class="achievement-btn">
                            <label class="custom-file-upload upload-achievements">
                                <input type="file" class="form-control" multiple="multiple" name="achievements[]" id="achievements-file-upload" accept="image/*">
                                <span class="btn profile-forms-btn">UPLOAD ACHIEVEMENTS
                                </span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="to-fro-btns">
                <a href="<?= site_url() ?>hired/updatePerInfo" class="btn back-btn resume-back"> Go Back </a>
                <button class="btn next-btn resume-next" type="submit">Next</button>
            </div>
        </form>
    </div>
    <!-- ends::resume -->
</div>
<!-- ends::profile tab -->
<?= $this->endSection() ?>