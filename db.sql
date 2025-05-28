CREATE DATABASE nhan_kiet_db;

USE nhan_kiet_db;

CREATE TABLE ung_vien (
    id INT AUTO_INCREMENT PRIMARY KEY,
    khu_vuc VARCHAR(100) NOT NULL,
    so_dien_thoai VARCHAR(20) NOT NULL,
    ho_ten VARCHAR(100) NOT NULL,
    nam_sinh INT NOT NULL,
    gioi_tinh VARCHAR(10) NOT NULL
);
