<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Detail Mahasiswa</title>
	<style>
 		body {
 			font-family: Helvetica, sans-serif;
 			background-color: #C7DCA7;
 			text-align: center;
 		}

 		.box {
 			width: 450px;
 			height: 360px;
 			background-color: gray;
 			padding: 10px;
 			margin: 10px auto;
 		}

 		.card {
 			width: 400px;
 			background-color: white;
 			border-radius: 10px;
 			box-shadow: 0 4px 8px rgba(0, 0, 0, 1.0);
 			padding: 20px;
 			margin: 10px auto;
 		}

 		.profile-image {
 			width: 100px;
 			height: 100px;
 			border-radius: 50%;
 			object-fit: cover;
 			float: inherit;
 			margin-bottom: 10px;
 		}
 		.kembali {
 			display: inline-block;
 			padding: 10px 20px;
 			background-color: #EEF296;
 			color: gray;
 			text-decoration: none;
 			border-radius: 5px;
 		}
 	</style>
</head>
<body>
	<h1>Profil Mahasiswa</h1>
	<div class="box">

		<div class="card">
			<img class="profile-image" src="img/<?= $_GET["Gambar"]; ?>">
			<h2><?= $_GET["Nama"]; ?></h2>
			<p><?= $_GET["NIM"]; ?></p>
			<p><?= $_GET["Jurusan"]; ?></p>
			<p><?= $_GET["Email"]; ?></p>
			<a href="Latihan5b.php">Kembali ke halaman utama</a>
		</div>

</div>
</body>
</html>