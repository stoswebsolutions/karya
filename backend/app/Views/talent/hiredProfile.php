<?= $this->extend("layouts/talent") ?>
<?= $this->section("body") ?>
<!-- <?= var_dump($usersRow); ?> -->
<?php
$email = $usersRow['email'];
$bgImage = $usersRow['bg_image'];
$image = site_url() . "assets/uploads/user_profile/$email/$bgImage";
$imgprofile = $usersRow['avatar'];
?>
<div class="conatiner">
    <a href="<?= site_url() ?>talent/myaccount" class="text-decoration-none">Back to my account</a>
    <div class="row gx-0">
        <div class="col-md-12">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="whyme-tab" data-bs-toggle="tab" data-bs-target="#whyme" type="button" role="tab" aria-controls="whyme" aria-selected="false">Why Me</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="portfolio-tab" data-bs-toggle="tab" data-bs-target="#portfolio" type="button" role="tab" aria-controls="portfolio" aria-selected="false">Portfolio</button>
                </li>
            </ul>
        </div>
    </div>
    <div class="row gx-0">
        <div class="col-md-12">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row">
                        <div class="col-md-4">
                            <?php
                            if ($imgprofile == 'default.png') {
                            ?>
                                <img src="<?= site_url() ?>assets/uploads/user_profile/default_user_icon.png" class="img-fluid" alt="Profile Image">
                            <?php
                            } else {
                            ?>
                                <img src="<?= site_url() ?>assets/uploads/user_profile/<?= $email ?>/<?= $imgprofile ?>" class="img-fluid" alt="Profile Image">
                            <?php
                            }
                            ?>
                        </div>
                        <div class="col-md-4">
                            <?php
                            if (!empty($usersRow['fullname'])) {
                            ?>
                                <p style="font-size:16px !important"><?= $usersRow['fullname']; ?>
                                <?php
                            }
                                ?>
                                <p>Rating Level <span style="color: #EC008C"><?= $match_rate ?>%</span></p>
                                <?php
                                if (!empty($usersRow['current_job'])) {
                                ?>
                                    <p style="font-size:11px !important">Currently <?= $usersRow['current_job']; ?>
                                    <?php
                                }
                                if (!empty($usersRow['work_type'])) {
                                    ?>
                                    <p style="font-size:11px !important">Looking for <?= $usersRow['work_type']; ?>
                                    <?php
                                }
                                    ?>
                        </div>
                        <div class="col-md-4">
                            <p style="font-size:11px !important">Address <span class="blur-content"><?= $usersRow['address_1']; ?>,<?= $usersRow['address_2']; ?>,<?= $usersRow['zipcode']; ?>,<?= $usersRow['city']; ?></span></p>
                            <p style="font-size:11px !important">State <?= $usersRow['state']; ?></p>
                            <p style="font-size:11px !important">Country Malaysia</p>
                            <p style="font-size:11px !important">Phone <span class="blur-content"><?= $usersRow['phone']; ?></span></p>
                            <p style="font-size:11px !important">Email <span class="blur-content"><?= $usersRow['email']; ?></span></p>
                        </div>
                    </div>
                    <img src="<?= $image ?>" class="img-fluid">
                </div>
                <div class="tab-pane fade" id="whyme" role="tabpanel" aria-labelledby="whyme-tab">
                    <div class="row">
                        <h1><?= $usersRow['about_me'] ?></h1>
                        <div class="col-md-12">
                            <h4 style="color:#F931A1">Why should I be hired?</h4>
                            <p><?= $usersRow['why_hire'] ?></p>
                        </div>
                        <div class="col-md-6">
                            <h4 style="color:#F931A1">Explain something complicated but you know well enough.</h4>
                            <p><?= $usersRow['complicated'] ?></p>
                        </div>
                        <div class="col-md-6">
                            <h4 style="color:#F931A1">What is the biggest decision you have made and why?</h4>
                            <p><?= $usersRow['decision'] ?></p>
                        </div>
                        <div class="col-md-12">
                            <h4 style="color:#F931A1">Describe your convictions, what you stand for, and how you plan to create a life that embodies your values</h4>
                            <p><?= $usersRow['profession'] ?></p>
                        </div>
                        <div class="col-md-6">
                            <h4 style="color:#F931A1">Where do you see yourself in 5 years?</h4>
                            <p><?= $usersRow['yourself_in5'] ?></p>
                        </div>
                        <div class="col-md-6">
                            <h4 style="color:#F931A1">If you had a lot of money, what would you be doing now?</h4>
                            <p><?= $usersRow['money_do'] ?></p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <img src="<?= $image ?>">
                </div>
                <div class="tab-pane fade" id="portfolio" role="tabpanel" aria-labelledby="portfolio-tab">
                    <div class="row">
                        <?php
                        foreach ($portfolios as $p1 => $prow) {
                            if ($prow['description'] != 'PDF Resume') {
                        ?>
                                <div class="col-6">
                                    <img src="<?= site_url() ?>assets/uploads/achievements/<?= $prow['image_path'] ?>" alt="image path not exist" class="w-100 h-100">
                                </div>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>