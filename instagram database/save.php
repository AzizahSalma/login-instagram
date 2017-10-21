<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>
<font size="10px"><b> Simpan Data....</b></font>
<br>
<?php
$servername = "localhost";
$dbusername ="root";
$dbpassword ="";
$dbname ="dblogin";

$nomor_ponsel=$_POST['nomor_ponsel'];
$email=$_POST['email'];
$nama_lengkap=$_POST['nama_lengkap'];
$nama_panggilan=$_POST['nama_panggilan'];
$kata_sandi=$_POST['kata_sandi'];

$conn = new mysqli($servername,$dbusername,$dbpassword,$dbname);
if($conn->connect_error){
	die("connection failed:" .$conn->connect_error);
}
if(empty($nomor_ponsel)){
echo"Data tidak ditemukan";
die();
}
if (empty($email)){
echo"Data tidak ditemukan";
die();
}
if (empty($nama_lengkap)){
echo"Data tidak ditemukan";
die();
}
if (empty($nama_panggilan)){
echo"Data tidak ditemukan";
die();
}
if (empty($kata_sandi)){
echo"Data tidak ditemukan";
die();
}
$sql = "INSERT INTO tblogin (nomor_ponsel, email, nama_lengkap, nama_panggilan, kata_sandi)
VALUES('$nomor_ponsel','$email','$nama_lengkap','$nama_panggilan','$kata_sandi')";
if($conn->query($sql)=== TRUE){
echo "
<table>
<tr>
<td>Nomor Ponsel</td><td>:</td><td>$nomor_ponsel</td>
</tr>
<tr>
<td>Email</td><td> :</td><td> $email</td>
</tr>
<tr>
<td>Nama Lengkap</td><td>:</td><td> $nama_lengkap</td>
</tr>
<tr>
<td>Nama Pengguna</td><td>:</td><td>$nama_panggilan</td>
</tr>
<tr>
<td>Kata Sandi</td><td>:</td><td> $kata_sandi</td>
</tr> 
</table>";
}else{
echo "ERROR : " .sql."<br>".$conn->error;
}
$conn->close();
?>
</body>
</html>
