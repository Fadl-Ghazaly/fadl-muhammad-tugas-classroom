<?php
// ===============================
// BELAJAR PHP DASAR
// ===============================

// -------------------------------
// 1. Operator Perbandingan & Logika
// -------------------------------
$a = 10;
$b = 5;

echo "<h2>1. Operator Perbandingan & Logika</h2>";
echo "a = $a, b = $b <br>";
echo "a == b : " . ($a == $b ? "true" : "false") . "<br>";
echo "a != b : " . ($a != $b ? "true" : "false") . "<br>";
echo "a > b  : " . ($a > $b ? "true" : "false") . "<br>";
echo "a < b  : " . ($a < $b ? "true" : "false") . "<br>";
echo "a >= b : " . ($a >= $b ? "true" : "false") . "<br>";
echo "a <= b : " . ($a <= $b ? "true" : "false") . "<br>";
echo "a > 5 && b < 10 : " . (($a > 5 && $b < 10) ? "true" : "false") . "<br>";
echo "a < 5 || b < 10 : " . (($a < 5 || $b < 10) ? "true" : "false") . "<br>";
echo "! (a == 10) : " . ((!($a == 10)) ? "true" : "false") . "<br><br>";


// -------------------------------
// 2. Struktur Kontrol
// -------------------------------
echo "<h2>2. Struktur Kontrol</h2>";

// if-else
if ($a > $b) {
    echo "if: a lebih besar dari b<br>";
} else {
    echo "else: a tidak lebih besar dari b<br>";
}

// if-elseif-else
if ($a == 5) {
    echo "elseif: a = 5<br>";
} elseif ($a == 10) {
    echo "elseif: a = 10<br>";
} else {
    echo "else: nilai lain<br>";
}

// switch-case
$hari = "Senin";
switch ($hari) {
    case "Senin":
        echo "Hari ini Senin<br>";
        break;
    case "Selasa":
        echo "Hari ini Selasa<br>";
        break;
    default:
        echo "Hari lain<br>";
}
echo "<br>";


// -------------------------------
// 3. Perulangan
// -------------------------------
echo "<h2>3. Perulangan</h2>";

// for
echo "For: ";
for ($i = 1; $i <= 5; $i++) {
    echo $i . " ";
}
echo "<br>";

// while
echo "While: ";
$i = 1;
while ($i <= 5) {
    echo $i . " ";
    $i++;
}
echo "<br>";

// do-while
echo "Do-While: ";
$i = 1;
do {
    echo $i . " ";
    $i++;
} while ($i <= 5);
echo "<br>";

// foreach
$buah = ["apel", "jeruk", "mangga"];
echo "Foreach: ";
foreach ($buah as $b) {
    echo $b . " ";
}
echo "<br><br>";


// -------------------------------
// 4. Array
// -------------------------------
echo "<h2>4. Array</h2>";

// Numerik
$buah = ["apel", "jeruk"];
echo "Numerik: " . $buah[0] . ", " . $buah[1] . "<br>";

// Asosiatif
$mhs = ["nama" => "Adit", "umur" => 20];
echo "Asosiatif: Nama = " . $mhs["nama"] . ", Umur = " . $mhs["umur"] . "<br>";

// Multidimensi
$kelas = [
    ["nama" => "Adit", "umur" => 20],
    ["nama" => "Budi", "umur" => 21]
];
echo "Multidimensi:<br>";
foreach ($kelas as $siswa) {
    echo "- Nama: " . $siswa["nama"] . ", Umur: " . $siswa["umur"] . "<br>";
}
?>


<?php
// ====================================
// RINGKASAN DASAR PHP (Pemula)
// ====================================

echo "<h2>🔹 Operator Perbandingan & Logika</h2>";

$a = 5;
$b = 10;
echo "== → sama dengan : "; echo ($a == $b ? "true" : "false") . "<br>";
echo "!= → tidak sama dengan : "; echo ($a != $b ? "true" : "false") . "<br>";
echo "< , > → lebih kecil, lebih besar : "; echo ($a < $b ? "true" : "false") . "<br>";
echo "<= , >= → lebih kecil/lebih besar sama dengan : "; echo ($a <= $b ? "true" : "false") . "<br>";
echo "&& (AND) → benar jika dua kondisi benar : "; echo (($a < 10 && $b > 5) ? "true" : "false") . "<br>";
echo "|| (OR) → benar jika salah satu benar : "; echo (($a == 5 || $b == 5) ? "true" : "false") . "<br>";
echo "! (NOT) → membalik nilai : "; echo (!( $a == 5 ) ? "true" : "false") . "<br>";


// ================================
// Struktur Kontrol
// ================================
echo "<h2>🔹 Struktur Kontrol</h2>";

$nilai = 85;

echo "if → ";
if ($nilai > 70) {
    echo "Lulus<br>";
}

echo "if-else → ";
if ($nilai > 90) {
    echo "Hebat<br>";
} else {
    echo "Cukup<br>";
}

echo "if-elseif-else → ";
if ($nilai >= 90) {
    echo "A<br>";
} elseif ($nilai >= 80) {
    echo "B<br>";
} else {
    echo "C<br>";
}

echo "switch-case → ";
$hari = "Senin";
switch ($hari) {
    case "Senin": echo "Awal minggu<br>"; break;
    case "Jumat": echo "Hampir libur<br>"; break;
    default: echo "Hari biasa<br>";
}


// ================================
// Perulangan (Looping)
// ================================
echo "<h2>🔹 Perulangan (Looping)</h2>";

echo "for → ";
for ($i = 1; $i <= 5; $i++) {
    echo $i . " ";
}
echo "<br>";

echo "while → ";
$i = 1;
while ($i <= 5) {
    echo $i . " ";
    $i++;
}
echo "<br>";

echo "do-while → ";
$i = 1;
do {
    echo $i . " ";
    $i++;
} while ($i <= 5);
echo "<br>";

echo "foreach → ";
$buah = ["apel", "jeruk", "mangga"];
foreach ($buah as $b) {
    echo $b . " ";
}
echo "<br>";
?>
