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
    <nav class="navbar navbar-expand-lg navbar-light bg-transparant fixed-top" id="mainNav">
  <div class="container">
      <a class="navbar-brand text-white">pettoshop.</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      </div>
    </nav>
    <div class="daftar" id="daftar">
        <div class="container">

        	<h3 class="tittle"><br /><br /><br />
        		<center>DAFTAR <span>AKUN:</span></center>
        	</h3>
        	<form action="register" method="post" class="main-form need-validation" validated>
        		<div class="row-center">

        			<div class="form-group">
        				<label for="email">Nama Lengkap : </label>
        				<input type="text" name="nama_lengkap" id="nama_lengkap" method="post" class="form-control"
        					required>
        			</div>

        			<div class="form-group">
        				<label for="username"> Username : </label>
        				<input type="text" name="username" id="username" method="post" size="50" class="form-control" required>
        			</div>

        			<div class="form-group">
        				<label for="password"> Password : </label>
        				<input type="password" name="password" id="password" method="post" size="50" class="form-control"
        					required>
        			</div>

					<div class="form-group">
        				<label for="email">E-mail : </label>
        				<input type="email" name="email" id="email" method="post" size="50" class="form-control" required>
        			</div>

        			<div class="form-group">
        				<label for="alamat">Alamat : </label>
        				<input type="text" name="alamat" id="alamat" method="post" size="50" class="form-control" required>
        				</div>

        			

        		</div>
				<div class="col text-center">
        			<button type="submit" class="btn btn-primary" name="register">Daftar</button>
				</div>
        	</form>

        	<script>
        		var form = document.querySelector('.needs-validation');

        		form.addEventListener('submit', function (event) {
        			if (form.checkValidity() == false) {
        				event.preventDefault();
        				event.stopPropagation();
        			}
        			form.classList.add('was-validated');
        		})
        	</script>
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