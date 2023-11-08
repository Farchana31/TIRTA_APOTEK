
<?php 
    include "header.php";
    include "koneksi.php";
    $qry_detail_barang=mysqli_query($conn,"select * from barang where id_barang = '".$_GET['id_barang']."'");
    $dt_barang=mysqli_fetch_array($qry_detail_barang);
?>
<h2>Pembelian Obat</h2>
<div class="row">
    <div class="col-md-4">
        <img src="assets/<?=$dt_barang['foto']?>" class="card-img-top">
    </div>
    <div class="col-md-8">
        <form action="masukkankeranjang.php?id_barang=<?=$dt_barang['id_barang']?>" method="post">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <td>Nama Obat</td><td><?=$dt_barang['nama_barang']?></td>
                    </tr>
                    <tr>
                        <td>Deskripsi</td><td><?=$dt_barang['deskripsi']?></td>
                    </tr>
                    <tr>
                        <td>Jumlah Pembelian</td><td><input type="number" name="jumlah_barang" value="1"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input class="btn btn-success" type="submit" value="BELI"></td>
                    </tr>
                </thead>
            </table>
        </form>
    </div>
</div>

<!-- <?php 
    include "footer.php";
?> -->
