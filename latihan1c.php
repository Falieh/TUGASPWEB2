<!DOCTYPE html>
<html>
<head>
	<style>
		.container {
			width: 300px;
			margin: 1;
			border: 2px solid black;
		}

		.row {
			display: flex;
		}

		.box {
			width: 20.5%;
			padding: 15px;
			border: 1px solid #000;
			text-align: center;
			font-size: 30px; /*Ukuran font menyesuaikan lebar dan tinggi kotak*/
			line-height: 1,5; /*Menghilangkan jarak antara atas dan bawah teks*/
			margin: 3px;
		}
	</style>
</head>

<body>
	<?php

	$x = "A";
	$y = "B";
	$z = "C";
	?>
	<div class= "container">
		<div class="row">
			<div class="box"><?php echo $x ?></div>
		</div>
	

		<div class="row">
			<div class="box"><?php echo $x ?></div>
			<div class="box"><?php echo $y ?></div>
		</div>

		<div class="row">
			<div class="box"><?php echo $x ?></div>
			<div class="box"><?php echo $y ?></div>
			<div class="box"><?php echo $z ?></div>
		</div>
	</div>
</body>
</html>