<?php
include('contact_admin.php');

$to = "690789475@qq.com";
$subject = "Test mail";
$message = $_POST['name'];
$from = $_POST['email'];
$headers = "From: $from";
mail($to,$subject,$message,$headers);
echo "Mail Sent.";
echo '<script language="JavaScript">;alert("submit success!");location.href="contact_admin.php";</script>;';

?>