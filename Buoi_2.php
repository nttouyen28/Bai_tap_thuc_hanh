<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// 1. Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không.
echo "Câu 1:" . "<br>";
function Kiemtra($a)
{
    if($a%2 == 0)
        echo "Số chẵn";
    else 
        echo "Số lẻ";
}
Kiemtra(5);
echo "<hr>";
// 2. Viết chương trình PHP để tính tổng của các số từ 1 đến n.
echo "Câu 2:" . "<br>";
function Tinhtong($a)
{
    $tong = 0;
    for($i=1; $i<=$a; $i++)
    {
        $tong+=$i;
    } 
    echo $tong;
}
Tinhtong(3);
echo "<hr>";
// 3. Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10.
?>
<?php
echo "Câu 3:" . "<br>";
function Multiplication($a)
{
    for($i=1; $i<=10; $i++)
    {
        $result = $a*$i;
        echo "$a x $i = $result <br>";
    }

}
?>
<table border = "1" width = "35%" >
    <tr align = "left">
    <td><?php Multiplication(1);?></td>
    <td><?php Multiplication(2);?></td>
    <td><?php Multiplication(3);?></td>
    <td><?php Multiplication(4);?></td>
    <td><?php Multiplication(5);?></td>
    </tr>
    <tr align = "left">
    <td><?php Multiplication(6);?></td>
    <td><?php Multiplication(7);?></td>
    <td><?php Multiplication(8);?></td>
    <td><?php Multiplication(9);?></td>
    <td>/<?php Multiplication(10);?></td>
    </tr>
