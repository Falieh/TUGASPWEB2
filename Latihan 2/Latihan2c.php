<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Modul 2 - latihan 2</title>
	<style>
		.kotak {
		width: 100px;
		height: 50px;
		display: flex;
		}

		.clear {
		border: 2px solid black;
		padding: 10px;
		margin: 5px;
		}

		.ganjil {
			background-color: #003;
			color: #fff;
		}
		.genap {
			background-color: #999;
		}
	</style>
</head>
<body>
	<?php

	$kotak = 5;
	
	for($i = 1; $i <= $kotak; $i++){
		echo "<div class = 'kotak'>";

	for($j = 1; $j <= $i; $j++){
		$kelas = ($i % 2 == 0) ? 'genap' : 'ganjil';
		echo "<div class= 'clear $kelas'>$j</div>";
	}

		echo "</div>";
	}

	?>

</body>
</html>
