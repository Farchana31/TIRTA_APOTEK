<?php
if($_POST){
    $id_siswa=$_POST['id_siswa'];
    $nama=$_POST['nama'];
    $telepon=$_POST['telepon'];
    $alamat=$_POST['alamat'];
    $gender=$_POST['gender'];
    $username=$_POST['username'];
    $password= $_POST['password'];
    if(empty($nama)){
        echo "<script>alert('nama tidak boleh kosong');location.href='tambah_user.php';</script>";
    } elseif(empty($telepon)){
        echo "<script>alert('telepon tidak boleh kosong');location.href='tambah_user.php';</script>";
    } elseif(empty($alamat)){
        echo "<script>alert('alamat tidak boleh kosong');location.href='tambah_user.php';</script>";
    } elseif(empty($gender)){
        echo "<script>alert('gender tidak boleh kosong');location.href='tambah_user.php';</script>";
    } elseif(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='tambah_user.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('password tidak boleh kosong');location.href='tambah_user.php';</script>";
    } else {
        include "koneksi.php";
        if(empty($password)){
            $update=mysqli_query($conn,"update user set nama='".$nama."',telepon='".$telepon."', alamat='".$alamat. "'gender='".$gender."', alamat='".$alamat."', username='".$username."', password='".$password."' where id_user = '".$id_user."' ") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update user');location.href='tampil_user.php';</script>";
            } else {
                echo "<script>alert('Gagal update user');location.href='ubah_user.php?id_user=".$id_user."';</script>";
            }
        }
         else {
            $update=mysqli_query($conn,"update user set nama='".$nama."',telepon='".$telepon."', alamat='".$alamat. "'gender='".$gender."', alamat='".$alamat."', username='".$username."', password='".$password."' where id_user = '".$id_user."' ") or die(mysqli_error($conn));
                echo "<script>alert('Sukses update user');location.href='tampil_user.php';</script>";
            } else {
                echo "<script>alert('Gagal update user');location.href='ubah_user.php?id_user=".$id_user."';</script>";
            }
        }
        
    } 
}
?>
