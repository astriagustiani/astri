<?php
// Menentukan nilai maksimum
$max = 8;

// Membuat tabel dengan header
echo "<table border='1'>";
echo "<tr><th>Ganjil</th><th>Genap</th></tr>";

// Menggunakan perulangan for untuk menampilkan data
for ($i = 1; $i <= $max; $i++) {
    // Jika $i adalah ganjil, maka buat baris baru dan tampilkan $i di kolom ganjil
    if ($i % 2 == 1) {
        echo "<tr><td>$i</td>";
    }
    // Jika $i adalah genap, maka tampilkan $i di kolom genap dan tutup baris
    else {
        echo "<td>$i</td></tr>";
    }
}

// Menutup tabel
echo"</table>";
?>