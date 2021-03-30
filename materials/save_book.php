<?php
	include './../db_connect.php';
	if (isset($_POST['book'])) {
		$book = $_POST['book'];
		$action = $_POST['action'];
		$user = $_POST['user'];
		if ($action == "saved") {
			$q = "DELETE FROM wishlist WHERE book = '$book' and username='$user'";
			$r = mysqli_query($conn, $q);
			if ($r) {
				echo "Removed from wishlist";
			}
		} else {
			$q = "INSERT INTO wishlist (username, book) VALUES('$user', '$book')";
			$r = mysqli_query($conn, $q);
			if ($r) {
				echo "Added to wishlist";
			}
		}
	}
?>