<?php
/**
 * Created by PhpStorm.
 * User: quocviet
 * Date: 4/23/18
 * Time: 11:00 PM
 */
session_start();
if ($_GET['clear'] == "y") {
    unset($_SESSION['sessionUsername']);
    session_destroy();
}
header("location: ../index.php");
?>