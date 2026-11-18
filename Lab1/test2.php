<?php
// 1. Khai báo hai số nguyên và thực hiện các phép toán cơ bản
echo "<h3>1. Phép toán số học:</h3>";
$a = 15;
$b = 4;

echo "Tổng ($a + $b): " . ($a + $b) . "<br>";
echo "Hiệu ($a - $b): " . ($a - $b) . "<br>";
echo "Tích ($a * $b): " . ($a * $b) . "<br>";
echo "Thương ($a / $b): " . ($a / $b) . "<br>";
echo "Chia lấy dư ($a % $b): " . ($a % $b) . "<br>";

echo "<hr>";

// 2. So sánh số nguyên (int) và chuỗi số (string)
echo "<h3>2. Toán tử so sánh:</h3>";
$soNguyen = 10;
$chuoiSo = "10";

echo "So sánh == : ";
var_dump($soNguyen == $chuoiSo); // true (chỉ so sánh giá trị, không quan tâm kiểu dữ liệu)
echo "<br>";

echo "So sánh === : ";
var_dump($soNguyen === $chuoiSo); // false (so sánh cả giá trị VÀ kiểu dữ liệu, int khác string)
echo "<br>";

echo "So sánh != : ";
var_dump($soNguyen != $chuoiSo); // false (kiểm tra khác nhau về giá trị)
echo "<br>";

echo "So sánh !== : ";
var_dump($soNguyen !== $chuoiSo); // true (kiểm tra khác nhau về giá trị hoặc khác kiểu dữ liệu)
echo "<br>";

echo "<hr>";

// 3. Toán tử tăng trước (++$x) và tăng sau ($x++)
echo "<h3>3. Toán tử tăng trước và tăng sau:</h3>";
$x = 5;
echo "Giá trị ban đầu của x: $x <br>";
echo "Thực hiện tăng trước (++\$x): " . (++$x) . "<br>"; // Cộng 1 vào x trước, sau đó mới in ra (kết quả: 6)
echo "Giá trị x sau khi tăng trước: $x <br><br>";

$y = 5;
echo "Giá trị ban đầu của y: $y <br>";
echo "Thực hiện tăng sau (\$y++): " . ($y++) . "<br>"; // In ra giá trị hiện tại của y trước (5), sau đó mới cộng 1
echo "Giá trị y sau khi tăng sau: $y <br>"; // Lúc này y đã thành 6

echo "<hr>";

// 4. Nối chuỗi bằng toán tử . và .=
echo "<h3>4. Toán tử nối chuỗi:</h3>";
$str1 = "Xin chào ";
$str2 = "PHP & MySQL";

// Toán tử (.) dùng để ghép hai chuỗi lại và trả về một chuỗi mới, không làm thay đổi chuỗi gốc
$ketQua = $str1 . $str2; 
echo "Dùng toán tử (.): $ketQua <br>";

// Toán tử (.=) dùng để nối thêm chuỗi mới vào trực tiếp đuôi của biến chuỗi ban đầu
$str1 .= $str2; 
echo "Dùng toán tử (.=): $str1 <br>";

echo "<hr>";

// 5. Đếm số lượng ký tự với strlen() và mb_strlen()
echo "<h3>5. Đếm số lượng ký tự:</h3>";
$chuoiKhongDau = "Lap trinh Web";
$chuoiCoDau = "Lập trình Web";

// strlen() đếm số byte (mỗi ký tự tiếng Việt có dấu chiếm từ 2-3 bytes nên kết quả sẽ bị dư)
echo "strlen() cho '$chuoiKhongDau': " . strlen($chuoiKhongDau) . " ký tự<br>";

// mb_strlen() đếm chính xác số lượng ký tự thực tế hỗ trợ bảng mã tiếng Việt UTF-8
echo "mb_strlen() cho '$chuoiCoDau': " . mb_strlen($chuoiCoDau, "UTF-8") . " ký tự<br>";

echo "<hr>";

// 6. Chuyển đổi chữ in hoa và chữ thường
echo "<h3>6. Chuyển đổi chữ hoa / chữ thường:</h3>";
$vanBan = "Học Lập Trình PHP Cơ Bản";

echo "strtoupper(): " . strtoupper($vanBan) . "<br>";
echo "strtolower(): " . strtolower($vanBan) . "<br>";
echo "mb_strtoupper(): " . mb_strtoupper($vanBan, "UTF-8") . "<br>";
echo "mb_strtolower(): " . mb_strtolower($vanBan, "UTF-8") . "<br>";
/*
Sự khác nhau:
- strtoupper() và strtolower() chỉ chuyển đổi chuẩn các ký tự tiếng Anh không dấu, sẽ bị lỗi font với chữ tiếng Việt có dấu.
- mb_strtoupper() và mb_strtolower() hỗ trợ đầy đủ Unicode (UTF-8) nên chuyển đổi chính xác toàn bộ tiếng Việt có dấu.
*/

echo "<hr>";

// 7. Ép kiểu chuỗi về số nguyên (int) và kiểm tra bằng var_dump()
echo "<h3>7. Ép kiểu chuỗi về int:</h3>";
$chuoi1 = "123 abc";
$chuoi2 = "abc 123";

$epKieu1 = (int)$chuoi1; // Lấy được số 123 ở đầu chuỗi
$epKieu2 = (int)$chuoi2; // Do chữ đứng đầu nên khi ép về số nguyên sẽ thành 0

echo "Ép kiểu '123 abc': ";
var_dump($epKieu1);
echo "<br>";

echo "Ép kiểu 'abc 123': ";
var_dump($epKieu2);
echo "<br>";

echo "<hr>";

// 8. Khai báo các kiểu dữ liệu cơ bản và dùng var_dump()
echo "<h3>8. Kiểm tra kiểu dữ liệu với var_dump():</h3>";
$kieuInt = 2026;
$kieuFloat = 9.5;
$kieuString = "Sinh viên IT";
$kieuBool = true;

var_dump($kieuInt); echo "<br>";
var_dump($kieuFloat); echo "<br>";
var_dump($kieuString); echo "<br>";
var_dump($kieuBool); echo "<br>";
?>
