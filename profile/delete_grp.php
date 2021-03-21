<?php
include './../db_connect.php';
if (isset($_POST['code'])) {
	$code = $_POST['code'];
	$user = $_POST['user'];
	$q1 = "DELETE FROM group_details WHERE code='$code' and user='$user'";
	$r1 = mysqli_query($conn, $q1);
	if ($r1) {
		echo 'Successfully exited!';
	} else {
		echo "There's some error in exiting group";
	}
}
?>