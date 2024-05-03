<?php

require_once "../inc/Koneksi.php";

class Anggota extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_anggota";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }

    public function simpan()
    {
        // Ambil informasi dari form
        $anggota_name = $_POST['anggota_name'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $status_anggota = $_POST['status_anggota'];
        $alamat_anggota = $_POST['alamat_anggota'];
    
        // Ambil nama file gambar yang diunggah
        $nama_file = $_FILES['gambar_anggota']['name'];
    
        // Persiapkan query SQL untuk menyimpan data
        $sql = "INSERT INTO tb_anggota (anggota_name, jenis_kelamin, status_anggota, alamat_anggota, gambar_anggota) VALUES (:anggota_name, :jenis_kelamin, :status_anggota, :alamat_anggota, :gambar_anggota)";
    
        // Bind parameter dan eksekusi query
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":anggota_name", $anggota_name);
        $stmt->bindParam(":jenis_kelamin", $jenis_kelamin);
        $stmt->bindParam(":status_anggota", $status_anggota);
        $stmt->bindParam(":alamat_anggota", $alamat_anggota);
        $stmt->bindParam(":gambar_anggota", $nama_file); // Menggunakan nama file gambar yang diunggah
        $stmt->execute();
    
        // Pindahkan file gambar ke folder tujuan
        $folder_tujuan = "../layouts/img/"; // Folder tujuan penyimpanan gambar
        $tmp_file = $_FILES['gambar_anggota']['tmp_name'];
        move_uploaded_file($tmp_file, $folder_tujuan . $nama_file);
    }
    public function edit($id)
    {

        $sql = "SELECT * FROM tb_anggota WHERE anggota_id=:anggota_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":anggota_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $anggota_name = $_POST['anggota_name'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $status_anggota = $_POST['status_anggota'];
        $alamat_anggota = $_POST['alamat_anggota'];
        $gambar_anggota = $_POST['gambar_anggota'];
        $anggota_id = $_POST['anggota_id'];

          // Periksa apakah ada file gambar yang diunggah
    if(isset($_FILES['gambar_anggota']) && $_FILES['gambar_anggota']['error'] === UPLOAD_ERR_OK) {
        $gambar_anggota_tmp = $_FILES['gambar_anggota']['tmp_name'];
        $gambar_anggota_name = $_FILES['gambar_anggota']['name'];

        // Tentukan folder penyimpanan
        $upload_dir = "../layouts/img/";
        $gambar_anggota_path = $upload_dir . $gambar_anggota_name;

        // Pindahkan file gambar yang diunggah ke folder tujuan
        move_uploaded_file($gambar_anggota_tmp, $gambar_anggota_path);

        // Simpan nama file gambar ke dalam database
        $gambar_anggota = $gambar_anggota_name;
    } else {
        // Jika tidak ada gambar yang diunggah, gunakan gambar yang sudah ada di database
        $gambar_anggota = $_POST['gambar_anggota_old'];
    }

        $sql = "UPDATE tb_anggota SET anggota_name=:anggota_name, jenis_kelamin=:jenis_kelamin, status_anggota=:status_anggota, alamat_anggota=:alamat_anggota, gambar_anggota=:gambar_anggota WHERE anggota_id=:anggota_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":anggota_name", $anggota_name);
        $stmt->bindParam(":jenis_kelamin", $jenis_kelamin);
        $stmt->bindParam(":status_anggota", $status_anggota);
        $stmt->bindParam(":alamat_anggota", $alamat_anggota);
        $stmt->bindParam(":gambar_anggota", $gambar_anggota);
        $stmt->bindParam(":anggota_id", $anggota_id);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_anggota WHERE anggota_id=:anggota_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":anggota_id", $id);
        $stmt->execute();

    }

}