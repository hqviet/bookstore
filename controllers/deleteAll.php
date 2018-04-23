<?php  
session_start();
if ($_GET['deleteAll']) {
  unset($_SESSION['shoppingCart']);
  session_destroy();
}
else {
  echo "Something goes wrong! Try again later";
}

?>