<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

sort($nilaiSiswa);

$total = 0;
for ($i = 2; $i < count($nilaiSiswa) - 2; $i++) {
    $total += $nilaiSiswa[$i];
}

$rataRata = $total / (count($nilaiSiswa) - 4);

echo "Total: $total <br>";
echo "Rata-rata: $rataRata";
?>