<?php
/**
 * Created by PhpStorm.
 * User: quocviet
 * Date: 4/23/18
 * Time: 1:52 PM
 */
include "./dbConfig.php";
include "../models/SessionUser.php";
session_start();

$loginStmt = $db->prepare("select * from users where email = :email and password = :password");
$loginStmt->execute(array(':email' => $_GET['email'], 'password' => $_GET['password']));
$loginRs = $loginStmt->fetchAll();
if (count($loginRs) == 1) {
    $_SESSION['sessionUsername'] = $loginRs[0]['username'];
    $_SESSION['sessionEmail'] = $loginRs[0]['sessionEmail'];
    $_SESSION['sessionAddress'] = $loginRs[0]['sessionAddress'];
    $_SESSION['sessionPhone'] = $loginRs[0]['sessionPhone'];
    echo 1;
}
else {
    echo 0;
}

?>

