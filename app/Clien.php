<?php

require_once "inc/Koneksi.php";

class Clien extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_clien";
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
        $clien_name = $_POST['clien_name'];
        $status_clien = $_POST['status_clien'];

        $sql = "INSERT INTO tb_clien ( clien_name, status_clien ) VALUES (:clien_name,  :status_clien)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":clien_name", $clien_name);
        $stmt->bindParam(":status_clien", $status_clien);
        $stmt->execute();

    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_clien WHERE clien_id=:clien_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":clien_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $clien_name = $_POST['clien_name'];
        $status_clien = $_POST['status_clien'];
        $clien_id = $_POST['clien_id'];

        $sql = "UPDATE tb_clien SET clien_name=:clien_name, status_clien=:status_clien WHERE clien_id=:clien_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":clien_name", $clien_name);
        $stmt->bindParam(":status_clien", $status_clien);
        $stmt->bindParam(":clien_id", $clien_id);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_clien WHERE clien_id=:clien_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":clien_id", $id);
        $stmt->execute();

    }

}