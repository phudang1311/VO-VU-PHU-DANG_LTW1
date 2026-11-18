<?php
// 1. Sử dụng trim() để loại bỏ khoảng trắng ở cả đầu và cuối chuỗi
echo "<h3>1. Hàm trim():</h3>";
$chuoiGoc1 = "   Chào mừng bạn đến với môn Lập trình Web 1   ";
$ketQuaTrim = trim($chuoiGoc1);

echo "Chuỗi ban đầu (có khoảng trắng): '" . $chuoiGoc1 . "' (Độ dài: " . strlen($chuoiGoc1) . ")<br>";
echo "Sau khi dùng trim(): '" . $ketQuaTrim . "' (Độ dài: " . strlen($ketQuaTrim) . ")<br>";

echo "<hr>";

// 2. Loại bỏ khoảng trắng bên trái (ltrim) và bên phải (rtrim)
echo "<h3>2. Hàm ltrim() và rtrim():</h3>";
$chuoiGoc2 = "   Thực hành PHP và MySQL cơ bản   ";

$ketQuaLtrim = ltrim($chuoiGoc2);
echo "Sau khi dùng ltrim() (xóa bên trái): '" . $ketQuaLtrim . "'<br>";

$ketQuaRtrim = rtrim($chuoiGoc2);
echo "Sau khi dùng rtrim() (xóa bên phải): '" . $ketQuaRtrim . "'<br>";

echo "<hr>";

// 3. Cắt chuỗi bằng hàm substr()
echo "<h3>3. Hàm cắt chuỗi substr():</h3>";
$chuoiDai = "Lap trinh Web 1 voi ngon ngu PHP va he quan tri CSDL MySQL"; // Chuỗi trên 30 ký tự

// Lấy 10 ký tự đầu tiên (bắt đầu từ vị trí 0, lấy 10 ký tự)
$muoiKyTuDau = substr($chuoiDai, 0, 10);
echo "Chuỗi gốc: $chuoiDai <br>";
echo "10 ký tự đầu tiên: '$muoiKyTuDau' <br>";

// Lấy từ ký tự thứ 5 đến hết chuỗi (vị trí index tính từ 0 nên ký tự thứ 5 có index là 4)
$tuKyTuThu5 = substr($chuoiDai, 4);
echo "Từ ký tự thứ 5 đến hết chuỗi: '$tuKyTuThu5' <br>";

echo "<hr>";

// 4. Thay thế chuỗi bằng hàm str_replace()
echo "<h3>4. Hàm thay thế chuỗi str_replace():</h3>";
$chuoiThayThe = "Sinh vien nganh Cong nghe Thong tin dang hoc mon Lap trinh Web 1"; // Chuỗi trên 30 ký tự

// Thay thế từ "Lap trinh Web 1" thành "PHP & MySQL"
$chuoiMoi = str_replace("Lap trinh Web 1", "PHP & MySQL", $chuoiThayThe);

echo "Chuỗi trước khi thay thế: $chuoiThayThe <br>";
echo "Chuỗi sau khi thay thế: $chuoiMoi <br>";
?>
