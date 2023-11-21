<?php

function styleText($tulisan, $kelas) {
	$styledText = '<span class="' . $kelas . '" style="font-size: 28px;
	font-family: Arial; color: #1A0547; font-style: italic; border: 1px solid;">' . $tulisan . '</span>';
	return $styledText;
}
$tulisan = "Hello World! Here I come!";
$kelas = "ganti-style";
$styledResult = styleText($tulisan, $kelas);
echo $styledResult;

?>
