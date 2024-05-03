<?php

require_once "../app/Anggota.php";

$anggota = new Anggota();
$rows = $anggota->tampil();

?>
<br>
<br>
<br>
<div class="container">
<h2 class="text-center">Data Anggota</h2>
<a  class="btn btn-outline-success mt-3 mb-3" href="index.php?hal=anggota_input">Tambah Anggota</a>
<table class="table table-hover">
    <tr class="table-active">
        <td>No</td>
        <td>Nama</td>
        <td>Jenis Kelamin</td>
        <td>Status</td>
        <td>Alamat</td>
        <td>Gambar Anggota</td>
        <td>ACTION</td>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['anggota_id']; ?></td>
        <td><?php echo $row['anggota_name']; ?></td>
        <td><?php echo $row['jenis_kelamin']; ?></td>
        <td><?php echo $row['status_anggota']; ?></td>
        <td><?php echo $row['alamat_anggota']; ?></td>
        <td><img src="../layouts/img/<?php echo $row['gambar_anggota']; ?>" alt="" style="width:40px; height:40px;"></td>
        <td>
        <a href="index.php?hal=anggota_edit&id=<?php echo $row['anggota_id']; ?>" class="btn btn-primary">Edit</a>
        <a href="index.php?hal=anggota_delete&id=<?php echo $row['anggota_id']; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data?')">Delete</a></td>
    </tr>
    <?php } ?>
</table>
</div>