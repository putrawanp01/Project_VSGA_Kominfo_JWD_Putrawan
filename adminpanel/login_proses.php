<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Simpan username dan password dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Buat koneksi ke database
    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $dbname = "db_club_motor";

    $conn = new mysqli($servername, $db_username, $db_password, $dbname);

    // Periksa koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }
    
    // Siapkan dan jalankan query untuk mencari pengguna berdasarkan username
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Ambil data pengguna dari hasil query
        $row = $result->fetch_assoc();
        $stored_password = $row['password'];

        // Periksa apakah password cocok
        if (password_verify($password, $stored_password)) {
            // Password cocok, buat sesi dan alihkan ke halaman selamat datang
            $_SESSION['username'] = $username;
            header("location:index.php");
        } else {
            // Password tidak cocok
            echo "Password salah.";
        }
    } else {
        // Pengguna tidak ditemukan
        echo "Username tidak ditemukan.";
    }

    // Tutup koneksi
    $conn->close();
}
?>