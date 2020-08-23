<?php
session_start();
require "../function/Database.php";
require "../function/Function.php";
$db = new Database;
if(isset($_SESSION['username'])){
    $check_admin = $db->total("SELECT * FROM `users` WHERE `username` = '{$_SESSION['username']}'");
    if($check_admin['role'] == 1){
        $loai = strip_tags($_POST['loai']);
        $flag = false;
        $mail = strip_tags($_POST['mail']);
        
        $pro_mail = explode("\n" , $mail);
        // print_r($pro_mail);
        foreach($pro_mail as $addmail => $value){
           
            if (strpos($value, '@') !== false) {
                $flag = true;
            }
            else {
                $flag = false;
            }
            if($flag === false){
                $status = 1;
                $messages = "Bị sai gì đó";
            }
            else {
                $soluong = count($pro_mail);
                $count_mail = $db->countTable('type_mail' , array('type' => $loai));
                if($count_mail > 0){
                    $get_soluong = $db->total("SELECT * FROM `type_mail` WHERE `type` = '$loai'");
                    $them_so_luong = $get_soluong['soluong'] + $soluong;
                    $update_soluong = $db->update('type_mail' , array('soluong' => $them_so_luong ) , array('type' => $loai));
                    if($update_soluong){
                        $status = 0;
                        $messages = "Thêm Thành công";
                    }
                }
                else {
                    $add_mail = $db->insert('mail' , array('type' => $loai , 'mail' => $value , 'active' => 0 , 'user' => $_SESSION['username'] , 'date' => $date , 'soluong' => $soluong));
                    if($add_mail){
                        $status = 0;
                        $messages = "Thêm mail thành công";
                    }
                    else {
                        $status = 1;
                        $messages = "Có lỗi xảy ra";
                    }
                }
               
                
            }
           
        }
        $add_user_mail = $db->insert('user_add_mail' , array('user' => $_SESSION['username'] , 'solanthem' => 0,  'soluong' => $soluong , 'date' => $date));

        
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