<?php  
session_start();
if ($_POST['deleteAll']) {
  unset($_SESSION['shoppingCart']);
}
else {
  echo "Something goes wrong! Try again later";
}

?>