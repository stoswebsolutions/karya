<?= $this->extend("layouts/app") ?>
<?= $this->section("body") ?>
<div class="p-2">
    <h1>Welcome Karya</h1>
    <p>Enter Code Here</p>
    <form class="" action="<?= base_url('action') ?>" method="post">
        <input type="text" class="form-control w-25" name="number" id="number" required>
    </form>
</div>
<?= $this->endSection() ?>