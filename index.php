<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="style.css">
   <title>Tugas_Basis_Data_8</title>
</head>
<body>
   <div class="container">
      <center><h1>Laundry Bersih Selalu</h1></center>
      <div class="main">
         <?php
         include("koneksi.php");
         // query untuk menampilkan data
         $sql = 'SELECT * FROM pelanggan';
         $result = mysqli_query($conn, $sql);
         ?>
         <h3>table pelanggan</h3>
         <table>
          <tr>
            <th>id_pelangan</th>
            <th>nama</th>
            <th>alamat</th>
            <th>tgl_lahir</th>
            <th>no_telp</th>
         </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
               <td><?= $row['id_pelanggan'];?></td>
               <td><?= $row['nama'];?></td>
               <td><?= $row['alamat'];?></td>
               <td><?= $row['tgl_lahir'];?></td>
               <td><?= $row['no_telp'];?></td>
            </tr>             
            <?php endwhile; else: ?>
            <tr>
            <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
         <?php
         include("koneksi.php");
         // query untuk menampilkan data
         $sql2 = 'SELECT * FROM pegawai';
         $result = mysqli_query($conn, $sql2);
         ?>
      </table>
         <h3>tabel pegawai</h3>
         <table>
          <tr>
            <th>id_pegawai</th>
            <th>nama</th>
            <th>jabatan</th>
            <th>no_telp</th>
         </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
               <td><?= $row['id_pegawai'];?></td>
               <td><?= $row['nama'];?></td>
               <td><?= $row['jabatan'];?></td>
               <td><?= $row['no_telp'];?></td>
            </tr>             
            <?php endwhile; else: ?>
            <tr>
            <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
         </table>
         <?php
         include("koneksi.php");
         // query untuk menampilkan data
         $sql3 = 'SELECT * FROM transaksi';
         $result = mysqli_query($conn, $sql3);
         ?>
         <h3>transaksi</h3>
         <table>
          <tr>
            <th>id_transaksi</th>
            <th>id_pelanggan</th>
            <th>id_pegawai</th>
            <th>tgl_transaksi</th>
            <th>total_biaya</th>
         </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
               <td><?= $row['id_transaksi'];?></td>
               <td><?= $row['id_pelanggan'];?></td>
               <td><?= $row['id_pegawai'];?></td>
               <td><?= $row['tgl_transaksi'];?></td>
               <td><?= $row['total_biaya'];?></td>
            </tr>             
            <?php endwhile; else: ?>
            <tr>
            <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
         </table>
         <?php
         include("koneksi.php");
         $sql3 = 'SELECT * FROM detail_transaksi';
         $result = mysqli_query($conn, $sql3);
         ?>
         <h3>detail transaksi</h3>
         <table>
          <tr>
            <th>id_transaksi</th>
            <th>id_layanan</th>
            <th>jumlah</th>
         </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
               <td><?= $row['id_transaksi'];?></td>
               <td><?= $row['id_layanan'];?></td>
               <td><?= $row['jumlah'];?></td>
            </tr>             
            <?php endwhile; else: ?>
            <tr>
            <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
         </table>
         <?php
         include("koneksi.php");
         // query untuk menampilkan data
         $sql4 = 'SELECT * FROM layanan';
         $result = mysqli_query($conn, $sql4);
         ?>
         <h3>table layanan</h3>
         <table>
          <tr>
            <th>id_layanan</th>
            <th>nama_layanan</th>
            <th>harga</th>
         </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
               <td><?= $row['id_layanan'];?></td>
               <td><?= $row['nama_layanan'];?></td>
               <td><?= $row['harga'];?></td>
            </tr>             
            <?php endwhile; else: ?>
            <tr>
            <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
        </table>

      </div>
   </div>
</body>
</html>