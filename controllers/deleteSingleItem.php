<?php  
session_start();
if (count($_SESSION['shoppingCart']) >= 1) {
	for ($i=0; $i < count($_SESSION['shoppingCart']); $i++) { 
		if ($_POST['deleteItemId'] == $_SESSION['shoppingCart'][$i]['itemId']) {
			unset($_SESSION['shoppingCart'][$i]);
			$_SESSION['shoppingCart'] = array_values($_SESSION['shoppingCart']);
			if (count($_SESSION['shoppingCart']) == 0) {
				unset($_SESSION['shoppingCart']);
				session_destroy();
			}
			break;
		}
	}
}
else {
	unset($_SESSION['shoppingCart']);
	session_destroy();
}

?>