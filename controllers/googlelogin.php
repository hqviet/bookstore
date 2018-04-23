<?php
/**
 * Created by PhpStorm.
 * User: quocviet
 * Date: 4/18/18
 * Time: 10:53 AM
 */
session_start();
if ($_GET['email'] && $_GET['userEmail']) {
    $_SESSION['userEmail'] = $_GET['email'];
    echo "done!";
}
else {
    echo "error!";
}

?>