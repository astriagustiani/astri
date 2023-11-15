<?php
// Membuat variabel 
$max = 5;

// Membuat tabel 
echo "<table border='1'>";
echo "<tr><th>Ganjil</th><th>Genap</th></tr>";

// Membuat perulangan 
for ($i = 1; $i <= $max; $i++) {
  // Membuat baris baru untuk setiap iterasi
  echo "<tr>";
  // Mengecek apakah angka saat ini ganjil atau genap
  if ($i % 2 == 1) {
    // Jika ganjil, menampilkan angka di kolom pertama
    echo "<td>$i</td>";
    // Meninggalkan kolom kedua kosong
    echo "<td></td>";
  } else {
    // Jika genap, meninggalkan kolom pertama kosong
    echo "<td></td>";
    // Menampilkan angka di kolom kedua
    echo "<td>$i</td>";
  }
  // tutup baris
  echo "</tr>";
}
// tutup tabel
echo"</table>";
?>