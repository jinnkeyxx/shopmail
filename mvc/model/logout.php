<?php
session_start();
$logout = session_destroy();
if($logout){
    $status = 0;
    $messages = "Đăng xuất thành công";
}
echo json_encode(array('status' => $status , 'messages' => $messages));