<?php session_start(); ?>
<link rel="stylesheet" type="text/css" href="./public/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="./public/icon/web-fonts-with-css/css/fa-brands.css">
<link rel="stylesheet" type="text/css" href="./public/icon/web-fonts-with-css/css/fa-regular.css">
<link rel="stylesheet" type="text/css" href="./public/icon/web-fonts-with-css/css/fa-solid.css">
<link rel="stylesheet" type="text/css" href="./public/icon/web-fonts-with-css/css/fontawesome.css">
<link rel="stylesheet" type="text/css" href="./public/icon/web-fonts-with-css/css/fontawesome-all.css">
<link rel="stylesheet" type="text/css" href="./public/css/style.css">

<script type="text/javascript" src="./public/js/popper.js"></script>
<script type="text/javascript" src="./public/js/jquery.js"></script>
<script type="text/javascript" src="./public/js/bootstrap.js"></script>
<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
-->

<style type="text/css">

    .nav-item {
        border-bottom: 1px solid transparent;
        transition: all .3s;
    }
    .nav-item:hover {
        border-bottom: 1px solid green;
        transition: all .3s;
    }
    .nav-link:hover {
        color: green !important;
        transition: all .3s;
    }
    .nav-link {
        transition: all .3s;
        color: #1e221f !important;
    }

</style>

<?php require_once './controllers/dbConfig.php'; ?>
<nav class="navbar navbar-expand-lg navbar-light my_header" style="background-color: #F2F1EF; box-shadow: 0px 1px 10px grey;  ">
    <a class="navbar-brand d-md-none d-sm-block" href="#">Bookstore</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link " href="index.php"> <i class="fas fa-home"></i> Home</a>
            </li>

            <li class="nav-item">
                <a class="nav-link " href="allBooks.php">All the books</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle trans-med" href="#" id="dropdownCategory" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Category</a>
                <div class="dropdown-menu" aria-labelledby="dropdownCategory">
                    <?php
                    $rsCat = $db->query("SELECT DISTINCT genre FROM books");
                    foreach ($rsCat as $cat) {
                        ?>
                        <a class="dropdown-item " href="./category.php?cat=<?= $cat[0] ?>"><?= $cat[0] ?></a>
                        <?php
                    }
                    ?>

                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="feedback.php">Feedback</a>
            </li>

            <li class="nav-item">
                <a class="nav-link " href="sales.php">Sales</a>
            </li>

        </ul>


        <div class="">
            <ul class="navbar-nav mr-3">
                <li class="nav-item">
                    <a href="wishlist.php" class="nav-link "><i class="fas fa-heart"></i> Wishlist </a>
                </li>
                <li class="nav-item">
                    <a href="showCart.php" class="nav-link "><i class="fas fa-shopping-cart" ></i> Cart </a>
                </li>
                <li class="nav-item ">
                    <?php
                    if (isset($_SESSION['sessionUsername'])) {
                        ?>
                        <div class="dropdown show">
                            <a class="nav-link dropdown-toggle trans-med" href="#" id="dropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i> <?= $_SESSION['sessionUsername']  ?></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownProfile">
                                <a class="dropdown-item" href="./profile.php">Profile</a>
                                <a class="dropdown-item" href="./controllers/logout.php?clear=y">Log out</a>
                            </div>
                        </div>
                        <?php
                    }
                    else {
                        ?>
                        <a href="account.php" class="nav-link"><i class="fas fa-user"></i> Account </a>
                        <?php
                    } ?>
                </li>
            </ul>

        </div>

        <form class="form-inline my-2 my-lg-0" action="search.php" method="POST">
            <input class="form-control" name="querry" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i>
            </button>
        </form>

    </div>
</nav>
<script>

</script>

