<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ngawi Dish .store</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
</head>
<body>
    <?php
    require "./database.php";

    // $cari = cariProduk($produk, "A005");
    // $subtotal = hitungSubtotal(3500, 5);
    // $pot = potonganHarga(56500, 5);
    // $diskon = hitungDiskon(56500);
    // $pajak = hitungPajak($diskon);
    // $rupiah = formatRupiah(17500);
    
    // var_dump($cari);
    // var_dump($subtotal);
    // var_dump($pot);
    // var_dump($diskon);
    // var_dump($pajak);
    // echo "<br>";
    // echo "<br>";
    // var_dump($produk);
    // kurangiStok($produk, "A005", 12);
    // var_dump($produk);
    // var_dump($rupiah);
    // echo "<br>";
    // echo "<br>";
    // buatstrukBelanja();
    ?>




    <h1>Ngawi Dish .store</h1>
    <form action="struk.php" method="post">
    <table>
        <tr>
            <th>Barang</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Beli</th>
        </tr>
        <?php
        foreach($produk as $p){
           

            echo "
            <tr>
                <td>{$p['nama']}</td>
                <td>{$p['harga']}</td>
                <td>{$p['stok']}</td>
                <td><input type='number' name='beli[{$p['kode']}]' min='0' max='{$p['stok']}' value='0'></td>
            </tr>
            ";
        }
        ?>
    </table>
    <br>
    <input type="text" name="kasir" value="Mas Gatot" placeholder="kasir" class="perbesar">
    <input type="submit" value="Kirim" class="perbesar">
    </form>
    <br>
    <a href="cari.php" target="_blank"><button class="perbesar">Cari Barang</button></a>
</body>
</html>