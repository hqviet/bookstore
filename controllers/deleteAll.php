<?php  
session_start();
if ($_POST['deleteAll']) {
  unset($_SESSION['shopping_cart']);
}
else {
  echo "Something goes wrong! Try again later";
}

?>