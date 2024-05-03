<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Simpan username dan password dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validasi input (harus disesuaikan dengan kebutuhan)
    if (empty($username) || empty($password)) {
        echo "Username dan password harus diisi.";
    } else {
        // Buat koneksi ke database
        $servername = "localhost";
        $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $dbname = "db_club_motor";

    $conn = new mysqli($servername, $db_username, $db_password, $dbname);

        // Periksa koneksi
        if ($conn->connect_error) {
            die("Koneksi gagal: " . $conn->connect_error);
        }

        // Hash password sebelum disimpan ke database
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Siapkan dan jalankan query untuk menyimpan data pengguna baru
        $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_password')";

        if ($conn->query($sql) === TRUE) {
            echo "Pendaftaran berhasil. Silakan <a href='login.php'>login</a>.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Tutup koneksi
        $conn->close();
    }
}
?>