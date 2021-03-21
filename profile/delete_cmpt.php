<?php
include './../db_connect.php';
if (isset($_POST['code'])) {
	$code = $_POST['code'];
	$q = "DELETE FROM groups WHERE code='$code'";
	$r = mysqli_query($conn, $q);
	$q1 = "DELETE FROM group_details WHERE code='$code'";
	$r1 = mysqli_query($conn, $q1);
	if ($r && $r1) {
		echo 'Successfully deleted!';
	} else {
		echo "There's some error in deleting group";
	}
}
?>