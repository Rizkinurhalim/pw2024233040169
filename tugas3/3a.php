<?php

echo "<h4>Menghitung Luas Lingkaran</h4>";

function hitungluaslingkaran($r) {
    $luas = M_PI * $r * $r;
    return $luas;
}   

$r = 10;
$luasLingkaran = hitungluaslingkaran($r);

echo "<p>jari-jari = $r cm</p>";
echo "<p>Luas lingkaran = $luaslingkaran cm<sup>2</sup></p>";

echo "<hr>";

echo "<h4>Menghitung keliling lingkaran</h4>";

function hitungKelilingLingkaran($r) {
    $keliling = 2 * M_PI * $r ;
    return $keliling;
}

$r = 20;
$kelilingLingkran = hitungKelilingLingkaran($r);

echo "<p>jari-jari = $r cm</p>";
echo "<p>Keliling lingkaran = $KelilingLingkaran cm</p>";

?>
