<?php
$hargaProduk = 120000;

if ($hargaProduk > 100000) {
    $diskon = 0.20 * $hargaProduk; // 20% dari harga produk
} else {
    $diskon = 0;
}

$hargaBayar = $hargaProduk - $diskon;

echo "Harga produk: Rp " . number_format($hargaProduk, 0, ',', '.') . "<br>";
echo "Diskon: Rp " . number_format($diskon, 0, ',', '.') . "<br>";
echo "Total yang harus dibayar: Rp " . number_format($hargaBayar, 0, ',', '.');
?>
