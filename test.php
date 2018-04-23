<!DOCTYPE html>
<html>
<head>
  <?php session_start();
  echo session_id();
  ?>
  <title>Shop</title>
  <link rel="stylesheet" type="text/css" href="public/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="public/css/style.css">
  <script type="text/javascript" src="public/js/jquery.js"></script>
  <style type="text/css">
</style>
</head>
<body>
 <a href="controllers/showCart.php">show cart</a>
  <div class="container">
    <h2>Item list</h2>
    <table class="table table-light">
      <thead class="thead-dark bg-secondary text-white"> 
        <tr>
          <td>id</td>
          <td>title</td>
          <td>quantity</td>
          <td>price</td>
          <td>description</td>
          <td>action</td>
        </tr>
      </thead>

      <?php  
      require_once 'controllers/dbConfig.php';
      include 'models/Product.php';
      $rs = $db->query("SELECT * FROM products");
      $rsArr = array();
      foreach($rs as $prd) {
        array_push($rsArr, new Product($prd['id'], $prd['title'], $prd['quantity'], $prd['price'], $prd['description']));
        ?>
        <tr>
          <td><?= $prd['id'] ?></td>
          <td><?= $prd['title'] ?></td>
          <td><?= $prd['quantity'] ?></td>
          <td><?= $prd['price'] ?></td>
          <td><?= $prd['description'] ?></td>
          <td>
            <input type="button" class="btn btn-primary" name="addBtn" 
            data-id="<?= $prd['id'] ?>"
            data-title="<?= $prd['title'] ?>"
            data-price="<?= $prd['price'] ?>"
            data-quantity="<?= $prd['quantity'] ?>" 
            value="add to cart">
          </td>
        </tr>
        <?php
      }
      ?>
      <script type="text/javascript">
        $('input[name="addBtn"]').click(function() {
          $.ajax({
            url: 'controllers/addCart.php',
            type: 'GET',
            data: {
              itemId: $(this).attr('data-id'),
              itemTitle: $(this).attr('data-title'),
              itemPrice: $(this).attr('data-price'),
              itemQuantity: $(this).attr('data-quantity')
            },
            success: function(data) {
              console.log(data);
            },
            error: function() {
              alert('Fail to add !');
            }
          });
        });
      </script>
    </table>
  </div>


</body>
<script type="text/javascript" src="public/js/popper.js"></script>
<script type="text/javascript" src="public/js/bootstrap.js"></script>
</html>