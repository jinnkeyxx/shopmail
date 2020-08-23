<?php
session_start();
require_once "./mvc/function/Function.php";
require_once "./mvc/function/Database.php";
$db = new Database;
include "html/head.php";
include "html/main.php";
include "html/footer.php";
