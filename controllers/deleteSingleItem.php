<?php  
session_start();
if (count($_SESSION['shopping_cart']) >= 1) {
	for ($i=0; $i < count($_SESSION['shopping_cart']); $i++) {
		if ($_POST['deleteItemId'] == $_SESSION['shopping_cart'][$i]['itemId']) {
			unset($_SESSION['shopping_cart'][$i]);
			$_SESSION['shopping_cart'] = array_values($_SESSION['shopping_cart']);
			if (count($_SESSION['shopping_cart']) == 0) {
				unset($_SESSION['shopping_cart']);
				session_destroy();
			}
			break;
		}
	}
}
else {
	unset($_SESSION['shopping_cart']);
	session_destroy();
}

?>