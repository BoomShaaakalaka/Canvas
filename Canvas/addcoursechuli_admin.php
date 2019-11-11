<?php

require "DBDA.class.php";
$db = new DBDA();

$ID=$_POST['ID'];
$name=$_POST['name'];
$startdate=$_POST['startdate'];
$enddate=$_POST['enddate'];
$TID=$_POST['TID'];
$week=$_POST['week'];

    
$sql = "insert into course values('{$ID}','{$name}','{$startdate}','{$enddate}','{NULL}','{NULL}','{NULL}','{$TID}','{$week}')";




$db->query($sql);
?>
<script language="JavaScript">
    alert("Add success!")
location.href="addcourse.php"</script>
