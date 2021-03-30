<html>
<head>
	<title>Halaman Login</title>
</head>
<body>
	<p align = "center">LOGIN</p>
	<form method="POST" action="post.php"><!--membuat form dengan method POST-->
		<table width="400" align="center" cellpadding="2" cellspacing="2">
			<!--inputan-->
			<tr>
				<td width="130">Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td width="130">Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<!--membuat tombol untuk mengeksekusi file postAct.php-->
			<tr>
				<td>
					<input type="submit" name="btnLogin" value="Login">
					<input type="reset" name="btnReset" value="Reset">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>