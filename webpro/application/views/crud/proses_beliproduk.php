<?php

include("../koneksidaftar.php");

$id_user = $_GET['id_user'];
$nama_produk = $_POST['nama_produk'];
$nama_lengkap = $_POST['nama_lengkap'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];

$query = mysqli_query($conn, "INSERT INTO pembelian VALUES ('','$id_user','$nama_produk', '$nama_lengkap', '$alamat', '$no_telp')");

if (isset($query)) {
   echo " <script>
            alert('Berhasil beli produk!');
            document.location.href = 'daftar_belanja.php';
        </script>";
} else {
   echo " <script>
            alert('gagal membeli produk!');
            document.location.href = 'daftar_belanja.php?id_user=' . <?= $id_user ?>;
        </script>";
}