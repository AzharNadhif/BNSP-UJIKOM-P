<?php
require 'koneksi.php';
// $users = read("SELECT * FROM tbl_barang");

    if (isset($_POST["simpan"])) {

        //cek data berhasil atau tidak
        if (register($_POST) > 0) {
            echo "
                <script>
                    alert('Terima Kasih Pemesanan Anda Sedang Diproses !');
                    document.location.href = 'tampilandata.php';
                </script>
            ";
        } else {
            echo "
            <script>
                alert('data gagal diproses !');
                document.location.href = 'index.php';
            </script>
            ";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <!-- bootsrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="style.css ">
    <title>wisata kota Bogor</title>
</head>
<body>
<div class="wrap">
    <!-- header -->
    <div class="header">			
		<img src="img/logo.png" alt="" >
		<h1><b>Pembelian Tiket</b></h1>
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

    <table style="margin-left:auto;margin-right:auto">
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="get">
        <div class="form-group">
            <table>
            <tr><br></tr> 
                <tr>
                    <td>Pilih Tiket</td>
                    <td>:</td>
                    <td>
                        <select name="id">
                            <?php

                            //perintah untuk menampilkan semua data barang
                            $sql = "select id, tiketwisata from tbl_tiket";
                            $hasil = mysqli_query($conn, $sql);
                            $no = 0;
                            while ($data = mysqli_fetch_array($hasil)) {
                                $no++;
                                $ket = "";
                                if (isset($_GET['id'])) {
                                    $id = trim($_GET['id']);

                                    if ($id == $data['id']) {

                                        $ket = "selected";
                                    }
                                }
                            ?>
                            <!-- mengambil data ID dan TIKETWISATA -->
                                <option <?php echo $ket; ?> value="<?php echo $data['id'] ?>">
                                    <?php echo $data['id'] ?>-
                                    <?php echo $data['tiketwisata'] ?>
                                </option>
                            <?php
                            }
                            ?>
                        </select>
                    </td>
                    <td>
                        <input type="submit" name="submit" value="pilih">
                    </td>
                    <td>
                       <i style="color: red;">*silakan pilih destinasi wisata terlebih dulu</i>
                    </td>
                </tr>

            </table>

    </form>
    </table>
    <?php
    // mengambil semua data lewat id yang ada di tbl_tiket
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "SELECT * FROM tbl_tiket where id=$id";
        $hasil = mysqli_query($conn, $sql);
        $data = mysqli_fetch_assoc($hasil);
    }
    ?>
    <!-- tabell -->
    <table >
        <form action="" method="post">   
        <tr>
            <td>Nama Pemesan</td>
            <td>:</td>
            <td><input type="text" name="nama" placeholder="Masukkan Nama anda" required=""></td>
        </tr>
        <tr>
            <td>Masukkan NIK</td>
            <td>:</td>
            <td><input type="text" name="nik" placeholder="Masukkan NIK anda" required=""></td>
        </tr>
        <tr>
            <td>Nomor Telepon</td>
            <td>:</td>
            <td><input type="text" id="nohp" name="nohp" placeholder="Masukkan Nomor aktif" required=""></td>
        </tr>
        <tr>
            <td>Tempat Wisata</td>
            <td>:</td>
            <td><input type="text" name="tiketwisata" value="<?php echo $data['tiketwisata']; ?>"></td>
        </tr>
        <tr>
            <td>Harga </td>
            <td>:</td>
            <td><input type="text" name="harga" value="<?php echo $data['harga']; ?>"></td>
        </tr>
        <!--operasi hitung -->
        <?php
            if (isset($_POST['hitung'])){
                $harga =$_POST['harga'];
                $jumlah =$_POST['jumlah'];
                $anak =$_POST['anak'];
                $potongan =$harga*$anak;
                $total =$harga*$jumlah-$potongan;
                
            }
        ?>
        <tr>
            <td>Tanggal Pemesanan</td>
            <td>:</td>
            <td><input type="date" name="tanggal" required=""></td>
        </tr>
        <tr>
            <td>Jumlah Pengunjung</td>
            <td>:</td>
            <td><input type="number" name="jumlah" value="<?php echo $jumlah ?>"></td>
        </tr>
        <tr>
            <td>Pengunjung Anak-anak</td>
            <td>:</td>
            <td><input type="number" name="anak" value="<?php echo $anak ?>" ></td>
        </tr>
        <tr>
            <td>Potongan Harga</td>
            <td>:</td>
            <td><input type="number" name="potongan" value="<?php echo $potongan ?>"></td>
            <td><i style="color: red;">*tiket untuk anak anak di bawah 12 tahun gratis</i></td>
        </tr>
        <tr>
            <td>Harga Total</td>
            <td>:</td>
            <td><input type="number" name="total" value="<?php echo $total ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
                <input type="submit" name="hitung" value="Hitung">
                <input type="submit" name="simpan" value="Simpan">
                <input type="submit" name="batal" value="Batal">
            </td>
        </tr>

    </form>
    </table>
    </div>

    <!-- footer -->
		<div class="footer">
			Copyright @ Azhar Nadhif 2022
		</div>
 </div>
 
</body>

</html>