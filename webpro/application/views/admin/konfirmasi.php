<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <title>Petshop.com</title>
  </head>
  <body id="page-top">
    <br>
  <img src="img/data_02_01.jpg" class="d-block w-100" alt="...">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top" id="mainNav">
      <div class="container">
      <a class="navbar-brand text-white" href="admin">pettoshop.</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto text-white">
          <li class="nav-item">
            <a class="nav-link text-white" href="admin">Beranda </a>
          </li>
            <li class="nav-item active">
              <a class="nav-link text-white" href="konfirmasi">Konfirmasi Booking</a>
            </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="logout">
            Logout
            </a>
          </li>
        </ul>
      </div>
      </div>
    </nav>


    <div class="row justify-content-center mt-5">
      <div class="col-10 ml-auto mr-auto">
       <h2 class="mb-4">Daftar Paket Grooming</h2>
        <table class="table table-bordered text-center">
          <thead class="thead-dark ">
            <tr>
              <th scope="col">Nama Lengkap</th>
              <th scope="col">Paket</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Waktu</th>
              <th scope="col">No Telepon</th>
              <th scope="col">Alamat</th>
              <th scope="col">Konfirmasi</th>
            </tr>
            <?php 
            foreach($grooming as $groom) : ?>
            <td><?php echo $groom->nama_lengkap ?></td>
            <td><?php echo $groom->paket ?></td>
            <td><?php echo $groom->tanggal ?></td>
            <td><?php echo $groom->waktu ?></td>
            <td><?php echo $groom->no_telp ?></td>
            <td><?php echo $groom->alamat ?></td>
            <td>
            <a class="btn btn-success mt-3" href="delete_konfirmasi/<?= $groom->id_grooming;?>">Terima</a></td>
            </tr>
           
          </thead>
           <?php endforeach; ?>

          </thead>

  <div class="container">
  	<div class="row">
  		<div class="col-md-12 mt-4">
  			<div class="alert alert-right" role="alert">
  				<center>
  					<font color="black">@2021 Pettoshop</font>
  				</center>
  </div>


 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>



