<?php
// Kết nối cơ sở dữ liệu
$servername = "localhost";
$username = "root"; // thay đổi nếu cần
$password = ""; // thay đổi nếu cần
$dbname = "nhan_kiet_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Lấy dữ liệu từ form
$khuvuc = $_POST['khuvuc'];
$sodienthoai = $_POST['sodienthoai'];
$hoten = $_POST['hoten'];
$namsinh = $_POST['namsinh'];
$gioitinh = $_POST['gioitinh'];

// Chuẩn bị truy vấn SQL
$sql = "INSERT INTO ung_vien (khu_vuc, so_dien_thoai, ho_ten, nam_sinh, gioi_tinh)
        VALUES ('$khuvuc', '$sodienthoai', '$hoten', $namsinh, '$gioitinh')";

// Thực thi truy vấn
if ($conn->query($sql) === TRUE) {
    echo "Dữ liệu đã được lưu thành công!";
} else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
