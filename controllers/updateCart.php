<?php
/**
 * Created by PhpStorm.
 * User: quocviet
 * Date: 4/26/18
 * Time: 5:02 PM
 */
session_start();
if ($_POST['changeId'] && $_POST['changeQuantity']) {
    foreach ($_SESSION['shoppingCart'] as &$item) {
        if ($item['itemId'] === $_POST['changeId']) {
            $item['itemQuantity'] = $_POST['changeQuantity'];
            unset($item);
            var_dump($_SESSION['shoppingCart']);
            break;
        }
    }

}
else {

}


?>