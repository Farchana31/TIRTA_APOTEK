<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Ubah obat</title>
</head>
<body>
    <?php 
    include "koneksi.php";
    $qry_get_barang = mysqli_query($conn, "select * from barang where id_barang = '" . $_GET['id_barang'] . "'");
    $dt_barang = mysqli_fetch_array($qry_get_barang);
    ?>
    <div class="container">
        <h3>Ubah barang</h3>
        <form action="proses_ubah_obat.php" method="post">
            <input type="hidden" name="id_barang" value="<?=$dt_barang['id_barang']?>">
            
            <div class="mb-3">
                <label for="nama_barang" class="form-label">Nama Barang: </label>
                <input type="text" id="nama_barang" name="nama_barang" value="<?=$dt_barang['nama_barang']?>" class="form-control">
            </div>
            
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi: </label>
                <input type="teks" id="deskripsi" name="deskripsi" value="<?=$dt_barang['deskripsi']?>" class="form-control">
            </div>
            
            <div class="mb-3">
                <label for="harga" class="form-label">Harga: </label>
                <input type="integer" id="harga "name="harga" class="form-control" rows="4"><?=$dt_barang['harga']?>
            </div>
            
            <div class="mb-3">
                <label for="foto" class="form-label">Foto: </label>
                <input type="text" id="foto" name="foto" value="<?=$dt_barang['foto']?>" class="form-control">
            </div>
            
            <div style="text-align: center;">
                <input type="submit" name="simpan" value="Ubah obat" class="btn btn-primary">
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
