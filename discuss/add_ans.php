<?php
	include './../db_connect.php';
	if (isset($_POST['username'])) {
		$user = $_POST['username'];
		$que = $_POST['question'];
		$ans = $_POST['answer'];
		$q = "INSERT INTO answers(question, answer, username) VALUES ('$que', '$ans', '$user')";
		$r = mysqli_query($conn, $q);
		if ($r) {
			echo 'Success';
		} else {
			echo 'Some error occurred';
		}
	}
?>