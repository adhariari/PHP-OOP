<?php

class ContohStatic
{
    public static $angka = 7;

    public static function halo()
    {
            return "Hellaaaaaaaw " . self::$angka++ . " Kali." ;
    }
}

echo ContohStatic::$angka;
echo "<br>";
echo ContohStatic::halo();
?>