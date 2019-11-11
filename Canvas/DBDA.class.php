<?php
//建一个封装类的文件DBDA.class.php

class DBDA//定义一个类，类名为DBDA
{
    public $host="localhost";//4个比较常用的参数：服务器地址
    public $uid="root";//用户名
    public $pdw="root";//密码
    public $dbname="Canvas";//数据库名称
    
    //封装方法
    //1.返回二维数组的方法
    /**
    *给一个sql语句，返回执行的结果
    *@param string $sql 用户指定的sql语句
    *@param int $sql用户给的语句类型，0代表增删改，1代表查询。一般查询使用的比较多，让$type的默认值为1.如果是增删改再改$type的值。
    *@return array 返回查询的结果，如果是查询，返回二维数组。如果是增删改，返回$result。
    */
    function query($sql,$type=0)
    {
        //造连接对象
        $db = new MySQLi("$this->host","$this->uid","$this->pdw","$this->dbname");
        
        //执行sql语句
        $result = $db->query("$sql");
        
        //从结果集对象里取数据。查询单独做一个方法，其它做另一个方法。
        if($type==1)//如果是查询
        {
            return $result->fetch_all();//返回查询的二维数组
        }
        else//如果是增删改
        {
            return $result;//返回$result
        }
    }
}
?>