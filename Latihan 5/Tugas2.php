<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Perusahaan Teknologi</title>
</head>
<body>

<?php 
$pt = array(
	1 => array(
		"Logo" => "Microsoft.png",
		"Nama_Perusahaan" => "Microsoft Corporation",
		"Letak" => "Redmond, Washington, Amerika Serikat",
		"Negara_asal" => "Amerika",
		"Waktu_berdiri" => "4 April 1975",
	),
	2 => array(
		"Logo" => "Apple.png",
		"Nama_Perusahaan" => "Apple",
		"Letak" => "One Apple Park Way, Cupertino, California",
		"Negara_asal" => "Amerika",
		"Waktu_berdiri" => "1 April 1976",
	),
	3 => array(
		"Logo" => "Meta.png",
		"Nama_Perusahaan" => "Meta",
		"Letak" => "Menlo Park, California, Amerika Serikat",
		"Negara_asal" => "Amerika",
		"Waktu_berdiri" => "4 Februari 2004",
	),
	4 => array(
		"Logo" => "Oracle.png",
		"Nama_Perusahaan" => "Oracle Corporation",
		"Letak" => "Austin, Texas, Amerika",
		"Negara_asal" => "Amerika",
		"Waktu_berdiri" => "16 Juni 1977",
	),
	5 => array(
		"Logo" => "Intel.png",
		"Nama_Perusahaan" => "Intel",
		"Letak" => "Santa Clara, California, Amerika",
		"Negara_asal" => "Amerika",
		"Waktu_berdiri" => "18 Juli 1968",
	),
	6 => array(
		"Logo" => "Samsung.png",
		"Nama_Perusahaan" => "Samsung Group",
		"Letak" => "Distrik Yeongtong, Suwon, Korea Selatan",
		"Negara_asal" => "Korea Selatan",
		"Waktu_berdiri" => "13 Januari 1969",
	),
	7 => array(
		"Logo" => "Tencent.png",
		"Nama_Perusahaan" => "Tencent Holdings Ltd.",
		"Letak" => "Shenzhen, Tiongkok",
		"Negara_asal" => "Cina",
		"Waktu_berdiri" => "11 November 1998",
	),
	8 => array(
		"Logo" => "Sony.png",
		"Nama_Perusahaan" => "Sony",
		"Letak" => "Minato, Tokyo, Jepang",
		"Negara_asal" => "Jepang",
		"Waktu_berdiri" => "7 Mei 1946",
	),
	9 => array(
		"Logo" => "Amazon.png",
		"Nama_Perusahaan" => "Amazon",
		"Letak" => "Bellevue, Washington, Amerika",
		"Negara_asal" => "Amerika",
		"Waktu_berdiri" => "5 Juli 1994",
	),
	10 => array(
		"Logo" => "Telkom.png",
		"Nama_Perusahaan" => "Telkom Indonesia",
		"Letak" => "Jakarta, Indonesia",
		"Negara_asal" => "Indonesia",
		"Waktu_berdiri" => "6 Juli 1965",
	),

);

echo "<left><b>Nama :</b> Falih Gumilang</left>";
echo "</br>";
echo "<left><b>NIM :</b> 701220318</left>";
echo "</br>";
echo "<left><b>NIM % x 5 =</b> 3,18x5 = 15,9 => 9:2 = 4,5 => Angka yang dipilih adalah angka terakhir yaitu 5 => Perusahaan Teknologi</left>";
echo "</br>";
echo "</br>";
echo "<center><b>PERUSAHAAN TEKNOLOGI</b></center>";
echo "</br>";
echo "<table border='1'>";
echo "<tr><th>Logo</th><th>Nama Perusahaan</th><th>Letak</th><th>Negara Asal</th><th>Waktu Berdiri</th></tr>";
foreach ($pt as $perusahaanteknologi => $data) {
	echo "<tr><td><img src='$data[Logo]' 'alt=' 'width='100'></td>
			  <td><center>$data[Nama_Perusahaan]</center></td>
			  <td>$data[Letak]</td>
			  <td><center>$data[Negara_asal]</center></td>
			  <td><center>$data[Waktu_berdiri]</center></td></tr>";
}
echo "</table>";


?>

</body>
</html>


