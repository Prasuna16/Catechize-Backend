<?php
	include 'db_connect.php';
	if (isset($_POST['user'])) {
		$owner = $_POST['user'];
	// $owner = 'prasuna16';
		$q = "SELECT g.code, p.group_name FROM group_details g join groups p on g.code = p.code WHERE g.user='$owner'";
		// echo $q . '<br>';
		$r = mysqli_query($conn, $q);
		$details = mysqli_fetch_all($r, MYSQLI_ASSOC);
		if (count($details) > 0) {
			$grps = "";
			for ($i = 0; $i < count($details) - 1; $i++) {
				$grps = $grps . "'" . $details[$i]['code'] . "',";
			}
			$grps = $grps . "'" . $details[count($details)-1]['code'] . "'";
		} else {
			$grps = "''";
		}
		// echo $grps .'<br>';
		$q = "SELECT username, description from posts where group_code is NULL or group_code IN ($grps) or group_code IN ('') order by date desc, time desc";
		// echo $q;
		$r = mysqli_query($conn, $q);
		$all = mysqli_fetch_all($r, MYSQLI_ASSOC);
		for ($i = 0; $i < count($all); $i++)
			echo $all[$i]['username'] . 'NEXTT' . $all[$i]['description']. 'NEXTTUSER';
	}
?>