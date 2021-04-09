<?php
$con 		= mysqli_connect("localhost", "root", "", "zakat_db");
$no 		= mysqli_real_escape_string($con, $_POST['no']);
$jenis 		= mysqli_real_escape_string($con, $_POST['jenis_zakat']);
$nominal	= mysqli_real_escape_string($con, $_POST['nominal']);
$nama 		= mysqli_real_escape_string($con, $_POST['nama']);
$nomor		= mysqli_real_escape_string($con, $_POST['hp']);
$email 		= mysqli_real_escape_string($con, $_POST['e-mail']);
$bank 		= mysqli_real_escape_string($con, $_POST['bank']);
$rekening 	= mysqli_real_escape_string($con, $_POST['rekening']);

$query = "insert into zakat (no,jenis_zakat,nominal,nama,no_hp,email,nama_bank,no_rekening)
    values('$no','$jenis','$nominal','$nama','$nomor','$email','$bank','$rekening')";
$result = mysqli_query($con, $query);
if($result){
    echo "<SCRIPT>alert('Data Telah Tersimpan');window.location='input.php'</SCRIPT>";
}
else{
    echo "<SCRIPT>alert('Gagal menyimpan');window.location='input.php'</SCRIPT>";
}
?>