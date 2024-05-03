<?php

require_once "../app/Anggota.php";

$id = $_GET['id'];

$anggota = new Anggota();
$rows = $anggota->delete($id);

?>

Data berhasil dihapus!

<a href="index.php?hal=anggota_tampil">Kembali</a>