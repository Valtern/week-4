<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$sisaBagi = $a % $b;
$hasilBagi = $a / $b;
$pangkat = $a ** $b;

echo "Hasil penjumlahan: " . $hasilTambah . "<br>";
echo "Hasil pengurangan: " . $hasilKurang . "<br>";
echo "Hasil perkalian: " . $hasilKali . "<br>";
echo "Sisa bagi: " . $sisaBagi . "<br>";
echo "Hasil bagi: " . $hasilBagi . "<br>";
echo "Hasil pangkat: " . $pangkat . "<br>";


$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "<h2>Comparison Results:</h2>";
echo "<p>Is \$a equal to \$b? " . ($hasilSama ? 'True' : 'False') . "</p>";
echo "<p>Is \$a not equal to \$b? " . ($hasilTidakSama ? 'True' : 'False') . "</p>";
echo "<p>Is \$a less than \$b? " . ($hasilLebihKecil ? 'True' : 'False') . "</p>";
echo "<p>Is \$a greater than \$b? " . ($hasilLebihBesar ? 'True' : 'False') . "</p>";
echo "<p>Is \$a less than or equal to \$b? " . ($hasilLebihKecilSama ? 'True' : 'False') . "</p>";
echo "<p>Is \$a greater than or equal to \$b? " . ($hasilLebihBesarSama ? 'True' : 'False') . "</p>";



$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "<h2>Logical Operator Results:</h2>";
echo "<p>Result of \$a AND \$b: " . ($hasilAnd ? 'True' : 'False') . "</p>";
echo "<p>Result of \$a OR \$b: " . ($hasilOr ? 'True' : 'False') . "</p>";
echo "<p>Result of NOT \$a: " . ($hasilNotA ? 'True' : 'False') . "</p>";
echo "<p>Result of NOT \$b: " . ($hasilNotB ? 'True' : 'False') . "</p>";


echo "<h2>Assignment Operator Results:</h2>";

$a += $b; 
echo "<p>\$a += \$b;  Result: \$a = " . $a . "</p>";

$a -= $b; 
echo "<p>\$a -= \$b;  Result: \$a = " . $a . "</p>";

$a *= $b; 
echo "<p>\$a *= \$b;  Result: \$a = " . $a . "</p>";

$a /= $b; 
echo "<p>\$a /= \$b;  Result: \$a = " . $a . "</p>";

$a %= $b; 
echo "<p>\$a %= \$b;  Result: \$a = " . $a . "</p>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "<h2>Identity Operator Results:</h2>";
echo "<p>Is \$a identical to \$b? " . ($hasilIdentik ? 'True' : 'False') . "</p>";
echo "<p>Is \$a not identical to \$b? " . ($hasilTidakIdentik ? 'True' : 'False') . "</p>";
?>