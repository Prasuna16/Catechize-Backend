<?php
	include 'db_connect.php';
	if (isset($_POST['code'])) {
		$user = $_POST['username'];
		$desc = $_POST['description'];
		$code = $_POST['code'];
		$grpName = $_POST['grpName'];
		$q = "INSERT INTO posts(username, description, group_code, group_name) VALUES ('$user', '$desc', '$code', '$grpName')";
		$r = mysqli_query($conn, $q);
		if ($r) {
			echo 'Post added successfully';
		} else {
			echo 'Some error occurred';
		}
	} else {
		if (isset($_POST['username'])) {
			$user = $_POST['username'];
			$desc = $_POST['description'];
			$q = "INSERT INTO posts(username, description) VALUES ('$user', '$desc')";
			$r = mysqli_query($conn, $q);
			if ($r) {
				echo 'Post added successfully';
			} else {
				echo 'Some error occurred';
			}
		}
	}
?>