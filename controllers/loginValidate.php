<?php
session_start();
/**
 * Created by PhpStorm.
 * User: quocviet
 * Date: 4/23/18
 * Time: 1:52 PM
 */
include "./dbConfig.php";

if ($_POST['login']) {
	$loginStmt = $db->prepare("select * from users where email = :email and password = :password");
	$loginStmt->execute(array(':email' => $_POST['email'], 'password' => $_POST['password']));
	$loginRs = $loginStmt->fetchAll();
	foreach ($loginRs as $row) {
		$_SESSION['sessionUsername'] = $row['username'];
		$_SESSION['sessionEmail'] = $row['email'];
		$_SESSION['sessionAddress'] = $row['address'];
		$_SESSION['sessionPhone'] = $row['phone'];
	}
}
?>
<script type="text/javascript">
	window.location = "../index.php";
</script>
