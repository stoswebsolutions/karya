<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $pageTitle ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- font awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link rel="stylesheet" href="<?= site_url() ?>app-assets/hired/style.css">
    <link rel="stylesheet" href="<?= site_url() ?>app-assets/hired/questions.css">
    <link rel="stylesheet" href="<?= site_url() ?>app-assets/hired/progress.css">
</head>

<body>
    <div class="karya-container">
        <section class="karya-section get-hired-section">
            <nav class="w-100 d-flex align-items-center justify-content-between karya-px sec-bg">
                <img src="<?= site_url() ?>app-assets/images/logo_pathafinder.png" alt="logo" class="brand">
                <i class="fa fa-bars menu-icon" aria-hidden="true" data-bs-toggle="offcanvas" href="#offcanvasMenu" aria-controls="offcanvasMenu"></i>
            </nav>
            <div class="user-details sec-bg karya-px d-flex align-items-center justify-content-between">
                <div class="user-greet d-flex align-items-center">
                    <h1 class="mb-0 pri-clr fw-600 greeting">HELLO</h1>
                    <h2 class="mb-0 text-white fw-600 username">
                        <?= $loggedHired['fullname'] ?>
                    </h2>
                </div>
                <div class="status d-flex align-items-center">
                    <div class="switchToggle me-2">
                        <?php
                        if ($is_online == 1) {
                        ?>
                            <input type="checkbox" id="switch" value="off">
                        <?php
                        } else if ($is_online == 2) {
                        ?>
                            <input type="checkbox" id="switch" value="on" checked>
                        <?php
                        }
                        ?>
                        <label for="switch" onchange="">Toggle</label>
                    </div>
                    <span class="text-white status-txt fw-500">Online Status</span>
                </div>
            </div>
            <!-- offcanvas menu -->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasMenuLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
            </div>
            <!-- ends::offcanvas menu -->
            <div class="dashboard">
                <div class="menu">
                    <ul class="menu-items m-0 p-0">
                        <li class="text-uppercase menu-item dashboard-item forDashboard <?= $active == 'dashboard' ? 'active' : '' ?>" name="dashboard">
                            <a href="<?= site_url() ?>hired/dashboard" class="text-decoration-none">dashboard</a>
                        </li>
                        <li class="text-uppercase menu-item black-clr status <?= $active == 'status' ? 'active' : '' ?>" name="status">
                            <a href="<?= site_url() ?>hired/status" class="text-decoration-none"> status</a>
                        </li>
                        <li class="text-uppercase menu-item black-clr profile <?= $active == 'profile' ? 'active' : '' ?>" name="profile">
                            <!-- profile -->
                            <div class="dropend profile-dropdown">
                                <button class="btn btn-secondary dropdown-toggle text-uppercase profile-dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    profile
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <button class="dropdown-item" type="button">
                                            <a href="<?= site_url() ?>hired/updatePerInfo" class="text-decoration-none">Update Personal Information</a>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="dropdown-item" type="button">
                                            <a href="<?= site_url() ?>hired/uploadResume" class="text-decoration-none">Upload Resume</a>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="dropdown-item" type="button">
                                            <a href="<?= site_url() ?>hired/perAssessment" class="text-decoration-none">Personality Assessment</a>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="dropdown-item" type="button">
                                            <a href="<?= site_url() ?>hired/interviewPrep" class="text-decoration-none">Interview Preparation</a>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="dropdown-item" type="button">
                                            <a href="<?= site_url() ?>hired/uploadVideo" class="text-decoration-none">Upload Video</a>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="dropdown-item" type="button">
                                            <a href="<?= site_url() ?>hired/myProfile" class="text-decoration-none">My Profile</a>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="text-uppercase menu-item black-clr exploreJobs <?= $active == 'explore' ? 'active' : '' ?>" name="exploreJobs">
                            <a href="<?= site_url() ?>hired/explore" class="text-decoration-none">explore jobs</a>
                        </li>
                        <li class="text-uppercase menu-item black-clr exploreCompanies <?= $active == 'companies' ? 'active' : '' ?>" name="exploreCompanies">
                            <!-- explore companies -->
                            <div class="dropend exCom-dropdown">
                                <button class="btn btn-secondary dropdown-toggle text-uppercase exCom-dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    explore companies
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <button class="dropdown-item" type="button">
                                            <a href="<?= site_url() ?>hired/companies/9" class="text-decoration-none">Technology</a>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="dropdown-item" type="button">
                                            <a href="<?= site_url() ?>hired/companies/2" class="text-decoration-none">Manufacturing & Construction</a>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="dropdown-item" type="button">
                                            <a href="<?= site_url() ?>hired/companies/2" class="text-decoration-none">Healthcare</a>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="dropdown-item" type="button">
                                            <a href="<?= site_url() ?>hired/companies/2" class="text-decoration-none">Lifestyle & Services</a>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="dropdown-item" type="button">
                                            <a href="<?= site_url() ?>hired/companies/7" class="text-decoration-none">Business & Finance</a>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="text-uppercase menu-item black-clr myAccount <?= $active == 'myaccount' ? 'active' : '' ?>" name="myAccount">
                            <a href="<?= site_url() ?>hired/myaccount" class="text-decoration-none">my account</a>
                        </li>
                        <li class="text-uppercase menu-item black-clr logout" name="logout">
                            <a href="<?= site_url() ?>logout" class="text-decoration-none"> log out</a>
                        </li>
                    </ul>
                </div>
                <div class="select-menu">
                    <select class="form-select menu-item-select karya-select" name="menu1" id="menu1">
                        <option value="" selected disabled> --Select-- </option>
                        <option value="dashboard"> Dashboard</option>
                        <option value="status"> Status</option>
                        <option value="profile"> Profile</option>
                        <option value="explore"> Explore Jobs</option>
                        <option value="exploreCompanies"> Explore Companies</option>
                        <option value="myaccount"> My Account</option>
                        <option value="logout"> Log out</option>
                    </select>
                </div>
                <?= $this->renderSection("body") ?>
            </div>
        </section>
    </div>
</body>
<script src="<?= site_url() ?>app-assets/js/script.js"></script>
<script src="<?= site_url() ?>app-assets/hired/questions.js"></script>
<script src="<?= site_url() ?>app-assets/js/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $(document).on("change", "#menu1", function(e) {
            var data = $(this).val();
            if (data == "dashboard")
                location.replace("<?= site_url() ?>hired/dashboard");
            else if (data == "status")
                location.replace("<?= site_url() ?>hired/status");
            else if (data == "profile")
                location.replace("<?= site_url() ?>hired/updatePerInfo");
            else if (data == "explore")
                location.replace("<?= site_url() ?>hired/explore");
            else if (data == "exploreCompanies")
                location.replace("<?= site_url() ?>hired/companies/9");
            else if (data == "myaccount")
                location.replace("<?= site_url() ?>hired/myaccount");
            else if (data == "logout")
                location.replace("<?= site_url() ?>logout");
        });
        $(document).on("change", "#switch", function(e) {
            var data = $(this).val();
            var switched;
            if (data == "on") {
                switched = 1
            } else {
                switched = 2
            }
            location.replace("<?= site_url() ?>hired/switch/" + switched);
        });
    });
</script>

</html>