<head>
	<title>Shop</title>
</head>

	<?php include 'header.php'; ?>

	<div class="container-fluid mt-5 mb-3">

		<h2 class="text-center">All the books</h2>
		<div class="d-flex flex-wrap">
			<?php
			include 'models/Book.php';
			$rs = $db->query("SELECT * FROM books");
			foreach($rs as $book) {
				?>
				<div class="card mr-4 mt-3 mb-3 card-shadow""  style="width: 250px; margin-left: 3%;">
					<div style="padding: 5px" ><img src="<?= $book['image'] ?>" style="width: 100%" alt="<?= $book['title'] ?>"></div>
					<div class="text-center" style="padding: 10px;">
						<h5 class="card-title"><?= $book['title'] ?></h5><span></span>
						<p class="card-text">
							<?php
							if (intval($book['quantity']) > 0) {
								echo "<span class='badge badge-success'>In stock</span> ";
							}
							else {
								echo "<span class='badge badge-danger'>Out of stock</span> ";
							}

							if ($book['isNew'] == 1) {
								echo "<span class='badge badge-dark'>New</span>";
							}

							?>
						</p>
						<p class="card-text font-weight-bold">$ <?= $book['price'] ?></p>
						<p class="card-text"></p>
						<button type="button" class="btn btn-outline-success addBtn" data-id="<?= $book['id'] ?>" data-title="<?= $book['title'] ?>" data-price="<?= $book['price'] ?>" data-quantity="<?= $book['quantity'] ?>"
							><i class="fas fa-cart-plus"></i></button>
							<button class="btn btn-outline-danger" data-id="<?= $book['id'] ?>"><i class="fas fa-heart"></i></button>
							<!-- Modal trigger -->
							<button class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal<?= $book['id'] ?>"><i class="fas fa-align-justify"></i></button>
						</div>
						<!-- Modal -->
						<div class="modal fade" id="exampleModal<?= $book['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
											 <td><?= $book['title'] ?></td>
										 </tr>
										 <tr>
											 <td>Author</td>
											 <td><?= $book['author'] ?></td>
										 </tr>
										 <tr>
											 <td>Year published</td>
											 <td><?=$book['year'] ?></td>
										 </tr>
										 <tr>
											 <td>Publisher</td>
											 <td><?= $book['publisher'] ?></td>
										 </tr>
										 <tr>
											 <td>Genre</td>
											 <td><?= $book['genre'] ?></td>
										 </tr>
										 <tr>
											 <td>Quantity</td>
											 <td><?php if ($book['quantity'] > 0) {
												 echo "<span class='badge badge-success'>In stock</span>";

											 }
											 else {
												 echo "<span class='badge badge-danger'>Out of stock</span>";
											 }
											 ?></td>
										 </tr>
										 <tr>
											 <td>Price</td>
											 <td><?= "$ " . $book['price'] ?></td>
										 </tr>
										 <tr>
											 <td>Description</td>
											 <td><?= $book['description'] ?></td>
										 </tr>
									 </table>
								 </div>
							 </div>
						 </div>
					 </div>
				 </div>
				 <?php
			 }
			 ?>
		 </div>

	 </div>

 <script type="text/javascript" src="public/js/popper.js"></script>
 <script type="text/javascript" src="public/js/bootstrap.js"></script>
 <script type="text/javascript" src="public/js/script.js"></script>

