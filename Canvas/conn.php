<?php
$servername = "localhost:3306";
$username = "root";
$password = "root";
$dbname = "canvas";
 
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
 


?>