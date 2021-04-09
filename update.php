<?php
include 'config.php';

$con 		= mysqli_connect("localhost", "root", "", "zakat_db");
$no 		= mysqli_real_escape_string($con, $_POST['no']);
$jenis 		= mysqli_real_escape_string($con, $_POST['jenis_zakat']);
$nominal	= mysqli_real_escape_string($con, $_POST['nominal']);
$nama 		= mysqli_real_escape_string($con, $_POST['nama']);
$nomor		= mysqli_real_escape_string($con, $_POST['hp']);
$email 		= mysqli_real_escape_string($con, $_POST['e-mail']);
$bank 		= mysqli_real_escape_string($con, $_POST['bank']);
$rekening 	= mysqli_real_escape_string($con, $_POST['rekening']);

$update = "UPDATE zakat SET no='$no', jenis_zakat='$jenis', nominal='$nominal', nama='$nama', no_hp='$nomor', email='$email', nama_bank='$bank', no_rekening='$rekening' WHERE no ='$no'"; 
$hasil=mysqli_query($con,$update); 
if ($hasil) 
{ 
 	echo "<SCRIPT>alert('Data Berhasil Di Update...');window.location='tampil.php'</SCRIPT>";
}
else 
{ 
 	echo "<SCRIPT>alert('Gagal Merubah Data...');window.location='edit.php'</SCRIPT>";
} 
?>