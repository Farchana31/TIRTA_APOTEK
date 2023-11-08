
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Zay Shop eCommerce HTML CSS Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="style.css">
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

    <!-- End Categories of The Month -->

<!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
</body>
</html>