<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data Barang</title>
</head>
<body>

    <center><b>Tabel Harga barang</b></center>
    <br>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Produk</th>
            <th>Stok</th>
            <th>Harga</th>
            <th>Jumlah</th>
        </tr>

	<?php 

		$barang = array(
            array("1", "Minyak Telon", 20, 30000),
            array("2", "Diapers", 15, 51000),
            array("3", "Baby Oil", 10, 16000),
            array("4", "Shampo Baby", 18, 20000),
            array("5", "Bedak", 15, 15000),
            array("6", "Baju Bayi", 20, 35500),
            array("7", "Jumper", 25, 50000)
        );

		$total = 0;
        foreach ($barang as $data) {
            $id = $data[0];
            $produk = $data[1];
            $stok = $data[2];
            $harga = $data[3];
            $jumlah = $stok * $harga;
            $total += $jumlah;

            echo "<tr>";
            echo "<td>$id</td>";
            echo "<td>$produk</td>";
            echo "<td>$stok</td>";
            echo "<td>Rp $harga</td>";
            echo "<td>Rp $jumlah</td>";
            echo "<td>Total = $total</td>";
            echo "</tr>";
        }

 	?>
	</table>
</body>
</html>