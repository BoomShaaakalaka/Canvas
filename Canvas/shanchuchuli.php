<?php

$TID=$_REQUEST['TID'];
require "DBDA.class.php";
$db = new DBDA();

$sql1 = "delete from teacher where TID='{$TID}'";
if($db->query($sql1))
{
  echo '<script language="JavaScript">
           alert("delete success!") 
           location.href="teacherlist.php?" 
        </script>';
}
else
{
  echo "ERROR";
}
?>