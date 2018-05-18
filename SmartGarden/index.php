<?php  
require_once './database_config.php';
?>
<link rel="stylesheet" type="text/css" href="../public/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../public/icon/web-fonts-with-css/css/fa-brands.css">
<link rel="stylesheet" type="text/css" href="../public/icon/web-fonts-with-css/css/fa-regular.css">
<link rel="stylesheet" type="text/css" href="../public/icon/web-fonts-with-css/css/fa-solid.css">
<link rel="stylesheet" type="text/css" href="../public/icon/web-fonts-with-css/css/fontawesome.css">
<link rel="stylesheet" type="text/css" href="../public/icon/web-fonts-with-css/css/fontawesome-all.css">
<link rel="stylesheet" type="text/css" href="../public/css/style.css">

<script type="text/javascript" src="../public/js/popper.js"></script>
<script type="text/javascript" src="../public/js/jquery.js"></script>
<script type="text/javascript" src="../public/js/bootstrap.js"></script>

<?php  


$rs_weather = $db->query("SELECT * FROM tbl_weather");
$rs_state = $db->query("SELECT * FROM tbl_state ORDER BY id DESC LIMIT 1");
$last_updated = $rs_state->fetchAll();
?>
<!-- <div class="container mt-3">
	<a href="" class="h4">Visualization</a>
</div> -->
<div class="container-fluid mt-5">
	<div class="row mt-3 mb-3">
		<div class="col-3">
			<div class="row">
				<div class="col-5"></div>
				<div class="col-5"></div>
			</div>
			<div class="">
				<h4 class="text-center">System </h4>
				<table class="table">
					<tr >
						<th>Current state</th>
						<?php if ($last_updated[0]['state'] != 0) {
							echo "<td class='text-success font-weight-bold'>ON</td>";
						}
						else {
							echo "<td class='text-danger font-weight-bold'>OFF</td>";
						}
						?>
					</tr>
					<tr>
						<th>Last updated</th>
						<td><?= $last_updated[0]['last_update'];?></td>
					</tr>
				</table>
			</div>
		</div>
		<div class="col-9">
			<table class="table table-striped text-center">
				<tr>
					<th>Temperature</th>
					<th>Humidity</th>
					<th>Light level</th>
					<th>Last updated</th>
				</tr>	
				<?php  
				foreach ($rs_weather as $row) {
					?>
					<tr>
						<td><?= $row['temp'] ?></td>
						<td><?= $row['humi'] ?></td>
						<td><?= $row['light'] ?></td>
						<td><?= $row['last_update'] ?></td>
					</tr>
					<?php
				}
				?>

			</table>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		setInterval(function() {
			window.location.reload(true);
		}, 300000);
	});
</script>

