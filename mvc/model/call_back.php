<?php
session_start();
require "../function/Database.php";
require "../function/Function.php";
$db = new Database;
$myfile = fopen("log.txt", "a");
$txt = $_GET['Code']."|".$_GET['Mess']."|".number_format($_GET['CardValue'])."|".$_GET['TrxID']."\n";
fwrite($myfile, $txt);
fclose($myfile);




if($_GET['Code']) {
	    
			$code = $_GET['Code'];
			$tranid = $_GET['TrxID'];

			$resq = $db->query("SELECT * FROM nap_tien WHERE tranid = '".$tranid."' ");


			$get = mysqli_fetch_array($resq);
   
 			$money = $_GET['CardValue'];


					if ($code == 1) {

	 $db->query("UPDATE users SET money = money + '".$money."' WHERE username = '".$get['username']."' ");

	 $db->query("UPDATE napthe SET status = '1' WHERE `tranid`='".$tranid."'");   


    } else if ($code == 5) {

		$db->query("UPDATE napthe SET status = '0' WHERE `tranid`='".$tranid."'");   	

	} else if ($code == 2) {

		$db->query("UPDATE napthe SET status = '2' WHERE `tranid`='".$tranid."'");   

        }else{
						
						echo $_GET['Mess']; 

					}


				}