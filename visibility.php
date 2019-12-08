<?php

class Produk
{
    public $judul,
    $penulis,
    $penerbit;
    protected $diskon = 0;

    private $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }
    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";

    }

    public function getInfoProduk()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
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
        public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
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
        public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }
}

class CetakInfoProduk
{
    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }

}

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 200);
$produk2 = new Game("Dota 2", "Gaben", "Valve", 80000, 3);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

// $produk2->harga = 5000;
$produk1->setDiskon(50);
$produk2->setDiskon(30);
echo $produk1->getHarga();
echo"<br>";
echo $produk2->getHarga();

// var_dump($produk1);
// var_dump($produk2);

