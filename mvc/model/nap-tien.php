<?php 
session_start();
require "../function/Database.php";
require "../function/Function.php";
$db = new Database;
if(isset($_SESSION['username'])){
    $type = strip_tags($_POST['type']);
    $gia = strip_tags($_POST['gia']);
    $seri = strip_tags($_POST['seri']);
    $pin = strip_tags($_POST['pin']);


    switch($type) {
        case 1:
            $network = 'VTT';
        case 2:
            $network = 'VMS';
        case 3:
            $network = 'VNP';
    }
    
    $api_key = 'e1765263-36b9-4e43-aa5d-5f2b052880d7';
    $call_back = 'http://localhost:80/mvc/model/call_back.php';
    
    $tranid = rand(10000, 99999);
    $api = 'http://gachthe.vn/API/NapThe?APIKey='.$api_key.'&Network='.$network.'&CardCode='.$pin.'&CardSeri='.$seri.'&CardValue='.$gia.'&URLCallback='.$call_back.'&TrxID='.$tranid;


    function curl_post($url = null, $header = [])
    {
        if (!empty($url)) {
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER["HTTP_USER_AGENT"]);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            if (curl_errno($ch)) {
                $res = "Lỗi: " . curl_error($ch);
            } else {
                $res = curl_exec($ch);
            }
            curl_close($ch);
            return $res;
        }
    }

    $post = json_decode(curl_post($api), true);

    if($post['Code'] == 1) {
        // Gửi Thẻ Thành Công!
        $add_lichsu = $db->insert('nap_tien' , array('user' => $_SESSION['username'] , 'tranid' => $tranid , 'date' => $date , 'mess' => ''));
        die(json_encode(array('status'=> true, 'messages'=> 'Thẻ đã gửi và đang được xử lí trong 3 ~ 5 phút!')));
    }else {


        die(json_encode(array('status'=> false, 'messages'=> $post['Message'])));       
    }

}
else {
    die(json_encode(array('status'=> false, 'messages'=> 'Bạn chưa đăng nhập!')));
}

?>