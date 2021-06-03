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

  <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top" id="mainNav">
      <div class="container">
      <a class="navbar-brand text-white" href="<?= base_url(); ?>">pettoshop.</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link text-white" href="<?= base_url(); ?>">Beranda <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="profile">Profil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="growming">
            Booking Grooming
            </a>
          </li>
          </li>
             <li class="nav-item active">
              <a class="nav-link text-white" href="daftar_grooming"> Keranjang Pesanan </a>
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

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
          <img src="assets/img/PROFIL_01.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h1 class="display-4"><span class="font-weight-bold"> pettoshop.</span> </h1></span>
            <hr class="my-4">
            <p>Pettoshop adalah layanan pemenuh kebutuhan </p>
            <p>hewan peliharaan berbasis website. sehingga anda dapat</p>
            <p>mengaksesnya dengan mudah. Temukan hal menarik</p>
            <p>di Petshop</p> 
      </div>
    </div>
  </div>

  <div class="container">
  <div class="card-profile-image mt-3">

  	<?php if($user->avatar != null) : ?>
  	<img src="avatar/<?= $user->avatar; ?>" class="rounded mx-auto d-block" width="170" height="170">
  	<?php else : ?>
  	<img src="<?= base_url(); ?>assets/img/faces/team-1.jpg" class="rounded mx-auto d-block" width="170" height="170">
  	<?php endif; ?>

  </div>
  	<form method="post" action="edit_profile" role="form" enctype="multipart/form-data">
  		
  		<input value="<?= $user->id; ?>" type="hidden" name="id">
  		<input value="<?= $user->avatar; ?>" type="hidden" name="old_avatar">
  		<div class="row justify-content-center mt-5 text-black">
  			<div class="col-4">

  				<h2 class="text-center">Edit Profile</h2>
  				<div class="form-group">
  					<label for="nama_lengkap" id="nama_lengkap">Nama Lengkap</label>
  					<input type="text" class="form-control" name="nama_lengkap" type="text" name="nama_lengkap"
  						value="<?= $user->nama_lengkap; ?>" required>
  				</div>

  				<div class="form-group">
  					<label for="username" id="username">Username</label>
  					<input type="text" class="form-control" name="username" type="text" name="username"
  						value="<?= $user->username; ?>" required>
  				</div>

  				<div class="form-group">
  					<label for="alamat" id="alamat">Alamat</label>
  					<input type="text" class="form-control" name="alamat" type="text" name="alamat"
  						value="<?= $user->alamat; ?>" required>
  				</div>

  				<div class="form-group">
  					<label for="email" id="email">Email</label>
  					<input type="email" class="form-control" name="email" type="email" name="email" value="<?= $user->email; ?>"
  						required>
  				</div>

  				<div class="custom-file">
  					<input type="file" class="custom-file-input" id="customFile" name="new_avatar">
  					<label class="custom-file-label" for="customFile">Pilih Gambar</label>
  				</div>
  				<button class="btn btn-primary mt-3" name="update">Ubah Profile</button>
  			</div>
  		</div>
  </div>
  </form>
  </div>
  </div>

  <div class="container">
  	<div class="row">
  		<div class="col-md-12 mt-4">
  			<div class="alert alert-right" role="alert">
  				<center>
  					<font color="black">@2021 Pettoshop</font>
  				</center>
  			</div>
  		</div>
  	</div>
  </div>

      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

<script>

</script>
  