<?php
if($_POST){
    $nama_barang=$_POST['nama_barang'];
    $deskripsi=$_POST['deskripsi'];
    $harga= $_POST['harga'];
    $foto= $_POST['foto'];
    if(empty($nama_barang)){
        echo "<script>alert('nama tidak boleh kosong');location.href='tambah_barang.php';</script>";
    } elseif(empty($deskripsi)){
        echo "<script>alert('deskripsi tidak boleh kosong');location.href='tambah_barang.php';</script>";
    } elseif(empty($harga)){
        echo "<script>alert('harga tidak boleh kosong');location.href='tambah_barang.php';</script>";
    } elseif(empty($foto)){
        echo "<script>alert('foto tidak boleh kosong');location.href='tambah_barang.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into barang (nama_barang, deskripsi, harga, foto) value ('".$nama_barang."','".$deskripsi."','".$harga."', '".$foto."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan barang');location.href='tambah_barang.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan barang');location.href='tambah_barang.php';</script>";
        }
    }
}
?>
