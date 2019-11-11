<?php

require "DBDA.class.php";
$db = new DBDA();

$ID=$_POST['ID'];
$name=$_POST['name'];
$password=$_POST['password'];
$email=$_POST['email'];
$exp="/^1\d{7}$/";//第一位是1的8位数字
$exp1="/^3\d{7}$/"; //第一位是0的八位数字
$exp2="/^2\d{7}$/";
if(preg_match($exp,$ID) >0)
{//学生
    $sql = "insert into student values('{$ID}','{$name}','{$password}','{$email}')";
}
else if(preg_match($exp2,$ID) >0)
{//老师
    $sql = "insert into teacher values('{$ID}','{$name}','{$password}','{$email}')";
}
else if(preg_match($exp1,$ID) >0)
{
    
    $sql = "insert into admin values('{$ID}','{$name}','{$password}','{$email}')";
}



$db->query($sql);
?>
<script language="JavaScript">
    alert("Add success!")
location.href="adduser.php"</script>
