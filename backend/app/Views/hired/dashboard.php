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
            <a href="<?= site_url() ?>hired/updatePerInfo" class="text-decoration-none">Start Now</a>
        </button>
    </div>
</div>
<!-- ends::dashboard tab -->
<script>
var chat_appid = '61199';
var chat_auth = '55cf44690498f8468be4323646ca974d';
</script>
<?php 
  if($loggedHired) { ?>
   <script>
    var chat_id = "<?= $loggedHired['email'] ?>";
    var chat_name = "<?= $loggedHired['first_name'] ?>"; 
    var chat_link = "https://pathfinder.la/jobs/hired/dashboard"; //Similarly populate it from session for user's profile link if exists
    var chat_avatar = "https://pathfinder.la/jobs/app-assets/images/logo_pathafinder.png"; //Similarly populate it from session for user's avatar src if exists
    </script>
  <?php } ?>
<script>
(function() {
    var chat_css = document.createElement('link'); 
    chat_css.rel = 'stylesheet'; 
    chat_css.type = 'text/css'; 
    chat_css.href = 'https://fast.cometondemand.net/'+chat_appid+'x_xchat.css';
    document.getElementsByTagName("head")[0].appendChild(chat_css);
    var chat_js = document.createElement('script'); 
    chat_js.type = 'text/javascript'; 
    chat_js.src = 'https://fast.cometondemand.net/'+chat_appid+'x_xchat.js'; 
    var chat_script = document.getElementsByTagName('script')[0]; 
    chat_script.parentNode.insertBefore(chat_js, chat_script);
})();
</script>
<?= $this->endSection() ?>