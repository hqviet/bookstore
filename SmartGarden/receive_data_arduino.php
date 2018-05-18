<?php 

include './database_config.php';

$temp = $_GET['temp'];

$humi = $_GET['humi'];

$light = $_GET['light'];

date_default_timezone_set('Asia/Ho_Chi_Minh');

$last_update = date('m/d/Y h:i:s a', time());

$db->exec("INSERT INTO tbl_weather (temp, humi, light, last_update) VALUES ('$temp', '$humi', '$light', '$last_update')");



?>

<script>

    window.location = "./";

</script>

