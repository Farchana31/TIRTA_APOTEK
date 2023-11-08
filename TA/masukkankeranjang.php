<?php 
session_start();
    if($_POST){
        include "koneksi.php";
        
        $qry_get_barang=mysqli_query($conn,"select * from barang where id_barang = '".$_GET['id_barang']."'");
        $dt_barang=mysqli_fetch_array($qry_get_barang);
        $_SESSION['cart'][]=array(
            'id_barang'=>$dt_buku['id_barang'],
            'nama_barang'=>$dt_buku['nama_barang'],
            'qty'=>$_POST['jumlah_barang']
        );
    }
    header('location: keranjang.php');
?>




































<!-- <?php 
session_start();
    if($_POST){
        include "koneksi.php";
        
        $qry_get_barang=mysqli_query($conn,"select * from barang where id_barang = '".$_GET['id_barang']."'");
        $dt_barang=mysqli_fetch_array($qry_get_barang);
        $_SESSION['cart'][]=array(
            'id_barang'=>$dt_barang['id_barang'],
            'nama_barang'=>$dt_barang['nama_barang'],
            'qty'=>$_POST['jumlah_beli']
        );
    }
    header('location: keranjang.php');
?>

<?php 
session_start();
if(isset($_POST['jumlah_beli']) && isset($_GET['id_barang'])){
    include "koneksi.php";
    
    $qry_get_barang = mysqli_query($conn, "select * from barang where id_barang = '".$_GET['id_barang']."'");
    $dt_barang = mysqli_fetch_array($qry_get_barang);

    // Pastikan harga diambil dari database (sesuai dengan struktur database Anda)
    $harga = $dt_barang['harga'];

    $_SESSION['cart'][] = array(
        'id_barang' => $dt_barang['id_barang'],
        'nama_barang' => $dt_barang['nama_barang'],
        'harga' => $harga, // Tambahkan harga barang ke dalam array
        'qty' => $_POST['jumlah_beli']
    );

    header('location: keranjang.php');
}
?> 

<?php 
    session_start();
    if (isset($_POST['jumlah_beli'])) {
        $qry_get_barang = mysqli_query($conn,"select * from barang where id_barang = '".$_GET['id_barang']."'");
        $dt_barang = mysqli_fetch_array($qry_get_barang);
        $_SESSION['cart'][] = array(
            'id_barang' => $dt_barang['id_barang'],
            'nama_barang' => $dt_barang['nama_barang'],
            'qty' => $_POST['jumlah_beli']
        );
        header('location: keranjang.php');
    }
?>-->