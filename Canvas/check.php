<?php
header("Content-type:text/html;charset=utf-8");
//获取数据库配置

require 'conn.php';
mysqli_query($conn, 'set names utf8');

$grades=0;
$cid=$_POST["ID"];
$SID=$_POST["SID"];

//获取数据
$xuanxiang = $_POST["xuanxiang"];
$id = $_POST["id"];

if (empty($xuanxiang)) {
    echo "<script>alert('请选择一个答案!');history.go(-1);</script>";
}else{
    //查询数据库
    $result = $conn->query("SELECT * FROM quiz WHERE id = '{$id}'");
    while($row = mysqli_fetch_array($result))
    {
        $true = $row["true"];
        $next_id = $id+1;
        if($xuanxiang == $true){
            $grades = $grades + 5;
            echo "<script>alert('正确！得5分！');location.href='next.php?ID=$cid&SID=$SID&page=$next_id';</script>";
            
        }else{
            echo "<script>alert('错了！');location.href='next.php?ID=$cid&SID=$SID&page=$next_id';</script>";
        }
    }

if ($id == 1){
    mysqli_query($conn, "UPDATE stucour SET grade='{$grades}' WHERE SID='{$SID}' AND CID='{$cid}'");
 
  
}else{
    
    $sql0 = "SELECT * FROM stucour";
    $result0 = $conn->query($sql0);

    while($row1 = mysqli_fetch_array($result0)){
    if($row1['SID'] == $SID){
        if($row1['CID'] == $cid){
            $grades = $grades + $row1['grade'];
            mysqli_query($conn, "UPDATE stucour SET grade='{$grades}' WHERE SID='{$SID}' AND CID='{$cid}'");
        }
    }
   
}
    
}
    
    
/*
$sql0 = "SELECT * FROM stucour";
$result0 = $conn->query($sql0);
if (mysqli_num_rows($result0) == 0) {
    
    $sql = "INSERT INTO stucour (SID, CID, grade)
VALUES ('{$SID}', '{$cid}', '{$grades}')";
 
if ($conn->query($sql) === TRUE) {
    echo "新记录插入成功";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}   
   
    // 输出数据
    
} else {
    $num = 0;
    while($row = mysqli_fetch_array($result0)){
        if($row['SID'] == '1'){
            if ($row['cid'] == '1'){
                $num = $num + 1;
                $grades = $grades + $row[grade];
            }
        }
        
        mysqli_query($conn,"UPDATE stucour SET grade='{$grades}' WHERE SID='{$SID}' AND CID='{$cid}'");
        
    }
    if ($num == 0){
            $sql = "INSERT INTO stucour (SID, CID, grade) VALUES ('{$SID}', '{$cid}', '{$grades}')";
 
            if ($conn->query($sql) === TRUE) {
                    echo "新记录插入成功";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }   
        }
    
}*/
}
?>
