<?php

$SID=$_REQUEST['SID'];
require "DBDA.class.php";
$db = new DBDA();

$sql1 = "delete from student where SID='{$SID}'";
if($db->query($sql1))
{
  echo '<script language="JavaScript">
           alert("delete success!") 
           location.href="studentlist.php?" 
        </script>';
}
else
{
  echo "ERROR";
}
?>