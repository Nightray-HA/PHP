<?php
	if (empty($_POST['nama'])||empty($_POST['email'])) {
		header("Location:kosong.php");
	}else{
		//memanggil file include
		include 'include.php';
		//script untuk mengambil nilai variabel pada form dan menampilkannya lagi
		echo "<center>Nama :".$_POST['nama']."</center><br>";
		echo "<center>Email :".$_POST['email']."</center><br>";
		
	}
	
?>