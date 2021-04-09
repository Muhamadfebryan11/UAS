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
        <h1 style="text-align: center">INPUT DATA PEMBAYARAN ZAKAT</h1>
        <hr>
        <form action="simpan.php" method="POST">
            <h3 style="display: block; margin-bottom: 5px;">No</h3>
            <input type="number" name="no" style="width: 99%; height: 20px;" required>

            <h3 style="display: block; margin-bottom: 5px;">Jenis Zakat</h3>
            <select name="jenis_zakat" style="width: 100%; height: 30px;" id="jenis_zakat" required>
            <option value="-">-</option>
			<option value="Zakat Penghasilan">Zakat Penghasilan</option>
			<option value="Zakat Maal">Zakat Maal</option>
			<option value="Zakat Fitrah">Zakat Fitrah</option>
			</select>

            <h3 style="display: block; margin-bottom: 5px;">Nominal</h3>
            <input type="text" name="nominal" style="width: 98%; height: 10px;" id="nominal" required>

            <h3 style="display: block; margin-bottom: 5px;">Nama Lengkap</h3>
            <input type="text" name="nama" style="width: 98%; height: 10px;" id="nama" required>

            <h3 style="display: block; margin-bottom: 5px;">Nomor HP</h3>
            <input type="text" name="hp" style="width: 98%; height: 10px;" id="hp" required>

            <h3 style="display: block; margin-bottom: 5px;">Email</h3>
            <input type="email" name="e-mail" style="width: 99%; height: 20px;" id="e-mail" required>

            <h3 style="display: block; margin-bottom: 5px;">Nama Bank</h3>
            <input type="text" name="bank" style="width: 98%; height: 10px;" id="bank" required>
			
			<h3 style="display: block; margin-bottom: 5px;">Nomor Rekening</h3>
            <input type="number" name="rekening" style="width: 99%; height: 20px;" id="rekening" required>
            <div>
                <button type="submit" name="simpan" style="margin-top: 15px; height: 40px; background-color: blue; color: white;">SIMPAN</button>
                <a href="tampil.php" type="submit" name="lihat" style="margin-top: 15px; height: 40px; background-color: blue; color: white;">Lihat Data</a>
                
            </div>
        </form>
    </div>
</body>
</html>