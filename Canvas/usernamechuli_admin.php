<?php
session_start();
require_once('db_function.php');
$user_id = $_REQUEST['ID']; //学生编号



$select3 =array('name'=>$_POST['name'],'email'=>$_POST['password']);
$select4= array( 'ID' => $user_id);
update("admin", $select3, $select4);//修改week表



?>
<script language="JavaScript">;alert("change success!")
location.href="admin_account.php?ID=<?php echo $user_id?>"</script>
