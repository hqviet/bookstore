<!DOCTYPE html>
<html>
<head>

  <title>Shop</title>
  <style type="text/css">
  .card-shadow:hover {
    box-shadow: 0px 1px 10px grey; 
    transition: all .3s;
  }
  .card-shadow {
    transition: all .2s;
  }
</style>
</head>
<body>

  <?php include 'header.php'; ?>

  <div class="container-fluid mt-5 mb-3">    

    <h2 class="text-center">Books in <span class="font-italic text-danger"><?= $_POST['cat'] ?></span></h2>
    <div class="d-flex flex-wrap mt-5">
      <?php  
      include 'models/Book.php';
      $genre = $_POST['cat'];
      $rsCatOpt = $db->query("SELECT * FROM books WHERE genre = '" . $genre . "'");
      // var_dump($rsCatOpt);
      if (is_array($rsCatOpt) || is_object($rsCatOpt)) {
        foreach($rsCatOpt as $bookCat) { ?>
        <div class="card mr-4 mt-3 mb-3 card-shadow""  style="width: 250px; margin-left: 3%;">
          <div style="padding: 5px" ><img src="<?= $bookCat['image'] ?>" style="width: 100%" alt="<?= $bookCat['title'] ?>"></div>
          <div class="text-center" style="padding: 10px;">
            <h5 class="card-title"><?= $bookCat['title'] ?></h5><span></span>
            <p class="card-text">
              <?php 
              if (intval($bookCat['quantity']) > 0) {
                echo "<span class='badge badge-success'>In stock</span> ";
              }
              else {
                echo "<span class='badge badge-danger'>Out of stock</span> ";
              }

              if ($bookCat['isNew'] == 1) {
                echo "<span class='badge badge-dark'>New</span>";
              }

              ?>
            </p>
            <p class="card-text font-weight-bold">$ <?= $bookCat['price'] ?></p>
            <p class="card-text"></p>
            <button type="button" class="btn btn-outline-success addBtn" data-id="<?= $bookCat['id'] ?>" data-title="<?= $bookCat['title'] ?>" data-price="<?= $bookCat['price'] ?>" data-quantity="<?= $bookCat['quantity'] ?>"><i class="fas fa-cart-plus"></i></button>
            <button class="btn btn-outline-danger" data-id="<?= $bookCat['id'] ?>"><i class="fas fa-heart"></i></button>
            <!-- Modal trigger -->
            <button class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal<?= $bookCat['id'] ?>"><i class="fas fa-align-justify"></i></button>
          </div>
          <!-- Modal -->
          <div class="modal fade" id="exampleModal<?= $bookCat['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Book details</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                 <table class="table table-striped">
                   <tr>
                     <td>Title</td>
                     <td><?= $bookCat['title'] ?></td>
                   </tr>
                   <tr>
                     <td>Author</td>
                     <td><?= $bookCat['author'] ?></td>
                   </tr>
                   <tr>
                     <td>Year published</td>
                     <td><?=$bookCat['year'] ?></td>
                   </tr>
                   <tr>
                     <td>Publisher</td>
                     <td><?= $bookCat['publisher'] ?></td>
                   </tr>
                   <tr>
                     <td>Genre</td>
                     <td><?= $bookCat['genre'] ?></td>
                   </tr>
                   <tr>
                     <td>Quantity</td>
                     <td><?php if ($bookCat['quantity'] > 0) {
                       echo "<span class='badge badge-success'>In stock</span>";
                     } 
                     else {
                      echo "<span class='badge badge-danger'>Out of stock</span>";
                    }
                    ?></td>
                  </tr>
                  <tr>
                   <td>Price</td>
                   <td><?= "$ " . $bookCat['price'] ?></td>
                 </tr>
                 <tr>
                   <td>Description</td>
                   <td><?= $bookCat ['description'] ?></td>
                 </tr>
               </table>
             </div>
           </div>
         </div>
       </div>
     </div>
     <?php
   }
 }

 ?>
</div>

</div>

</body>

<script type="text/javascript" src="public/js/popper.js"></script>
<script type="text/javascript" src="public/js/bootstrap.js"></script>
<script type="text/javascript" src="public/js/script.js"></script>
</html>