<?php
include 'header.php';
?>

<body>
<div class="container-fluid mt-5 mb-5">
    <h2 class="text-center">Your Cart Items</h2>
    <br>
    <div class="w-75 ml-auto mr-auto">
        <?php
        if (isset($_SESSION['shoppingCart'])) {
            ?>
            <table class="table">
                <thead>
                <tr>
                    <th class="text-center">Title</th>
                    <th class="text-center">Quantity</th>
                    <th class="text-center">Action</th>
                </tr>
                </thead>

                <?php
                foreach ($_SESSION['shoppingCart'] as $row) {
                    ?>
                    <tr>
                        <td><?= $row['itemTitle'] ?></td>
                        <td>
                            <input class="form-control w-50 not_null ml-auto mr-auto" type="number" min="1"
                                   name="quantityOrder" data-link="<?= $row['itemId'] ?>" value="" required>
                            <input type="hidden" data-link="<?= $row['itemId'] ?>" name="itemPrice"
                                   value="<?= $row['itemPrice'] ?>">
                        </td>
                        <td class="text-center">
                            <input type="button" class="btn" name="deleteBtn" value="Delete"
                                   data-link="<?= $row['itemId'] ?>">
                        </td>

                    </tr>

                    <?php
                }
                ?>

            </table>
            <div class="text-center">
                <input class="btn btn-danger" type="button" value="Delete All" id="deleteAllBtn">
                <a href="" class="btn btn-info checkout">Check out</a>
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


</div>
<script type="text/javascript">


    $('input[name="deleteBtn"]').click(function() {
        $.ajax({
            url: 'controllers/deleteSingleItem.php',
            type: 'GET',
            data: {
                deleteItemId: $(this).attr('data-link')
            },
            success: function() {
                location.reload();
            },
            error: function(data) {
                alert(data);
            }
        });
    });

    $('#deleteAllBtn').click(function() {
        $.ajax({
            url: 'controllers/deleteAll.php',
            type: 'GET',
            data: {
                deleteAll: 'true'
            },
            success: function(data) {
                console.log(data);
                location.reload();
            },
            error: function(data) {
                alert(data);
            }
        });
    });
</script>
</body>
</html>