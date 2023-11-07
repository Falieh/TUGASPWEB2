<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>


<?php 
$Dicount = [
    [
        "Tanggal" => " 7 November 2023", 
        "Produk" => [
            "Baju bayi" => 71000,
            "Diapers" => 153000,
            "Bedak" => 15000,
            "Minyak Telon" => 60000
        ],
    ]
];

?>

<div style="border: 1px solid #000;padding: 3px; width:fit-content">

<?php 
foreach ($Dicount as $discountTotal) {
    $total = $discountTotal["Produk"]["Baju bayi"]+$discountTotal["Produk"]["Diapers"]+$discountTotal["Produk"]["Bedak"]+$discountTotal["Produk"]["Minyak Telon"];

    if ($total >= 150000 ) {
        $discount=(($total*10)/100);
        $total_bayar=($total-$discount);
    }else if ($total >= 200000) {
        $discount=(($total*20)/100);
        $total_bayar=($total-$discount);
    }

    echo "<p>"."Tanggal Transaksi    :".$discountTotal["Tanggal"]."</p>";
    echo "<p>"."Produk             :"."</p>";
    echo "<p>"."Baju bayi (2x35.500) :"." Rp.".$discountTotal["Produk"]["Baju bayi"]."</p>";
    echo "<p>"."Diapers (3x51.000)     :"." Rp.".$discountTotal["Produk"]["Diapers"]."</p>";
    echo "<p>"."Bedak (1x15.000)      :"." Rp.".$discountTotal["Produk"]["Bedak"]."</p>";
    echo "<p>"."Minyak Telon (2x30.000)      :"." Rp.".$discountTotal["Produk"]["Minyak Telon"]."</p>";
    echo "<p>"."Total               :"." Rp.".$total."</p>";
    echo "<p>"."Discount            :"." Rp.".$discount."</p>";
    echo "<p>"."Total Pembayaran    :"." Rp.".$total_bayar."</p>";
}

?>

</div>
</div>
</body>
</html>