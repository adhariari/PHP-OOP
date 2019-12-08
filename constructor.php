<?php

class Produk
{
    public 
    $judul,
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
        return "$this->a, $this->b, $this->c, $this->d";

    }

}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);

$produk2 = new Produk("Dota 2", "Gaben", "Valve", "Free");

echo "Komik : " . $produk1->getLabel();
echo "<hr>";
echo "Game : " . $produk2->getLabel();
