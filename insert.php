<?php
// Mengecek apakah form dikirimkan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $nama = $_POST["nama"];
    $merek = $_POST["merek"];
    $beli = $_POST["beli"];
    $jual = $_POST["jual"];
    $stok = $_POST["stok"];
    $kategori = $_POST["kategori"];
    $img = $_POST["img"];
    $desksing = $_POST["desksing"];
    $deslong = $_POST["deslong"];
    
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
    
    // Menyimpan data ke tabel produk
    $sql = "INSERT INTO produk VALUES (NULL,'$nama', '$merek', '$beli', '$jual', '$stok', '$kategori', '$img', '$desksing', '$deslong')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Data produk berhasil ditambahkan.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    // Menutup koneksi
    $conn->close();
}
?>
