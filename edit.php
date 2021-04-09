<?php
include 'config.php';
$no = $_GET['no'];
// Query satu record artikel dari tabel sesuai nilai $articleID
$perintah="SELECT * FROM zakat WHERE no ='$no'";
$hasil=mysqli_query($con,$perintah);
$data=mysqli_fetch_array($hasil);
?>
<form name=article method=post action=update.php>
<input type="hidden" name="ID" value="<?php echo "$data[no]" ?>">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>INPUT</title>
</head>
<body >
    <div style="width: 58%;  margin: 4px auto; padding: 1x;">
        <h1 style="text-align: center">INPUT DATA</h1>
        <h1 style="text-align: center">PEMBAYARAN ZAKAT</h1>
        <hr>
        <form action="update.php" method="POST">
            <h3 style="display: block; margin-bottom: 5px;">No</h3>
            <input type="number" name="no" value="<?php echo "$data[no]" ?>" style="width: 99%; height: 20px;">

            <h3 style="display: block; margin-bottom: 5px;">Jenis Zakat</h3>
            <select value="<?php echo "$data[jenis_zakat]" ?>" name="jenis_zakat" style="width: 99%; height: 20px;">
                <option value="<?php echo "$data[jenis_zakat]" ?>" selected>-</option>
                <option value="<?php echo "$data[jenis_zakat]" ?>">Zakat Penghasilan</option>
                <option value="<?php echo "$data[jenis_zakat]" ?>">Zakat Maal</option>
                <option value="<?php echo "$data[jenis_zakat]" ?>"">Zakat Fitrah</option>
            </select>

            <h3 style="display: block; margin-bottom: 5px;">Nominal</h3>
            <input type="text" value="<?php echo "$data[nominal]" ?>" name="nominal" style="width: 99%; height: 20px;">

            <h3 style="display: block; margin-bottom: 5px;">Nama Lengkap</h3>
            <input type="text" value="<?php echo "$data[nama]" ?>" name="nama" style="width: 99%; height: 20px;">

            <h3 style="display: block; margin-bottom: 5px;">Nomor HP</h3>
            <input type="text" value="<?php echo "$data[no_hp]" ?>" name="hp" style="width: 99%; height: 20px;">

            <h3 style="display: block; margin-bottom: 5px;">Email</h3>
            <input type="email" value="<?php echo "$data[email]" ?>" name="e-mail" style="width: 99%; height: 20px;">

            <h3 style="display: block; margin-bottom: 5px;">Nama Bank</h3>
            <input type="text" value="<?php echo "$data[nama_bank]" ?>" name="bank" style="width: 99%; height: 20px;">
        
            <h3 style="display: block; margin-bottom: 5px;">Nomor Rekening</h3>
            <input type="number" value="<?php echo "$data[no_rekening]" ?>" name="rekening" style="width: 99%; height: 20px;">
            <div>
                <button type="submit" name="simpan" style="margin-top: 15px; height: 40px; background-color: blue; color: white;">Update</button>
                <a href="tampil.php" type="submit" name="lihat" style="margin-top: 15px; height: 40px; background-color: blue; color: white;">Cencel</a>
                
            </div>
        </form>
    </div>
</body>
</html>