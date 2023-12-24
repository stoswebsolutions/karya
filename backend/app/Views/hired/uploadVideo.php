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
            <div class="interview-prep completed position-relative">
                <div class="progress-lines d-flex align-items-center">
                    <span class="hor-line"></span>
                    <span class="ver-line"></span>
                </div>
            </div>
            <div class="upload-vid completed position-relative">
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
    <!-- upload video pitch -->
    <div class="upload-video-pitch-section">
        <form class="" id="" action="<?= base_url('hired/uploadVideoSubmit') ?>" method="post" enctype="multipart/form-data">
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
                    <h6 class="mb-0 pri-clr video-pitch-hdr">
                        <p>
                            To better showcase your communication skills, you need to
                            make a
                            <span class="highlight">'30 Second Video Pitch'</span>
                            based on the personalised interview preparation.
                        </p>
                        <p class="mb-0">
                            This is your moment to shine and show what you're made of.
                            We know that you can do it! The key to success is
                            preparation, practice, and confidence. Upon uploading your
                            video pitch, you may "PUBLISH" your profile for all
                            employers and recruiters to view. We look forward to
                            seeing you land your dream job!
                        </p>
                    </h6>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="upload-btns">
                        <div class="video-btn mb-2 mb-sm-3">
                            <label class="custom-file-upload upload-video">
                                <input type="file" class="form-control" name="video-file-upload" id="video-file-upload" accept=".mp4">
                                <span class="btn profile-forms-btn">
                                    UPLOAD VIDEO PITCH
                                </span>
                            </label>
                            <input type="hidden" value="PROFILE_PIC" name="PROFILE_PIC">
                            <input type="hidden" value="from_profile" name="from_profile">
                            <input type="hidden" name="event_title" value="Video CV">
                        </div>
                        <button class="btn profile-forms-btn publish-btn">
                            PUBLISH COMPLETE PROFILE
                        </button>
                    </div>
                </div>
            </div>
            <div class="to-fro-btns">
                <a href="<?= site_url() ?>hired/interviewPrep" class="btn back-btn upload-video-back"> Go Back </a>
                <button class="btn next-btn upload-video-next" type="submit">Next</button>
            </div>
        </form>
    </div>
    <!-- ends::upload video pitch -->
</div>
<!-- ends::profile tab -->
<?= $this->endSection() ?>