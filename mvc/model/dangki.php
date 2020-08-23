<?php
session_start();
require "../function/Database.php";
require "../function/Function.php";
$db = new Database;
if(!isset($_SESSION['username'])){
$fullname = strip_tags($_POST['fullname']);
$username = strip_tags($_POST['username']);
$password = strip_tags($_POST['password']);
$repassword = strip_tags($_POST['repassword']);
if($fullname === "" || $username === "" || $password === "" || $repassword === ""){
    $status = 1;
    $messages = "Còn thiếu gì đó";
}
elseif(strlen($username) < 6){
    $status = 1; 
    $messages = "Tên tài khoản phải lớn hơn 6 kí tự";
}
elseif(strlen($password) < 6){
    $status = 1;
    $messages = "Mật khẩu phải lớn hơn 6 kí tự";
}
elseif($password !== $repassword){
    $status = 1;
    $messages = "Mật khẩu không trùng nhau";
}
else {
    $add = $db->insert('users' , array('username' => $username , 'password' => $password , 'active' => 0 , 'date' => $date , 'name' => $fullname , 'sodu' => 0) );
    if($add){
        $status = 0;
        $messages = "đăng kí thành công , xin vui lòng đợi chuyển hướng";
        $_SESSION['username'] = $username;
    }
}
}else {
    $status = 1;
    $messages = "Bạn phải đăng xuất trước khi đăng kí";
}
echo json_encode(array('status' => $status , 'messages' => $messages));