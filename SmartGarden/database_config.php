<?php  
static $dtb_host = 'localhost';
static $dtb_username = 'id1772981_viethq';
static $dtb_password = 'quocviet';
static $dtb_name = 'id1772981_dtbtest';
$db = new PDO('mysql:host='.$dtb_host.';dbname='.$dtb_name, $dtb_username, $dtb_password);

?>

