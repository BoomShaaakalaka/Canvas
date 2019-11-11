<?php
require 'conn.php';
mysqli_query($conn, 'set names utf8');
$sql = "select * from stucour";
$res = $conn->query($sql);
$cid=$_GET['ID'];
$SID=$_REQUEST['SID'];
 echo '<table border=1><tr align=center><th>SID</th><th>Course</th><th>grade</th></tr>';

 $n=0;
 while ($row = mysqli_fetch_array($res))    //遍历‘yonghu’表中的数据，并形成数组
 {
     
     if ($row['SID']==$SID){
    $sql1 = "select * from course WHERE ID = '{$row['CID']}'";
    $res1 = $conn->query($sql1);
    while ($row1 = mysqli_fetch_array($res1)){
     $username = $row['SID'];    //使用键获取数组中对应的值
     $course = $row1['name'];
     $grade = $row['grade'];

     echo "<tr>";
     echo "<td>{$username}</td>";    //按照数据表的列在表格里输出对应数据
     echo "<td>{$course}</td>";
     echo "<td>{$grade}</td>";
     echo "</tr>";
     $n++;

            
    }
     
     }
     
}    
 echo "<table>";

?>