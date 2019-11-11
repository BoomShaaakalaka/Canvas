<?php

$ID=$_REQUEST['ID'];
require "DBDA.class.php";
$db = new DBDA();

$sql1 = "delete from admin where ID='{$ID}'";
if($db->query($sql1))
{
  echo '<script language="JavaScript">
           alert("delete success!") 
           location.href="adminlist.php?" 
        </script>';
}
else
{
  echo "ERROR";
}
?>