<?php 
session_start();
// lay data tu form
 $u = $_POST['username'];
 $p = $_POST['password'];
// ket noi toi csdl
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "dangnhap";
$db = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
 $sql = "select * from user where tendn = '$u' and matkhau = '$p' ";
 $result = mysqli_query($db,$sql);
 if(mysqli_num_rows($result) > 0)
 {
    echo "thanh cong";
 } else {
     echo 'that bai';
 }
// truy van data
// $rs = mysqli_query($db,$sql);
// // if(mysqli_num_rows($rs) >0){
//     echo "<div>Đăng nhập thành công></div>";

// } else {
//     echo "<div>Đăng nhập không thành công></div>";
// }

?>