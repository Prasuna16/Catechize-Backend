<?php
	include './../db_connect.php';
	if (isset($_POST['username'])) {
		$user = $_POST['username'];
		$que = $_POST['question'];
		$q = "INSERT INTO questions(postedby, question, status) VALUES ('$user', '$que', 1)";
		$r = mysqli_query($conn, $q);
		if ($r) {
			echo 'Success';
		} else {
			echo 'Some error occurred';
		}
	}
?>