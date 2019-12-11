<?php

define('Nama', 'Adhari');

echo Nama;

const umur = 23;

echo "<br>";
echo umur;
echo "<br>";
echo "<br>";

class Coba  
{
    const NAMA = "Kenzie Raya Rabbani";
}

echo Coba::NAMA;
echo "<br>";

class Test  
{
    public $kelas = __CLASS__;
}

$cek = new Test;
echo "Sedang berada di kelas " . $cek->kelas;



?>