<?php

class Produk
{
    public $judul,
    $penulis,
    $penerbit,
    $harga,
    $jmlHalaman,
    $jmlMain,
        $tipe;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $jmlMain = 0, $tipe)
    {
        $this->a = $judul;
        $this->b = $penulis;
        $this->c = $penerbit;
        $this->d = $harga;
        $this->e = $jmlHalaman;
        $this->f = $jmlMain;
        $this->g = $tipe;
    }

    public function getLabel()
    {
        return "$this->b, $this->c";

    }

    public function getInfoLengkap()
    {
        $str = "{$this->g} : {$this->b} | {$this->getLabel()} (Rp. {$this->d})";

        if ($this->g == "Komik") {
            $str .= " - {$this->e} Halaman.";
        } else {
            $str .= " ~ {$this->f} Jam.";
        }

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

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 200, 0, "Komik");
$produk2 = new Produk("Dota 2", "Gaben", "Valve", "Free", 0, 3, "Game");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();