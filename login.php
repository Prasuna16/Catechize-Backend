<?php
	include 'db_connect.php';
	if (isset($_POST['ip'])) {
		$ip = $_POST['ip'];
		$q = "SELECT username from users where IPaddress='$ip' and status=1";
		$r = mysqli_query($conn, $q);
		$all = mysqli_fetch_all($r, MYSQLI_ASSOC);
		if (count($all) > 0) {
			echo 'Success';
		} else {
			echo 'Not found';
		}
	}
	if (isset($_POST['username'])) {
		$user = $_POST['username'];
		$pass = $_POST['password'];
		$q = "SELECT IPaddress from users where username='$user' and Password='$pass'";
		$r = mysqli_query($conn, $q);
		$all = mysqli_fetch_all($r, MYSQLI_ASSOC);
		if (count($all) > 0) {
			$ip = $all[0]['IPaddress'];
			$q = "UPDATE users SET status = 1 where IPaddress = '$ip'";
			$r = mysqli_query($conn, $q);
			echo 'Success';
		} else {
			echo 'Incorrect';
		}
	}
?>