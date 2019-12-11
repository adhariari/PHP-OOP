<?php

require_once 'App/init.php';

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 200);
$produk2 = new Game("Dota 2", "Gaben", "Valve", 80000, 3);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();
echo "<hr>";
new Coba();

