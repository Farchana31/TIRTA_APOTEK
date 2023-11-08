<?php 
    include "header.php";
?>
<h2>Daftar Obat di Keranjang</h2>
<table class="table table-hover striped">
    <thead>
        <tr>
            <th>NO</th><th>Nama Barang</th><th>Jumlah</th><th>Total Harga</th><th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $total_harga = 0;
        if(isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $key_produk => $val_produk): ?>
                <tr>
                    <td><?=($key_produk+1)?></td>
                    <td><?=$val_produk['nama_barang']?></td>
                    <td><?=$val_produk['qty']?></td>
                    <td><?=$total_harga=$harga*$jumlah_beli['total_harga']?></td>
                    <td><a href="hapus_cart.php?id=<?=$key_produk?>" class="btn btn-danger"><strong>X</strong></a></td>
                </tr>
            <?php endforeach;
        }
        ?>
    </tbody>
</table>
<a href="checkout.php" class="btn btn-primary">Check Out</a>




















<!-- <?php 
    include "footer.php";
?> -->



























































<!-- <?php 
    include "header.php";
?>
<h2>Daftar Obat di Keranjang</h2>
<table class="table table-hover striped">
    <thead>
        <tr>
            <th>NO</th>
            <th>Nama Obat</th>
            <th>Jumlah Beli</th>
            <th>Harga</th>
            <th>Total Harga</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $total_pembayaran = 0; // Inisialisasi total pembayaran
        if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $key_produk => $val_produk) {
                $harga = $val_produk['harga']; // Harga obat
                $jumlah_beli = $val_produk['qty']; // Jumlah beli
                $total_harga = $harga * $jumlah_beli; // Total harga per obat
                
                $total_pembayaran += $total_harga; // Menambahkan total harga ke total pembayaran
                
                ?>
                <tr>
                    <td><?=($key_produk+1)?></td>
                    <td><?=$val_produk['nama_barang']?></td>
                    <td><?=$jumlah_beli?></td>
                    <td>Rp <?=number_format($harga, 0, ',', '.')?></td>
                    <td>Rp <?=number_format($total_harga, 0, ',', '.')?></td>
                    <td><a href="hapus_cart.php?id=<?=$key_produk?>" class="btn btn-danger"><strong>X</strong></a></td>
                </tr>
            <?php
            }
        }
        ?>
    </tbody>
</table>
<p>Total Pembayaran: Rp <?=number_format($total_pembayaran, 0, ',', '.')?></p>
<a href="checkout.php" class="btn btn-primary">Check Out</a> -->
















































<!-- <?php 
include "header.php";
?>
<h2>Daftar Barang di Keranjang</h2>
<table class="table table-hover striped">
    <thead>
        <tr>
            <th>NO</th>
            <th>Nama Barang</th>
            <th>Jumlah Beli</th>
            <th>Harga per Barang</th>
            <th>Total Harga</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $total_pembayaran = 0; // Inisialisasi total pembayaran
        if(isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $key_produk => $val_produk): 
                $harga = $val_produk['harga']; // Harga barang
                $jumlah_beli = $val_produk['qty']; // Jumlah beli
                $total_harga = $harga * $jumlah_beli; // Total harga per barang
                
                $total_pembayaran += $total_harga; // Menambahkan total harga ke total pembayaran
                
                ?>
                <tr>
                    <td><?=($key_produk+1)?></td>
                    <td><?=$val_produk['nama_barang']?></td>
                    <td><?=$jumlah_beli?></td>
                    <td>Rp <?=number_format($harga, 0, ',', '.')?></td>
                    <td>Rp <?=number_format($total_harga, 0, ',', '.')?></td>
                    <td><a href="hapus_cart.php?id=<?=$key_produk?>" class="btn btn-danger"><strong>X</strong></a></td>
                </tr>
            <?php endforeach;
        }
        ?>
    </tbody>
</table>
<p>Total Pembayaran: Rp <?=number_format($total_pembayaran, 0, ',', '.')?></p>
<a href="checkout.php" class="btn btn-primary">Check Out</a>
<?php 
include "footer.php";
?> -->