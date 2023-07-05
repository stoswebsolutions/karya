<?= $this->extend("layouts/company") ?>
<?= $this->section("body") ?>
<!-- my account tab -->
<div class="data my-account-data">
    <div class="my-account-content d-none-mobile">
        <ul class="nav nav-pills profile-nav-pills mb-3 d-flex justify-content-center mb-4" id="my-account-tab" role="tablist">
            <li class="nav-item me-1" role="presentation">
                <button class="nav-link active text-uppercase w-100" id="purchased-profiles-tab" data-bs-toggle="pill" data-bs-target="#purchased-profiles" type="button" role="tab" aria-controls="purchased-profiles" aria-selected="true">
                    purchased profiles
                </button>
            </li>
            <li class="nav-item me-1" role="presentation">
                <button class="nav-link text-uppercase w-100" id="shortlisted-profiles-tab" data-bs-toggle="pill" data-bs-target="#shortlisted-profiles" type="button" role="tab" aria-controls="shortlisted-profiles" aria-selected="false">
                    shortlisted profiles
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link text-uppercase w-100" id="transactions-tab" data-bs-toggle="pill" data-bs-target="#transactions" type="button" role="tab" aria-controls="transactions" aria-selected="false">
                    transactions
                </button>
            </li>
        </ul>
        <div class="tab-content" id="my-account-tabContent">
            <div class="tab-pane fade show active" id="purchased-profiles" role="tabpanel" aria-labelledby="purchased-profiles-tab" tabindex="0">
                <div class="table-container purchased-profiles-table-container">
                    <div class="filters">
                        <div class="num-of-records d-flex align-items-center">
                            <label for="select-records" class="form-label me-1">
                                Show
                            </label>
                            <select id="select-records" class="form-select">
                                <option selected value="10">10</option>
                                <option value="20">20</option>
                                <option value="30">30</option>
                            </select>
                        </div>
                        <div class="search d-flex align-items-center">
                            <label for="search-txt" class="form-label me-1">Search:</label>
                            <input type="text" class="form-control" id="search-txt" />
                        </div>
                    </div>
                    <table class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">User</th>
                                <th scope="col">Date</th>
                                <th scope="col">Status</th>
                                <th scope="col">View Profile</th>
                                <th scope="col">Video</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>syifasulaiman1691@gmail.com</td>
                                <td>2022-12-16 05:51:04</td>
                                <td>
                                    <select id="profile-status" class="form-select profile-status-slct py-1">
                                        <option selected disabled>--select--</option>
                                        <option value="s1">Status 1</option>
                                        <option value="s2">Status 2</option>
                                    </select>
                                </td>
                                <td>
                                    <button class="btn view-prfl-btn">
                                        view profile
                                    </button>
                                </td>
                                <td>
                                    <button class="btn vid-applicant-btn">
                                        video applicant
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>syifasulaiman1691@gmail.com</td>
                                <td>2022-12-16 05:51:04</td>
                                <td>
                                    <select id="profile-status" class="form-select profile-status-slct py-1">
                                        <option selected disabled>--select--</option>
                                        <option value="s1">Status 1</option>
                                        <option value="s2">Status 2</option>
                                    </select>
                                </td>
                                <td>
                                    <button class="btn view-prfl-btn">
                                        view profile
                                    </button>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>syifasulaiman1691@gmail.com</td>
                                <td>2022-12-16 05:51:04</td>
                                <td>
                                    <select id="profile-status" class="form-select profile-status-slct py-1">
                                        <option selected disabled>--select--</option>
                                        <option value="s1">Status 1</option>
                                        <option value="s2">Status 2</option>
                                    </select>
                                </td>
                                <td>
                                    <button class="btn view-prfl-btn">
                                        view profile
                                    </button>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>syifasulaiman1691@gmail.com</td>
                                <td>2022-12-16 05:51:04</td>
                                <td>
                                    <select id="profile-status" class="form-select profile-status-slct py-1">
                                        <option selected disabled>--select--</option>
                                        <option value="s1">Status 1</option>
                                        <option value="s2">Status 2</option>
                                    </select>
                                </td>
                                <td>
                                    <button class="btn view-prfl-btn">
                                        view profile
                                    </button>
                                </td>
                                <td>
                                    <button class="btn vid-applicant-btn">
                                        video applicant
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>syifasulaiman1691@gmail.com</td>
                                <td>2022-12-16 05:51:04</td>
                                <td>
                                    <select id="profile-status" class="form-select profile-status-slct py-1">
                                        <option selected disabled>--select--</option>
                                        <option value="s1">Status 1</option>
                                        <option value="s2">Status 2</option>
                                    </select>
                                </td>
                                <td>
                                    <button class="btn view-prfl-btn">
                                        view profile
                                    </button>
                                </td>
                                <td>
                                    <button class="btn vid-applicant-btn">
                                        video applicant
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>syifasulaiman1691@gmail.com</td>
                                <td>2022-12-16 05:51:04</td>
                                <td>
                                    <select id="profile-status" class="form-select profile-status-slct py-1">
                                        <option selected disabled>--select--</option>
                                        <option value="s1">Status 1</option>
                                        <option value="s2">Status 2</option>
                                    </select>
                                </td>
                                <td>
                                    <button class="btn view-prfl-btn">
                                        view profile
                                    </button>
                                </td>
                                <td>
                                    <button class="btn vid-applicant-btn">
                                        video applicant
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td>syifasulaiman1691@gmail.com</td>
                                <td>2022-12-16 05:51:04</td>
                                <td>
                                    <select id="profile-status" class="form-select profile-status-slct py-1">
                                        <option selected disabled>--select--</option>
                                        <option value="s1">Status 1</option>
                                        <option value="s2">Status 2</option>
                                    </select>
                                </td>
                                <td>
                                    <button class="btn view-prfl-btn">
                                        view profile
                                    </button>
                                </td>
                                <td>
                                    <button class="btn vid-applicant-btn">
                                        video applicant
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <td>syifasulaiman1691@gmail.com</td>
                                <td>2022-12-16 05:51:04</td>
                                <td>
                                    <select id="profile-status" class="form-select profile-status-slct py-1">
                                        <option selected disabled>--select--</option>
                                        <option value="s1">Status 1</option>
                                        <option value="s2">Status 2</option>
                                    </select>
                                </td>
                                <td>
                                    <button class="btn view-prfl-btn">
                                        view profile
                                    </button>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">9</th>
                                <td>syifasulaiman1691@gmail.com</td>
                                <td>2022-12-16 05:51:04</td>
                                <td>
                                    <select id="profile-status" class="form-select profile-status-slct py-1">
                                        <option selected disabled>--select--</option>
                                        <option value="s1">Status 1</option>
                                        <option value="s2">Status 2</option>
                                    </select>
                                </td>
                                <td>
                                    <button class="btn view-prfl-btn">
                                        view profile
                                    </button>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">10</th>
                                <td>syifasulaiman1691@gmail.com</td>
                                <td>2022-12-16 05:51:04</td>
                                <td>
                                    <select id="profile-status" class="form-select profile-status-slct py-1">
                                        <option selected disabled>--select--</option>
                                        <option value="s1">Status 1</option>
                                        <option value="s2">Status 2</option>
                                    </select>
                                </td>
                                <td>
                                    <button class="btn view-prfl-btn">
                                        view profile
                                    </button>
                                </td>
                                <td>
                                    <button class="btn vid-applicant-btn">
                                        video applicant
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="pagination-dets">
                        <p class="viewing-entries mb-0 ms-0 ms-lg-5 pe-2">
                            Showing <span class="top-record-num">1</span> to
                            <span class="bottom-record-num">10</span> of
                            <span class="total-records">23</span> entries
                        </p>
                        <nav aria-label="Page navigation">
                            <ul class="pagination flex-wrap">
                                <li class="page-item">
                                    <a class="page-link" href="#">Previous</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link active" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade shortlisted-profiles-tab-content" id="shortlisted-profiles" role="tabpanel" aria-labelledby="shortlisted-profiles-tab" tabindex="0">
                <div class="table-container shortlisted-profiles-table-container">
                    <div class="filters">
                        <div class="num-of-records d-flex align-items-center">
                            <label for="select-records" class="form-label me-1">
                                Show
                            </label>
                            <select id="select-records" class="form-select">
                                <option selected value="10">10</option>
                                <option value="20">20</option>
                                <option value="30">30</option>
                            </select>
                        </div>
                        <div class="search d-flex align-items-center">
                            <label for="search-txt" class="form-label me-1">Search:</label>
                            <input type="text" class="form-control" id="search-txt" />
                        </div>
                    </div>
                    <table class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">User</th>
                                <th scope="col">Date</th>
                                <th scope="col">View Profile</th>
                                <th scope="col">Buy</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>wxqinxw@gmail.com</td>
                                <td>2022-12-16 05:51:00</td>
                                <td>
                                    <button class="btn view-prfl-btn">
                                        view profile
                                    </button>
                                </td>
                                <td>
                                    <button class="btn remove-cart-btn">
                                        remove cart
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>wxqinxw@gmail.com</td>
                                <td>2022-12-16 05:51:00</td>
                                <td>
                                    <button class="btn view-prfl-btn">
                                        view profile
                                    </button>
                                </td>
                                <td>
                                    <button class="btn add-cart-btn">add cart</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>wxqinxw@gmail.com</td>
                                <td>2022-12-16 05:51:00</td>
                                <td>
                                    <button class="btn view-prfl-btn">
                                        view profile
                                    </button>
                                </td>
                                <td>
                                    <button class="btn add-cart-btn">add cart</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>wxqinxw@gmail.com</td>
                                <td>2022-12-16 05:51:00</td>
                                <td>
                                    <button class="btn view-prfl-btn">
                                        view profile
                                    </button>
                                </td>
                                <td>
                                    <button class="btn add-cart-btn">add cart</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>wxqinxw@gmail.com</td>
                                <td>2022-12-16 05:51:00</td>
                                <td>
                                    <button class="btn view-prfl-btn">
                                        view profile
                                    </button>
                                </td>
                                <td>
                                    <button class="btn add-cart-btn">add cart</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="pagination-dets">
                        <p class="viewing-entries mb-0 ms-0 ms-lg-5 pe-2">
                            Showing <span class="top-record-num">1</span> to
                            <span class="bottom-record-num">5</span> of
                            <span class="total-records">5</span> entries
                        </p>
                        <nav aria-label="Page navigation">
                            <ul class="pagination flex-wrap">
                                <li class="page-item">
                                    <a class="page-link" href="#">Previous</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link active" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="transactions" role="tabpanel" aria-labelledby="transactions-tab" tabindex="0">
                <div class="table-container transactions-table-container">
                    <div class="filters">
                        <div class="num-of-records d-flex align-items-center">
                            <label for="select-records" class="form-label me-1">
                                Show
                            </label>
                            <select id="select-records" class="form-select">
                                <option selected value="10">10</option>
                                <option value="20">20</option>
                                <option value="30">30</option>
                            </select>
                        </div>
                        <div class="search d-flex align-items-center">
                            <label for="search-txt" class="form-label me-1">Search:</label>
                            <input type="text" class="form-control" id="search-txt" />
                        </div>
                    </div>
                    <table class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Date</th>
                                <th scope="col">Transaction Type</th>
                                <th scope="col">Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="debited-row">
                                <th scope="row">1</th>
                                <td>50</td>
                                <td>2022-12-06 20:20:38</td>
                                <td>Debited</td>
                                <td>Purchased User Profile</td>
                            </tr>
                            <tr class="debited-row">
                                <th scope="row">2</th>
                                <td>50</td>
                                <td>2022-12-06 20:20:38</td>
                                <td>Debited</td>
                                <td>Purchased User Profile</td>
                            </tr>
                            <tr class="debited-row">
                                <th scope="row">3</th>
                                <td>50</td>
                                <td>2022-12-06 20:20:38</td>
                                <td>Debited</td>
                                <td>Purchased User Profile</td>
                            </tr>
                            <tr class="debited-row">
                                <th scope="row">4</th>
                                <td>50</td>
                                <td>2022-12-06 20:20:38</td>
                                <td>Debited</td>
                                <td>Purchased User Profile</td>
                            </tr>
                            <tr class="credited-row">
                                <th scope="row">5</th>
                                <td>150</td>
                                <td>2022-08-15 18:40:10</td>
                                <td>Credited</td>
                                <td>Added Money to Wallet</td>
                            </tr>
                            <tr class="credited-row">
                                <th scope="row">6</th>
                                <td>150</td>
                                <td>2022-08-15 18:40:10</td>
                                <td>Credited</td>
                                <td>Added Money to Wallet</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="pagination-dets">
                        <p class="viewing-entries mb-0 ms-0 ms-lg-5 pe-2">
                            Showing <span class="top-record-num">1</span> to
                            <span class="bottom-record-num">6</span> of
                            <span class="total-records">6</span> entries
                        </p>
                        <nav aria-label="Page navigation">
                            <ul class="pagination flex-wrap">
                                <li class="page-item">
                                    <a class="page-link" href="#">Previous</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link active" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="accordion profile-accordion my-account-accordion mobile-only" id="my-account-accordion">
        <div class="accordion-item">
            <h2 class="accordion-header" id="purchase-profiles-hdr">
                <button class="accordion-button text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#purchase-profiles-collapse" aria-expanded="true" aria-controls="purchase-profiles-collapse">
                    purchase profiles
                </button>
            </h2>
            <div id="purchase-profiles-collapse" class="accordion-collapse collapse show" aria-labelledby="purchase-profiles-hdr" data-bs-parent="#my-account-accordion">
                <div class="accordion-body p-0">
                    <div class="table-container purchased-profiles-table-container">
                        <div class="filters">
                            <div class="num-of-records d-flex align-items-center">
                                <label for="select-records" class="form-label me-1">
                                    Show
                                </label>
                                <select id="select-records" class="form-select">
                                    <option selected value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                </select>
                            </div>
                            <div class="search d-flex align-items-center">
                                <label for="search-txt" class="form-label me-1">Search:</label>
                                <input type="text" class="form-control" id="search-txt" />
                            </div>
                        </div>
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">User</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">View Profile</th>
                                    <th scope="col">Video</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>syifasulaiman1691@gmail.com</td>
                                    <td>2022-12-16 05:51:04</td>
                                    <td>
                                        <select id="profile-status" class="form-select profile-status-slct py-1">
                                            <option selected disabled>--select--</option>
                                            <option value="s1">Status 1</option>
                                            <option value="s2">Status 2</option>
                                        </select>
                                    </td>
                                    <td>
                                        <button class="btn view-prfl-btn">
                                            view profile
                                        </button>
                                    </td>
                                    <td>
                                        <button class="btn vid-applicant-btn">
                                            video applicant
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>syifasulaiman1691@gmail.com</td>
                                    <td>2022-12-16 05:51:04</td>
                                    <td>
                                        <select id="profile-status" class="form-select profile-status-slct py-1">
                                            <option selected disabled>--select--</option>
                                            <option value="s1">Status 1</option>
                                            <option value="s2">Status 2</option>
                                        </select>
                                    </td>
                                    <td>
                                        <button class="btn view-prfl-btn">
                                            view profile
                                        </button>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>syifasulaiman1691@gmail.com</td>
                                    <td>2022-12-16 05:51:04</td>
                                    <td>
                                        <select id="profile-status" class="form-select profile-status-slct py-1">
                                            <option selected disabled>--select--</option>
                                            <option value="s1">Status 1</option>
                                            <option value="s2">Status 2</option>
                                        </select>
                                    </td>
                                    <td>
                                        <button class="btn view-prfl-btn">
                                            view profile
                                        </button>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>syifasulaiman1691@gmail.com</td>
                                    <td>2022-12-16 05:51:04</td>
                                    <td>
                                        <select id="profile-status" class="form-select profile-status-slct py-1">
                                            <option selected disabled>--select--</option>
                                            <option value="s1">Status 1</option>
                                            <option value="s2">Status 2</option>
                                        </select>
                                    </td>
                                    <td>
                                        <button class="btn view-prfl-btn">
                                            view profile
                                        </button>
                                    </td>
                                    <td>
                                        <button class="btn vid-applicant-btn">
                                            video applicant
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>syifasulaiman1691@gmail.com</td>
                                    <td>2022-12-16 05:51:04</td>
                                    <td>
                                        <select id="profile-status" class="form-select profile-status-slct py-1">
                                            <option selected disabled>--select--</option>
                                            <option value="s1">Status 1</option>
                                            <option value="s2">Status 2</option>
                                        </select>
                                    </td>
                                    <td>
                                        <button class="btn view-prfl-btn">
                                            view profile
                                        </button>
                                    </td>
                                    <td>
                                        <button class="btn vid-applicant-btn">
                                            video applicant
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>syifasulaiman1691@gmail.com</td>
                                    <td>2022-12-16 05:51:04</td>
                                    <td>
                                        <select id="profile-status" class="form-select profile-status-slct py-1">
                                            <option selected disabled>--select--</option>
                                            <option value="s1">Status 1</option>
                                            <option value="s2">Status 2</option>
                                        </select>
                                    </td>
                                    <td>
                                        <button class="btn view-prfl-btn">
                                            view profile
                                        </button>
                                    </td>
                                    <td>
                                        <button class="btn vid-applicant-btn">
                                            video applicant
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>syifasulaiman1691@gmail.com</td>
                                    <td>2022-12-16 05:51:04</td>
                                    <td>
                                        <select id="profile-status" class="form-select profile-status-slct py-1">
                                            <option selected disabled>--select--</option>
                                            <option value="s1">Status 1</option>
                                            <option value="s2">Status 2</option>
                                        </select>
                                    </td>
                                    <td>
                                        <button class="btn view-prfl-btn">
                                            view profile
                                        </button>
                                    </td>
                                    <td>
                                        <button class="btn vid-applicant-btn">
                                            video applicant
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td>syifasulaiman1691@gmail.com</td>
                                    <td>2022-12-16 05:51:04</td>
                                    <td>
                                        <select id="profile-status" class="form-select profile-status-slct py-1">
                                            <option selected disabled>--select--</option>
                                            <option value="s1">Status 1</option>
                                            <option value="s2">Status 2</option>
                                        </select>
                                    </td>
                                    <td>
                                        <button class="btn view-prfl-btn">
                                            view profile
                                        </button>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">9</th>
                                    <td>syifasulaiman1691@gmail.com</td>
                                    <td>2022-12-16 05:51:04</td>
                                    <td>
                                        <select id="profile-status" class="form-select profile-status-slct py-1">
                                            <option selected disabled>--select--</option>
                                            <option value="s1">Status 1</option>
                                            <option value="s2">Status 2</option>
                                        </select>
                                    </td>
                                    <td>
                                        <button class="btn view-prfl-btn">
                                            view profile
                                        </button>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">10</th>
                                    <td>syifasulaiman1691@gmail.com</td>
                                    <td>2022-12-16 05:51:04</td>
                                    <td>
                                        <select id="profile-status" class="form-select profile-status-slct py-1">
                                            <option selected disabled>--select--</option>
                                            <option value="s1">Status 1</option>
                                            <option value="s2">Status 2</option>
                                        </select>
                                    </td>
                                    <td>
                                        <button class="btn view-prfl-btn">
                                            view profile
                                        </button>
                                    </td>
                                    <td>
                                        <button class="btn vid-applicant-btn">
                                            video applicant
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="pagination-dets">
                            <p class="viewing-entries mb-0 ms-0 ms-lg-5 pe-2">
                                Showing <span class="top-record-num">1</span> to
                                <span class="bottom-record-num">10</span> of
                                <span class="total-records">23</span> entries
                            </p>
                            <nav aria-label="Page navigation">
                                <ul class="pagination flex-wrap">
                                    <li class="page-item">
                                        <a class="page-link" href="#">Previous</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link active" href="#">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="shorlisted-profiles-hdr">
                <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#shorlisted-profiles-collapse" aria-expanded="false" aria-controls="shorlisted-profiles-collapse">
                    shorlisted profiles
                </button>
            </h2>
            <div id="shorlisted-profiles-collapse" class="accordion-collapse collapse" aria-labelledby="shorlisted-profiles-hdr" data-bs-parent="#my-account-accordion">
                <div class="accordion-body p-0">
                    <div class="table-container shortlisted-profiles-table-container">
                        <div class="filters">
                            <div class="num-of-records d-flex align-items-center">
                                <label for="select-records" class="form-label me-1">
                                    Show
                                </label>
                                <select id="select-records" class="form-select">
                                    <option selected value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                </select>
                            </div>
                            <div class="search d-flex align-items-center">
                                <label for="search-txt" class="form-label me-1">Search:</label>
                                <input type="text" class="form-control" id="search-txt" />
                            </div>
                        </div>
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">User</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">View Profile</th>
                                    <th scope="col">Buy</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>wxqinxw@gmail.com</td>
                                    <td>2022-12-16 05:51:00</td>
                                    <td>
                                        <button class="btn view-prfl-btn">
                                            view profile
                                        </button>
                                    </td>
                                    <td>
                                        <button class="btn remove-cart-btn">
                                            remove cart
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>wxqinxw@gmail.com</td>
                                    <td>2022-12-16 05:51:00</td>
                                    <td>
                                        <button class="btn view-prfl-btn">
                                            view profile
                                        </button>
                                    </td>
                                    <td>
                                        <button class="btn add-cart-btn">add cart</button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>wxqinxw@gmail.com</td>
                                    <td>2022-12-16 05:51:00</td>
                                    <td>
                                        <button class="btn view-prfl-btn">
                                            view profile
                                        </button>
                                    </td>
                                    <td>
                                        <button class="btn add-cart-btn">add cart</button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>wxqinxw@gmail.com</td>
                                    <td>2022-12-16 05:51:00</td>
                                    <td>
                                        <button class="btn view-prfl-btn">
                                            view profile
                                        </button>
                                    </td>
                                    <td>
                                        <button class="btn add-cart-btn">add cart</button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>wxqinxw@gmail.com</td>
                                    <td>2022-12-16 05:51:00</td>
                                    <td>
                                        <button class="btn view-prfl-btn">
                                            view profile
                                        </button>
                                    </td>
                                    <td>
                                        <button class="btn add-cart-btn">add cart</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="pagination-dets">
                            <p class="viewing-entries mb-0 ms-0 ms-lg-5 pe-2">
                                Showing <span class="top-record-num">1</span> to
                                <span class="bottom-record-num">5</span> of
                                <span class="total-records">5</span> entries
                            </p>
                            <nav aria-label="Page navigation">
                                <ul class="pagination flex-wrap">
                                    <li class="page-item">
                                        <a class="page-link" href="#">Previous</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link active" href="#">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="transactions-hdr">
                <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#transactions-collapse" aria-expanded="false" aria-controls="transactions-collapse">
                    transactions
                </button>
            </h2>
            <div id="transactions-collapse" class="accordion-collapse collapse" aria-labelledby="transactions-hdr" data-bs-parent="#my-account-accordion">
                <div class="accordion-body p-0">
                    <div class="table-container transactions-table-container">
                        <div class="filters">
                            <div class="num-of-records d-flex align-items-center">
                                <label for="select-records" class="form-label me-1">
                                    Show
                                </label>
                                <select id="select-records" class="form-select">
                                    <option selected value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                </select>
                            </div>
                            <div class="search d-flex align-items-center">
                                <label for="search-txt" class="form-label me-1">Search:</label>
                                <input type="text" class="form-control" id="search-txt" />
                            </div>
                        </div>
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Transaction Type</th>
                                    <th scope="col">Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="debited-row">
                                    <th scope="row">1</th>
                                    <td>50</td>
                                    <td>2022-12-06 20:20:38</td>
                                    <td>Debited</td>
                                    <td>Purchased User Profile</td>
                                </tr>
                                <tr class="debited-row">
                                    <th scope="row">2</th>
                                    <td>50</td>
                                    <td>2022-12-06 20:20:38</td>
                                    <td>Debited</td>
                                    <td>Purchased User Profile</td>
                                </tr>
                                <tr class="debited-row">
                                    <th scope="row">3</th>
                                    <td>50</td>
                                    <td>2022-12-06 20:20:38</td>
                                    <td>Debited</td>
                                    <td>Purchased User Profile</td>
                                </tr>
                                <tr class="debited-row">
                                    <th scope="row">4</th>
                                    <td>50</td>
                                    <td>2022-12-06 20:20:38</td>
                                    <td>Debited</td>
                                    <td>Purchased User Profile</td>
                                </tr>
                                <tr class="credited-row">
                                    <th scope="row">5</th>
                                    <td>150</td>
                                    <td>2022-08-15 18:40:10</td>
                                    <td>Credited</td>
                                    <td>Added Money to Wallet</td>
                                </tr>
                                <tr class="credited-row">
                                    <th scope="row">6</th>
                                    <td>150</td>
                                    <td>2022-08-15 18:40:10</td>
                                    <td>Credited</td>
                                    <td>Added Money to Wallet</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="pagination-dets">
                            <p class="viewing-entries mb-0 ms-0 ms-lg-5 pe-2">
                                Showing <span class="top-record-num">1</span> to
                                <span class="bottom-record-num">6</span> of
                                <span class="total-records">6</span> entries
                            </p>
                            <nav aria-label="Page navigation">
                                <ul class="pagination flex-wrap">
                                    <li class="page-item">
                                        <a class="page-link" href="#">Previous</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link active" href="#">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ends::my account tab -->
<?= $this->endSection() ?>