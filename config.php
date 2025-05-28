<?php
$host = 'localhost';
$user = 'root';      // user mặc định của XAMPP
$pass = '';          // password mặc định để trống
$db   = 'nhan_kiet_db';  // tên database vừa tạo

$conn = new mysqli($host, $user, $pass, $db);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
?>
