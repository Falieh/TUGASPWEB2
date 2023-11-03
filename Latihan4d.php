<?php 

$negara = array();
$negara["Indonesia"] = array("Ibukota" => "D.K.I. Jakarta", "Kode_Telepon" => "+62");
$negara["Singapura"] = array("Ibukota" => "Singapura", "Kode_Telepon" => "+65");
$negara["Malaysia"] = array("Ibukota" => "Kuala Lumpur", "Kode_Telepon" => "+60");
$negara["Brunei"] = array("Ibukota" => "Bandar Seri Begawan", "Kode_Telepon" => "+673");
$negara["Thailand"] = array("Ibukota" => "Bangkok", "Kode_Telepon" => "+66");
$negara["Laos"] = array("Ibukota" => "Vientiane", "Kode_Telepon" => "+856");
$negara["Filipina"] = array("Ibukota" => "Manila", "Kode_Telepon" => "+63");
$negara["Myanmar"] = array("Ibukota" => "Naypyidaw", "Kode_Telepon" => "+95");

echo "<table border='1'>";
echo "<tr><th>Negara</th><th>Ibukota</th><th>Kode Telepon</th></tr>";
foreach ($negara as $negara => $data) {
	echo "<tr><td>$negara</td><td>$data[Ibukota]</td><td>$data[Kode_Telepon]</td></tr>";
}
echo "</table>";
?>