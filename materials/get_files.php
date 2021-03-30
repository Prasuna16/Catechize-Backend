<?php
	include './../db_connect.php';
	if (isset($_POST['search'])) {
		$search = '%'. $_POST['search'] . '%';
		$user = $_POST['user'];
	// $search = "%%";
	// $user = "qwertyy";
		$q = "SELECT title from documents WHERE title like '$search'";
		$r = mysqli_query($conn, $q);
		$all = mysqli_fetch_all($r, MYSQLI_ASSOC);
		for ($i = 0; $i < count($all); $i++)
			echo $all[$i]['title']. '.pdfNEXTTTT';
		echo 'BREAKKKK';
		$q = "SELECT book from wishlist WHERE book like '$search' and username='$user'";
		// echo $q;
		$r = mysqli_query($conn, $q);
		$all = mysqli_fetch_all($r, MYSQLI_ASSOC);
		for ($i = 0; $i < count($all); $i++)
			echo $all[$i]['book']. 'NEXTTTT';
		if (count($all) <= 0) {
			echo "No wish listed materials yet!";
		}
	}
?>