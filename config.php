<?php
// Kết nối database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nhan_kiet_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Kết nối thất bại: " . $conn->connect_error);
}

// Nhận dữ liệu từ form
$user = $_POST['username'];
$pass = $_POST['password'];

// Lưu vào CSDL
$sql = "INSERT INTO users (username, password) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $user, $pass);

if ($stmt->execute()) {
  echo "Đăng nhập thành công và lưu dữ liệu!";
} else {
  echo "Lỗi: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
