<?php
session_start();
include '../models/Book.php';

// var_dump($_SESSION['shoppingCart']);
if (isset($_SESSION['sessionUsername'])) {
    if (isset($_SESSION['shoppingCart'])) {

        $idExisted = false;
        // check if book exists ?
        foreach($_SESSION['shoppingCart'] as $item ) {
            if ($item['itemId'] == $_GET['itemId']) {
                $idExisted = true;
            }
        }

        if ($idExisted == false && $_GET['itemQuantity'] > 0) {
            $itemArray = array(
                'itemId' => $_GET['itemId'],
                'itemTitle' => $_GET['itemTitle'],
                'itemPrice' => $_GET['itemPrice']
            );
            $_SESSION['shoppingCart'][count($_SESSION['shoppingCart'])] = $itemArray;
            array_values($_SESSION['shoppingCart']);
            echo "added !";
        }
        else if ($idExisted == true) {
            echo 'already added !';
        }
        else if ($_GET['itemQuantity'] <= 0) {
            echo "Out of stock !";
        }
    }
    else {
        if ($_GET['itemQuantity'] > 0) {
            $_SESSION['shoppingCart'] = array();
            $itemArray = array(
                'itemId' => $_GET['itemId'],
                'itemTitle' => $_GET['itemTitle'],
                'itemPrice' => $_GET['itemPrice']
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