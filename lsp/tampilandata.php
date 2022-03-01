<?php 
// koneksi database
require 'koneksi.php';
// mengambil data dari tbl_pemesan
$users = read("SELECT * FROM tbl_pemesan");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <!-- bootsrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <!-- css -->
    <link rel="stylesheet" href="style.css">
    <title>data pemesanan</title>
</head>
<body>
<div class="wrap">
    <!-- header -->
    <div class="header">			
		<img src="img/logo.png" alt="" >
		<h1><b>Data Pemesanan</b></h1>
	</div>
    <!-- navbar -->
	<div class="menu">
		<ul>
			<li><a href="tampilan.php">Home</a></li>
			<li><a href="wisata.php">Wisata</a></li>
			<li><a href="index.php">Pesan Tiket</a></li>			
		</ul>
	</div>
<!-- konten -->
    <div class="badan">
    <div class="konten">
        <table class="table table-bordered">
            <thead class="thead-dark">

                <tr>
                    <th> No</th>
                    <th> Nama Pemesan</th>
                    <th> NIK</th>
                    <th> Nomor Telepon</th>
                    <th> Wisata</th>
                    <th>Tanggal Pemesanan</th>
                    <th> Jumlah Tiket</th>
                    <th> Pengunjung Anak-anak</th>
                    <th> Harga Tiket</th>
                    <th>Potongan Harga</th>
                    <th> Total Bayar</th>
                </tr>
            </thead>
            <!-- otomatisasi id -->
            <?php $i = 1; ?>
            <?php foreach ($users as $u) : ?>
                <tbody>
                    <tr>
                        <!-- memanggil data yang ada di tbl_pemesan -->
                        <td><?= $u['id'] ?></td>
                        <td><?= $u['nama'] ?></td>
                        <td><?= $u['nik'] ?></td>
                        <td><?= $u['nohp'] ?></td>
                        <td><?= $u['tiketwisata'] ?></td>
                        <td><?= $u['tanggal'] ?></td>
                        <td><?= $u['jumlah'] ?></td>
                        <td><?= $u['anak'] ?></td>
                        <td><?= $u['harga'] ?></td>
                        <td><?= $u['potongan'] ?></td>
                        <td><?= $u['total'] ?></td>
                    </tr>
                </tbody>
            <!-- otomatisasi ID -->
            <?php $i++ ?>
            <!-- tutup foreach -->
            <?php endforeach ?>        
        </table>    
    </div>
    </div>
    <!-- footer -->
		<div class="footer">
			Copyright @ Azhar Nadhif 2022
		</div>
</div>
</body>
</html>