<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari | Ngawi Dish .store</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
</head>
<body>
    <?php
    require "./database.php";
    $cari = $_GET['cari'] ?? '';
    $hasilPencarian = null;
        // var_dump($cari);
        // var_dump($hasilPencarian);
    if($cari !== ''){
        $hasilPencarian = cariProduk($produk, $cari);
    }
    // var_dump($hasilPencarian);
    ?>
    <h4>
        sengaja aku pisah halaman cari supaya ngga nge refesh halaman utama biar data nya gak ilang
    </h4>
    <table>
        <tr>
            <th>Barang</th>
            <th>Harga</th>
            <th>Stok</th>
        </tr>
        <?php
        if($cari === null || $cari === ''){
        foreach($produk as $p){
           

            echo "
            <tr>
                <td>{$p['nama']}</td>
                <td>{$p['harga']}</td>
                <td>{$p['stok']}</td>
            </tr>
            ";
        }
        }else{
            foreach($produk as $p){
           
            if($p['nama'] === $hasilPencarian){
                echo "
            <tr style='background-color:salmon;'>
                <td>{$p['nama']}</td>
                <td>{$p['harga']}</td>
                <td>{$p['stok']}</td>
            </tr>
            ";
            }else{
                echo "
            <tr>
                <td>{$p['nama']}</td>
                <td>{$p['harga']}</td>
                <td>{$p['stok']}</td>
            </tr>
            ";
            }
            
        }
        }
        ?>
    </table>
    <br>
    <form action="" method="get">
        <input type="text" name="cari" id="" placeholder="Cari dengan kode">
        <input type="submit" value="Cari">
    </form>
    
</body>
</html>