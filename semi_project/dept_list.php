<?php header('Content-Type: application/json; charset=UTF-8'); ?>
<?php
	include('inc/db_helper.php');
	include('inc/helper.php');

	db_open();

	$sql = "SELECT * FROM user";
	$result = mysqli_query($_DB, $sql);
	$row = mysqli_fetch_all($result, MYSQLI_ASSOC);
	$data = ['list' => $row];

	echo json_encode($data, JSON_UNESCAPED_UNICODE);
?>