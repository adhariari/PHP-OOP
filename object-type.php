<?php

class Produk
{
    public $judul,
    $penulis,
    $penerbit,
        $harga;

    public function __construct($judul, $penulis, $penerbit, $harga)
    {
        $this->a = $judul;
        $this->b = $penulis;
        $this->c = $penerbit;
        $this->d = $harga;
    }

    public function getLabel()
    {
        return "$this->a, $this->b, $this->c";

    }

}

class CetakInfoProduk
{
    public function cetak(Produk $produk)
    {
        $str = "{$produk->a} | {$produk->getLabel()} (Rp. {$produk->d})";
        return $str;
    }

}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
$produk2 = new Produk("Dota 2", "Gaben", "Valve", "Free");

echo "Komik : " . $produk1->getLabel();
echo "<hr>";
echo "Game : " . $produk2->getLabel();
echo "<br>";

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk2);
