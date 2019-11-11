<?php
//$id = $_GET["id"];
$time=$_REQUEST['time'];//评论的时间
$id=$_REQUEST['id']; //评论人的id
$SID=$_REQUEST['SID'];
$ID=$_REQUEST['ID'];
require "DBDA.class.php";
$db = new DBDA();

$sql1 = "delete from pinglun where time='{$time}' and id='{$id}'";
$sql2 = "delete from huifu where time='{$time}' and jieshouid='{$id}'";
if($db->query($sql1))
{
  ?>
  <script language="JavaScript">;location.href="discussion_zone.php?SID=<?php echo $SID?>&ID=<?php echo $ID?>";</script>;
<?php
}
else
{
  echo "ERROR";
}
if($db->query($sql2))
{
  ?>
  <script language="JavaScript">;location.href="discussion_zone_teacher.php?SID=<?php echo $SID?>&ID=<?php echo $ID?>";</script>;
<?php
}
else
{
  echo "ERROR";
}
?>