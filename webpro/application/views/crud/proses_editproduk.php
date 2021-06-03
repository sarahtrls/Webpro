<?php
      include ("../koneksidaftar.php");
      
      $id_produk = $_GET['id_produk'];
      $nama_produk = $_POST ["nama_produk"];
      $harga = $_POST ["harga"];
      $deksripsi = $_POST ["deksripsi"];
      $gambar = $_FILES["gambar"]['name'];
  
      $query = mysqli_query ($conn, "UPDATE produk SET nama_produk='$nama_produk', deksripsi ='$deksripsi', harga = '$harga', gambar = '$gambar' WHERE id_produk='$id_produk'");

echo " <script>
            alert('Data berhasil diubah!');
            document.location.href = 'produkhewan.php';
        </script>";
?>
    