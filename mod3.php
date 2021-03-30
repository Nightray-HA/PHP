<html>
<head>
	<title>Konversi Tipe Data</title>
</head>
<body>
	<?php
		$a=300.4;//deklarasi variabel
		echo $a;//menampilkan nilai a
		echo "<br>";

		//mengubah tipe data a menjadi double
		echo "tipe Double : ",doubleval($a),"<br>";

		//mengubah tipe data a menjadi integer
		echo "tipe Integer : ",intval($a),"<br>";
        
		//mengubah tipe data a menjadi string
		echo "tipe string :", strval($a);
	?>
</body>
</html>