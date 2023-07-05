<?= $this->extend("layouts/company") ?>
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
</div>
<!-- ends::cart tab -->
<?= $this->endSection() ?>