</table>
<?php
echo "<hr>";
// 4. Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không.
echo "Câu 4:" . "<br>";
function Teststring($str)
{
    $test = "hi";
    if(strlen(strstr($str,$test))>0)
    {
        echo "Tìm thấy!";
    }else 
        echo "Không tìm thấy!";
}
Teststring("hello world");
echo "<hr>";
// 5. Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng.
echo "Câu 5:" . "<br>";
function Maxnumber($mang) {
    $max = $mang[0];//gán giá trị lớn nhất là giá trị của phần tử đầu
    foreach ($mang as $so) {
        if ($so > $max) {
            $max = $so;
        }
    } return $max;
}
function Minnumber($mang) {
    $min = $mang[0]; //gán giá trị nhỏ nhất là giá trị của phần tử đầu
    foreach ($mang as $so) {
        if ($so < $min) {
            $min = $so;
        }
    } return $min;
}
$mang = array(1, 3, 9, 11, 7, 2);
$max = Maxnumber($mang);
$min = Minnumber($mang);
echo "Giá trị lớn nhất trong mảng là: $max";
echo "<br>";
echo "Giá trị nhỏ nhất trong mảng là: $min";
echo "<hr>";
// 6. Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.
echo "Câu 6:" . "<br>";
function arrage($mang) {
    sort($mang);
    return $mang;
}
$mang = array(1, 4, 7, 5, 10, 20);
$sap_xep = arrage($mang);
echo "Mảng tăng dần: ";
foreach($mang as $value){
  echo "$value"." ";
}
//7. Viết chương trình PHP để tính giai thừa của một số nguyên dương.
function tinhGiaiThua($a){
    $giaithua = 1;
    if ($a==0||$a==1){
        return $giaithua;
    }else{
    for($i=2; $i<=$a; $i++){
        $giaithua *= $i;
    } return $giaithua;
    }
    echo $giaithua;
}
$a = 10;
echo "Giai thua cua $a là ". tinhGiaiThua($a);
echo "<hr>";
// 8. Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.
echo "Câu 8:" . "<br>";
function check_prime($n){
    // so nguyen n < 2 khong phai la so nguyen to
    if ($n < 2) {
        return false;
    }
    // check so nguyen to khi n >= 2
    for($i = 2; $i <= sqrt ( $n ); $i ++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}
function show_prime($a,$b){
    for ($i = $a; $i <= $b; $i++){
        if(check_prime($i))
            echo "$i <br>";
    }
}
show_prime(1,50);
echo "<hr>";
// 9. Viết chương trình PHP để tính tổng của các số trong một mảng.
echo "Câu 9:" . "<br>";
$array = array(1,2,3,4,5);
$array2 = array("a" => 1, "b" => 2, "c" => 3, "d" => 4);
echo array_sum($array);
echo "<br>";
echo array_sum($array2);

//10. Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước. (cộng tổng hai số liền trước)
echo "Câu 10:" . "<br>";
function fibonacci($n) {
    $f0 = 0;
    $f1 = 1;
    $fn = 1;
    if ($n < 0) {
        return - 1;
    } else if ($n == 0 || $n == 1) {
        return $n;
    } else {
        for($i = 2; $i < $n; $i ++) {
            $f0 = $f1;
            $f1 = $fn;
            $fn = $f0 + $f1;
        }
    }
    return $fn;
}
function show_fibonacci($a,$b){
    for($i = $a; $i<=$b; $i++){
        echo fibonacci($i) ;
        echo "<br>";
    }
}
show_fibonacci(1,20);
echo "<hr>";
// 11. Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không.
echo "Câu 11:" . "<br>";
function amstrong($a){
    $sum = 0;
    //Tìm tổng lập phương của các chữ số
    $temp = $a; //Biến tạm
    while ($temp > 0){
    $num = $temp % 10;
    $sum += $num ** 3; //$num*$num*$num = $num**3
    $temp /=10;
    }
    if ($a){
        echo "$a"." is an Armstrong number";}
    else{
        echo "$a"." is not an Armstrong number";}
}
amstrong(407);
echo "<hr>";
// 12. Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ.
echo "Câu 12:" . "<br>";
function chen_phantu($mang, $phantu, $vitri) {
    $mang_sau = array_slice($mang, 0, $vitri); // Lấy mảng từ đầu đến vị trí chèn
    $mang_sau[] = $phantu; // Chèn phần tử vào mảng
    $mang_sau = array_merge($mang_sau, array_slice($mang, $vitri)); // Ghép mảng sau chèn với mảng từ vị trí chèn đến cuối
    return $mang_sau;
}
//VD
$mang = array(2, 4, 6, 8, 10);
$phantu_chen = 5;
$vi_tri_chen = 2;
$mang_sau = chen_phantu($mang, $phantu_chen, $vi_tri_chen);
echo "Mảng sau khi chèn phần tử $phantu_chen vào vị trí $vi_tri_chen là: ";
echo "<pre>";
print_r($mang_sau);
echo "</pre>";
echo "<hr>";
// 13. Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.
echo "Câu 13:" . "<br>";
function delete_duplicate($mang) {
    $mang_loai_bo = array_unique($mang); // Loại bỏ các phần tử trùng lặp
    return $mang_loai_bo;
}

// Mảng ví dụ
$mang = array(2, 5, 7, 8, 2, 5, 3, 8);
$mang_sau = delete_duplicate($mang);
echo "Mảng sau khi loại bỏ các phần tử trùng lặp là: ";
echo "<pre>";
print_r($mang_sau);
echo "</pre>";
echo "<hr>";
// 14. Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.
echo "Câu 14:" . "<br>";
function tim_vi_tri($mang, $phantu) {
    foreach ($mang as $key => $value) {
        if ($value == $phantu) {
            return $key;
        }
    }
    return -1; // Trả về -1 nếu không tìm thấy phần tử trong mảng
}
$mang = array(2, 4, 6, 8, 10);
$tim = 3;
$vi_tri = tim_vi_tri($mang, $tim);
if ($vi_tri != -1) {
    echo "Phần tử $tim được tìm thấy tại vị trí $vi_tri trong mảng.";
} else {
    echo "Không tìm thấy phần tử $tim trong mảng.";
}
echo "<hr>";
// 15. Viết chương trình PHP để đảo ngược một chuỗi.
echo "Câu 16:" . "<br>";
function reverse_string($str1)
{
 $n = strlen($str1);
 if($n == 1){
    return $str1;
   }else
   {
   $n--;
   //trả về chuỗi ngược
   return reverse_string(substr($str1,1,$n)) . substr($str1,0,1); //substr(chuỗi, vị trí, độ dài) trả về 1 phần của chuỗi
   }
}
echo reverse_string('Hello');
// 16. Viết chương trình PHP để tính số lượng phần tử trong một mảng.
function count_array($mang){
    return count($mang);
}
$nums = array(1,2,3,4,5,6,7);
$so_luong = count_array($nums);
echo "Số lượng phần tử trong mảng là: $so_luong ";
echo "<hr>";
// 17. Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.(chuỗi đảo ngược vẫn ra chuỗi ban đầu)
echo "Câu 17:" . "<br>";
function check_palindrome($chuoi) {
    $chuoi = strtolower($chuoi); // Chuyển chuỗi về chữ thường
    $chuoi = preg_replace("/[^A-Za-z0-9]/", '', $chuoi); // Loại bỏ các ký tự không phải chữ cái và số
    $dao_nguoc = strrev($chuoi); // Đảo ngược chuỗi
    if ($chuoi == $dao_nguoc) {
        return true;
    } else {
        return false;
    }
}
// Chuỗi ví dụ
$chuoi = "level";
if (check_palindrome($chuoi)) {
    echo "Chuỗi \"$chuoi\" là chuỗi Palindrome";
} else {
    echo "Chuỗi \"$chuoi\" không là chuỗi Palindrome";
}
echo "<hr>";
// 18. Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.
echo "Câu 18:" . "<br>";
function count_display($mang, $phantu) {
    $count = 0;
    foreach ($mang as $value) {
        if ($value == $phantu) {
            $count++;
        }
    }
    return $count;
}
$mang = array(1, 4, 7, 8, 4, 8, 4, 6, 12, 4);
$phantu = 8;
$solan = count_display($mang, $phantu);
echo "Số lần xuất hiện của phần tử $phantu trong mảng là: $solan";
echo "<hr>";
// 19. Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.
echo "Câu 19:" . "<br>";
function Sapxep($mang) {
    rsort($mang);
    return $mang;
}
$mang = array(1, 4, 7, 5, 10, 20);
$sap_xep = Sapxep($mang);
echo "Mảng giảm dần:";
foreach($mang as $value){
  echo "$value"." ";
}
echo "<hr>";
// 20. Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.
echo "Câu 20:" . "<br>";
//Thêm vào đầu mảng
function them_phantu_dau($mang,$phantu){
    array_unshift($mang,$phantu);
    return $mang;
}
$mang = array(1, 4, 7, 5, 10, 20);
$phantu_them = 3;
$mang_them = them_phantu_dau($mang,$phantu_them);
echo "Mảng sau khi thêm phần tử $phantu_them vào đầu: ";
foreach($mang_them as $value){
  echo "$value"." ";
}
//Thêm vào cuối mảng
function them_phantu_cuoi($mang,$phantu){
    array_push($mang,$phantu);
    return $mang;
}
$mang = array(1, 4, 7, 5, 10, 20);
$phantu_them = 3;
$mang_them = them_phantu_cuoi($mang,$phantu_them);
echo "Mảng sau khi thêm phần tử $phantu_them vào cuối: ";
foreach($mang_them as $value){
  echo "$value"." ";
}
echo "<hr>";
// 21. Viết chương trình PHP để tìm số lớn thứ hai trong một mảng.
echo "Câu 21:" . "<br>";
function Solon_thu_hai($mang) {
    $max1 = $mang[0];// Khởi tạo hai biến $max1 và $max2 với giá trị ban đầu là 2 phần tử đầu tiên trong mảng.
    $max2 = $mang[1];

    foreach ($mang as $value) {
        if ($value > $max1) {
            $max2 = $max1; //gán giá trị của $max1 cho $max2
            $max1 = $value;//gán giá trị của ptu hiện tại cho $max1
        } elseif ($value > $max2 && $value != $max1) {
            $max2 = $value;
        }
    }
    return $max2;
}
$mang = array(10, 2, 6, 15, 3);
$solonhai = Solon_thu_hai($mang);
echo "Số lớn thứ hai trong mảng là: $solonhai";
echo "<hr>";
// 22. Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.
echo "Câu 22:" . "<br>";
function tim_uscln($a, $b) {
    while ($b != 0) {
        $temp = $a % $b; // lấy phần dư của $a chia cho $b và gán nó cho $temp
        $a = $b; // tiếp tục cho đến khi $b trở thành 0, $a là UCLN
        $b = $temp;
    }
    return $a;
}
function tim_bscnn($a, $b) {
    $uscln = tim_uscln($a, $b);
    $bscnn = ($a * $b) / $uscln;
    return $bscnn;
}
$a = 6;
$b = 8;
$uscln = tim_uscln($a, $b);
$bscnn = tim_bscnn($a, $b);
echo "Ước số chung lớn nhất của $a và $b là: $uscln";
echo "<br>";
echo "Bội số chung nhỏ nhất của $a và $b là: $bscnn";
echo "<hr>";
// 23. Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không.
echo "Câu 23:" . "<br>";
function check_perfectnumber($n) {
    $sum = 0;
    for ($i = 1; $i < $n; $i++) {
        if ($n % $i == 0) {
            $sum += $i;
        }
    }
    if ($sum == $n) {
        return true;
    } else {
        return false;
    }
}
$number = 18; // 1+2+3+6+9 = 21 khác 18
if (check_perfectnumber($number)) {
    echo "$number là một số hoàn hảo";
} else {
    echo "$number không là một số hoàn hảo";
}
echo "<hr>";
// 24. Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng.
echo "Câu 24:" . "<br>";
function Max_sole($mang) {
    $max = PHP_INT_MIN; //Gán cho giá trị nhỏ nhất của kiểu số nguyên trong PHP

    foreach ($mang as $value) {
        if ($value % 2 != 0 && $value > $max) {
            $max = $value;
        }
    }
    return $max;
}
$mang = array(2, 3, 25, 12, 7, 6);
$sole_max = Max_sole($mang);
if ($sole_max == PHP_INT_MIN) {
    echo "Không tìm thấy số lẻ trong mảng";
} else {
    echo "Số lẻ lớn nhất trong mảng là: $sole_max";
}
echo "<hr>";
// 25. Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.
echo "Câu 25:" . "<br>";
function ktra_prime($n) {
    if ($n <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    } return true;
}
$number = 35;
if (ktra_prime($number)) {
    echo "$number là một số nguyên tố";
} else {
    echo "$number không là một số nguyên tố";
}
echo "<hr>";
// 26. Viết chương trình PHP để tìm số dương lớn nhất trong một mảng.
echo "Câu 26:" . "<br>";
function find_Positive_max($mang) {
    $maxPos = PHP_INT_MIN; //Gán cho giá trị nhỏ nhất của kiểu số nguyên trong PHP
    foreach ($mang as $value) {
        if ($value > $maxPos && $value > 0) {
            $maxPos = $value;
        }
    } return $maxPos;
}
$mang = array(-5, 5, 9, 28, 15);
$Posmax = find_Positive_max($mang);
if ($Posmax == PHP_INT_MIN) {
    echo "Không tìm thấy số dương trong mảng";
} else {
    echo "Số dương lớn nhất trong mảng là: $Posmax";
}
echo "<hr>";
// 27. Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.
echo "Câu 27:" . "<br>";
function find_Negative_max($mang) {
    $maxNeg = PHP_INT_MIN;
    foreach ($mang as $value) {
        if ($value < $maxNeg && $value < 0) {
            $maxNeg = $value;
        }
    } return $maxNeg;
}
$mang = array(-2, 5, -9, -12, -7, 3);
$Negmax = find_Negative_max($mang);
if ($Negmax == PHP_INT_MIN) {
    echo "Không tìm thấy số âm trong mảng";
} else {
    echo "Số âm lớn nhất trong mảng là: $Negmax";
}
echo "<hr>";
// 28. Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n.
echo "Câu 28:" . "<br>";
function Tongsole($n) {
    $sum = 0;
    for ($i = 1; $i <= $n; $i += 2) {
        $sum += $i;
    } return $sum;
}
$n = 11;
$tong_so_le = Tongsole($n);
echo "Tổng các số lẻ từ 1 đến $n là: $tong_so_le";
echo "<hr>";
// 29. Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước.(số nguyên dương mà căn bậc hai của nó là một số nguyên)
echo "Câu 29:" . "<br>";
function findSquare($a, $b) {
    $squares = [];
    for ($i = $a; $i <= $b; $i++) {
        if (sqrt($i) == intval(sqrt($i))) {
            $squares[] = $i;
        }
    } return $squares;
}
$a = 1;
$b = 20;
$so_chinh_phuong = findSquare($a, $b);
echo "Các số chính phương từ $a đến $b là: " . implode(', ', $so_chinh_phuong); //Nối các số với dấu cách phẩy
echo "<hr>";
// 30. Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.
echo "Câu 30:" . "<br>";
function Test_string($str1, $str2) {
    $len1 = strlen($str1);
    $len2 = strlen($str2);
    for ($i = 0; $i <= $len1 - $len2; $i++) {
        $j = 0;
        while ($j < $len2 && $str1[$i + $j] == $str2[$j]) {
            $j++;
        }
        if ($j == $len2) {
            return true;
        }
    }return false;
}
$chuoi_goc = "Hello, World!";
$chuoi_con = "World";
if (Test_string($chuoi_goc, $chuoi_con)) {
    echo "$chuoi_con là một chuỗi con của $chuoi_goc";
} else {
    echo "$chuoi_con không là một chuỗi con của $chuoi_goc";
}


?>
</body>
</html>