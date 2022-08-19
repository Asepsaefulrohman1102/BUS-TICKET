<?php
session_start();
//script koneksi
$koneksi = new mysqli("localhost","root","","bus");
?>

<?php

$ambil = $koneksi->query("SELECT * FROM tiket WHERE id_tiket='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM tiket WHERE id_tiket='$_GET[id]'");

echo "<script>alert('Produk Terhapus');</script>";
echo "<script>location='product.php?produk';</script>";
?>
