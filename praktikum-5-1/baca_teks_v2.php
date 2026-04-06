<?php
$file = fopen("data.txt", "r");
while (!feof($file)) {
    $baris = fgets($file);
    echo nl2br($baris);
}
fclose($file);
?>