<?php
$file = fopen("catatan.txt", "a");
$tambah = "Ini adalah tambahan catatan\n";
fwrite($file, $tambah);
fclose($file);
echo "Teks berhasil ditambahkan ke dalam file catatan.txt";
?>