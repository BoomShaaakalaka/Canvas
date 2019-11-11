<?php
session_start();

$dataObj = json_decode($HTTP_RAW_POST_DATA);
if(strtolower($_SESSION["code"]) != strtolower($dataObj->captcha)){   
    $msg = '不正确';    
}else{
    //正确
}