<?= $this->extend("layouts/talent") ?>
<?= $this->section("body") ?>
<!-- my account tab -->
<div class="data my-account-data">
    <div class="my-account d-none-mobile">
        <ul class="nav nav-pills profile-nav-pills mb-3 d-flex justify-content-center mb-4" id="my-account-tab" role="tablist">
            <li class="nav-item me-1" role="presentation">
                <button class="nav-link active text-uppercase w-100" id="profile-views-tab" data-bs-toggle="pill" data-bs-target="#profile-views" type="button" role="tab" aria-controls="profile-views" aria-selected="true">
                    profile views
                </button>
            </li>
            <li class="nav-item me-1" role="presentation">
                <button class="nav-link text-uppercase w-100" id="job-applications-tab" data-bs-toggle="pill" data-bs-target="#job-applications" type="button" role="tab" aria-controls="job-applications" aria-selected="false">
                    job applications
                </button>
            </li>
            <li class="nav-item me-1" role="presentation">
                <button class="nav-link text-uppercase w-100" id="profiles-sold-tab" data-bs-toggle="pill" data-bs-target="#profiles-sold" type="button" role="tab" aria-controls="profiles-sold" aria-selected="false">
                    profiles sold
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link text-uppercase w-100" id="share-profile-tab" data-bs-toggle="pill" data-bs-target="#share-profile" type="button" role="tab" aria-controls="share-profile" aria-selected="false">
                    share profile
                </button>
            </li>
        </ul>
        <div class="tab-content" id="my-account-tabContent">
            <div class="tab-pane fade show active" id="profile-views" role="tabpanel" aria-labelledby="profile-views-tab" tabindex="0">
                <div class="table-container">
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
                            <label for="search-txt" class="form-label me-1">Search:
                            </label>
                            <input type="text" class="form-control" id="search-txt">
                        </div>
                    </div>
                    <table class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Viewer</th>
                                <th scope="col">Total</th>
                                <th scope="col">Date</th>
                                <th scope="col">View Profile</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Public</td>
                                <td>2</td>
                                <td>01-Aug-2021</td>
                                <td>No detail available</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Public</td>
                                <td>6</td>
                                <td>01-Aug-2022</td>
                                <td>No detail available</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Public</td>
                                <td>6</td>
                                <td>01-Aug-2022</td>
                                <td>No detail available</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Public</td>
                                <td>6</td>
                                <td>01-Aug-2022</td>
                                <td>No detail available</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Public</td>
                                <td>6</td>
                                <td>01-Aug-2022</td>
                                <td>No detail available</td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>Public</td>
                                <td>6</td>
                                <td>01-Aug-2022</td>
                                <td>No detail available</td>
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td>Public</td>
                                <td>6</td>
                                <td>01-Aug-2022</td>
                                <td>No detail available</td>
                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <td>Public</td>
                                <td>6</td>
                                <td>01-Aug-2022</td>
                                <td>No detail available</td>
                            </tr>
                            <tr>
                                <th scope="row">9</th>
                                <td>Public</td>
                                <td>6</td>
                                <td>01-Aug-2022</td>
                                <td>No detail available</td>
                            </tr>
                            <tr>
                                <th scope="row">10</th>
                                <td>Public</td>
                                <td>6</td>
                                <td>01-Aug-2022</td>
                                <td>No detail available</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="pagination-dets">
                        <p class="viewing-entries mb-0 ms-0 ms-lg-5 pe-2">
                            Showing
                            <span class="top-record-num">1</span>
                            to
                            <span class="bottom-record-num">10</span>
                            of
                            <span class="total-records">445</span>
                            entries
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
                                    <a class="page-link" href="#">4</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">5</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">...</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">45</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade job-applications-tab-content" id="job-applications" role="tabpanel" aria-labelledby="job-applications-tab" tabindex="0">
                <div class="table-container">
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
                            <label for="search-txt" class="form-label me-1">Search:
                            </label>
                            <input type="text" class="form-control" id="search-txt">
                        </div>
                    </div>
                    <table class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Category</th>
                                <th scope="col">Role</th>
                                <th scope="col">Applied On</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Cyber Operator</td>
                                <td></td>
                                <td></td>
                                <td>2021-07-03 13:06:43</td>
                                <td>
                                    <span class="status">applied</span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Source Analyst</td>
                                <td></td>
                                <td>IT Analyst</td>
                                <td>2021-07-03 13:06:43</td>
                                <td>
                                    <span class="status">applied</span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Test Source Analyst</td>
                                <td></td>
                                <td>IT Analyst</td>
                                <td>2021-07-03 13:06:43</td>
                                <td>
                                    <span class="status">applied</span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Executive</td>
                                <td></td>
                                <td></td>
                                <td>2021-07-03 13:06:43</td>
                                <td>
                                    <span class="status">applied</span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Executive</td>
                                <td>Business, Sales & Marketing</td>
                                <td>Equity Analyst</td>
                                <td>2021-07-03 13:06:43</td>
                                <td>
                                    <span class="status">applied</span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>Executive</td>
                                <td>Administrative, Organisation & Logistics</td>
                                <td>Administration Management</td>
                                <td>2021-07-03 13:06:43</td>
                                <td>
                                    <span class="status">applied</span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td>Financial Analyst</td>
                                <td>Business, Sales & Marketing</td>
                                <td>Financial Analyst</td>
                                <td>2021-07-03 13:06:43</td>
                                <td>
                                    <span class="status">applied</span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <td>Corporate Finance Advisor</td>
                                <td>Business, Sales & Marketing</td>
                                <td>Corporate Finance Advisor</td>
                                <td>2021-07-03 13:06:43</td>
                                <td>
                                    <span class="status">applied</span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">9</th>
                                <td>Executive</td>
                                <td>Administrative, Organisation & Logistics</td>
                                <td>Office Administrative</td>
                                <td>2021-07-03 13:06:43</td>
                                <td>
                                    <span class="status">applied</span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">10</th>
                                <td>Fund Manager</td>
                                <td>Business, Sales & Marketing</td>
                                <td>Fund Manager</td>
                                <td>2021-07-03 13:06:43</td>
                                <td>
                                    <span class="status">applied</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="pagination-dets">
                        <p class="viewing-entries mb-0 ms-0 ms-lg-5 pe-2">
                            Showing
                            <span class="top-record-num">1</span>
                            to
                            <span class="bottom-record-num">10</span>
                            of
                            <span class="total-records">17</span>
                            entries
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
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="profiles-sold" role="tabpanel" aria-labelledby="profiles-sold-tab" tabindex="0">
                <div class="table-container">
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
                            <label for="search-txt" class="form-label me-1">Search:
                            </label>
                            <input type="text" class="form-control" id="search-txt">
                        </div>
                    </div>
                    <table class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Company Name</th>
                                <th scope="col">Date</th>
                                <th scope="col">Price</th>
                                <th scope="col">Fee Paid</th>
                                <th scope="col">Net Earning</th>
                                <th scope="col">Status</th>
                                <th scope="col">View Profile</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Code Life Solution</td>
                                <td>2020-03-12 11:35:56</td>
                                <td>RM20</td>
                                <td>RM10</td>
                                <td>RM10</td>
                                <td>Processing</td>
                                <td>
                                    <span class="view-profile">view profile</span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Code Life Solution</td>
                                <td>2020-03-12 11:35:56</td>
                                <td>RM100</td>
                                <td>RM10</td>
                                <td>RM90</td>
                                <td>Processing</td>
                                <td>
                                    <span class="view-profile">view profile</span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Code Life Solution</td>
                                <td>2020-03-12 11:35:56</td>
                                <td>RM100</td>
                                <td>RM10</td>
                                <td>RM90</td>
                                <td>Processing</td>
                                <td>
                                    <span class="view-profile">view profile</span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Code Life Solution</td>
                                <td>2020-03-12 11:35:56</td>
                                <td>RM100</td>
                                <td>RM10</td>
                                <td>RM90</td>
                                <td>Processing</td>
                                <td>
                                    <span class="view-profile">view profile</span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Code Life Solution</td>
                                <td>2020-03-12 11:35:56</td>
                                <td>RM100</td>
                                <td>RM10</td>
                                <td>RM90</td>
                                <td>Processing</td>
                                <td>
                                    <span class="view-profile">view profile</span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>Code Life Solution</td>
                                <td>2020-03-12 11:35:56</td>
                                <td>RM100</td>
                                <td>RM10</td>
                                <td>RM90</td>
                                <td>Processing</td>
                                <td>
                                    <span class="view-profile">view profile</span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td>Imaginar</td>
                                <td>2020-03-12 11:35:56</td>
                                <td>RM100</td>
                                <td>RM10</td>
                                <td>RM90</td>
                                <td>Processing</td>
                                <td>
                                    <span class="view-profile">view profile</span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <td>Code Life Solution</td>
                                <td>2020-03-12 11:35:56</td>
                                <td>RM100</td>
                                <td>RM10</td>
                                <td>RM90</td>
                                <td>Processing</td>
                                <td>
                                    <span class="view-profile">view profile</span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">9</th>
                                <td>Code Life Solution</td>
                                <td>2020-03-12 11:35:56</td>
                                <td>RM100</td>
                                <td>RM10</td>
                                <td>RM90</td>
                                <td>Processing</td>
                                <td>
                                    <span class="view-profile">view profile</span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">10</th>
                                <td>Code Life Solution</td>
                                <td>2020-03-12 11:35:56</td>
                                <td>RM100</td>
                                <td>RM10</td>
                                <td>RM90</td>
                                <td>Processing</td>
                                <td>
                                    <span class="view-profile">view profile</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="pagination-dets">
                        <p class="viewing-entries mb-0 ms-0 ms-lg-5 pe-2">
                            Showing
                            <span class="top-record-num">1</span>
                            to
                            <span class="bottom-record-num">10</span>
                            of
                            <span class="total-records">31</span>
                            entries
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
                                    <a class="page-link" href="#">4</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="share-profile" role="tabpanel" aria-labelledby="share-profile" tabindex="0">
                <h1 class="share-profile-hdr">
                    Share your profile anytime, anywhere!
                </h1>
                <div class="input-group mb-2 share-profile-srch">
                    <span class="input-group-text bg-white" id="">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </span>
                    <input type="text" class="form-control">
                </div>
                <div class="social-accounts">
                    <div class="row m-0 gy-2">
                        <div class="col-sm-4 col-lg-3">
                            <div class="account">
                                <span class="icon me-1">
                                    <i class="fa fa-facebook-square" aria-hidden="true"></i>
                                </span>
                                <span class="type"> Facebook</span>
                            </div>
                        </div>
                        <div class="col-sm-4 col-lg-3">
                            <div class="account">
                                <span class="icon me-1">
                                    <i class="fa fa-twitter-square" aria-hidden="true"></i>
                                </span>
                                <span class="type"> Twitter</span>
                            </div>
                        </div>
                        <div class="col-sm-4 col-lg-3">
                            <div class="account">
                                <span class="icon me-1">
                                    <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                                </span>
                                <span class="type"> LinkedIn</span>
                            </div>
                        </div>
                        <div class="col-sm-4 col-lg-3">
                            <div class="account">
                                <span class="icon me-1">
                                    <i class="fa fa-tumblr-square" aria-hidden="true"></i>
                                </span>
                                <span class="type"> Tumblr</span>
                            </div>
                        </div>
                        <div class="col-sm-4 col-lg-3">
                            <div class="account">
                                <span class="icon me-1">
                                    <i class="fa fa-pinterest-square" aria-hidden="true"></i>
                                </span>
                                <span class="type"> Pinterest</span>
                            </div>
                        </div>
                    </div>
                    <div class="add-more d-flex align-items-center justify-content-center mt-3">
                        <div class="add-icon d-flex align-items-center justify-content-center">
                            <span class="icon me-1">
                                <i class="fa fa-plus-square" aria-hidden="true"></i>
                            </span>
                            <span class="addTxt">AddToAny</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="accordion profile-accordion my-account-accordion mobile-only" id="my-account-accordion">
        <div class="accordion-item">
            <h2 class="accordion-header" id="profile-views-hdr">
                <button class="accordion-button text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#profile-views-collapse" aria-expanded="true" aria-controls="profile-views-collapse">
                    profile views
                </button>
            </h2>
            <div id="profile-views-collapse" class="accordion-collapse collapse show" aria-labelledby="profile-views-hdr" data-bs-parent="#my-account-accordion">
                <div class="accordion-body p-0">
                    <div class="table-container">
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
                                <label for="search-txt" class="form-label me-1">Search:
                                </label>
                                <input type="text" class="form-control" id="search-txt">
                            </div>
                        </div>
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Viewer</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">View Profile</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Public</td>
                                    <td>2</td>
                                    <td>01-Aug-2021</td>
                                    <td>No detail available</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Public</td>
                                    <td>6</td>
                                    <td>01-Aug-2022</td>
                                    <td>No detail available</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Public</td>
                                    <td>6</td>
                                    <td>01-Aug-2022</td>
                                    <td>No detail available</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Public</td>
                                    <td>6</td>
                                    <td>01-Aug-2022</td>
                                    <td>No detail available</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Public</td>
                                    <td>6</td>
                                    <td>01-Aug-2022</td>
                                    <td>No detail available</td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>Public</td>
                                    <td>6</td>
                                    <td>01-Aug-2022</td>
                                    <td>No detail available</td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>Public</td>
                                    <td>6</td>
                                    <td>01-Aug-2022</td>
                                    <td>No detail available</td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td>Public</td>
                                    <td>6</td>
                                    <td>01-Aug-2022</td>
                                    <td>No detail available</td>
                                </tr>
                                <tr>
                                    <th scope="row">9</th>
                                    <td>Public</td>
                                    <td>6</td>
                                    <td>01-Aug-2022</td>
                                    <td>No detail available</td>
                                </tr>
                                <tr>
                                    <th scope="row">10</th>
                                    <td>Public</td>
                                    <td>6</td>
                                    <td>01-Aug-2022</td>
                                    <td>No detail available</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="pagination-dets">
                            <p class="viewing-entries mb-0 ms-0 ms-lg-5 pe-2">
                                Showing
                                <span class="top-record-num">1</span>
                                to
                                <span class="bottom-record-num">10</span>
                                of
                                <span class="total-records">445</span>
                                entries
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
                                        <a class="page-link" href="#">4</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">5</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">...</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">45</a>
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
            <h2 class="accordion-header" id="job-applications-hdr">
                <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#job-applications-collapse" aria-expanded="false" aria-controls="job-applications-collapse">
                    job applications
                </button>
            </h2>
            <div id="job-applications-collapse" class="accordion-collapse collapse" aria-labelledby="job-applications-hdr" data-bs-parent="#my-account-accordion">
                <div class="accordion-body p-0">
                    <div class="table-container">
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
                                <label for="search-txt" class="form-label me-1">Search:
                                </label>
                                <input type="text" class="form-control" id="search-txt">
                            </div>
                        </div>
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Applied On</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Cyber Operator</td>
                                    <td></td>
                                    <td></td>
                                    <td>2021-07-03 13:06:43</td>
                                    <td>
                                        <span class="status">applied</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Source Analyst</td>
                                    <td></td>
                                    <td>IT Analyst</td>
                                    <td>2021-07-03 13:06:43</td>
                                    <td>
                                        <span class="status">applied</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Test Source Analyst</td>
                                    <td></td>
                                    <td>IT Analyst</td>
                                    <td>2021-07-03 13:06:43</td>
                                    <td>
                                        <span class="status">applied</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Executive</td>
                                    <td></td>
                                    <td></td>
                                    <td>2021-07-03 13:06:43</td>
                                    <td>
                                        <span class="status">applied</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Executive</td>
                                    <td>Business, Sales & Marketing</td>
                                    <td>Equity Analyst</td>
                                    <td>2021-07-03 13:06:43</td>
                                    <td>
                                        <span class="status">applied</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>Executive</td>
                                    <td>Administrative, Organisation & Logistics</td>
                                    <td>Administration Management</td>
                                    <td>2021-07-03 13:06:43</td>
                                    <td>
                                        <span class="status">applied</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>Financial Analyst</td>
                                    <td>Business, Sales & Marketing</td>
                                    <td>Financial Analyst</td>
                                    <td>2021-07-03 13:06:43</td>
                                    <td>
                                        <span class="status">applied</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td>Corporate Finance Advisor</td>
                                    <td>Business, Sales & Marketing</td>
                                    <td>Corporate Finance Advisor</td>
                                    <td>2021-07-03 13:06:43</td>
                                    <td>
                                        <span class="status">applied</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">9</th>
                                    <td>Executive</td>
                                    <td>Administrative, Organisation & Logistics</td>
                                    <td>Office Administrative</td>
                                    <td>2021-07-03 13:06:43</td>
                                    <td>
                                        <span class="status">applied</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">10</th>
                                    <td>Fund Manager</td>
                                    <td>Business, Sales & Marketing</td>
                                    <td>Fund Manager</td>
                                    <td>2021-07-03 13:06:43</td>
                                    <td>
                                        <span class="status">applied</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="pagination-dets">
                            <p class="viewing-entries mb-0 ms-0 ms-lg-5 pe-2">
                                Showing
                                <span class="top-record-num">1</span>
                                to
                                <span class="bottom-record-num">10</span>
                                of
                                <span class="total-records">17</span>
                                entries
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
            <h2 class="accordion-header" id="profiles-sold-hdr">
                <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#profiles-sold-collapse" aria-expanded="false" aria-controls="profiles-sold-collapse">
                    profiles sold
                </button>
            </h2>
            <div id="profiles-sold-collapse" class="accordion-collapse collapse" aria-labelledby="profiles-sold-hdr" data-bs-parent="#my-account-accordion">
                <div class="accordion-body p-0">
                    <div class="table-container">
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
                                <label for="search-txt" class="form-label me-1">Search:
                                </label>
                                <input type="text" class="form-control" id="search-txt">
                            </div>
                        </div>
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Company Name</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Fee Paid</th>
                                    <th scope="col">Net Earning</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">View Profile</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Code Life Solution</td>
                                    <td>2020-03-12 11:35:56</td>
                                    <td>RM20</td>
                                    <td>RM10</td>
                                    <td>RM10</td>
                                    <td>Processing</td>
                                    <td>
                                        <span class="view-profile">view profile</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Code Life Solution</td>
                                    <td>2020-03-12 11:35:56</td>
                                    <td>RM100</td>
                                    <td>RM10</td>
                                    <td>RM90</td>
                                    <td>Processing</td>
                                    <td>
                                        <span class="view-profile">view profile</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Code Life Solution</td>
                                    <td>2020-03-12 11:35:56</td>
                                    <td>RM100</td>
                                    <td>RM10</td>
                                    <td>RM90</td>
                                    <td>Processing</td>
                                    <td>
                                        <span class="view-profile">view profile</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Code Life Solution</td>
                                    <td>2020-03-12 11:35:56</td>
                                    <td>RM100</td>
                                    <td>RM10</td>
                                    <td>RM90</td>
                                    <td>Processing</td>
                                    <td>
                                        <span class="view-profile">view profile</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Code Life Solution</td>
                                    <td>2020-03-12 11:35:56</td>
                                    <td>RM100</td>
                                    <td>RM10</td>
                                    <td>RM90</td>
                                    <td>Processing</td>
                                    <td>
                                        <span class="view-profile">view profile</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>Code Life Solution</td>
                                    <td>2020-03-12 11:35:56</td>
                                    <td>RM100</td>
                                    <td>RM10</td>
                                    <td>RM90</td>
                                    <td>Processing</td>
                                    <td>
                                        <span class="view-profile">view profile</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>Imaginar</td>
                                    <td>2020-03-12 11:35:56</td>
                                    <td>RM100</td>
                                    <td>RM10</td>
                                    <td>RM90</td>
                                    <td>Processing</td>
                                    <td>
                                        <span class="view-profile">view profile</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td>Code Life Solution</td>
                                    <td>2020-03-12 11:35:56</td>
                                    <td>RM100</td>
                                    <td>RM10</td>
                                    <td>RM90</td>
                                    <td>Processing</td>
                                    <td>
                                        <span class="view-profile">view profile</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">9</th>
                                    <td>Code Life Solution</td>
                                    <td>2020-03-12 11:35:56</td>
                                    <td>RM100</td>
                                    <td>RM10</td>
                                    <td>RM90</td>
                                    <td>Processing</td>
                                    <td>
                                        <span class="view-profile">view profile</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">10</th>
                                    <td>Code Life Solution</td>
                                    <td>2020-03-12 11:35:56</td>
                                    <td>RM100</td>
                                    <td>RM10</td>
                                    <td>RM90</td>
                                    <td>Processing</td>
                                    <td>
                                        <span class="view-profile">view profile</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="pagination-dets">
                            <p class="viewing-entries mb-0 ms-0 ms-lg-5 pe-2">
                                Showing
                                <span class="top-record-num">1</span>
                                to
                                <span class="bottom-record-num">10</span>
                                of
                                <span class="total-records">31</span>
                                entries
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
                                        <a class="page-link" href="#">4</a>
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
            <h2 class="accordion-header" id="share-profile-hdr">
                <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#share-profile-collapse" aria-expanded="false" aria-controls="share-profile-collapse">
                    share profile
                </button>
            </h2>
            <div id="share-profile-collapse" class="accordion-collapse collapse" aria-labelledby="share-profile-hdr" data-bs-parent="#my-account-accordion">
                <div class="accordion-body p-1">
                    <h1 class="share-profile-hdr">
                        Share your profile anytime, anywhere!
                    </h1>
                    <div class="input-group mb-2 share-profile-srch">
                        <span class="input-group-text bg-white" id="">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </span>
                        <input type="text" class="form-control">
                    </div>
                    <div class="social-accounts">
                        <div class="row m-0 gy-2">
                            <div class="col-6">
                                <div class="account">
                                    <span class="icon me-1">
                                        <i class="fa fa-facebook-square" aria-hidden="true"></i>
                                    </span>
                                    <span class="type"> Facebook</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="account">
                                    <span class="icon me-1">
                                        <i class="fa fa-twitter-square" aria-hidden="true"></i>
                                    </span>
                                    <span class="type"> Twitter</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="account">
                                    <span class="icon me-1">
                                        <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                                    </span>
                                    <span class="type"> LinkedIn</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="account">
                                    <span class="icon me-1">
                                        <i class="fa fa-tumblr-square" aria-hidden="true"></i>
                                    </span>
                                    <span class="type"> Tumblr</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="account">
                                    <span class="icon me-1">
                                        <i class="fa fa-pinterest-square" aria-hidden="true"></i>
                                    </span>
                                    <span class="type"> Pinterest</span>
                                </div>
                            </div>
                        </div>
                        <div class="add-more d-flex align-items-center justify-content-center mt-2 mt-sm-3">
                            <div class="add-icon d-flex align-items-center justify-content-center">
                                <span class="icon me-1">
                                    <i class="fa fa-plus-square" aria-hidden="true"></i>
                                </span>
                                <span class="addTxt">AddToAny</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ends::my account tab -->
<?= $this->endSection() ?>