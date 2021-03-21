<?php
	include './../db_connect.php';
	$q = "SELECT question from questions order by date desc, time desc";
	$r = mysqli_query($conn, $q);
	$all = mysqli_fetch_all($r, MYSQLI_ASSOC);
	for ($i = 0; $i < count($all); $i++)
		echo $all[$i]['question']. 'NEXTTTT';
?>