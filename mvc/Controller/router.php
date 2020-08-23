<?php
class router {
    
   
    public function router()
    {
        $arr = $this->UrlProcess();

        if(isset($_REQUEST["url"]) ){
            if(file_exists("./mvc/view/page/".$arr[0].".php") ){
                require_once "./mvc/view/page/".$arr[0] .'.php';
            }
            else {
                echo "bạn đang truy cập trái phép";
            }
        }
        else {
           $this->login();
        }
        

        
    }
    
    public function login()
    {
        if(isset($_SESSION['username'])){
            require_once "mvc/view/page/home.php";
        }
        else {
            require_once "mvc/view/page/dangnhap.php";

        }
    }
    public function UrlProcess()
    {
        if(isset($_REQUEST["url"]) ){
            return explode("/", filter_var(trim($_REQUEST["url"], "/")));
        }
    }
    
}