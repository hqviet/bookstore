<?php
/**
 * Created by PhpStorm.
 * User: Quoc Viet
 * Date: 15-Apr-18
 * Time: 12:42 AM
 */
include './header.php';
?>
<div class="container ml-auto mr-auto mt-5">
    <?php
    if (isset($_SESSION['shoppingCart'])) {
        ?>
        <table class="table">
            <thead>
                <tr>
                    <th class="text-center">Title</th>
                    <th class="text-center">Quantity</th>
                    <th class="text-center">Total</th>
                </tr>
            </thead>

            <?php
            foreach ($_SESSION['shoppingCart'] as $row) {
                ?>
                <tr>
                    <td>
                        <?= $row['itemTitle'] ?>
                    </td>
                    <td class="text-center">
                        <?= $row['itemQuantity'] ?>
                    </td>
                    <td class="text-center">
                        <?= $row['itemQuantity'] * $row['itemPrice'] ?>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
        <div>
            <p class="font-weight-bold">You will pay: <span class="text-danger ">
                <?php
                $sum = 0;
                foreach ($_SESSION['shoppingCart'] as $item) {
                    $sum += $item['itemQuantity'] * $item['itemPrice'];
                }
                echo $sum;
                ?>
            </span></p>
        </div>

        <div class="container-fluid mt-5">
            <h4 class="font-weight-bold">Delivery information</h4>
            <form action="./controllers/confirmCheckout.php">
                <div class="container mt-4">
                    <input type="checkbox" name="defaultAddress" id="defaultAddress" value="true"> <label for="defaultAddress">User your default address</label>
                </div>
                <div class="container mt-2">
                    <div id="optionalAddress" class="row"></div>

                </div>
                <div class="form-group">
                    <input class="btn btn-success" type="submit" name="submitAddress">
                </div>
            </form>
        </div>
        <?php
    }
    else {
        ?>
        <p class='font-italic text-danger text-center'>There is no item in your cart</p>
        <p class='text-center'>Go back to <a href='index.php'>home page</a> and get some </p>
        <?php
    }
    ?>


</div>
<script>
    $(document).ready(function() {
        $('#optionalAddress').append(
            "<div class='form-group col-6'> <label for=''>Address</label> <input class='form-control' type='text' name='optionalAddress'> </div>"
            );
        $('#defaultAddress').click(function() {
            if ($(this).is(':checked')) {
                $('#optionalAddress').empty();
            }
            else {
                $('#optionalAddress').append(
                    "<div class='form-group col-6'> <label for=''>Address</label> <input class='form-control' type='text' name='optionalAddress'> </div>"
                    );
            }
        });
    });
</script>
