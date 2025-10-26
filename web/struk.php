<?php
require "./database.php";

$belanjaan = $_POST['beli'] ?? [];
$kasir = $_POST['kasir'];

if($belanjaan === []){
    header("Location: index.php");
    exit;
}

//memastikan beanr benar ada barang yg dibeli walau 1
$total = 0;
foreach($belanjaan as $p => $jumlah){
    $total += $jumlah;
}
if ($total === 0) {
    echo "<script>
        alert('Silahkan Isi barang minimal 1');
        window.location.href = 'index.php';
    </script>";
    exit;
}



// var_dump($belanjaan);
// echo "database";
// var_dump($produk);



// var_dump($produk);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk | Ngawi Dish .store</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
</head>
<body>
    <?php buatstrukBelanja_s($belanjaan, $produk, $kasir);?>
</body>
</html>