<?php
session_start();
require "../function/Database.php";
require "../function/Function.php";
$db = new Database;
if(!isset($_SESSION['username'])){
    $user = strip_tags($_POST['user']);
    $pass = strip_tags($_POST['pass']);
    $check = $db->countTable('users' , array('username' => $user , 'password' => $pass));
    if($check > 0){
        $status = 0;
        $messages = "Đăng nhập thành công";
        $_SESSION['username'] = $user;
    }
    else {
        $status = 1;
        $messages = "Tên tài khoản hoặc mật khẩu không đúng";
    }
}
else {
    $status = 1;
    $messages = "Bạn đã đăng nhập rồi";
}
echo json_encode(array('status' => $status , 'messages' => $messages));