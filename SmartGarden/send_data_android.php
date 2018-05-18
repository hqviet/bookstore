<?php 
require_once './database_config.php';
if ($_POST['request_data']) {
	$rs_weather = $db->query("SELECT * FROM tbl_weather");
	$data = $rs_weather->fetchAll();
	print_r($data);



}

function convert_to_single_array($array) {
	$arr = array();
	foreach ($array as $key => $value) {
		
	}
	return $arr;
}
?>