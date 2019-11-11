<?php
header("content-type:text/html;charset=utf-8");
$SID=$_REQUEST['SID'];
$ID=$_REQUEST['ID'];
require_once 'homeTeaEditTo.php';
require_once 'common.ss.php';
//$f1 = $_POST['file1'];
//$f2 = $_POST['image'];
$name = $_POST['name'];
$files=getFiles();
//修改允许上传文件的类型，为('jpeg','jpg','png','gif','html','txt')，也可以增加新的，如pdf，pptx等等
$allowExt=array('jpeg','jpg','png','gif','html','txt');

//print $_FILES['file1']['name'];
$f1 =  $_FILES['file1']['name'];
$f2 =  $_FILES['image']['name'];
$dest1 = "files/".$f1;
$dest2 = "img/".$f2;
//print $_FILES[0][1];
foreach($files as $fileInfo){
    //修改上传保存的文件夹为本地的'imooc'，如果没有这个文件夹，那么就创建一个
    //'false'参数:不要检查上传的文件是否为真实的图片，因为要允许上传除开图片类型外的其他类型文件，如html、txt
    if(strcmp($fileInfo['name'],$f1) == 0){
       $res=uploadFile($fileInfo,'files',false,$allowExt);
       // $where=array('ID'=> $count[0]['count(*)'], 'route'=>$dest,'label'=>0);//老师的home编号为0
    }
    else
    {
        $res=uploadFile($fileInfo,'img',false,$allowExt); 
    }
   
    echo $res['mes'],'<br/>';
    $uploadFiles[]=$res['dest'];//如果要不显示错误信息的话，用@$uploadFiles[]=$res['dest'];
}
session_start();
require_once('DBDA.class.php');
require_once('db_function.php');
$dbda = new DBDA();   
$course=sql_query("select * from course where ID={$ID}");
$course[0]['week']++;
//$data=NULL;
sql_exec("insert into week values({$ID},{$course[0]['week']},'','','{$dest1}','{$name}','','','{$dest2}',4)"); //插入week表

$dbda->query("update course set week = {$course[0]['week']} where ID={$ID}",0);//更新course表
//$uploadFiles=array_values(array_filter($uploadFiles));//这样便于保存到数据库
//print_r($uploadFiles);//打印查看上传保存的结果
?><script language="JavaScript">;alert("submit successfully!");location.href="homeTeaEdit.php?ID=<?php echo $ID ?>&SID=<?php echo $SID ?>";</script>; <?php
?>