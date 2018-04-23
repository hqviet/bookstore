<?php  
session_start();
if ($_GET['deleteAll']) {
  unset($_SESSION['shoppingCart']);
}
else {
  echo "Something goes wrong! Try again later";
}

?>