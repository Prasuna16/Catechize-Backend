<?php
include './../db_connect.php';
if (isset($_POST['owner'])) {
	$owner = $_POST['owner'];
	$q = "SELECT g.code, p.group_name FROM group_details g join groups p on g.code = p.code WHERE g.user='$owner'";
	$r = mysqli_query($conn, $q);
	$details = mysqli_fetch_all($r, MYSQLI_ASSOC);
	for ($i = 0; $i < count($details); $i++) {
		echo $details[$i]['code'] . 'NEXTT' . $details[$i]['group_name'];
		echo 'NEXTTLINE';
	}
	if (count($details) <= 0) {
		echo 'No groups';
	}
}
?>