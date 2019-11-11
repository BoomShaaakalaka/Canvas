<?php
session_start();
require_once('db_function.php');
$user_id = $_REQUEST['sid']; //学生编号
$ID = $_REQUEST['ID']; //课程编号


$select3 =array('name'=>$_POST['name'],'email'=>$_POST['password'],'SID'=>$user_id);
$select4= array( 'SID' => $user_id);
update("student", $select3, $select4);//修改week表


?>
<script language="JavaScript">;alert("change success!")
location.href="account.php?SID=<?php echo $user_id?>&ID=<?php echo $ID?>"</script>
