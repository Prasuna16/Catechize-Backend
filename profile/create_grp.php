<?php
include './../db_connect.php';
if (isset($_POST['code'])) {
	$code = $_POST['code'];
	$grp_name = $_POST['grp_name'];
	$owner = $_POST['owner'];
	$q = "INSERT INTO groups(code, group_name, owner) VALUES ('$code', '$grp_name', '$owner')";
	$r = mysqli_query($conn, $q);
	if ($r) {
		echo 'Group created!';
	} else {
		echo 'Group creation failed';
	}
	$q = "INSERT INTO group_details(user, code) VALUES ('$owner', '$code')";
	$r = mysqli_query($conn, $q);
}
?>