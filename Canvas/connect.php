<?php
$hostname_connection = "localhost:3306"; //服务器地址
$database_connection = "canvas";  //数据库名字
$username_connection = "root"; //数据库用户名
$password_connection = "root"; //密码
$connection = mysql_pconnect($hostname_connection, $username_connection, $password_connection) or trigger_error(mysql_error(),E_USER_ERROR); 
mysql_select_db($database_connection, $connection);
error_reporting( 0 );
mysql_query('set names utf8');

?>