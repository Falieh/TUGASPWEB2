<?php 

$negara = ["Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand"]

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Daftar Negara Asean</title>
</head>
<body>
	
	<h3>Daftar negara ASEAN awal :</h3>
	<ul>
		<?php
		foreach ($negara as $ngr){
			echo"<li>$ngr</li>";
		}
		?>
	</ul>

	<h3>Daftar negara ASEAN baru :</h3>
	<ul>
		<?php  
		$ngr = array_push($negara, "Filipina", "Laos", "Myanmar");
		?>

		<?php
		foreach ($negara as $ngr){
				echo"<li>$ngr</li>";
		}
		?>
	</ul>
</body>
</html>