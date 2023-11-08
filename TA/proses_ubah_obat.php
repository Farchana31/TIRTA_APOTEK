<?php
if($_POST){
    $nama_barang=$_POST['nama_barang'];
    $deskripsi=$_POST['deskripsi'];
    $harga= $_POST['harga'];
    $foto= $_POST['foto'];
    if(empty($nama_barang)){
        echo "<script>alert('nama tidak boleh kosong');location.href='ubah_obat.php';</script>";
    } elseif(empty($deskripsi)){
        echo "<script>alert('deskripsi tidak boleh kosong');location.href='ubah_obat.php';</script>";
    } elseif(empty($harga)){
        echo "<script>alert('harga tidak boleh kosong');location.href='ubah_obat.php';</script>";
    } elseif(empty($foto)){
        echo "<script>alert('foto tidak boleh kosong');location.href='ubah_obat.php';</script>";
    } else {
        include "koneksi.php";
        if(empty($password)){
            $update=mysqli_query($conn,"update barang set nama_barang='".$nama_barang."',deskripsi='".$deskripsi."', harga='".$harga. "'foto='".$foto."' where id_barang = '".$id_barang."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update barang');location.href='tampil_obat.php';</script>";
            } else {
                echo "<script>alert('Gagal update barang');location.href='tampil_obat.php?id_barang=".$id_barang."';</script>";
            }
        }
         else {
            $update=mysqli_query($conn,"update barang set nama_barang='".$nama_barang."',deskripsi='".$deskripsi."', harga='".$harga. "'foto='".$foto."' where id_barang = '".$id_barang."'") or die(mysqli_error($conn));
            echo "<script>alert('Sukses update barang');location.href='tampil_obat.php';</script>";
            } else {
                echo "<script>alert('Gagal update obat');location.href='ubah_obat.php?id_barang=".$id_barang."';</script>";
            }
        }
        
    } 
}
?>
