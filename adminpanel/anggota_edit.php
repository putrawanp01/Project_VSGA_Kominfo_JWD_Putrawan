<?php

require_once "../app/Anggota.php";

$id = $_GET['id'];
$anggota = new anggota();

$row = $anggota->edit($id);
?>
<form action="anggota_proses.php" method="post" enctype="multipart/form-data">>
    <div class="container">
<h2 class="text-center mb-2 mt-2">Edit Data Anggota</h2>
<input type="hidden" name="anggota_id" value="<?php echo $row['anggota_id']; ?>">
<div class="form-floating mb-3 mt-3">
            <input
              type="text"
              class="form-control"
              id="anggota_name"
              placeholder="Masukkan anggota_name"
              name="anggota_name"
              value="<?php echo $row['anggota_name']; ?>"
            />
            <label for="anggota_name">Nama</label>
        </div>
        <div class="form-group">
            <label for="" class="form-label mb-2 mt-2">Jenis Kelamin</label
            ><br />
            <div class="form-check-inline">
              <input
              value="L"
                type="radio"
                name="jenis_kelamin"
                id="radio2"
                class="form-check-input"
              />
              <label for="" class="form-label">Laki-Laki</label>
            </div>
            <div class="form-check-inline">
              <input
              value="P"
                type="radio"
                name="jenis_kelamin"
                id="radio2"
                class="form-check-input"
              />
              <label for="" class="form-label">Perempuan</label>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="form-label mb-2 mt-2">Status</label
            ><br />
            <div class="form-check-inline">
              <input
              value="Aktif"
                type="radio"
                name="status_anggota"
                id="radio2"
                class="form-check-input"
              />
              <label for="" class="form-label">Aktif</label>
            </div>
            <div class="form-check-inline">
              <input
              value="Tidak Aktif"
                type="radio"
                name="status_anggota"
                id="radio2"
                class="form-check-input"
              />
              <label for="" class="form-label">Tidak Aktif</label>
            </div>
        </div>
        <div class="form-floating mb-3 mt-3">
            <textarea name="alamat_anggota" id="" class="form-control" cols="30" rows="10" ><?php echo $row['alamat_anggota']; ?></textarea>
            <label for="">Alamat</label>
        </div>
        <div class="form-group">
            <label for="gambar_anggota" class="form-label mb-2 mt-2">Unggah Gambar Anggota</label><br />
            <input type="file" name="gambar_anggota" id="gambar_anggota" class="form-control-file">
            <p class="text-muted mt-2">Gambar saat ini: <img src="../layouts/img/<?php echo $row['gambar_anggota']; ?>"/></p>
            <input type="hidden" name="gambar_anggota_old" value="<?php echo $row['gambar_anggota']; ?>">
        </div>
        <div>
        <button type="submit" value="Simpan" name="btn_update" class="btn btn-warning">Edit</button>
        </div>
    </div>
</form>