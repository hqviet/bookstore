<?php
session_start();
include '../models/Book.php';

// var_dump($_SESSION['shoppingCart']);
if (isset($_SESSION['sessionUsername'])) {
    if (isset($_SESSION['shoppingCart'])) {

        $idExisted = false;
        foreach($_SESSION['shoppingCart'] as $item ) {
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
            $_SESSION['shoppingCart'][count($_SESSION['shoppingCart'])] = $itemArray;
            array_values($_SESSION['shoppingCart']);
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
            $_SESSION['shoppingCart'] = array();
            $itemArray = array(
                'itemId' => $_POST['itemId'],
                'itemTitle' => $_POST['itemTitle'],
                'itemPrice' => $_POST['itemPrice'],
                'itemQuantity' => 1
            );
            $_SESSION['shoppingCart'][0] = $itemArray;
            array_values($_SESSION['shoppingCart']);

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