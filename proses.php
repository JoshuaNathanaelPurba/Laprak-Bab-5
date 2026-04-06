<?php
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$email = $_POST['email'];

$data = "Nama: $nama\nNIM: $nim\nEmail: $email\n\n";
file_put_contents('data_mahasiswa.txt', $data, FILE_APPEND);

echo "Data berhasil disimpan!";
echo "<a href='form.html'>Kembali ke Form</a>";
?>