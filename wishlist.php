<?php include 'header.php'; ?>
<div class="text-center mt-5">
  <?php if (isset($_SESSION['uid']) || empty($_SESSION['uid'])) {
    ?>
    <h3>You need to <a href="login.php">log in</a> to use this function</h3>
    <?php
  } 
  ?>
</div>
<style type="text/css">
.footer {
  position: absolute;
  bottom: 0;
  left: 0;
  overflow: hidden;
}
</style>
<?php include 'footer.php'; ?>
