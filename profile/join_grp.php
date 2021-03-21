<?php
include './../db_connect.php';
if (isset($_POST['code'])) {
	$code = $_POST['code'];
	$user = $_POST['user'];
	$q = "SELECT * FROM groups WHERE code='$code'";
	$r = mysqli_query($conn, $q);
	$d = mysqli_fetch_all($r, MYSQLI_ASSOC);
	if (count($d) > 0) {
		$q = "SELECT * FROM group_details WHERE code='$code' and user='$user'";
		$r = mysqli_query($conn, $q);
		if ($r) {
			$d = mysqli_fetch_all($r, MYSQLI_ASSOC);
			if (count($d) > 0) {
				echo 'You are already member of that group.';
			} else {
				$q = "INSERT INTO group_details(user, code) VALUES ('$user', '$code')";
				$r = mysqli_query($conn, $q);
				if ($r) {
					echo 'Joined successfully!';
				} else {
					echo "There's some error in joining";
				}
			}
		} else {
			echo 'You are already member of that group.';
		}
	} else {
		echo "There's no such group.";
	}
}
?>