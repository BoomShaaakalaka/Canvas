<?php
$id=$_REQUEST['id'];  //发评论那个人的id
$user_id=$_REQUEST['sid'];
$time=$_REQUEST['time'];// 发评论的时间
$ID=$_REQUEST['ID'];
session_start();
require_once('db_function.php');
$result = sql_query("select * from `student`");
foreach( $result as $k=>$v)
{             
    if($v['SID']==$user_id)
    {
        $me=$v['name'];
    }  
}
//$id = $_GET["id"]; //将点击回复的评论id传过来
//$user_id= $_POST["user_id"];
$Comment = $_POST["Comment"]; //回复文本域中的内容


date_default_timezone_set('PRC');
$Times = date("Y-m-d H:i:s");

  
require "DBDA.class.php";
$db = new DBDA();
$sql = "insert into huifu values('{$user_id}','{$id}', '{$me}','{$Times}','{$Comment}','{$time}')";
$db->query($sql);
//header("location:discussion_zone.php");
?>
<script language="JavaScript">
    alert("answer success!")
location.href="discussion_zone_teacher.php?SID=<?php echo $user_id?>&ID=<?php echo $ID?>"
</script>