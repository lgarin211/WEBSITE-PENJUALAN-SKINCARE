<?php
// Koneksi ke database
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'skincare';
$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Mendapatkan nama konsumen dari permintaan AJAX
$name = $_POST['name'];

// Query untuk mendapatkan transaksi berdasarkan nama konsumen
$query = "SELECT * FROM transaksi WHERE name = '$name'";
$result = mysqli_query($conn, $query);

// Tampilkan data transaksi
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['telp']."</td>";
    echo "<td>".$row['stok']."</td>";
    echo "<td>".$row['id_produk']."</td>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['harga']."</td>";
    echo "<td>".$row['pname']."</td>";
    echo "</tr>";
}

// Tutup koneksi
mysqli_close($conn);
?>
