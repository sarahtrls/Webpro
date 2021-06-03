<?php 
session_start();
include("../koneksidaftar.php");

$id_grooming = $_GET['id_grooming'];

$query = mysqli_query($conn, "DELETE FROM grooming WHERE id_grooming='$id_grooming'");

if (isset($query)) {
    if ($_SESSION['akses'] === "admin") {
        echo " <script>
            alert('Paket berhasil di konfirmasi');
            document.location.href = 'daftar_grooming.php';
        </script>";
    } else {
         echo " <script>
            alert('Batal Pesan Paket!');
            document.location.href = 'daftar_grooming.php';
        </script>";
    }
} else {
    echo " <script>
            alert('gagal konfirmasi!');
            document.location.href = 'daftar_grooming.php';
        </script>";
}

