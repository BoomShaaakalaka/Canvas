<?php
include('contact.php');
$cid=$_GET['ID'];
$SID=$_GET['SID'];
$to = "690789475@qq.com";
$subject = "Test mail";
$message = $_POST['name'];
$from = $_POST['email'];
$headers = "From: $from";
mail($to,$subject,$message,$headers);
echo "Mail Sent.";
echo '<script language="JavaScript">;alert("submit success!");location.href="contactt.php?ID='; echo $cid;echo'&SID='; echo $SID;echo'";</script>;';

?>