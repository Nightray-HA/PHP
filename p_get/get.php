<html>
<head>
	<title></title>
</head>
<body>
	<!--membuat form yang menggunakan method GET-->
	<form method="GET" action="getAct.php">
		<!--membuat tabel-->
		<table width="400" align="center" cellpadding="2" cellspacing="2">
			<!--membuat inputan-->
			<tr>
				<td width="130">Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td width="130">Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			
			<!--tombol untuk memnjalankan file getAct.php-->
			<tr>
				<td>
					<input type="submit" name="btnLogin" value="Login">
					<input type="reset" name="reset" value="Reset">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>