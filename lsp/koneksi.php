<?php

$conn = mysqli_connect('localhost', 'root', '', 'tiket');

function read($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}
// untuk menambahkan data pesanan
function register($data)
{
    global $conn;

    $nama = htmlspecialchars($data["nama"]);
    $nik = htmlspecialchars($data["nik"]);
    $nohp = htmlspecialchars($data["nohp"]);
    $tiketwisata = htmlspecialchars($data["tiketwisata"]);
    $tanggal = htmlspecialchars($data["tanggal"]);
    $jumlah = htmlspecialchars($data["jumlah"]);
    $anak = htmlspecialchars($data["anak"]);
    $harga = htmlspecialchars($data["harga"]);
    $potongan = htmlspecialchars($data["potongan"]);
    $total = htmlspecialchars($data["total"]);


    $query = "INSERT INTO tbl_pemesan VALUES ('','$nama','$nik','$nohp','$tiketwisata','$tanggal','$jumlah','$anak','$harga','$potongan','$total')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

