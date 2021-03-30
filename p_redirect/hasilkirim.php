<?php
	if (empty($_POST['nama'])) {
		//menampilkan file kosong.php
		header("Location:kosong.php");
	} else {
		//menampilkan nama yang diinput
		echo "<center>Nama:".$_POST['nama']."</center><br>";
	}
?>