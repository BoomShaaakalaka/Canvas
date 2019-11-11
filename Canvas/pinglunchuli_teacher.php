<?php
//$user_id = $_POST["user_id"];
$SID=$_REQUEST['SID'];
$ID=$_REQUEST['ID'];
//$user_id=1;   //传学生id
session_start();
require_once('db_function.php');
$result = sql_query("select * from `student`");
foreach( $result as $k=>$v)
{             
    if($v['SID']==$SID)
        $user_name=$v['name'];
}

$content = $_POST["content"];
//$pinglunid++;
date_default_timezone_set('PRC');
$time = date("Y.m.d H:i:s");

require "DBDA.class.php";
$db = new DBDA();
$sql = "insert into pinglun values('{$SID}','{$user_name}','{$content}','{$time}')";
$db->query($sql);
?>
<script language="JavaScript">
    alert("comment success!")
location.href="discussion_zone_teacher.php?SID=<?php echo $SID?>&ID=<?php echo $ID?>"</script>
