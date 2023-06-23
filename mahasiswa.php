<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data Mahasiswa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <table class="table table-striped">
      <?php
        include 'koneksi.php';
        $sql = 'SELECT p.email, m.nim, m.nama_mahasiswa, m.alamat, m.jenis_kelamin, m.tanggal_lahir 
              FROM `mahasiswa` m
              INNER JOIN `pengguna` p
              ON m.nim = p.nim 
              WHERE p.nim = "$_SESSION['nim']";';
        $hasil = mysqli_query($koneksi,$sql);
      
      while($baris = mysqli_fetch_assoc($hasil)){
      ?>
        <tr>
          <td>Email</td>
          <td><?=$baris['email'];?></td>
        <tr>
          <tr>
          <td>Nim</td>
          <td><?=$baris['nim'];?></td>
        <tr>
          <tr>
          <td>Nama</td>
          <td><?=$baris['nama_mahasiswa'];?></td>
        <tr>
          <tr>
          <td>Alamat</td>
          <td><?=$baris['alamat'];?></td>
        <tr>
          <tr>
          <td>Jenis Kelamin</td>
          <td><?=$baris['jenis_kelamin'];?></td>
        <tr>
          <tr>
          <td>Tanggal Lahir</td>
          <td><?=$baris['tanggal_lahir'];?></td>
        <tr>
      <?php 
      }
      ?>
  </table>
</div>
</body>
</html>
