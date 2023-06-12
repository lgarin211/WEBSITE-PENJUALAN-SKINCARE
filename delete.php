<?php
// Mengecek apakah form dikirimkan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data ID produk yang akan dihapus
    $id = $_POST["id"];
    
    // Melakukan koneksi ke database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "skincare";
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Memeriksa koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }
    
    // Menghapus data dari tabel produk
    $sql = "DELETE FROM produk WHERE id = '$id'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Data produk berhasil dihapus.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    // Menutup koneksi
    $conn->close();
}
?>
