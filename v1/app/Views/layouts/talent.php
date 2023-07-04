<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $pageTitle ?></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- font awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" />
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link rel="stylesheet" href="<?= site_url() ?>app-assets/talent/style.css" />
</head>

<body>
    <div class="karya-container">
        <section class="karya-section get-talent-section">
            <nav class="w-100 d-flex align-items-center justify-content-between karya-px pri-bg">
                <img src="<?= site_url() ?>app-assets/images/logo_karya_light.png" alt="logo" class="brand" />
                <ul class="m-0 p-0">
                    <li class="">
                        <a href="#"> Get Hired </a>
                    </li>
                    <li class="ms-4">
                        <a href=""> Get Talent </a>
                    </li>
                    <li class="ms-4">
                        <a href=""> Pricing Plans </a>
                    </li>
                    <li class="ms-4">
                        <a href=""> Log In </a>
                    </li>
                    <li class="ms-4">
                        <a href=""> Join </a>
                    </li>
                </ul>
                <i class="fa fa-bars menu-icon" aria-hidden="true" data-bs-toggle="offcanvas" href="#offcanvasMenu" aria-controls="offcanvasMenu"></i>
            </nav>
            <div class="company-details pri-bg karya-px d-flex align-items-center justify-content-between">
                <div class="company-greet d-flex align-items-center">
                    <h1 class="mb-0 fw-600 greeting">WELCOME</h1>
                    <h2 class="mb-0 text-white fw-600 companyName">
                        Code Life Solutions Sdn Bhd
                    </h2>
                </div>
                <div class="status d-flex align-items-center">
                    <div class="switchToggle me-2">
                        <input type="checkbox" id="switch" />
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
                            <a href="#"> Get Hired </a>
                        </li>
                        <li class="">
                            <a href=""> Get Talent </a>
                        </li>
                        <li class="">
                            <a href=""> Pricing Plans </a>
                        </li>
                        <li class="">
                            <a href=""> Log In </a>
                        </li>
                        <li class="">
                            <a href=""> Join </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- ends::offcanvas menu -->
            <div class="dashboard">
                <div class="menu">
                    <ul class="menu-items m-0 p-0">
                        <li class="text-uppercase menu-item dashboard-item forDashboard <?= $active == 'dashboard' ? 'active' : '' ?>" name="dashboard">
                            <a href="dashboard" class="text-decoration-none">dashboard</a>
                        </li>
                        <li class="text-uppercase menu-item black-clr status <?= $active == 'status' ? 'active' : '' ?>" name="status">
                            <a href="status" class="text-decoration-none"> status</a>
                        </li>
                        <li class="text-uppercase menu-item black-clr cart-details <?= $active == 'cart' ? 'active' : '' ?>" name="cart-details">
                            <a href="cart" class="text-decoration-none">cart details</a>
                        </li>
                        <li class="text-uppercase menu-item black-clr profile <?= $active == 'profile' ? 'active' : '' ?>" name="profile">
                            <!-- profile -->
                            <div class="dropend profile-dropdown">
                                <button class="btn btn-secondary dropdown-toggle text-uppercase profile-dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <a href="profile" class="text-decoration-none">profile</a>
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <button class="dropdown-item" type="button">
                                            Update Corporate Information
                                        </button>
                                    </li>
                                    <li>
                                        <button class="dropdown-item" type="button">
                                            Upload Video and Gallery
                                        </button>
                                    </li>
                                    <li>
                                        <button class="dropdown-item" type="button">
                                            Employer Engagement Assessment
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
                        <li class="text-uppercase menu-item black-clr vacancies" name="vacancies">
                            vacancies
                        </li>
                        <li class="text-uppercase menu-item black-clr exploreTalents" name="exploreTalents">
                            explore talents
                        </li>
                        <li class="text-uppercase menu-item black-clr myAccount" name="myAccount">
                            my account
                        </li>
                        <li class="text-uppercase menu-item black-clr logout" name="logout">
                            <a href="../logout" class="text-decoration-none">log out</a>
                        </li>
                    </ul>
                </div>
                <div class="select-menu">
                    <select class="form-select menu-item-select karya-select">
                        <option selected value="dashboard">Dashboard</option>
                        <option value="status">Status</option>
                        <option value="cart-details">Cart Details</option>
                        <option value="profile">Profile</option>
                        <option value="vacancies">Vacancies</option>
                        <option value="exploreTalents">Explore Talents</option>
                        <option value="myAccount">My Account</option>
                        <option value="logout">Log out</option>
                    </select>
                </div>
                <?= $this->renderSection("body") ?>
            </div>
        </section>
    </div>
</body>
<script src="<?= site_url() ?>app-assets/js/script-getTalent.js"></script>

</html>