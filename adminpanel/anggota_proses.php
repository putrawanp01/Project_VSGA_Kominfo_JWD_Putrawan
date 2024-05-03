<?php

require_once "../app/Anggota.php";

$anggota = new Anggota();

if (isset($_POST['btn_simpan'])) {
    $anggota->simpan();
    header("location:index.php?hal=anggota_tampil");
}

if (isset($_POST['btn_update'])) {
    $anggota->update();
    header("location:index.php?hal=anggota_tampil");
} 