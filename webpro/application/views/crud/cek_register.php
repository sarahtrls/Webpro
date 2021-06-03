<?php

    if (isset($_POST['register'])) {
        include("koneksidaftar.php");
        $nama_lengkap = $_POST ["nama_lengkap"];
        $username = $_POST ["username"];
        $password = $_POST["password"];
        $alamat = $_POST ["alamat"];
        $email = $_POST ["email"];
        $akses = $_POST ["akses"];

        $query = mysqli_query($conn, "INSERT INTO tabel_user VALUES 
        ('null','$username','$password','$nama_lengkap', '$alamat','$email','', '$akses')");

        if (isset($query)) {
            echo "<script>
                    alert('Data Berhasil Ditambahkan!');
                    document.location.href='login.php';
                </script>";
        }
    } else {
        echo "<script>
                    alert('Data belum di isi lengkap!');
                    document.location.href='register.php';
                </script>";
    }