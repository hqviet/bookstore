<?php
session_start();
/**
 * Created by PhpStorm.
 * User: quocviet
 * Date: 4/23/18
 * Time: 1:52 PM
 */
include "./dbConfig.php";
include "../models/User.php";
if ($_POST['login']) {
	$loginStmt = $db->prepare("SELECT * FROM users WHERE email = :email AND password = :password");
	$loginStmt->execute(array(':email' => $_POST['email'], ':password' => $_POST['password']));
	$loginRs = $loginStmt->fetchAll();
	foreach ($loginRs as $row) {
		$_SESSION['session_username'] = $row['username'];
		$_SESSION['session_email'] = $row['email'];
		$_SESSION['session_address'] = $row['address'];
		$_SESSION['session_phone'] = $row['phone'];
	}
	echo $_SESSION['session_username'];
}
?>
<script type="text/javascript">
	window.location = "../";
</script>
