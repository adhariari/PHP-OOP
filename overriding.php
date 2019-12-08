<?php

class Produk
{
    public $judul,
    $penulis,
    $penerbit,
        $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->a = $judul;
        $this->b = $penulis;
        $this->c = $penerbit;
        $this->d = $harga;
    }

    public function getLabel()
    {
        return "$this->b, $this->c";

    }

    public function getInfoProduk()
    {
        $str = "{$this->a} | {$this->getLabel()} (Rp. {$this->d})";
        return $str;
    }

}

class Komik extends Produk
{
    public $jmlHalaman;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga, $jmlHalaman);

        $this->jmlHalaman = $jmlHalaman;
    }
    public function getInfoProduk()
    {
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.
";
        return $str;
    }
}

class Game extends Produk 
{
    public $waktuMain;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    } 
    public function getInfoProduk()
    {
        $str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.
";
        return $str;
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

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 200, 0);
$produk2 = new Game("Dota 2", "Gaben", "Valve", "Free", 0, 3);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
