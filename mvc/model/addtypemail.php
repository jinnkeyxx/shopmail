<?php
session_start();
require "../function/Database.php";
require "../function/Function.php";
$db = new Database;
if(isset($_SESSION['username'])){
    $check_admin = $db->total("SELECT * FROM `users` WHERE `username` = '{$_SESSION['username']}'");
    if($check_admin['role'] == 1){
        $tien = strip_tags($_POST['tien']);
        $type = strip_tags($_POST['type']);
        if(!empty($type) && is_numeric($tien)){
            $add_type = $db->insert('type_mail' , array('type' => $type , 'giatien' => $tien , 'user' => $_SESSION['username'] , 'date' => $date));
            if($add_type){
                $status = 0;
                $messages = "Thêm loại mail thành công";
            }
            else {
                $status = 1;
                $messages = "có lỗi xảy ra";
            }
        }
        else {
            $status = 1;
            $messages = "Bị sai gì đó";
        }
    }
    else {
        $status = 1;
        $messages = "làm gì thế";
    }
}
else {
    $status = 1;
    $messages = "Mời bạn đăng nhập";
}
echo json_encode(array('status' => $status , 'messages' => $messages));