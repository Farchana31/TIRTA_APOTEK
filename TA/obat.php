<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Obat</title>
    <style>
        .obat-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .obat-card {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            width: 30%;
        }

        .obat-card img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
<?php 
    include "header.php";
?>
    <!-- Start Categories of The Month -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Obat yang Tersedia</h1>
                <p>
                   Berikut adalah obat yang tersedia di Tirta Apotek, selamat berbelanja!
                </p>
            </div>
        </div>
        <div class="row">
            
    <?php 
    include "koneksi.php";
    $qry_barang=mysqli_query($conn,"select * from barang");
    while($dt_barang=mysqli_fetch_array($qry_barang)){
        ?>
        <div class="col-md-3">
            <div class="card" >
              <img src="assets/<?=$dt_barang['foto']?>" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title"><?=$dt_barang['nama_barang']?></h5>
                <p class="card-text"><?=substr($dt_barang['deskripsi'], 0,200)?></p>
                <a href="beli_obat.php?id_barang=<?=$dt_barang['id_barang']?>" class="btn btn-primary">Beli</a>
              </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>
</body>
</html>
