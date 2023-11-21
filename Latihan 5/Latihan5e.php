<?php 

session_start();

if(empty($_SESSION['login'])){
	header("Location: login.php");
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<title>Login & Logout PHP</title>
</head>
<body>

	<div class="container">

		<div class="row">
			<div class="col-md-4 offset-md-4  mt-5">

				<?php
				if(isset($_SESSION['error'])) {
				?>
				<div class="alert alert-warning" role="alert">
				  <?php echo $_SESSION['error']?>
				</div>
				<?php
				}
				?>

				<div class="alert alert-success" role="alert">
				  Berhasil login ke dalam sistem.
				</div>

				<div class="card">
					<div class="card-title text-center">
						<h1>Selamat Datang, Admin</h1>
					</div>
					<div class="card-body">
						<p>Ini adalah halaman admin</p>

<a href="logout.php" ><button type="button" class="btn btn-danger">Logout</button></a>


					</div>
				</div>
			</div>

		</div>

	</div>

</body>
</html>