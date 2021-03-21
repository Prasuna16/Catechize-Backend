<?php
	include 'db_connect.php';
	if (isset($_POST['email'])) {
		$email = $_POST['email'];
		$user = $_POST['username'];
		$pass = $_POST['password'];
		$ip = $_POST['ip'];
		$fn = $_POST['fullname'];
		$q = "SELECT username from users where Email='$email'";
		$r = mysqli_query($conn, $q);
		$all = mysqli_fetch_all($r, MYSQLI_ASSOC);
		if (count($all) > 0) {
			echo 'Email already exists';
		} else {
			$q = "SELECT username from users where username='$user'";
			$r = mysqli_query($conn, $q);
			$all = mysqli_fetch_all($r, MYSQLI_ASSOC);
			if (count($all) > 0) {
				echo 'Username exists';
			} else {
				$q = "INSERT INTO users(Email, username, Password, IPaddress, FullName, Status) VALUES ('$email', '$user', '$pass', '$ip', '$fn', 1)";
				$r = mysqli_query($conn, $q);
				$q = "INSERT INTO profile(username, points, badge, wishlist) VALUES ('$user', 0, 'None', '')";
				$r = mysqli_query($conn, $q);
				echo 'Success';
			}
		}
	}
?>