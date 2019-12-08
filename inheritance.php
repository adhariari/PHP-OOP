<?php

class Produk
{
    public $judul,
    $penulis,
    $penerbit,
    $harga,
    $jmlHalaman,
    $jmlMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $jmlMain = 0)
    {
        $this->a = $judul;
        $this->b = $penulis;
        $this->c = $penerbit;
        $this->d = $harga;
        $this->e = $jmlHalaman;
        $this->f = $jmlMain;
    }

    public function getLabel()
    {
        return "$this->b, $this->c";

    }

public function getInfoProduk()
    {
        $str = "{$this->g} : {$this->b} | {$this->getLabel()} (Rp. {$this->d})";
        return $str;
    }

}

class Komik extends Produk
{
    public function getInfoProduk()
    {
        $str = "Komik : {$this->a} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->e} Halaman.
";
return $str;
    }
}

class Game extends Produk
{
    public function getInfoProduk()
    {
        $str = "Game : {$this->a} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->f} Jam.
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
