<?php

$TID=$_REQUEST['ID'];
require "DBDA.class.php";
$db = new DBDA();

$sql1 = "delete from course where ID='{$TID}'";
if($db->query($sql1))
{
  echo '<script language="JavaScript">
           alert("delete success!") 
           location.href="courselist.php?" 
        </script>';
}
else
{
  echo "ERROR";
}
?>