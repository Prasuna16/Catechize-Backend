<?php
	include './../db_connect.php';
	if (isset($_POST['question'])) {
		$que = $_POST['question'];
		$q = "SELECT answer from answers where question='$que' order by date desc, time desc";
		$r = mysqli_query($conn, $q);
		$all = mysqli_fetch_all($r, MYSQLI_ASSOC);
		for ($i = 0; $i < count($all); $i++)
			echo $all[$i]['answer']. 'NEXTTTT';
	}
?>