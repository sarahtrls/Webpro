<?php 

include ("../koneksidaftar.php");

$id_produk = $_GET['id_produk'];
$query = mysqli_query($conn, "DELETE FROM produk WHERE id_produk='$id_produk'");

if (isset($query)) {
   echo " <script>
            alert('Data berhasil dihapus!');
            document.location.href = 'produkhewan.php';
        </script>";
}