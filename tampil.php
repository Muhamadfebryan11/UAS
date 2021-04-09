<html>
<head>
    <title>Data Pembayar Zakat</title>
</head>
<style>
    table td, table th {
        border: 1px solid black;
        padding: 8px;
    }
</style>
<body style="background-color: silver">
    <div style="width: 70%; background-color: white; margin: 10px auto; padding: 20px;"> 
        <center>
            <td>
                <h1>
                    <?php
                    date_default_timezone_set('Asia/Jakarta');
                    $jam = date("H:i:s");
                    echo "Data Pembayar Zakat<br>";
                    echo "Per " .date('d-F-Y');
                    echo " ".$jam."<br>";
                    
                    ?>
                </h1>
                

            </td>
            <tr><br></tr>
            <tr><br></tr>
            <table style="width: 100%; border: 1px solid black;">
                <tr>
                    <td>No</td>
					<td>Jenis Zakat</td>
                    <td>Nominal</td>
                    <td>Nama Lengkap</td>
                    <td>Nomor HP</td>
					<td>Email</td>
					<td>Nama Bank</td>
					<td>Nomor Rekening</td>
                    <td>Action</td>
                </tr>

                <tbody>
                <?php
                include "config.php";
                $con = mysqli_connect("localhost", "root", "", "zakat_db");
                $perintah="SELECT * FROM zakat ORDER BY no ASC";
                $hasil=mysqli_query($con,$perintah);
                while ($data = mysqli_fetch_array($hasil)) {
                ?>
                <tr>
                    <td><?php echo $data['no'];?></td>
                    <td><?php echo $data['jenis_zakat'];?></td>
                    <td><?php echo $data['nominal'];?></td>
                    <td><?php echo $data['nama'];?></td>
                    <td><?php echo $data['no_hp'];?></td>
                    <td><?php echo $data['email'];?></td>
                    <td><?php echo $data['nama_bank'];?></td>
                    <td><?php echo $data['no_rekening'];?></td>
                    <td>
                    <a href="edit.php?no=<?php echo $data['no'];?>">Edit</a></br>
                    <a href="delete.php?no=<?php echo $data['no'];?>">Hapus</a></br>
                    </td>   
                </tr>
            </tbody>
            <?php
            }
            ?>
                
            </table>
                <p align=left><a href="input.php">Tambah Data </a></p>
                <p align=right><a href="cetak.php">Cetak</a></p>
        </center>
    </div>
</body>
</html>