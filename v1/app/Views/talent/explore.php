<?= $this->extend("layouts/talent") ?>
<?= $this->section("body") ?>
<!-- explore talents tab -->
<div class="data explore-talents-data">
    <!-- explore talents content -->
    <div class="explore-talents-content d-none-mobile">
        <ul class="nav nav-pills profile-nav-pills mb-3 d-flex justify-content-center mb-4" id="explore-talents-tab" role="tablist">
            <li class="nav-item me-1" role="presentation">
                <button class="nav-link active text-uppercase w-100" id="suitable-talents-tab" data-bs-toggle="pill" data-bs-target="#suitable-talents" type="button" role="tab" aria-controls="suitable-talents" aria-selected="true">
                    suitable talents
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link text-uppercase w-100" id="applicants-tab" data-bs-toggle="pill" data-bs-target="#applicants" type="button" role="tab" aria-controls="applicants" aria-selected="false">
                    applicants
                </button>
            </li>
        </ul>
        <div class="tab-content" id="explore-talents-tabContent">
            <div class="tab-pane fade show active" id="suitable-talents" role="tabpanel" aria-labelledby="suitable-talents-tab" tabindex="0">
                <div class="filter">
                    <div class="vacant-role-container d-flex align-items-center justify-content-center">
                        <div class="dropdown roles-dropdown p-1 d-flex align-items-center">
                            <button class="btn get-talent-btn dropdown-toggle roles-dropdown-btn me-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Vacant Role
                            </button>
                            <span class="label">
                                Select a role based on the job posting
                            </span>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="#">Corporate Finance Advisor</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Equity Analyst</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Marketing Manager</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Events Coordinator</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Marketing Executive</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="talent-cards-container mt-2 pb-2">
                    <div class="row m-0 gx-4 gy-3">
                        <div class="col-12 col-md-6 col-xl-4">
                            <div class="talent-card p-2 d-flex flex-column justify-content-center align-items-center">
                                <img src="<?= site_url() ?>app-assets/images/sample-user-img.PNG" alt="profile pic" class="profile-img" />
                                <h6 class="username mt-2 d-flex flex-column align-items-center">
                                    <span class="first">ahba</span>
                                    <span class="last">seremban</span>
                                    <span class="percent">55%</span>
                                </h6>
                                <div class="action-btns mt-2">
                                    <button class="btn get-talent-btn snap-btn">
                                        Snapshot
                                    </button>
                                    <button class="btn get-talent-btn add-btn mx-1">
                                        Add Cart
                                    </button>
                                    <button class="btn get-talent-btn save-btn">
                                        Save for later
                                    </button>
                                </div>
                                <div class="offline-status mt-1">
                                    <button class="btn get-talent-btn offline-btn">
                                        Offline
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-xl-4">
                            <div class="talent-card p-2 d-flex flex-column justify-content-center align-items-center">
                                <img src="<?= site_url() ?>app-assets/images/sample-user-img.PNG" alt="profile pic" class="profile-img" />
                                <h6 class="username mt-2 d-flex flex-column align-items-center">
                                    <span class="first">ahba</span>
                                    <span class="last">seremban</span>
                                    <span class="percent">55%</span>
                                </h6>
                                <div class="action-btns mt-2">
                                    <button class="btn get-talent-btn snap-btn">
                                        Snapshot
                                    </button>
                                    <button class="btn get-talent-btn add-btn mx-1">
                                        Add Cart
                                    </button>
                                    <button class="btn get-talent-btn save-btn">
                                        Save for later
                                    </button>
                                </div>
                                <div class="offline-status mt-1">
                                    <button class="btn get-talent-btn offline-btn">
                                        Offline
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-xl-4">
                            <div class="talent-card p-2 d-flex flex-column justify-content-center align-items-center">
                                <img src="<?= site_url() ?>app-assets/images/sample-user-img.PNG" alt="profile pic" class="profile-img" />
                                <h6 class="username mt-2 d-flex flex-column align-items-center">
                                    <span class="first">ahba</span>
                                    <span class="last">seremban</span>
                                    <span class="percent">55%</span>
                                </h6>
                                <div class="action-btns mt-2">
                                    <button class="btn get-talent-btn snap-btn">
                                        Snapshot
                                    </button>
                                    <button class="btn get-talent-btn add-btn mx-1">
                                        Add Cart
                                    </button>
                                    <button class="btn get-talent-btn save-btn">
                                        Save for later
                                    </button>
                                </div>
                                <div class="offline-status mt-1">
                                    <button class="btn get-talent-btn offline-btn">
                                        Offline
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-xl-4">
                            <div class="talent-card p-2 d-flex flex-column justify-content-center align-items-center">
                                <img src="<?= site_url() ?>app-assets/images/sample-user-img.PNG" alt="profile pic" class="profile-img" />
                                <h6 class="username mt-2 d-flex flex-column align-items-center">
                                    <span class="first">ahba</span>
                                    <span class="last">seremban</span>
                                    <span class="percent">55%</span>
                                </h6>
                                <div class="action-btns mt-2">
                                    <button class="btn get-talent-btn snap-btn">
                                        Snapshot
                                    </button>
                                    <button class="btn get-talent-btn add-btn mx-1">
                                        Add Cart
                                    </button>
                                    <button class="btn get-talent-btn save-btn">
                                        Save for later
                                    </button>
                                </div>
                                <div class="offline-status mt-1">
                                    <button class="btn get-talent-btn offline-btn">
                                        Offline
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-xl-4">
                            <div class="talent-card p-2 d-flex flex-column justify-content-center align-items-center">
                                <img src="<?= site_url() ?>app-assets/images/sample-user-img.PNG" alt="profile pic" class="profile-img" />
                                <h6 class="username mt-2 d-flex flex-column align-items-center">
                                    <span class="first">ahba</span>
                                    <span class="last">seremban</span>
                                    <span class="percent">55%</span>
                                </h6>
                                <div class="action-btns mt-2">
                                    <button class="btn get-talent-btn snap-btn">
                                        Snapshot
                                    </button>
                                    <button class="btn get-talent-btn add-btn mx-1">
                                        Add Cart
                                    </button>
                                    <button class="btn get-talent-btn save-btn">
                                        Save for later
                                    </button>
                                </div>
                                <div class="offline-status mt-1">
                                    <button class="btn get-talent-btn offline-btn">
                                        Offline
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-xl-4">
                            <div class="talent-card p-2 d-flex flex-column justify-content-center align-items-center">
                                <img src="<?= site_url() ?>app-assets/images/sample-user-img.PNG" alt="profile pic" class="profile-img" />
                                <h6 class="username mt-2 d-flex flex-column align-items-center">
                                    <span class="first">ahba</span>
                                    <span class="last">seremban</span>
                                    <span class="percent">55%</span>
                                </h6>
                                <div class="action-btns mt-2">
                                    <button class="btn get-talent-btn snap-btn">
                                        Snapshot
                                    </button>
                                    <button class="btn get-talent-btn add-btn mx-1">
                                        Add Cart
                                    </button>
                                    <button class="btn get-talent-btn save-btn">
                                        Save for later
                                    </button>
                                </div>
                                <div class="offline-status mt-1">
                                    <button class="btn get-talent-btn offline-btn">
                                        Offline
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="applicants" role="tabpanel" aria-labelledby="applicants-tab" tabindex="0">
                <div class="filter">
                    <div class="vacant-role-container d-flex align-items-center justify-content-center">
                        <div class="dropdown roles-dropdown p-1 d-flex align-items-center">
                            <button class="btn get-talent-btn dropdown-toggle roles-dropdown-btn me-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Vacant Role
                            </button>
                            <span class="label">
                                Select a role based on the job posting
                            </span>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="#">Corporate Finance Advisor</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Equity Analyst</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Marketing Manager</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Events Coordinator</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Marketing Executive</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- talents cards -->
                <div class="talent-cards-container mt-2 pb-2">
                    <div class="row m-0 gx-4 gy-3">
                        <div class="col-12 col-md-6 col-xl-4">
                            <div class="talent-card p-2 d-flex flex-column justify-content-center align-items-center">
                                <img src="<?= site_url() ?>app-assets/images/sample-user-img.PNG" alt="profile pic" class="profile-img" />
                                <h6 class="username mt-2 d-flex flex-column align-items-center">
                                    <span class="first">ahba</span>
                                    <span class="last">seremban</span>
                                    <span class="percent">55%</span>
                                </h6>
                                <div class="action-btns mt-2">
                                    <button class="btn get-talent-btn snap-btn">
                                        Snapshot
                                    </button>
                                    <button class="btn get-talent-btn view-btn ms-1">
                                        View
                                    </button>
                                </div>
                                <div class="offline-status mt-1">
                                    <button class="btn get-talent-btn offline-btn">
                                        Offline
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-xl-4">
                            <div class="talent-card p-2 d-flex flex-column justify-content-center align-items-center">
                                <img src="<?= site_url() ?>app-assets/images/sample-user-img.PNG" alt="profile pic" class="profile-img" />
                                <h6 class="username mt-2 d-flex flex-column align-items-center">
                                    <span class="first">ahba</span>
                                    <span class="last">seremban</span>
                                    <span class="percent">55%</span>
                                </h6>
                                <div class="action-btns mt-2">
                                    <button class="btn get-talent-btn snap-btn">
                                        Snapshot
                                    </button>
                                    <button class="btn get-talent-btn view-btn ms-1">
                                        View
                                    </button>
                                </div>
                                <div class="offline-status mt-1">
                                    <button class="btn get-talent-btn offline-btn">
                                        Offline
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-xl-4">
                            <div class="talent-card p-2 d-flex flex-column justify-content-center align-items-center">
                                <img src="<?= site_url() ?>app-assets/images/sample-user-img.PNG" alt="profile pic" class="profile-img" />
                                <h6 class="username mt-2 d-flex flex-column align-items-center">
                                    <span class="first">ahba</span>
                                    <span class="last">seremban</span>
                                    <span class="percent">55%</span>
                                </h6>
                                <div class="action-btns mt-2">
                                    <button class="btn get-talent-btn snap-btn">
                                        Snapshot
                                    </button>
                                    <button class="btn get-talent-btn view-btn ms-1">
                                        view
                                    </button>
                                </div>
                                <div class="offline-status mt-1">
                                    <button class="btn get-talent-btn offline-btn">
                                        Offline
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-xl-4">
                            <div class="talent-card p-2 d-flex flex-column justify-content-center align-items-center">
                                <img src="<?= site_url() ?>app-assets/images/sample-user-img.PNG" alt="profile pic" class="profile-img" />
                                <h6 class="username mt-2 d-flex flex-column align-items-center">
                                    <span class="first">ahba</span>
                                    <span class="last">seremban</span>
                                    <span class="percent">55%</span>
                                </h6>
                                <div class="action-btns mt-2">
                                    <button class="btn get-talent-btn snap-btn">
                                        Snapshot
                                    </button>
                                    <button class="btn get-talent-btn view-btn ms-1">
                                        view
                                    </button>
                                </div>
                                <div class="offline-status mt-1">
                                    <button class="btn get-talent-btn offline-btn">
                                        Offline
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-xl-4">
                            <div class="talent-card p-2 d-flex flex-column justify-content-center align-items-center">
                                <img src="<?= site_url() ?>app-assets/images/sample-user-img.PNG" alt="profile pic" class="profile-img" />
                                <h6 class="username mt-2 d-flex flex-column align-items-center">
                                    <span class="first">ahba</span>
                                    <span class="last">seremban</span>
                                    <span class="percent">55%</span>
                                </h6>
                                <div class="action-btns mt-2">
                                    <button class="btn get-talent-btn snap-btn">
                                        Snapshot
                                    </button>
                                    <button class="btn get-talent-btn view-btn ms-1">
                                        view
                                    </button>
                                </div>
                                <div class="offline-status mt-1">
                                    <button class="btn get-talent-btn offline-btn">
                                        Offline
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-xl-4">
                            <div class="talent-card p-2 d-flex flex-column justify-content-center align-items-center">
                                <img src="<?= site_url() ?>app-assets/images/sample-user-img.PNG" alt="profile pic" class="profile-img" />
                                <h6 class="username mt-2 d-flex flex-column align-items-center">
                                    <span class="first">ahba</span>
                                    <span class="last">seremban</span>
                                    <span class="percent">55%</span>
                                </h6>
                                <div class="action-btns mt-2">
                                    <button class="btn get-talent-btn snap-btn">
                                        Snapshot
                                    </button>
                                    <button class="btn get-talent-btn view-btn ms-1">
                                        View
                                    </button>
                                </div>
                                <div class="offline-status mt-1">
                                    <button class="btn get-talent-btn offline-btn">
                                        Offline
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ends::talents cards -->

                <br />
                <!-- user stats -->
                <div class="user-stats">
                    <h6 class="snapshot-txt">(Snapshot)</h6>
                    <div class="ratings">
                        <div class="row m-0 gx-4">
                            <div class="col-3">
                                <div class="ratings-card">
                                    <h6 class="title">skills</h6>
                                    <div class="rating high">
                                        <span class="rate-block block1"></span>
                                        <span class="rate-block block2"></span>
                                        <span class="rate-block block3"></span>
                                        <span class="rate-block block4"></span>
                                    </div>
                                    <span class="percent"> 100% </span>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="ratings-card">
                                    <h6 class="title">experience</h6>
                                    <div class="rating medium">
                                        <span class="rate-block block1"></span>
                                        <span class="rate-block block2"></span>
                                        <span class="rate-block block3"></span>
                                        <span class="rate-block block4"></span>
                                    </div>
                                    <span class="percent"> 75% </span>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="ratings-card">
                                    <h6 class="title">qualification</h6>
                                    <div class="rating average">
                                        <span class="rate-block block1"></span>
                                        <span class="rate-block block2"></span>
                                        <span class="rate-block block3"></span>
                                        <span class="rate-block block4"></span>
                                    </div>
                                    <span class="percent"> 50% </span>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="ratings-card">
                                    <h6 class="title">personality</h6>
                                    <div class="rating low">
                                        <span class="rate-block block1"></span>
                                        <span class="rate-block block2"></span>
                                        <span class="rate-block block3"></span>
                                        <span class="rate-block block4"></span>
                                    </div>
                                    <span class="percent"> 25% </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="profile-and-graphs mt-3">
                        <div class="row m-0 gx-4">
                            <div class="col-12 col-xl-3">
                                <div class="user-image">
                                    <img src="<?= site_url() ?>app-assets/images/sample-user-img.PNG" alt="user img" />
                                    <span class="username">A.R</span>
                                </div>
                            </div>
                            <div class="col-12 col-xl-9">
                                <div class="graph-container">
                                    <div class="graph-card px-2">
                                        <!-- add graph here -->
                                        <img src="<?= site_url() ?>app-assets/images/intuition.PNG" alt="graph" />
                                        <!-- ends::add graph here -->
                                        <span class="title"> Intuition </span>
                                    </div>
                                    <div class="graph-card">
                                        <!-- add graph here -->
                                        <img src="<?= site_url() ?>app-assets/images/ambition.PNG" alt="graph" />
                                        <!-- ends::add graph here -->
                                        <span class="title"> Ambition </span>
                                    </div>
                                    <div class="graph-card">
                                        <!-- add graph here -->
                                        <img src="<?= site_url() ?>app-assets/images/persistence.PNG" alt="graph" />
                                        <!-- ends::add graph here -->
                                        <span class="title"> Persistence </span>
                                    </div>
                                    <div class="graph-card">
                                        <!-- add graph here -->
                                        <img src="<?= site_url() ?>app-assets/images/criticalThinking.PNG" alt="graph" />
                                        <!-- ends::add graph here -->
                                        <span class="title"> Critical Thinking </span>
                                    </div>
                                    <div class="graph-card">
                                        <!-- add graph here -->
                                        <img src="<?= site_url() ?>app-assets/images/growthMindset.PNG" alt="graph" />
                                        <!-- ends::add graph here -->
                                        <span class="title"> Growth Mindset </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="user-info mt-3">
                        <div class="row m-0 gx-4">
                            <div class="col-6 col-xl-3">
                                <div class="user-info-card">
                                    <ul class="mb-0 pb-0">
                                        <li>Available for work</li>
                                        <li>Top management level</li>
                                        <li>20 years of experience</li>
                                        <li>RM25,000/month</li>
                                        <li>Full time position</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-6 col-xl-6">
                                <div class="user-info-card">
                                    <ul class="mb-0 pb-0">
                                        <li>Imaginar Sdn Bhd - Chief Strategist</li>
                                        <li>Innovatis Sdn Bhd - Director/Co-Founder</li>
                                        <li>PCM Sdn Bhd - Director/Fund Manager</li>
                                        <li>
                                            TA Futures & Options Sdn Bhd - Futures Dealer
                                            Representative
                                        </li>
                                        <li>PFM Capital Sdn Bhd - Investment Analyst</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-xl-3">
                                <div class="graph-container ep-graph-container mt-2 mt-xl-0">
                                    <div class="graph-card ep-graph">
                                        <!-- add graph here -->
                                        <img src="<?= site_url() ?>app-assets/images/englishProficiency.PNG" alt="graph" />
                                        <!-- ends::add graph here -->
                                        <span class="title text-center">
                                            English Proficiency
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ends::user stats -->

                <br />
                <!-- talent profile card -->
                <div class="talent-profile-card-container">
                    <div class="talent-card p-4 d-flex flex-column justify-content-center align-items-center">
                        <img src="<?= site_url() ?>app-assets/images/sample-user-img.PNG" alt="profile pic" class="profile-img" />
                        <h6 class="username my-2 d-flex flex-column align-items-center">
                            <span class="first">ra</span>
                            <span class="last">shah alam</span>
                            <span class="percent">80%</span>
                        </h6>
                        <div class="action-btns mt-2">
                            <button class="btn get-talent-btn shortlist-talent-btn">
                                Shortlist Talent
                            </button>
                            <button class="btn get-talent-btn purchase-profile-btn ms-2">
                                purchase profile
                            </button>
                        </div>
                        <div class="online-status mt-2">
                            <button class="btn get-talent-btn online-btn">
                                online
                            </button>
                        </div>
                    </div>
                </div>
                <!-- ends::talent profile card -->

                <br />
                <!-- cart and payment -->
                <div class="table-container cart-table-container">
                    <table class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Full Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Profile Level</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Remove from Cart</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>MISSHIRLEY ANAK MANAN</td>
                                <td>misshirleyhailey@yahoo.com</td>
                                <td>Profile Lvl 1</td>
                                <td>20</td>
                                <td>
                                    <button class="btn karya-btn remove-cart-btn">
                                        Remove Cart
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>MISSHIRLEY ANAK MANAN</td>
                                <td>misshirleyhailey@yahoo.com</td>
                                <td>Profile Lvl 1</td>
                                <td>20</td>
                                <td>
                                    <button class="btn karya-btn remove-cart-btn">
                                        Remove Cart
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>MISSHIRLEY ANAK MANAN</td>
                                <td>misshirleyhailey@yahoo.com</td>
                                <td>Profile Lvl 1</td>
                                <td>20</td>
                                <td>
                                    <button class="btn karya-btn remove-cart-btn">
                                        Remove Cart
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4" class="ttl-amnt">
                                    <span class="amnt-txt"> Total Amount </span>
                                </td>
                                <td colspan="2" class="amnt">
                                    <span class="amnt-val"> 60 </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        <button class="btn karya-btn prcd-payment-btn">
                            proceed to payment
                        </button>
                    </div>
                </div>
                <!-- ends::cart and payment -->

                <br />
                <!-- selected profile card -->
                <div class="selected-profile-card-container">
                    <div class="talent-card p-4 d-flex flex-column justify-content-center align-items-center">
                        <img src="<?= site_url() ?>app-assets/images/sample-user-img.PNG" alt="profile pic" class="profile-img" />
                        <h6 class="username my-2 d-flex flex-column align-items-center">
                            <span class="first">ra</span>
                            <span class="last">shah alam</span>
                            <span class="percent">80%</span>
                        </h6>
                        <div class="action-btns mt-2">
                            <button class="btn get-talent-btn view-profile-btn">
                                view profile
                            </button>
                        </div>
                        <div class="online-status mt-2">
                            <button class="btn get-talent-btn online-btn">
                                online
                            </button>
                        </div>
                    </div>
                </div>
                <!-- ends::selected profile card -->
            </div>
        </div>
    </div>
    <div class="accordion profile-accordion explore-talents-accordion mobile-only" id="explore-talents-accordion">
        <div class="accordion-item">
            <h2 class="accordion-header" id="suitable-talents-hdr">
                <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#suitable-talents-collapse" aria-expanded="false" aria-controls="suitable-talents-collapse">
                    suitable talents
                </button>
            </h2>
            <div id="suitable-talents-collapse" class="accordion-collapse collapse" aria-labelledby="suitable-talents-hdr" data-bs-parent="#explore-talents-accordion">
                <div class="accordion-body p-2">
                    <div class="explore-talents-content">
                        <div class="filter">
                            <div class="vacant-role-container d-flex align-items-center justify-content-center">
                                <div class="dropdown roles-dropdown p-1 d-flex align-items-center">
                                    <button class="btn get-talent-btn dropdown-toggle roles-dropdown-btn mx-1" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Vacant Role
                                    </button>
                                    <span class="label mb-1">
                                        Select a role based on the job posting
                                    </span>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="#">Corporate Finance Advisor</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Equity Analyst</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Marketing Manager</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Events Coordinator</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Marketing Executive</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="talent-cards-container mt-0 pb-0">
                            <div class="row m-0 gx-2 gy-2">
                                <div class="col-12 col-md-6 col-xl-4">
                                    <div class="talent-card p-2 d-flex flex-column justify-content-center align-items-center">
                                        <img src="<?= site_url() ?>app-assets/images/sample-user-img.PNG" alt="profile pic" class="profile-img" />
                                        <h6 class="username mt-1 mb-0 d-flex flex-column align-items-center">
                                            <span class="first">ahba</span>
                                            <span class="last">seremban</span>
                                            <span class="percent">55%</span>
                                        </h6>
                                        <div class="action-btns mt-1">
                                            <button class="btn get-talent-btn snap-btn">
                                                Snapshot
                                            </button>
                                            <button class="btn get-talent-btn add-btn mx-1">
                                                Add Cart
                                            </button>
                                            <button class="btn get-talent-btn save-btn">
                                                Save for later
                                            </button>
                                        </div>
                                        <div class="offline-status mt-1">
                                            <button class="btn get-talent-btn offline-btn">
                                                Offline
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-xl-4">
                                    <div class="talent-card p-2 d-flex flex-column justify-content-center align-items-center">
                                        <img src="<?= site_url() ?>app-assets/images/sample-user-img.PNG" alt="profile pic" class="profile-img" />
                                        <h6 class="username mt-1 mb-0 d-flex flex-column align-items-center">
                                            <span class="first">ahba</span>
                                            <span class="last">seremban</span>
                                            <span class="percent">55%</span>
                                        </h6>
                                        <div class="action-btns mt-1">
                                            <button class="btn get-talent-btn snap-btn">
                                                Snapshot
                                            </button>
                                            <button class="btn get-talent-btn add-btn mx-1">
                                                Add Cart
                                            </button>
                                            <button class="btn get-talent-btn save-btn">
                                                Save for later
                                            </button>
                                        </div>
                                        <div class="offline-status mt-1">
                                            <button class="btn get-talent-btn offline-btn">
                                                Offline
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-xl-4">
                                    <div class="talent-card p-2 d-flex flex-column justify-content-center align-items-center">
                                        <img src="<?= site_url() ?>app-assets/images/sample-user-img.PNG" alt="profile pic" class="profile-img" />
                                        <h6 class="username mt-1 mb-0 d-flex flex-column align-items-center">
                                            <span class="first">ahba</span>
                                            <span class="last">seremban</span>
                                            <span class="percent">55%</span>
                                        </h6>
                                        <div class="action-btns mt-1">
                                            <button class="btn get-talent-btn snap-btn">
                                                Snapshot
                                            </button>
                                            <button class="btn get-talent-btn add-btn mx-1">
                                                Add Cart
                                            </button>
                                            <button class="btn get-talent-btn save-btn">
                                                Save for later
                                            </button>
                                        </div>
                                        <div class="offline-status mt-1">
                                            <button class="btn get-talent-btn offline-btn">
                                                Offline
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-xl-4">
                                    <div class="talent-card p-2 d-flex flex-column justify-content-center align-items-center">
                                        <img src="<?= site_url() ?>app-assets/images/sample-user-img.PNG" alt="profile pic" class="profile-img" />
                                        <h6 class="username mt-1 mb-0 d-flex flex-column align-items-center">
                                            <span class="first">ahba</span>
                                            <span class="last">seremban</span>
                                            <span class="percent">55%</span>
                                        </h6>
                                        <div class="action-btns mt-1">
                                            <button class="btn get-talent-btn snap-btn">
                                                Snapshot
                                            </button>
                                            <button class="btn get-talent-btn add-btn mx-1">
                                                Add Cart
                                            </button>
                                            <button class="btn get-talent-btn save-btn">
                                                Save for later
                                            </button>
                                        </div>
                                        <div class="offline-status mt-1">
                                            <button class="btn get-talent-btn offline-btn">
                                                Offline
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-xl-4">
                                    <div class="talent-card p-2 d-flex flex-column justify-content-center align-items-center">
                                        <img src="<?= site_url() ?>app-assets/images/sample-user-img.PNG" alt="profile pic" class="profile-img" />
                                        <h6 class="username mt-1 mb-0 d-flex flex-column align-items-center">
                                            <span class="first">ahba</span>
                                            <span class="last">seremban</span>
                                            <span class="percent">55%</span>
                                        </h6>
                                        <div class="action-btns mt-1">
                                            <button class="btn get-talent-btn snap-btn">
                                                Snapshot
                                            </button>
                                            <button class="btn get-talent-btn add-btn mx-1">
                                                Add Cart
                                            </button>
                                            <button class="btn get-talent-btn save-btn">
                                                Save for later
                                            </button>
                                        </div>
                                        <div class="offline-status mt-1">
                                            <button class="btn get-talent-btn offline-btn">
                                                Offline
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-xl-4">
                                    <div class="talent-card p-2 d-flex flex-column justify-content-center align-items-center">
                                        <img src="<?= site_url() ?>app-assets/images/sample-user-img.PNG" alt="profile pic" class="profile-img" />
                                        <h6 class="username mt-1 mb-0 d-flex flex-column align-items-center">
                                            <span class="first">ahba</span>
                                            <span class="last">seremban</span>
                                            <span class="percent">55%</span>
                                        </h6>
                                        <div class="action-btns mt-1">
                                            <button class="btn get-talent-btn snap-btn">
                                                Snapshot
                                            </button>
                                            <button class="btn get-talent-btn add-btn mx-1">
                                                Add Cart
                                            </button>
                                            <button class="btn get-talent-btn save-btn">
                                                Save for later
                                            </button>
                                        </div>
                                        <div class="offline-status mt-1">
                                            <button class="btn get-talent-btn offline-btn">
                                                Offline
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="applicants-hdr">
                <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#applicants-collapse" aria-expanded="false" aria-controls="applicants-collapse">
                    applicants
                </button>
            </h2>
            <div id="applicants-collapse" class="accordion-collapse collapse" aria-labelledby="applicants-hdr" data-bs-parent="#explore-talents-accordion">
                <div class="accordion-body p-2">
                    <div class="explore-talents-content">
                        <div class="filter">
                            <div class="vacant-role-container d-flex align-items-center justify-content-center">
                                <div class="dropdown roles-dropdown p-1 d-flex align-items-center">
                                    <button class="btn get-talent-btn dropdown-toggle roles-dropdown-btn mx-1" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Vacant Role
                                    </button>
                                    <span class="label mb-1">
                                        Select a role based on the job posting
                                    </span>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="#">Corporate Finance Advisor</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Equity Analyst</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Marketing Manager</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Events Coordinator</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Marketing Executive</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="talent-cards-container mt-0 pb-0">
                            <div class="row m-0 gx-2 gy-2">
                                <div class="col-12 col-md-6 col-xl-4">
                                    <div class="talent-card p-2 d-flex flex-column justify-content-center align-items-center">
                                        <img src="<?= site_url() ?>app-assets/images/sample-user-img.PNG" alt="profile pic" class="profile-img" />
                                        <h6 class="username mt-1 mb-0 d-flex flex-column align-items-center">
                                            <span class="first">ahba</span>
                                            <span class="last">seremban</span>
                                            <span class="percent">55%</span>
                                        </h6>
                                        <div class="action-btns mt-1">
                                            <button class="btn get-talent-btn snap-btn">
                                                Snapshot
                                            </button>
                                            <button class="btn get-talent-btn view-btn ms-1">
                                                view
                                            </button>
                                        </div>
                                        <div class="offline-status mt-1">
                                            <button class="btn get-talent-btn offline-btn">
                                                Offline
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-xl-4">
                                    <div class="talent-card p-2 d-flex flex-column justify-content-center align-items-center">
                                        <img src="<?= site_url() ?>app-assets/images/sample-user-img.PNG" alt="profile pic" class="profile-img" />
                                        <h6 class="username mt-1 mb-0 d-flex flex-column align-items-center">
                                            <span class="first">ahba</span>
                                            <span class="last">seremban</span>
                                            <span class="percent">55%</span>
                                        </h6>
                                        <div class="action-btns mt-1">
                                            <button class="btn get-talent-btn snap-btn">
                                                Snapshot
                                            </button>
                                            <button class="btn get-talent-btn view-btn ms-1">
                                                view
                                            </button>
                                        </div>
                                        <div class="offline-status mt-1">
                                            <button class="btn get-talent-btn offline-btn">
                                                Offline
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-xl-4">
                                    <div class="talent-card p-2 d-flex flex-column justify-content-center align-items-center">
                                        <img src="<?= site_url() ?>app-assets/images/sample-user-img.PNG" alt="profile pic" class="profile-img" />
                                        <h6 class="username mt-1 mb-0 d-flex flex-column align-items-center">
                                            <span class="first">ahba</span>
                                            <span class="last">seremban</span>
                                            <span class="percent">55%</span>
                                        </h6>
                                        <div class="action-btns mt-1">
                                            <button class="btn get-talent-btn snap-btn">
                                                Snapshot
                                            </button>
                                            <button class="btn get-talent-btn view-btn ms-1">
                                                view
                                            </button>
                                        </div>
                                        <div class="offline-status mt-1">
                                            <button class="btn get-talent-btn offline-btn">
                                                Offline
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-xl-4">
                                    <div class="talent-card p-2 d-flex flex-column justify-content-center align-items-center">
                                        <img src="<?= site_url() ?>app-assets/images/sample-user-img.PNG" alt="profile pic" class="profile-img" />
                                        <h6 class="username mt-1 mb-0 d-flex flex-column align-items-center">
                                            <span class="first">ahba</span>
                                            <span class="last">seremban</span>
                                            <span class="percent">55%</span>
                                        </h6>
                                        <div class="action-btns mt-1">
                                            <button class="btn get-talent-btn snap-btn">
                                                Snapshot
                                            </button>
                                            <button class="btn get-talent-btn view-btn ms-1">
                                                view
                                            </button>
                                        </div>
                                        <div class="offline-status mt-1">
                                            <button class="btn get-talent-btn offline-btn">
                                                Offline
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-xl-4">
                                    <div class="talent-card p-2 d-flex flex-column justify-content-center align-items-center">
                                        <img src="<?= site_url() ?>app-assets/images/sample-user-img.PNG" alt="profile pic" class="profile-img" />
                                        <h6 class="username mt-1 mb-0 d-flex flex-column align-items-center">
                                            <span class="first">ahba</span>
                                            <span class="last">seremban</span>
                                            <span class="percent">55%</span>
                                        </h6>
                                        <div class="action-btns mt-1">
                                            <button class="btn get-talent-btn snap-btn">
                                                Snapshot
                                            </button>
                                            <button class="btn get-talent-btn view-btn ms-1">
                                                view
                                            </button>
                                        </div>
                                        <div class="offline-status mt-1">
                                            <button class="btn get-talent-btn offline-btn">
                                                Offline
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-xl-4">
                                    <div class="talent-card p-2 d-flex flex-column justify-content-center align-items-center">
                                        <img src="<?= site_url() ?>app-assets/images/sample-user-img.PNG" alt="profile pic" class="profile-img" />
                                        <h6 class="username mt-1 mb-0 d-flex flex-column align-items-center">
                                            <span class="first">ahba</span>
                                            <span class="last">seremban</span>
                                            <span class="percent">55%</span>
                                        </h6>
                                        <div class="action-btns mt-1">
                                            <button class="btn get-talent-btn snap-btn">
                                                Snapshot
                                            </button>
                                            <button class="btn get-talent-btn view-btn ms-1">
                                                view
                                            </button>
                                        </div>
                                        <div class="offline-status mt-1">
                                            <button class="btn get-talent-btn offline-btn">
                                                Offline
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br />
                        <!-- user stats -->
                        <div class="user-stats">
                            <h6 class="snapshot-txt mb-0">(Snapshot)</h6>
                            <div class="ratings">
                                <div class="row m-0 g-2">
                                    <div class="col-6">
                                        <div class="ratings-card">
                                            <h6 class="title">skills</h6>
                                            <div class="rating high">
                                                <span class="rate-block block1"></span>
                                                <span class="rate-block block2"></span>
                                                <span class="rate-block block3"></span>
                                                <span class="rate-block block4"></span>
                                            </div>
                                            <span class="percent"> 100% </span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="ratings-card">
                                            <h6 class="title">experience</h6>
                                            <div class="rating medium">
                                                <span class="rate-block block1"></span>
                                                <span class="rate-block block2"></span>
                                                <span class="rate-block block3"></span>
                                                <span class="rate-block block4"></span>
                                            </div>
                                            <span class="percent"> 75% </span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="ratings-card">
                                            <h6 class="title">qualification</h6>
                                            <div class="rating average">
                                                <span class="rate-block block1"></span>
                                                <span class="rate-block block2"></span>
                                                <span class="rate-block block3"></span>
                                                <span class="rate-block block4"></span>
                                            </div>
                                            <span class="percent"> 50% </span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="ratings-card">
                                            <h6 class="title">personality</h6>
                                            <div class="rating low">
                                                <span class="rate-block block1"></span>
                                                <span class="rate-block block2"></span>
                                                <span class="rate-block block3"></span>
                                                <span class="rate-block block4"></span>
                                            </div>
                                            <span class="percent"> 25% </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="profile-and-graphs mt-2">
                                <div class="row m-0 gx-2">
                                    <div class="col-12">
                                        <div class="user-image">
                                            <img src="<?= site_url() ?>app-assets/images/sample-user-img.PNG" alt="user img" />
                                            <span class="username">A.R</span>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="graph-container">
                                            <div class="graph-card px-2">
                                                <!-- add graph here -->
                                                <img src="<?= site_url() ?>app-assets/images/intuition.PNG" alt="graph" />
                                                <!-- ends::add graph here -->
                                                <span class="title"> Intuition </span>
                                            </div>
                                            <div class="graph-card">
                                                <!-- add graph here -->
                                                <img src="<?= site_url() ?>app-assets/images/ambition.PNG" alt="graph" />
                                                <!-- ends::add graph here -->
                                                <span class="title"> Ambition </span>
                                            </div>
                                            <div class="graph-card">
                                                <!-- add graph here -->
                                                <img src="<?= site_url() ?>app-assets/images/persistence.PNG" alt="graph" />
                                                <!-- ends::add graph here -->
                                                <span class="title"> Persistence </span>
                                            </div>
                                            <div class="graph-card">
                                                <!-- add graph here -->
                                                <img src="<?= site_url() ?>app-assets/images/criticalThinking.PNG" alt="graph" />
                                                <!-- ends::add graph here -->
                                                <span class="title"> Critical Thinking </span>
                                            </div>
                                            <div class="graph-card">
                                                <!-- add graph here -->
                                                <img src="<?= site_url() ?>app-assets/images/growthMindset.PNG" alt="graph" />
                                                <!-- ends::add graph here -->
                                                <span class="title"> Growth Mindset </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="user-info">
                                <div class="row m-0 gx-2 gy-2">
                                    <div class="col-12">
                                        <div class="user-info-card">
                                            <ul class="mb-0 pb-0">
                                                <li>Available for work</li>
                                                <li>Top management level</li>
                                                <li>20 years of experience</li>
                                                <li>RM25,000/month</li>
                                                <li>Full time position</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="user-info-card">
                                            <ul class="mb-0 pb-0">
                                                <li>Imaginar Sdn Bhd - Chief Strategist</li>
                                                <li>
                                                    Innovatis Sdn Bhd - Director/Co-Founder
                                                </li>
                                                <li>PCM Sdn Bhd - Director/Fund Manager</li>
                                                <li>
                                                    TA Futures & Options Sdn Bhd - Futures
                                                    Dealer Representative
                                                </li>
                                                <li>
                                                    PFM Capital Sdn Bhd - Investment Analyst
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="graph-container ep-graph-container">
                                            <div class="graph-card ep-graph">
                                                <!-- add graph here -->
                                                <img src="<?= site_url() ?>app-assets/images/englishProficiency.PNG" alt="graph" />
                                                <!-- ends::add graph here -->
                                                <span class="title text-center">
                                                    English Proficiency
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ends::user stats -->

                        <br />
                        <!-- talent profile card -->
                        <div class="talent-profile-card-container">
                            <div class="talent-card p-3 d-flex flex-column justify-content-center align-items-center">
                                <img src="<?= site_url() ?>app-assets/images/sample-user-img.PNG" alt="profile pic" class="profile-img" />
                                <h6 class="username my-2 d-flex flex-column align-items-center">
                                    <span class="first">ra</span>
                                    <span class="last">shah alam</span>
                                    <span class="percent">80%</span>
                                </h6>
                                <div class="action-btns mt-2">
                                    <button class="btn get-talent-btn shortlist-talent-btn">
                                        Shortlist Talent
                                    </button>
                                    <button class="btn get-talent-btn purchase-profile-btn ms-1">
                                        purchase profile
                                    </button>
                                </div>
                                <div class="online-status mt-1">
                                    <button class="btn get-talent-btn online-btn">
                                        online
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- ends::talent profile card -->

                        <br />
                        <!-- cart and payment -->
                        <div class="table-container cart-table-container">
                            <table class="table table-striped table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Full Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Profile Level</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Remove from Cart</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>MISSHIRLEY ANAK MANAN</td>
                                        <td>misshirleyhailey@yahoo.com</td>
                                        <td>Profile Lvl 1</td>
                                        <td>20</td>
                                        <td>
                                            <button class="btn karya-btn remove-cart-btn">
                                                Remove Cart
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>MISSHIRLEY ANAK MANAN</td>
                                        <td>misshirleyhailey@yahoo.com</td>
                                        <td>Profile Lvl 1</td>
                                        <td>20</td>
                                        <td>
                                            <button class="btn karya-btn remove-cart-btn">
                                                Remove Cart
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>MISSHIRLEY ANAK MANAN</td>
                                        <td>misshirleyhailey@yahoo.com</td>
                                        <td>Profile Lvl 1</td>
                                        <td>20</td>
                                        <td>
                                            <button class="btn karya-btn remove-cart-btn">
                                                Remove Cart
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="ttl-amnt">
                                            <span class="amnt-txt"> Total Amount </span>
                                        </td>
                                        <td colspan="2" class="amnt">
                                            <span class="amnt-val"> 60 </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center">
                                <button class="btn karya-btn prcd-payment-btn">
                                    proceed to payment
                                </button>
                            </div>
                        </div>
                        <!-- ends::cart and payment -->

                        <br />
                        <!-- selected profile card -->
                        <div class="selected-profile-card-container">
                            <div class="talent-card px-5 py-3 d-flex flex-column justify-content-center align-items-center">
                                <img src="<?= site_url() ?>app-assets/images/sample-user-img.PNG" alt="profile pic" class="profile-img" />
                                <h6 class="username my-2 d-flex flex-column align-items-center">
                                    <span class="first">ra</span>
                                    <span class="last">shah alam</span>
                                    <span class="percent">80%</span>
                                </h6>
                                <div class="action-btns mt-2">
                                    <button class="btn get-talent-btn view-profile-btn">
                                        view profile
                                    </button>
                                </div>
                                <div class="online-status mt-1">
                                    <button class="btn get-talent-btn online-btn">
                                        online
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- ends::selected profile card -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ends::explore talents content -->

    <br />
    <!-- my profile content -->
    <div class="my-profile-content d-none-mobile">
        <ul class="nav nav-pills profile-nav-pills mb-3 d-flex justify-content-center mb-4" id="my-profile-tab" role="tablist">
            <li class="nav-item me-1" role="presentation">
                <button class="nav-link active text-uppercase w-100" id="my-resume-tab" data-bs-toggle="pill" data-bs-target="#my-resume" type="button" role="tab" aria-controls="my-resume" aria-selected="true">
                    resume
                </button>
            </li>
            <li class="nav-item me-1" role="presentation">
                <button class="nav-link text-uppercase w-100" id="profiling-tab" data-bs-toggle="pill" data-bs-target="#profiling" type="button" role="tab" aria-controls="profiling" aria-selected="false">
                    profiling
                </button>
            </li>
            <li class="nav-item me-1" role="presentation">
                <button class="nav-link text-uppercase w-100" id="video-pitch-tab" data-bs-toggle="pill" data-bs-target="#video-pitch" type="button" role="tab" aria-controls="video-pitch" aria-selected="false">
                    video pitch
                </button>
            </li>
            <li class="nav-item me-1" role="presentation">
                <button class="nav-link text-uppercase w-100" id="achievements-tab" data-bs-toggle="pill" data-bs-target="#achievements" type="button" role="tab" aria-controls="achievements" aria-selected="false">
                    achievements
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link text-uppercase w-100" id="potential-tab" data-bs-toggle="pill" data-bs-target="#potential" type="button" role="tab" aria-controls="potential" aria-selected="false">
                    Performance & potential
                </button>
            </li>
        </ul>
        <div class="tab-content" id="my-profile-tabContent">
            <div class="tab-pane fade show active" id="my-resume" role="tabpanel" aria-labelledby="my-resume-tab" tabindex="0">
                <div class="resume-container">
                    <!-- load resume here -->
                    <img src="<?= site_url() ?>app-assets/images/resume.PNG" alt="resume" class="w-100" />
                    <!-- ends::load resume here -->
                </div>
            </div>
            <div class="tab-pane fade profiling-tab-content" id="profiling" role="tabpanel" aria-labelledby="profiling-tab" tabindex="0">
                <div class="dominant-data">
                    <div class="row gx-0">
                        <div class="col-6">
                            <div class="content">
                                <h5 class="hdr mb-0 text-uppercase">
                                    primary character
                                </h5>
                                <h2 class="sub-hdr mb-3 text-uppercase">
                                    - dominant (d)
                                </h2>
                                <h6 class="sub-sub-hdr mb-3">
                                    Commanding & Task Oriented
                                </h6>
                                <dl class="row">
                                    <dt class="col-sm-5 col-md-4 col-lg-3 title">
                                        FOCUS
                                    </dt>
                                    <dd class="col-sm-7 col-md-8 col-lg-9">
                                        <p class="mb-0 txt">
                                            Take care of circumstances by persuading others
                                            to have a common vision.
                                        </p>
                                    </dd>

                                    <dt class="col-sm-5 col-md-4 col-lg-3 title">
                                        ACTIONS
                                    </dt>
                                    <dd class="col-sm-7 col-md-8 col-lg-9">
                                        <p class="mb-0 txt">
                                            Look at the bigger picture, assert for results,
                                            take risks and loves adventures.
                                        </p>
                                    </dd>

                                    <dt class="col-sm-5 col-md-4 col-lg-3 title">
                                        APPROACH
                                    </dt>
                                    <dd class="col-sm-7 col-md-8 col-lg-9">
                                        <p class="mb-0 txt">Am direct and blunt.</p>
                                    </dd>

                                    <dt class="col-sm-5 col-md-4 col-lg-3 title">
                                        TENDENCIES
                                    </dt>
                                    <dd class="col-sm-7 col-md-8 col-lg-9">
                                        <p class="mb-0 txt">
                                            Innovate, crave for results, creates commotion
                                            and loves challenges.
                                        </p>
                                    </dd>

                                    <dt class="col-sm-5 col-md-4 col-lg-3 title">
                                        RESPONSE
                                    </dt>
                                    <dd class="col-sm-7 col-md-8 col-lg-9">
                                        <p class="mb-0 txt">
                                            Give short answers and makes fast decisions.
                                        </p>
                                    </dd>

                                    <dt class="col-sm-5 col-md-4 col-lg-3 title">
                                        MOTIVATION
                                    </dt>
                                    <dd class="col-sm-7 col-md-8 col-lg-9">
                                        <p class="mb-0 txt">
                                            Thirive for authority, opportunity and prestige.
                                        </p>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="content content-right">
                                <h5 class="hdr mb-3 text-uppercase">
                                    a dominant person
                                </h5>
                                <p class="txt">
                                    Is not afraid to confront tough issues and
                                    situations and can make a decision when no one else
                                    wants to.
                                </p>
                                <p class="txt">
                                    Accept change as a personal challenge and keeps the
                                    team focused and on task.
                                </p>
                                <p class="txt">
                                    May come across as unapproachable and insensitive.
                                </p>
                                <p class="txt">
                                    Is objective driven and results oriented hence
                                    impatient with others and doesn't favour intricate
                                    details.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="competency-data">
                    <h1 class="hdr mt-4 mb-2">
                        COMPETENCY ASSESSMENT: Fund Manager
                    </h1>
                    <div class="content">
                        <div class="row gx-0">
                            <div class="col-6">
                                <div class="graph-data h-100 me-4">
                                    <h5 class="title">Competency Assessment</h5>
                                    <div class="graph">
                                        <!-- add graph here -->
                                        <img src="<?= site_url() ?>app-assets/images/competency-graph.PNG" alt="graph" class="w-100" />
                                        <!-- ends::add graph here -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="graph-data h-100 ms-4">
                                    <h5 class="title">RATING</h5>
                                    <div class="graph">
                                        <!-- add graph here -->
                                        <img src="<?= site_url() ?>app-assets/images/rating-graph.PNG" alt="graph" class="w-100" />
                                        <!-- ends::add graph here -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <ol class="list text-white fw-500">
                                    <li>
                                        <p class="ms-2">
                                            Have you successfully managed diversified
                                            investment portfolios across different asset
                                            classes, such as equities, fixed income, and
                                            alternative investments?
                                        </p>
                                    </li>
                                    <li>
                                        <p class="ms-2">
                                            Are you proficient in utilizing financial
                                            analysis techniques, such as ratio analysis,
                                            discounted cash flow (DCF) analysis, or relative
                                            valuation methods?
                                        </p>
                                    </li>
                                    <li>
                                        <p class="ms-2">
                                            Have you actively employed risk management
                                            strategies, such as setting stop-loss orders or
                                            implementing hedging techniques, to mitigate
                                            investment risks?
                                        </p>
                                    </li>
                                    <li>
                                        <p class="ms-2">
                                            Are you familiar with regulatory compliance
                                            requirements related to fund management, such as
                                            reporting obligations or investor disclosure
                                            obligations?
                                        </p>
                                    </li>
                                    <li>
                                        <p class="ms-2 mb-0">
                                            Have you actively monitored and evaluated
                                            performance metrics of investment portfolios
                                            such as Sharpe ratio, alpha, or tracking error?
                                        </p>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="video-pitch" role="tabpanel" aria-labelledby="video-pitch-tab" tabindex="0">
                <div class="video-container">
                    <video controls poster="<?= site_url() ?>app-assets/images/poster.jpg" class="w-100 hoverable">
                        <source src="<?= site_url() ?>app-assets/images/video.mp4" type="video/mp4" />
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
            <div class="tab-pane fade" id="achievements" role="tabpanel" aria-labelledby="achievements" tabindex="0">
                <div class="achievements-container bg-white px-2 pt-1 pb-3">
                    <div class="row g-2 m-0">
                        <div class="col-6">
                            <img src="<?= site_url() ?>app-assets/images/achievement-1.PNG" alt="achievement" class="w-100 h-100" />
                        </div>
                        <div class="col-6">
                            <img src="<?= site_url() ?>app-assets/images/achievement-2.PNG" alt="achievement" class="w-100 h-100" />
                        </div>
                        <div class="col-6">
                            <img src="<?= site_url() ?>app-assets/images/achievement-3.PNG" alt="achievement" class="w-100 h-100" />
                        </div>
                        <div class="col-6">
                            <img src="<?= site_url() ?>app-assets/images/achievement-4.PNG" alt="achievement" class="w-100 h-100" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="potential" role="tabpanel" aria-labelledby="potential" tabindex="0">
                <div class="potential-container">
                    <div class="text-content mb-5">
                        <h6 class="hdr mb-5">Performance</h6>
                        <p class="info mb-4">
                            <span class="title"> Strategic Expertise: </span>
                            <span class="txt">
                                With 25 years of experience in strategy, business
                                development, and sales, this jobseeker brings deep
                                expertise in developing and executing business
                                strategies. They can provide valuable insights and
                                guidance to clients in the banking industry, helping
                                them navigate challenges and identify growth
                                opportunities.
                            </span>
                        </p>
                        <p class="info mb-3">
                            <span class="title"> Strategic Expertise: </span>
                            <span class="txt">
                                With 25 years of experience in strategy, business
                                development, and sales, this jobseeker brings deep
                                expertise in developing and executing business
                                strategies. They can provide valuable insights and
                                guidance to clients in the banking industry, helping
                                them navigate challenges and identify growth
                                opportunities.
                            </span>
                        </p>
                        <p class="info mb-3">
                            <span class="title"> Strategic Expertise: </span>
                            <span class="txt">
                                With 25 years of experience in strategy, business
                                development, and sales, this jobseeker brings deep
                                expertise in developing and executing business
                                strategies. They can provide valuable insights and
                                guidance to clients in the banking industry, helping
                                them navigate challenges and identify growth
                                opportunities.
                            </span>
                        </p>
                        <p class="info mb-3">
                            <span class="title"> Strategic Expertise: </span>
                            <span class="txt">
                                With 25 years of experience in strategy, business
                                development, and sales, this jobseeker brings deep
                                expertise in developing and executing business
                                strategies. They can provide valuable insights and
                                guidance to clients in the banking industry, helping
                                them navigate challenges and identify growth
                                opportunities.
                            </span>
                        </p>
                    </div>
                    <div class="text-content">
                        <h6 class="hdr mb-5">Potential Roles</h6>
                        <p class="info mb-4">
                            <span class="title"> Strategic Expertise: </span>
                            <span class="txt">
                                With 25 years of experience in strategy, business
                                development, and sales, this jobseeker brings deep
                                expertise in developing and executing business
                                strategies. They can provide valuable insights and
                                guidance to clients in the banking industry, helping
                                them navigate challenges and identify growth
                                opportunities.
                            </span>
                        </p>
                        <p class="info mb-3">
                            <span class="title"> Strategic Expertise: </span>
                            <span class="txt">
                                With 25 years of experience in strategy, business
                                development, and sales, this jobseeker brings deep
                                expertise in developing and executing business
                                strategies. They can provide valuable insights and
                                guidance to clients in the banking industry, helping
                                them navigate challenges and identify growth
                                opportunities.
                            </span>
                        </p>
                        <p class="info mb-3">
                            <span class="title"> Strategic Expertise: </span>
                            <span class="txt">
                                With 25 years of experience in strategy, business
                                development, and sales, this jobseeker brings deep
                                expertise in developing and executing business
                                strategies. They can provide valuable insights and
                                guidance to clients in the banking industry, helping
                                them navigate challenges and identify growth
                                opportunities.
                            </span>
                        </p>
                        <p class="info mb-3">
                            <span class="title"> Strategic Expertise: </span>
                            <span class="txt">
                                With 25 years of experience in strategy, business
                                development, and sales, this jobseeker brings deep
                                expertise in developing and executing business
                                strategies. They can provide valuable insights and
                                guidance to clients in the banking industry, helping
                                them navigate challenges and identify growth
                                opportunities.
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="accordion profile-accordion my-profile-accordion mobile-only" id="my-profile-accordion">
        <div class="accordion-item">
            <h2 class="accordion-header" id="resume-hdr">
                <button class="accordion-button text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#resume-collapse" aria-expanded="true" aria-controls="resume-collapse">
                    resume
                </button>
            </h2>
            <div id="resume-collapse" class="accordion-collapse collapse show" aria-labelledby="resume-hdr" data-bs-parent="#my-profile-accordion">
                <div class="accordion-body p-0">
                    <!-- load resume here -->
                    <div class="resume-container">
                        <img src="<?= site_url() ?>app-assets/images/resume.PNG" alt="resume" class="w-100" />
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="profiling-hdr">
                <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#profiling-collapse" aria-expanded="false" aria-controls="profiling-collapse">
                    profiling
                </button>
            </h2>
            <div id="profiling-collapse" class="accordion-collapse collapse" aria-labelledby="profiling-hdr" data-bs-parent="#my-profile-accordion">
                <div class="accordion-body p-0">
                    <div class="dominant-data">
                        <div class="row gx-0">
                            <div class="col-12">
                                <div class="content">
                                    <h5 class="hdr mb-0 text-uppercase">
                                        primary character
                                    </h5>
                                    <h2 class="sub-hdr mb-3 text-uppercase">
                                        - dominant (d)
                                    </h2>
                                    <h6 class="sub-sub-hdr mb-3">
                                        Commanding & Task Oriented
                                    </h6>
                                    <dl class="row mb-0">
                                        <dt class="col-3 title">FOCUS</dt>
                                        <dd class="col-9">
                                            <p class="mb-0 txt">
                                                Take care of circumstances by persuading
                                                others to have a common vision.
                                            </p>
                                        </dd>

                                        <dt class="col-3 title">ACTIONS</dt>
                                        <dd class="col-9">
                                            <p class="mb-0 txt">
                                                Look at the bigger picture, assert for
                                                results, take risks and loves adventures.
                                            </p>
                                        </dd>

                                        <dt class="col-3 title">APPROACH</dt>
                                        <dd class="col-9">
                                            <p class="mb-0 txt">Am direct and blunt.</p>
                                        </dd>

                                        <dt class="col-3 title">TENDENCIES</dt>
                                        <dd class="col-9">
                                            <p class="mb-0 txt">
                                                Innovate, crave for results, creates commotion
                                                and loves challenges.
                                            </p>
                                        </dd>

                                        <dt class="col-3 title">RESPONSE</dt>
                                        <dd class="col-9">
                                            <p class="mb-0 txt">
                                                Give short answers and makes fast decisions.
                                            </p>
                                        </dd>

                                        <dt class="col-3 title">MOTIVATION</dt>
                                        <dd class="col-9">
                                            <p class="mb-0 txt">
                                                Thirive for authority, opportunity and
                                                prestige.
                                            </p>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="content content-right">
                                    <h5 class="hdr mb-3 text-uppercase">
                                        a dominant person
                                    </h5>
                                    <p class="txt">
                                        Is not afraid to confront tough issues and
                                        situations and can make a decision when no one
                                        else wants to.
                                    </p>
                                    <p class="txt">
                                        Accept change as a personal challenge and keeps
                                        the team focused and on task.
                                    </p>
                                    <p class="txt">
                                        May come across as unapproachable and insensitive.
                                    </p>
                                    <p class="txt mb-0">
                                        Is objective driven and results oriented hence
                                        impatient with others and doesn't favour intricate
                                        details.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="competency-data">
                        <h1 class="hdr mt-4 mb-2 mx-3">
                            COMPETENCY ASSESSMENT: Fund Manager
                        </h1>
                        <div class="content">
                            <div class="row gx-0">
                                <div class="col-6">
                                    <div class="graph-data h-100 me-4">
                                        <h5 class="title">Competency Assessment</h5>
                                        <div class="graph">
                                            <!-- add graph here -->
                                            <img src="<?= site_url() ?>app-assets/images/competency-graph.PNG" alt="graph" class="w-100" />
                                            <!-- ends::add graph here -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="graph-data h-100 ms-4">
                                        <h5 class="title">RATING</h5>
                                        <div class="graph">
                                            <!-- add graph here -->
                                            <img src="<?= site_url() ?>app-assets/images/rating-graph.PNG" alt="graph" class="w-100" />
                                            <!-- ends::add graph here -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <ol class="list text-white fw-500">
                                        <li>
                                            <p class="ms-2 mb-1">
                                                Have you successfully managed diversified
                                                investment portfolios across different asset
                                                classes, such as equities, fixed income, and
                                                alternative investments?
                                            </p>
                                        </li>
                                        <li>
                                            <p class="ms-2 mb-1">
                                                Are you proficient in utilizing financial
                                                analysis techniques, such as ratio analysis,
                                                discounted cash flow (DCF) analysis, or
                                                relative valuation methods?
                                            </p>
                                        </li>
                                        <li>
                                            <p class="ms-2 mb-1">
                                                Have you actively employed risk management
                                                strategies, such as setting stop-loss orders
                                                or implementing hedging techniques, to
                                                mitigate investment risks?
                                            </p>
                                        </li>
                                        <li>
                                            <p class="ms-2 mb-1">
                                                Are you familiar with regulatory compliance
                                                requirements related to fund management, such
                                                as reporting obligations or investor
                                                disclosure obligations?
                                            </p>
                                        </li>
                                        <li>
                                            <p class="ms-2 mb-0">
                                                Have you actively monitored and evaluated
                                                performance metrics of investment portfolios
                                                such as Sharpe ratio, alpha, or tracking
                                                error?
                                            </p>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="video-pitch-hdr">
                <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#video-pitch-collapse" aria-expanded="false" aria-controls="video-pitch-collapse">
                    video pitch
                </button>
            </h2>
            <div id="video-pitch-collapse" class="accordion-collapse collapse" aria-labelledby="video-pitch-hdr" data-bs-parent="#my-profile-accordion">
                <div class="accordion-body p-0">
                    <div class="video-container">
                        <video controls poster="<?= site_url() ?>app-assets/images/poster.jpg" class="w-100 hoverable">
                            <source src="<?= site_url() ?>app-assets/images/video.mp4" type="video/mp4" />
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="achievements-hdr">
                <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#achievements-collapse" aria-expanded="false" aria-controls="achievements-collapse">
                    achievements
                </button>
            </h2>
            <div id="achievements-collapse" class="accordion-collapse collapse" aria-labelledby="achievements-hdr" data-bs-parent="#my-profile-accordion">
                <div class="accordion-body p-0">
                    <div class="achievements-container bg-dark px-1 pb-2">
                        <div class="row g-2 m-0">
                            <div class="col-12">
                                <img src="<?= site_url() ?>app-assets/images/achievement-1.PNG" alt="achievement" class="w-100 h-100" />
                            </div>
                            <div class="col-12">
                                <img src="<?= site_url() ?>app-assets/images/achievement-2.PNG" alt="achievement" class="w-100 h-100" />
                            </div>
                            <div class="col-12">
                                <img src="<?= site_url() ?>app-assets/images/achievement-3.PNG" alt="achievement" class="w-100 h-100" />
                            </div>
                            <div class="col-12">
                                <img src="<?= site_url() ?>app-assets/images/achievement-4.PNG" alt="achievement" class="w-100 h-100" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="potential-hdr">
                <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#potential-collapse" aria-expanded="false" aria-controls="potential-collapse">
                    performance & potential
                </button>
            </h2>
            <div id="potential-collapse" class="accordion-collapse collapse" aria-labelledby="potential-hdr" data-bs-parent="#my-profile-accordion">
                <div class="accordion-body p-2">
                    <div class="potential-container">
                        <div class="text-content mb-4">
                            <h6 class="hdr mb-2">Performance</h6>
                            <p class="info mb-1">
                                <span class="title"> Strategic Expertise: </span>
                                <span class="txt">
                                    With 25 years of experience in strategy, business
                                    development, and sales, this jobseeker brings deep
                                    expertise in developing and executing business
                                    strategies. They can provide valuable insights and
                                    guidance to clients in the banking industry, helping
                                    them navigate challenges and identify growth
                                    opportunities.
                                </span>
                            </p>
                            <p class="info mb-3">
                                <span class="title"> Strategic Expertise: </span>
                                <span class="txt">
                                    With 25 years of experience in strategy, business
                                    development, and sales, this jobseeker brings deep
                                    expertise in developing and executing business
                                    strategies. They can provide valuable insights and
                                    guidance to clients in the banking industry, helping
                                    them navigate challenges and identify growth
                                    opportunities.
                                </span>
                            </p>
                            <p class="info mb-3">
                                <span class="title"> Strategic Expertise: </span>
                                <span class="txt">
                                    With 25 years of experience in strategy, business
                                    development, and sales, this jobseeker brings deep
                                    expertise in developing and executing business
                                    strategies. They can provide valuable insights and
                                    guidance to clients in the banking industry, helping
                                    them navigate challenges and identify growth
                                    opportunities.
                                </span>
                            </p>
                            <p class="info mb-3">
                                <span class="title"> Strategic Expertise: </span>
                                <span class="txt">
                                    With 25 years of experience in strategy, business
                                    development, and sales, this jobseeker brings deep
                                    expertise in developing and executing business
                                    strategies. They can provide valuable insights and
                                    guidance to clients in the banking industry, helping
                                    them navigate challenges and identify growth
                                    opportunities.
                                </span>
                            </p>
                        </div>
                        <div class="text-content">
                            <h6 class="hdr mb-2">Potential Roles</h6>
                            <p class="info mb-1">
                                <span class="title"> Strategic Expertise: </span>
                                <span class="txt">
                                    With 25 years of experience in strategy, business
                                    development, and sales, this jobseeker brings deep
                                    expertise in developing and executing business
                                    strategies. They can provide valuable insights and
                                    guidance to clients in the banking industry, helping
                                    them navigate challenges and identify growth
                                    opportunities.
                                </span>
                            </p>
                            <p class="info mb-3">
                                <span class="title"> Strategic Expertise: </span>
                                <span class="txt">
                                    With 25 years of experience in strategy, business
                                    development, and sales, this jobseeker brings deep
                                    expertise in developing and executing business
                                    strategies. They can provide valuable insights and
                                    guidance to clients in the banking industry, helping
                                    them navigate challenges and identify growth
                                    opportunities.
                                </span>
                            </p>
                            <p class="info mb-3">
                                <span class="title"> Strategic Expertise: </span>
                                <span class="txt">
                                    With 25 years of experience in strategy, business
                                    development, and sales, this jobseeker brings deep
                                    expertise in developing and executing business
                                    strategies. They can provide valuable insights and
                                    guidance to clients in the banking industry, helping
                                    them navigate challenges and identify growth
                                    opportunities.
                                </span>
                            </p>
                            <p class="info mb-3">
                                <span class="title"> Strategic Expertise: </span>
                                <span class="txt">
                                    With 25 years of experience in strategy, business
                                    development, and sales, this jobseeker brings deep
                                    expertise in developing and executing business
                                    strategies. They can provide valuable insights and
                                    guidance to clients in the banking industry, helping
                                    them navigate challenges and identify growth
                                    opportunities.
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ends:: my profile content -->
</div>
<!-- ends::explore talents tab -->
<?= $this->endSection() ?>