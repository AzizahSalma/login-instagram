<!DOCTYPE html>
<html>
<head>
	<title>data instagram</title>
	<style>
div{
	width :500px;
	height:400px;
}
	.garis_tepi1 {
		border:5px solid black;
	}
</style>
</head>
<body>
<div class="garis_tepi1">
<font face="Brush Script MT" size="10px"><p align="center">Instagram</p></font>
<table>
	<tr>
		<td>Nomer Ponsel</td><td> : </td><td><?php echo $_GET["Nomor"]; ?></td>
	</tr>
	<tr>
		<td>Email</td><td> : </td><td><?php echo $_GET["Email"]; ?></td>
	</tr>
	<tr>
		<td>Nama Lengkap</td><td> : </td><td><?php echo $_GET["NL"]; ?></td>
	</tr>
	<tr>
		<td>Nama Pengguna</td><td>: </td><td><?php echo $_GET["NP"]; ?></td>
	</tr>
	<tr>
		<td>Kata Sandi</td><td>: </td><td><?php echo $_GET["KS"]; ?></td>
	</tr>
</table>
</div>
</body>
</html>
