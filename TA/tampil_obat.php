<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <h3>Tampil  obat</h3>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA OBAT</th>
                <th>DESKRIPSI</th>
                <th>HARGA</th>
                <th>AKSI</th>
            </tr>
        </thead>

        <tbody>
            <?php 
            include "koneksi.php";
$qry_barang=mysqli_query($conn,"select * from barang");
            $no=0;
            while($data_barang=mysqli_fetch_array($qry_barang)){
            $no++;?>
<tr>              <td><?=$no?></td><td><?=$data_barang['nama_barang']?></td> <td><?=$data_barang['deskripsi']?></td> <td><?=$data_barang['harga']?></td> <td><a href="ubah_obat.php?id_barang=<?=$data_barang['id_barang']?>" class="btn btn-success">Ubah</a> | <a href="hapus.php?id_siswa=<?=$data_siswa['id']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>

            </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
