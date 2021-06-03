<?php
      include ("../koneksidaftar.php");
      $nama_produk = $_POST ["nama_produk"];
      $harga = $_POST ["harga"];
      $deksripsi = $_POST ["deksripsi"];
      $gambar = $_FILES["gambar"]['name'];
  
      $query = mysqli_query ($conn, "INSERT INTO produk VALUES ('','$nama_produk','$deksripsi', '$harga','$gambar')");

if (isset($query)) {
   echo " <script>
            alert('Data berhasil ditambahkan!');
            document.location.href = 'produkhewan.php';
        </script>";
}
?>
    
