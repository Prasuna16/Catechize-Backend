<?php
	include './../db_connect.php';
	if (isset($_POST['username'])) {
		$user = $_POST['username'];
		$que = $_POST['question'];
		$ans = $_POST['answer'];
		// $user = 'prasuna16';
		// $que = 'sample';
		// $ans = 'ans';
		$q = "INSERT INTO answers(question, answer, username) VALUES ('$que', '$ans', '$user')";
		$r = mysqli_query($conn, $q);
		// $r = "smeth";
		if ($r) {
			echo 'Success';
		} else {
			echo 'Some error occurred';
		}

		$q = "SELECT points, badge FROM profile WHERE username='$user'";
		$r = mysqli_query($conn, $q);
		$res = mysqli_fetch_all($r, MYSQLI_ASSOC);
		// print_r($res);
		$pts = $res[0]['points'] + 5;
		$bdg = "Bronze";
		if ($pts >= 100) {
			$bdg = "Platinum";
		} else {
			if ($pts >= 50) {
				$bdg = "Gold";
			} else {
				if ($pts >= 25) {
					$bdg = "Silver";
				}
			}
		}
		// echo $q;

		$q = "UPDATE profile SET points='$pts', badge='$bdg' WHERE username='$user'";
		$r = mysqli_query($conn, $q);
	}
?>