<?php
// 1. Viết một chương trình PHP để đếm số ký tự trong một chuỗi sử dụng hàm strlen().
echo "Câu 1:" . "<br>";
echo strlen ("Hello world!");
echo "<hr>";
// 2. Viết một chương trình PHP để đếm số từ trong một chuỗi sử dụng hàm str_word_count().
echo "Câu 2:" . "<br>";
echo str_word_count ("Hello world!");
echo "<hr>";
// 3. Viết một chương trình PHP để đảo ngược một chuỗi sử dụng hàm strrev().
echo "Câu 3:" . "<br>";
echo strrev ("Hello world!");
echo "<hr>";
// 4. Viết một chương trình PHP để tìm kiếm một chuỗi con trong một chuỗi sử dụng hàm strpos().
echo "Câu 4:" . "<br>";
echo strpos ("Hello world!", "lo");
echo "<hr>";
// 5. Viết một chương trình PHP để thay thế một chuỗi con trong một chuỗi bằng một chuỗi khác sử dụng hàm str_replace().
echo "Câu 5:" . "<br>";
echo str_replace ("Hello", "Say" ,"Hello world!");
echo "<hr>";
// 6. Viết một chương trình PHP để kiểm tra xem một chuỗi có bắt đầu bằng một chuỗi con khác không sử dụng hàm strncmp().
echo "Câu 6:" . "<br>";
$a = "Hello world";
$b = "Hello Vietnam";
// So sanh do dai ky tu
echo strncmp ($a, $b, 5);
echo "<br>";
// So sanh ca cum 
echo strcmp ($a, $b);
echo "<hr>";
// 7. Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ hoa sử dụng hàm strtoupper().
echo "Câu 7:" . "<br>";
echo strtoupper ("Hello world!");
echo "<hr>";
// 8. Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ thường sử dụng hàm strtolower().
echo "Câu 8:" . "<br>";
echo strtolower ("Hello world!");
echo "<hr>";
// 9. Viết một chương trình PHP để chuyển đổi một chuỗi thành chuỗi in hoa chữ cái đầu tiên của mỗi từ sử dụng hàm ucwords().
echo "Câu 9:" . "<br>";
echo ucwords ("this is my house!");
echo "<hr>";
// 10. Viết một chương trình PHP để loại bỏ khoảng trắng ở đầu và cuối chuỗi sử dụng hàm trim().
echo "Câu 10:" . "<br>";
$a = " The house - Ngôi nhà ";
echo $a;
echo "<br>";
echo strlen($a);
echo "<br>";
echo $b = trim($a);
echo "<br>";
echo strlen($b);
echo "<hr>";
// 11. Viết một chương trình PHP để loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm ltrim().
echo "Câu 11:" . "<br>";
$a = "The house - Ngôi nhà ";
echo $b = ltrim($a,"T");
echo "<hr>";
// 12. Viết một chương trình PHP để loại bỏ ký tự cuối cùng của một chuỗi sử dụng hàm rtrim().
echo "Câu 12:" . "<br>";
$a = "The house - Ngôi nhà";
echo $b = rtrim($a, "nhà"); //Hàm cuối có ký tự null nên nếu ko ghi gì sẽ hiểu là xóa ký tự null
echo "<hr>";
// 13. Viết một chương trình PHP để tách một chuỗi thành một mảng các phần tử sử dụng hàm explode().
echo "Câu 13:" . "<br>";
$a = "BMW,Honda,Toyota";
echo "<pre>"; //dùng với print_r khi hiện mảng để dễ nhìn hơn
print_r(explode (",",$a));
echo "</pre>";
echo "<hr>";
// 14. Viết một chương trình PHP để nối các phần tử của một mảng thành một chuỗi sử dụng hàm implode().
echo "Câu 14:" . "<br>";
$name = array ("fist_name" => "Phan Bội", "last_name" => "Châu" );
$full_name = implode(" ", $name);
echo $full_name;
echo "<hr>";
// 15. Viết một chương trình PHP để thêm một chuỗi vào đầu hoặc cuối của một chuỗi sử dụng hàm str_pad().
echo "Câu 15:" . "<br>";
$dau = "Reply";
$sau = str_pad ($dau, 11, " 1988", STR_PAD_RIGHT); // STR_PAD_LEFT thêm vào đầu chuỗi
echo $sau;
echo "<hr>";
// 16. Viết một chương trình PHP để kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không sử dụng hàm strrchr().
echo "Câu 16:" . "<br>";
echo strrchr("Hello world!","world!");
echo "<hr>";
// 17. Viết một chương trình PHP để kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr().
echo "Câu 17:" . "<br>";
echo strstr("Hello world!","wor");
echo "<hr>";
// 18. Viết một chương trình PHP để thay thế tất cả các ký tự trong một chuỗi không phải là chữ cái hoặc số bằng một ký tự khác sử dụng hàm preg_replace().
echo "Câu 18:" . "<br>";
$a = "/Hi/";
$b = "Hi everyone, Hi Say";
$replace = "Hello";
echo preg_replace ($a, $replace, $b);
echo "<hr>";
// 19. Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một số nguyên hay không sử dụng hàm is_int().
echo "Câu 19:" . "<br>";
$a = 4;
if (is_int ($a)){
    echo "$a"." là số nguyên";
}else 
    echo "$a"." không là số nguyên";
    echo "<hr>";
// 20. Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một email hợp lệ hay không sử dụng hàm filter_var().
echo "Câu 20:" . "<br>";
function Check_email($chuoi) {
    if (filter_var($chuoi, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}
$email = "nguyenthitouyen@gmail.com";
if (Check_email($email)) {
    echo "$email là một email hợp lệ";
} else {
    echo "$email không là một email hợp lệ";
}
?>

