<?php
	include './../db_connect.php';
	$q = "SELECT title from documents";
	$r = mysqli_query($conn, $q);
	$all = mysqli_fetch_all($r, MYSQLI_ASSOC);
	for ($i = 0; $i < count($all); $i++)
		echo $all[$i]['title']. '.pdfNEXTTTT';
?>