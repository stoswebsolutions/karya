<?= $this->extend("layouts/app") ?>
<?= $this->section("body") ?>
<div class="container">
    <img src="<?= site_url() ?>app-assets/images/logo_pathafinder.png" alt="logo" class="img-fluid mx-auto d-block" />
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            <h1 class="text-center">Hello, Talent!</h1>
            <form class="" id="talentform" action="<?= base_url('talentLogin') ?>" method="post">
                <?= csrf_field(); ?>
                <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                <?php elseif (!empty(session()->getFlashdata('success'))) : ?>
                    <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
                <?php endif ?>
                <div class="row">
                    <div class="col-sm-12 p-5 shadow bg-default rounded">
                        <div class="form-group mb-3">
                            <input type="email" class="form-control form-control-lg" id="email" name="email" value="<?= set_value('email') ?>" placeholder="Email Address" aria-label="Username" />
                            <div class="text-danger"><?= !empty(session()->getFlashdata('validation')) ? error(session()->getFlashdata('validation'), 'email') : '' ?></div>
                        </div>
                        <div class="form-group mb-3">
                            <input type="password" class="form-control form-control-lg" id="password" name="password" value="<?= set_value('password') ?>" placeholder="Password" aria-label="Password" />
                            <div class="text-danger"><?= !empty(session()->getFlashdata('validation')) ? error(session()->getFlashdata('validation'), 'password') : '' ?></div>
                        </div>
                        <button class="btn btn-success text-uppercase float-end text-white" type="submit">
                            Sign In
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>