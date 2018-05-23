<?php
session_start();
include '../models/Book.php';

// var_dump($_SESSION['shopping_cart']);
if (isset($_SESSION['session_username'])) {
    if (isset($_SESSION['shopping_cart'])) {

        $idExisted = false;
        foreach($_SESSION['shopping_cart'] as $item ) {
            if ($item['itemId'] == $_POST['itemId']) {
                $idExisted = true;
            }
        }

        if ($idExisted == false && $_POST['itemQuantity'] > 0) {
            $itemArray = array(
                'itemId' => $_POST['itemId'],
                'itemTitle' => $_POST['itemTitle'],
                'itemPrice' => $_POST['itemPrice'],
                'itemQuantity' => 1
            );
            $_SESSION['shopping_cart'][count($_SESSION['shopping_cart'])] = $itemArray;
            array_values($_SESSION['shopping_cart']);
            echo "added !";
        }
        else if ($idExisted == true) {
            echo 'already added !';
        }
        else if ($_POST['itemQuantity'] <= 0) {
            echo "Out of stock !";
        }
    }
    else {
        if ($_POST['itemQuantity'] > 0) {
            $_SESSION['shopping_cart'] = array();
            $itemArray = array(
                'itemId' => $_POST['itemId'],
                'itemTitle' => $_POST['itemTitle'],
                'itemPrice' => $_POST['itemPrice'],
                'itemQuantity' => 1
            );
            $_SESSION['shopping_cart'][0] = $itemArray;
            array_values($_SESSION['shopping_cart']);

            echo 'added !';
        }
        else {
            echo 'Out of stock !';
        }
    }
}
else {
    echo "./account.php";
}
?>