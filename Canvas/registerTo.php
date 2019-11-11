<?php
    session_start();
    require_once('db_function.php');
    $exp="/^1\d{7}$/";//1开头是学生，2开头是老师
    $exp1="/^2\d{7}$/";
    $userName = $_POST['registerUsername'];
    if(preg_match($exp,$userName) > 0){
        $userNameSQL = "select * from student where userName = '$userName'";
        $resultSet = mysql_query($userNameSQL);
        if (mysql_num_rows($resultSet) > 0 ) {
            exit("The user name has been occupied, please change another user name.");
        }
    }
    else
    {
        if(preg_match($exp1,$userName) > 0)
        {
            $userNameSQL = "select * from teacher where userName = '$userName'";
            $resultSet = mysql_query($userNameSQL);
            if (mysql_num_rows($resultSet) > 0 ) {
                exit("The user name has been occupied, please change another user name.");
            }
        }
        else
        {
            $userNameSQL = "select * from admin where userName = '$userName'";
            $resultSet = mysql_query($userNameSQ);
            if (mysql_num_rows($resultSet) > 0 ) {
                exit("The user name has been occupied, please change another user name.");
            }
        }
    }

    if(preg_match("/^[1-3]\d{7}$/",$userName) == 0){
        exit("The username is not valid.");
    }
    
    $email = $_POST['registerEmail'];
    function validate_email($email){

        $exp = "^[a-z'0-9]+([._-][a-z'0-9]+)*@([a-z0-9]+([._-][a-z0-9]+))+$";

        if(eregi($exp,$email)){ //先用正则表达式验证email格式的有效性

            if(checkdnsrr(array_pop(explode("@",$email)),"MX")){//再用checkdnsrr验证email的域名部分的有效性
                return true;
            }else{
                return false;
            }
        }else{

            return false;
        }
    }
    if(validate_email($email) == false)
         exit("Please enter a valid email address.");


    $password = $_POST['registerPassword'];
    function isPWD($value,$minLen=8,$maxLen=20){ 
        $match='/^[\\~!@#$%^&*()-_=+|{}\[\],.?\/:;\'\"\d\w]{'.$minLen.','.$maxLen.'}$/';
        $v = trim($value);
        if(empty($v)) 
            return false;
        return preg_match($match,$v);

    }
    if(isPWD($password) == false)
        exit("Please enter a valid password,  which must include both letters and Numbers and be 8-20 digits long.");
    
    
    $password=md5($password);
    if(preg_match($exp,$userName) > 0){
        //print "bbb";
        $sql = "insert into student values('{$userName}','NULL','{$password}','{$email}')";
    }
    else{
        if(preg_match($exp1,$userName) > 0)
       // print "aaaaa";
            $sql = "insert into teacher values('{$userName}','NULL','{$password}','{$email}')";
        else
            $sql = "insert into admin values('{$userName}','NULL','{$password}','{$email}')";
    }
     sql_exec($sql);
    echo '<script language="JavaScript">;alert("Register successfully!");location.href="login.php";</script>;';
?>