<!DOCTYPE html>
<html>
<head>
    <title>Admin Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
        .container{
            margin: 50px 50px;
        }
    </style>
</head>
<body id="login">
    
<div class="container">
    <h1>Data Mahasiswa</h1>
    <form action="search.php">
    	<input type="text" name="search" placeholder="cari nama mahasiswa">
    	<input type="submit" name="Cari">
    </form>
    <a href="admin.php">Refresh</a>
	<div class="container ">
	  <h2>Data Mahasiswa</h2>
	  <table border="1">
	    <thead>
	      <tr>
	        <th>Email</th>
	        <th>Nim</th>
	        <th>Nama</th>
	        <th>Alamat</th>
	        <th>Jenis Kelamin</th>
	        <th>Tanggal Lahir</th>
	      </tr>
	    </thead>
	    <tbody>
	      <?php
	      include 'koneksi.php';
	      $sql = 'SELECT p.email, m.nim, m.nama_mahasiswa, m.alamat, m.jenis_kelamin, m.tanggal_lahir 
				FROM `mahasiswa` m
				INNER JOIN `pengguna` p
				ON m.nim = p.nim;';
	      $hasil = mysqli_query($koneksi,$sql);
	      
	      while($baris = mysqli_fetch_assoc($hasil)){
	      ?>
	        <tr>
	          <td><?=$baris['email'];?></td>
	          <td><?=$baris['nim'];?></td>
	          <td><?=$baris['nama_mahasiswa'];?></td>
	          <td><?=$baris['alamat'];?></td>
	          <td><?=$baris['jenis_kelamin'];?></td>
	          <td><?=$baris['tanggal_lahir'];?></td>
	      </tr>
	      <?php 
	      	}
	      ?>
	    <a href="index.php">Logout</a>
	</div>

</body>
</html>