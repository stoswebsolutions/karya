<?= $this->extend("layouts/app") ?>
<?= $this->section("body") ?>
<style>
    .menu-header {
        background-color: #092e48;
    }

    .nav-link {
        color: #54dcde;
    }

    .nav-link:hover {
        color: #ffffff;
    }

    .navbar-nav .nav-link.active {
        color: #f21058;
    }
</style>
<div class="container-fluid menu-header">
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="#">
                    <img src="<?= site_url() ?>app-assets/images/logo_pathafinder.png" alt="logo" class="img-fluid">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url() ?>employer">Employer Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url() ?>talent">Employer Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="<?= site_url() ?>jobseeker">Job Seeker Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url() ?>hired">Job Seeker Login</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mt-5">
        <div class="col-sm-6">
            <form class="" id="hiredform" action="<?= base_url('jobseekerSave') ?>" method="post">
                <?= csrf_field(); ?>
                <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                <?php elseif (!empty(session()->getFlashdata('success'))) : ?>
                    <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
                <?php endif ?>
                <div class="card border-light mt-5">
                    <div class="form-group mb-3">
                        <input type="email" class="form-control form-control-lg" id="email" name="email" value="<?= set_value('email') ?>" placeholder="Email Address" aria-label="email" />
                        <div class="text-danger"><?= !empty(session()->getFlashdata('validation')) ? error(session()->getFlashdata('validation'), 'email') : '' ?></div>
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" class="form-control form-control-lg" id="username" name="username" value="<?= set_value('username') ?>" placeholder="Username" aria-label="username" />
                        <div class="text-danger"><?= !empty(session()->getFlashdata('validation')) ? error(session()->getFlashdata('validation'), 'username') : '' ?></div>
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" class="form-control form-control-lg" id="fullname" name="fullname" value="<?= set_value('fullname') ?>" placeholder="Full Name" aria-label="fullname" />
                        <div class="text-danger"><?= !empty(session()->getFlashdata('validation')) ? error(session()->getFlashdata('validation'), 'fullname') : '' ?></div>
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" class="form-control form-control-lg" id="mobile" name="mobile" value="<?= set_value('mobile') ?>" placeholder="Mobile No" aria-label="mobile" />
                        <div class="text-danger"><?= !empty(session()->getFlashdata('validation')) ? error(session()->getFlashdata('validation'), 'mobile') : '' ?></div>
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" class="form-control form-control-lg" id="password" name="password" value="<?= set_value('password') ?>" placeholder="Password" aria-label="Password" />
                        <div class="text-danger"><?= !empty(session()->getFlashdata('validation')) ? error(session()->getFlashdata('validation'), 'password') : '' ?></div>
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" class="form-control form-control-lg" id="password2" name="password2" value="<?= set_value('password2') ?>" placeholder="Confirm Password" aria-label="password2" />
                        <div class="text-danger"><?= !empty(session()->getFlashdata('validation')) ? error(session()->getFlashdata('validation'), 'password2') : '' ?></div>
                    </div>
                    <div class="d-flex align-items-center justify-content-end">
                        <a href="https://pathfinder.la/" class="btn btn-secondary text-uppercase text-white me-2">Home</a>
                        <button class="btn btn-success text-uppercase text-white me-2" type="submit">
                            Sign Up
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-sm-6">
            <h2>Get Job Seeker</h2>
            <div class="card" style="background-color: #272B40;">
                <p class="text-white p-4 mb-5">With our insights, we can assist you in finding the ideal
                    position that matches your personality, skills and career
                    aspirations. Our tool will assist you in providing that
                    perfect pitch for your interview.</p>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid menu-header mt-5">
    <div class="row p-4 mt-5">
        <div class="col-sm-8 offset-sm-2">
            <div class="d-flex align-items-center justify-content-between">
                <p class="nav-link">Copyright © 2024 Pathfinder.la</p>
                <p class="nav-link">Powered by www.imaginar.my</p>
                <a href="#" class="nav-link"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#" class="nav-link"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="#" class="nav-link"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>