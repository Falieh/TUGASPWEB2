<?php
function soal($jawabanIsset, $jawabanEmpty) {
	$style = "font-size: 28px; font-family: Arial; border: solid; padding: 10px;";
	$styledText = "<p style='$style'>$jawabanIsset $jawabanEmpty</p>";

	return $styledText;
}

$jawabanIsset = "Isset adalah = fungsi pada PHP yang digunakan untuk memeriksa apakah sebuah variabel telah tersedia dan sudah diatur atau belum, isset() akan menghasilkan TRUE jika variabel yang dicek telah tersedia atau FALSE jika variabel belum didefinisikan. <br></br>";
$jawabanEmpty = "Empty adalah = fungsi yang digunakan untuk dapat memeriksa apakah suatu variabel kosong atau tidak. Fungsi ini mengembalikan nilai salah jika variabel ada dan tidak kosong, jika tidak maka mengembalikan nilai benar. ";
$styledTexts = soal($jawabanIsset, $jawabanEmpty);

echo $styledTexts;

?>
