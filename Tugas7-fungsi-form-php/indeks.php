<?php
// ====================================
// 🔹 FUNGSI
// ====================================

echo "<h2>Fungsi</h2>";

// Definisi fungsi sederhana
function sapa($nama) {
    return "Halo, $nama!";
}

// Memanggil fungsi berulang kali
echo sapa("Adit") . "<br>";
echo sapa("Budi") . "<br>";

// Scope variabel
$globalVar = "Saya variabel global";

function contohScope() {
    $localVar = "Saya variabel lokal";
    global $globalVar; // akses variabel global
    return $localVar . " + " . $globalVar;
}
echo contohScope() . "<br>";


// ====================================
// 🔹 FORM HTML + SUPERGLOBAL
// ====================================
echo "<h2>Form HTML + Superglobal</h2>";

// jika form dikirim pakai GET
if (isset($_GET["nama"])) {
    echo "Data dari GET: " . $_GET["nama"] . "<br>";
}

// jika form dikirim pakai POST
if (isset($_POST["nama"])) {
    echo "Data dari POST: " . $_POST["nama"] . "<br>";
}
?>

<!-- FORM GET -->
<h3>Form GET</h3>
<form method="GET">
    Nama: <input type="text" name="nama">
    <button type="submit">Kirim</button>
</form>

<!-- FORM POST -->
<h3>Form POST</h3>
<form method="POST">
    Nama: <input type="text" name="nama">
    <button type="submit">Kirim</button>
</form>
