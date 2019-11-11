<?php 
    session_start();
     require_once('DBDA.class.php');
    $dbda = new DBDA();
    $userName = $_POST['loginUsername'];
    $password = md5($_POST['loginPassword']);
    $exp="/^1\d{7}$/";
    $exp1="/^2\d{7}$/";
    $dataObj = $_POST['captcha'];

    if(strtolower($_SESSION["code"]) != strtolower($dataObj)){   
        echo '<script language="JavaScript">;alert("The captcha is incorrect!");location.href="login.php";</script>;';   
    }else{
        if(preg_match($exp,$userName) >0){
            $count=$dbda->query("select count(*) from student where SID='{$userName}'", 1);
            $result=$dbda->query("select * from student where SID = '{$userName}'",1);
            if($count[0][0] == 0){
                echo '<script language="JavaScript">;alert("User does not exist!");location.href="login.php";</script>;';}
            if(strcmp($password,$result[0][2]) == 0){
                 ?> <script language="JavaScript">alert("Login successfully!");location.href="dashboard.php?SID=<?php echo $userName ?>"</script> <?php
            }
            else
            {
                 echo '<script language="JavaScript">;alert("Wrong password!");location.href="login.php";</script>;';
            }
        }
        else
        {
            if(preg_match($exp1,$userName) >0){
                $count=$dbda->query("select count(*) from teacher where TID='{$userName}'", 1);
                $result=$dbda->query("select * from teacher where TID = '{$userName}'",1);
                if($count[0][0] == 0){
                    echo '<script language="JavaScript">;alert("User does not exist!");location.href="login.php";</script>;';}
                if(strcmp($password,$result[0][2]) == 0){
                     ?><script language="JavaScript">alert("Login successfully!");location.href="dashboard_teacher.php?SID=<?php echo $userName?>"</script> <?php
                }
                else
                {
                    echo '<script language="JavaScript">;alert("Wrong password!");location.href="login.php";</script>;';
                }
            }
            else
            {
                $count=$dbda->query("select count(*) from admin where ID='{$userName}'", 1);
                $result=$dbda->query("select * from admin where ID = '{$userName}'",1);
                if($count[0][0] == 0){
                    echo '<script language="JavaScript">;alert("User does not exist!");location.href="login.php";</script>;';}
                if(strcmp($password,$result[0][2]) == 0){
                     ?><script language="JavaScript">alert("Login successfully!");location.href="admin_account.php?ID=<?php echo $userName?>"</script> <?php
                }
                else
                {
                    echo '<script language="JavaScript">;alert("Wrong password!");location.href="login.php";</script>;';
                }
            }
        }
    }
    
    
   
    
?>