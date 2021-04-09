<?php
include 'config.php';
$no = $_GET['no'];
$perintah="DELETE FROM zakat WHERE no ='$no'";
$hasil=mysqli_query($con,$perintah);
if($hasil){
    echo "<SCRIPT>alert('Data Telah Terhapus');window.location='tampil.php'</SCRIPT>";
}
else{
    echo "<SCRIPT>alert('Gagal Terhapus');window.location='input.php'</SCRIPT>";
}
?>