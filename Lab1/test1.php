<?php

echo "<h3>1. In thông tin trực tiếp:</h3>";
echo "Họ tên: Võ Vũ Phú Đăng <br>";
echo "Ngày sinh: 01/01/2005 <br>";
echo "Mã số sinh viên: 123456789 <br>";

echo "<hr>";

echo "<h3>2. Sử dụng biến:</h3>";
$hoTen = "Võ Vũ Phú Đăng";
$mssv = "123456789";
$sdt = "0901234567";
$ngaySinh = "01/01/2005";

echo "Họ tên: " . $hoTen . "<br>";
echo "MSSV: " . $mssv . "<br>";
echo "Số điện thoại: " . $sdt . "<br>";
echo "Ngày sinh: " . $ngaySinh . "<br>";

echo "<hr>";
echo "<h3>3. Khai báo hằng số:</h3>";
define("HOST", "localhost");
define("DATABASE", "quanly_sinhvien");
define("USERNAME", "root");
define("PASSWORD", "");

echo "HOST: " . HOST . "<br>";
echo "DATABASE: " . DATABASE . "<br>";
echo "USERNAME: " . USERNAME . "<br>";
echo "PASSWORD: " . PASSWORD . "<br>";

echo "<hr>";

echo "<h3>4. Phân biệt nháy kép và nháy đơn:</h3>";
echo "Dùng nháy kép: Xin chào bạn $hoTen <br>"; 

echo 'Dùng nháy đơn: Xin chào bạn $hoTen <br>';


?>
