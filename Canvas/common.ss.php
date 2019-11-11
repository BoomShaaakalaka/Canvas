<?php
//这两函数也可以一起放到ss.php里面去
//得到文件扩展名
function getExt($filename){
    return strtolower(pathinfo($filename,PATHINFO_EXTENSION));
}
//产生唯一字符串
function getUniName(){
    return md5(uniqid(microtime(true),true));
}
?>