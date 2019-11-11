<?php
require_once('db_function.php');
require "DBDA.class.php";
header("content-type:text/html;charset=utf-8");
require_once 'homeEditTo.php';
require_once 'common.ss.php';
//$f1 = $_POST['file1'];
//$f2 = $_POST['image'];
$ID=$_POST['ID'];
$name=$_POST['name'];
$startdate=$_POST['startdate'];
$enddate=$_POST['enddate'];
$TID=$_POST['TID'];
$week=$_POST['week'];

$files=$_FILES['image'];
//修改允许上传文件的类型，为('jpeg','jpg','png','gif','html','txt')，也可以增加新的，如pdf，pptx等等
$allowExt=array('jpeg','jpg','png','gif','html','txt');

//print $_FILES['file1']['name'];



$dest2 = "img/".$f2;
//print $_FILES[0][1];

    //修改上传保存的文件夹为本地的'imooc'，如果没有这个文件夹，那么就创建一个
    //'false'参数:不要检查上传的文件是否为真实的图片，因为要允许上传除开图片类型外的其他类型文件，如html、txt
   
        $res=uploadFile($files,'img',false,$allowExt); 
   
    echo $res['mes'],'<br/>';
    $uploadFiles[]=$res['dest'];//如果要不显示错误信息的话，用@$uploadFiles[]=$res['dest'];

//session_start();


//<th><a href='; echo $route; echo' download="'; echo $result[$y]['SID'];'" > Student ID:&nbsp'; echo $result[$y]['SID'];'

$db = new DBDA();
  echo $ID;
$sql = "insert into course values('{$ID}','{$name}','{$startdate}','{$enddate}','{NULL}','{NULL}','{$dest2}','{$TID}','{$week}')";
$db->query($sql);

?><script language="JavaScript">;alert("submit successfully!");location.href="courselist.php";</script>;