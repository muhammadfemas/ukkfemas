<?php
include "koneksi.php";
$hapus = mysqli_query($koneksi,"delete from barang where detail_penjualan='$_GET[id]'");
header("location:.php")
?>