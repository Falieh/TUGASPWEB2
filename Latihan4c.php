<?php 

$negara = [
	"Indonesia" => "D.K.I Jakarta", 
	"Singapura" => "Singapura", 
	"Malaysia" => "Kuala Lumpur", 
	"Brunei" => "Bandar Seri Begawan", 
	"Thailand" => "Bangkok",
	"Laos" => "Vientiane",
	"Filipina" => "Manila",
	"Myanmar" => "Naypyidaw"];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Daftar Negara Asean</title>
</head>
<body>
<h3>Daftar negara ASEAN dan Ibukota :</h3>
<ul>
	<?php foreach ($negara as $ngr => $ibukota) : ?>
	<li><?php echo "$ngr : $ibukota" ?></li>
	<?php endforeach ?>
</ul>	
</body>
</html>