<?= $this->extend("layouts/talent") ?>
<?= $this->section("body") ?>
<!-- cart tab -->
<div class="data cart-data">
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
                <?php
                $total = 0;
                if (!empty($cartDetails)) {
                    $cart_id = '';
                    $candidate_id = '';
                    foreach ($cartDetails as $index => $row) {
                        $cart_id = $cart_id . '@' . $row['tb_cart_id'];
                        $candidate_id = $candidate_id . '@' . $row['candidate_id'];
                        $candidate_exp = $row['job_experience'];
                        if ($candidate_exp <= 5) {
                            $earning = 20;
                            $bill_desc = 'Profile Lvl 1';
                        }
                        if ($candidate_exp > 5 && $candidate_exp < 10) {
                            $earning = 50;
                            $bill_desc = 'Profile Lvl 2';
                        }
                        if ($candidate_exp > 9) {
                            $earning = 100;
                            $bill_desc = 'Profile Lvl 3';
                        }

                        $total = $total + $earning;
                ?>
                        <tr>
                            <th scope="row"><?= $index + 1 ?></th>
                            <td><?= $row['fullname'] ?></td>
                            <td><?= $row['user_email'] ?></td>
                            <td><?= $bill_desc ?></td>
                            <td><?= $earning ?></td>
                            <td>
                                <button class="btn karya-btn remove-cart-btn">
                                    <a href="<?= site_url() ?>talent/removeCart/<?= $row['tb_cart_id'] ?>" class="text-decoration-none">Remove Cart<?= $row['tb_cart_id'] ?></a>
                                </button>
                            </td>
                        </tr>
                <?php
                    }
                }
                ?>
                <tr>
                    <td colspan="4" class="ttl-amnt">
                        <span class="amnt-txt"> Total Amount </span>
                    </td>
                    <td colspan="2" class="amnt">
                        <span class="amnt-val"> <?= $total ?> </span>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            <?php
            if ($total > 0) {
            ?>
                <form method="post" action="<?= site_url() ?>talent/ProcessPayAmount" id="smart-forms">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="add_wall" id="add_wall" required class="gui-input" value="<?= $total ?>" style="width:20%" readonly>
                    <input type="hidden" name="cart_id" id="cart_id" required class="gui-input" value="<?= $cart_id ?>" style="width:20%" readonly>
                    <input type="hidden" name="candidate_id" id="candidate_id" required class="gui-input" value="<?= $candidate_id ?>" style="width:20%" readonly>
                    <button type="submit" class="btn karya-btn prcd-payment-btn">
                        proceed to payment
                    </button>
                </form>
            <?php
            }
            ?>
        </div>
    </div>
</div>
<!-- ends::cart tab -->
<?= $this->endSection() ?>