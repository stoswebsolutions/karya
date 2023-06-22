<!DOCTYPE html>
<html lang="en">

<head>
    <title>karya | get hired</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- font awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link rel="stylesheet" href="<?= site_url() ?>app-assets/hired/style.css">
</head>

<body>
    <div class="karya-container">
        <section class="karya-section get-hired-section">
            <nav class="w-100 d-flex align-items-center justify-content-between karya-px sec-bg">
                <img src="<?= site_url() ?>app-assets/images/logo_karya.png" alt="logo" class="brand">
                <ul class="m-0 p-0">
                    <li class="">
                        <a href="#"> Get Hired</a>
                    </li>
                    <li class="ms-4">
                        <a href=""> Get Talent</a>
                    </li>
                    <li class="ms-4">
                        <a href=""> Pricing Plans</a>
                    </li>
                    <li class="ms-4">
                        <a href=""> Log In</a>
                    </li>
                    <li class="ms-4">
                        <a href=""> Join</a>
                    </li>
                </ul>
                <i class="fa fa-bars menu-icon" aria-hidden="true" data-bs-toggle="offcanvas" href="#offcanvasMenu" aria-controls="offcanvasMenu"></i>
            </nav>
            <div class="user-details sec-bg karya-px d-flex align-items-center justify-content-between">
                <div class="user-greet d-flex align-items-center">
                    <h1 class="mb-0 pri-clr fw-600 greeting">HELLO</h1>
                    <h2 class="mb-0 text-white fw-600 username">
                        Azamin Iskandar Yeop Rashidi
                    </h2>
                </div>
                <div class="status d-flex align-items-center">
                    <div class="switchToggle me-2">
                        <input type="checkbox" id="switch">
                        <label for="switch">Toggle</label>
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
                <div class="offcanvas-body">
                    <ul class="m-0 p-0">
                        <li class="">
                            <a href="#"> Get Hired</a>
                        </li>
                        <li class="">
                            <a href=""> Get Talent</a>
                        </li>
                        <li class="">
                            <a href=""> Pricing Plans</a>
                        </li>
                        <li class="">
                            <a href=""> Log In</a>
                        </li>
                        <li class="">
                            <a href=""> Join</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- ends::offcanvas menu -->
            <div class="dashboard">
                <div class="menu">
                    <ul class="menu-items m-0 p-0">
                        <li class="text-uppercase menu-item dashboard-item forDashboard <?= $active == 'home' ? 'active' : '' ?>" name="dashboard">
                            <a href="home" class="text-decoration-none">dashboard</a>
                        </li>
                        <li class="text-uppercase menu-item black-clr status <?= $active == 'status' ? 'active' : '' ?>" name="status">
                            <a href="status" class="text-decoration-none"> status</a>
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
                                            <a href="profile" class="text-decoration-none">Update Personal Information</a>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="dropdown-item" type="button">
                                            Personality Assessment
                                        </button>
                                    </li>
                                    <li>
                                        <button class="dropdown-item" type="button">
                                            Upload Resume
                                        </button>
                                    </li>
                                    <li>
                                        <button class="dropdown-item" type="button">
                                            Interview Preparation
                                        </button>
                                    </li>
                                    <li>
                                        <button class="dropdown-item" type="button">
                                            Upload Video
                                        </button>
                                    </li>
                                    <li>
                                        <button class="dropdown-item" type="button">
                                            My Profile
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="text-uppercase menu-item black-clr exploreJobs <?= $active == 'explore' ? 'active' : '' ?>" name="exploreJobs">
                            <a href="explore" class="text-decoration-none">explore jobs</a>
                        </li>
                        <li class="text-uppercase menu-item black-clr exploreCompanies <?= $active == 'companies' ? 'active' : '' ?>" name="exploreCompanies">
                            <a href="companies" class="text-decoration-none">explore companies</a>
                        </li>
                        <li class="text-uppercase menu-item black-clr myAccount <?= $active == 'myaccount' ? 'active' : '' ?>" name="myAccount">
                            <!-- my account -->
                            <div class="dropend myAcc-dropdown">
                                <button class="btn btn-secondary dropdown-toggle text-uppercase myAcc-dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    my account
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <button class="dropdown-item" type="button">
                                            <a href="myaccount" class="text-decoration-none">Technology</a>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="dropdown-item" type="button">
                                            Manufacturing & Construction
                                        </button>
                                    </li>
                                    <li>
                                        <button class="dropdown-item" type="button">
                                            Healthcare
                                        </button>
                                    </li>
                                    <li>
                                        <button class="dropdown-item" type="button">
                                            Lifestyle & Services
                                        </button>
                                    </li>
                                    <li>
                                        <button class="dropdown-item" type="button">
                                            Business & Finance
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="text-uppercase menu-item black-clr logout" name="logout">
                            <a href="../logout" class="text-decoration-none"> log out</a>
                        </li>
                    </ul>
                </div>
                <div class="select-menu">
                    <select class="form-select menu-item-select karya-select">
                        <option selected value="dashboard">Dashboard</option>
                        <option value="status">Status</option>
                        <option value="profile">Profile</option>
                        <option value="exploreJobs">Explore Jobs</option>
                        <option value="exploreCompanies">Explore Companies</option>
                        <option value="myAccount">My Account</option>
                        <option value="logout">Log out</option>
                    </select>
                </div>
                <?= $this->renderSection("body") ?>
            </div>
        </section>
    </div>
</body>
<script src="<?= site_url() ?>app-assets/js/script.js"></script>

</html>