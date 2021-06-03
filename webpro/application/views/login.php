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
  <img src="assets/img/PROFIL_01.jpg" class="d-block w-100" alt="...">
  <body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-transparant fixed-top" id="mainNav">
      <div class="container">
      <a class="navbar-brand text-white">pettoshop.</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      </div>
    </nav>
    <form method="post" action="login">
          <div class="carousel-caption d-none d-md-block">
            <div class="container">
            <div class="form-group">
            <h5><span class="font-weight-bold" > Selamat datang Di pettoshop </span> <br> Silakan Login Terlebih Dahulu !</h5> </span>
          <br><br> <br><br>
          <td><input type="hidden" name="id_user"></td>
          <tr>
            <td>Username</td>
				    <td>:</td>
				    <td><input type="text" name="username" placeholder="Masukkan username" size = 40 required ="Wajib Diisi"></td>
		      	</tr><br><br>
			    <tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password" placeholder="Masukkan password" size = 40 required ="Wajib Diisi"></td>
			</tr><br><br>
			<tr>
				<td></td>
				<td></td>
        <td><input type="submit" value="login" name="login"></td>
        </form>
    </div> 
      </div>
      <a href="register">Belum punya akun?</a>
      <br><br><br><br><br><br><br>
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
</body>
</html>
