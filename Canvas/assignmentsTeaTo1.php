<?php
session_start();
header("content-type:text/html;charset=utf-8");
require_once('db_function.php');
$SID=$_REQUEST['SID'];
$ID=$_REQUEST['ID'];
$max=sql_query("select max(week) from asstea where ID={$ID}");
//$f1 = $_POST['file1'];
//$f2 = $_POST['image'];
$point = $_POST['point'];
$sid=$_REQUEST['SSID'];
session_start();
require_once('DBDA.class.php');
require_once('db_function.php');
$dbda = new DBDA();   
$course=sql_query("select * from course where ID={$ID}");
$length=strlen($sid)/8;
//print $length;
for($y=0; $y<$length; $y++){ 
    $S=substr($sid, 8*$y,8);
    $dbda->query("update assignment set point={$point[$y]} where ID={$ID} and SID={$S} and week={$max[0]['max(week)']}",0); //插入week表
}

//$uploadFiles=array_values(array_filter($uploadFiles));//这样便于保存到数据库
//print_r($uploadFiles);//打印查看上传保存的结果
 ?><script language="JavaScript">;alert("submit successfully!");location.href="assignmentsTea.php?ID=<?php echo $ID ?>&SID=<?php echo $SID ?>";</script>; <?php
?>