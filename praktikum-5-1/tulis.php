<?php
$teks = "Ini adalah contoh teks yang akan ditulis ke dalam file.";
file_put_contents("catatan.txt", $teks);
echo "Teks berhasil ditulis ke dalam file catatan.txt";
?>