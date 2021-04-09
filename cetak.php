<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Laporan</title>
</head>
<body>
  <div>
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
      <table rules="all" style="width: 100%; border: 1px solid black; ">
      <tr>
        <td align="center">No</td>
        <td align="center">Jenis Zakat</td>
        <td align="center">Nominal</td>
        <td align="center">Nama Lengkap</td>
        <td align="center">Nomor HP</td>
        <td align="center">Email</td>
        <td align="center">Nama Bank</td>
        <td align="center">Nomor Rekening</td>
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
          </tr>
            </tbody>
            <?php
            }
            ?>
            </table>

        </center>
      <script>
        window.print();
      </script>
  </body>
</html>