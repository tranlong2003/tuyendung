<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $khu_vuc = $_POST['khu_vuc'];
    $so_dien_thoai = $_POST['so_dien_thoai'];
    $ho_ten = $_POST['ho_ten'];
    $nam_sinh = (int)$_POST['nam_sinh'];
    $gioi_tinh = $_POST['gioi_tinh'];

    $stmt = $conn->prepare("INSERT INTO ung_vien (khu_vuc, so_dien_thoai, ho_ten, nam_sinh, gioi_tinh) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssis", $khu_vuc, $so_dien_thoai, $ho_ten, $nam_sinh, $gioi_tinh);

    if ($stmt->execute()) {
        echo "<script>alert('Đăng ký thành công!'); window.location.href='index.html';</script>";
    } else {
        echo "Lỗi: " . $conn->error;
    }
}
?>
