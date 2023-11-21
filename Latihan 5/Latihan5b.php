<?php 

$mahasiswa = [
	[
		"Nama" => "Falih Gumilang",
		"NIM" => "701220318",
		"Jurusan" => "Sistem Informasi",
		"Email" => "falihgumilang@gmail.com",
		"Gambar" => "falih.jpg"
	],
	[
		"Nama" => "Fawwaz Aljibran Ashari",
		"NIM" => "701220028",
		"Jurusan" => "Sistem Informasi",
		"Email" => "fawwazashari@gmail.com",
		"Gambar" => "Fawwaz.jpg"
	],
	[
		"Nama" => "Wawan Irawan",
		"NIM" => "701220125",
		"Jurusan" => "Sistem Informasi",
		"Email" => "wawanirawan@gmail.com",
		"Gambar" => "Wawan.jpg"
	]
];

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Daftar Mahasiswa</title>
 	<style>
 		body {
 			font-family: Helvetica, sans-serif;
 			background-color: #C7DCA7;
 			text-align: center;
 		}

 		.box {
 			width: 450px;
 			height: 440px;
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
 			width: 90px;
 			height: 90px;
 			border-radius: 50%;
 			object-fit: cover;
 			float: right;
 			margin-bottom: 10px;
 		}
 		a{
 			text-decoration: none;
 		}
 	</style>
 </head>
 <body>
 	<center><h1>Daftar Mahasiswa</h1></center>
 	<div class="box">
 	<?php foreach ($mahasiswa as $mhs) : ?>
 		<div class="card">
 			<img class="profile-image" src="img/<?= $mhs["Gambar"]; ?>">
	 			<h3><a href="Latihan5c.php?Nama=<?= $mhs["Nama"]; ?>&NIM=<?= $mhs["NIM"]; ?>&Jurusan=<?= $mhs["Jurusan"]; ?>&Email=<?= $mhs["Email"]; ?>&Gambar=<?= $mhs["Gambar"]; ?>">
	 			<?= $mhs["Nama"]; ?></a></h3>
	 			<p><?= $mhs["Email"]; ?></p>
 		</div>
 	<?php endforeach; ?>
 
 </div>
 </body>
 </html>