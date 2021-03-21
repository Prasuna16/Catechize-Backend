<?php
	include 'db_connect.php';
	if (isset($_POST['username'])) {
		$user = $_POST['username'];
		$q = "SELECT u.FullName, p.points, p.badge, p.wishlist FROM users u JOIN profile p ON u.username = p.username WHERE u.username = '$user'";
		$r = mysqli_query($conn, $q);
		$details = mysqli_fetch_all($r, MYSQLI_ASSOC);
		echo $details[0]['FullName'].'NEXTT'.$details[0]['points'].'NEXTT'.$details[0]['badge'].'NEXTT'.$details[0]['wishlist'];
	}
?>