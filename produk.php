<?php

class Produk{
    public  $judul = "judul",
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0;
public function getLabel(){
    return "$this->judul, $this->penulis";

}

        }
// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->propertyBaru = "Testing";

// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "One Piece";
$produk3->penulis = "Eiichiro Oda";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 25000;

$produk4 = new Produk();
$produk4->judul = "Dota 2";
$produk4->penulis = "Lord Gaben";
$produk4->penerbit = "Valve";
$produk4->harga = "Free";

echo "Komik : " . $produk3->getLabel();
echo "<hr>";
echo "Game : " . $produk4->getLabel();