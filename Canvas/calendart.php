






<?php

$cid=$_GET['ID'];
$SID=$_GET['SID'];

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Account</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

    <link rel="stylesheet" href="calendar.css">
<link href="https://fonts.googleapis.com/css?family=News+Cycle" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=EB+Garamond&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Allura&display=swap" rel="stylesheet">
<?php 
    $year =0;
    $month =0;
    if(isset($_GET[date('y')])){
        $year=intval($_GET[date('y')]);
    }
    if(isset($_GET[date('m')])){
        $month=intval($_GET[date('m')]);
    }

if(!$year||!$month||!checkdate($month,1,$year)){
    $now_date= new DateTime();
    $year=$now_date->format(date('Y'));
    $month=$now_date->format(date('m'));
}
try{
    $datetime= new DateTime("{$year}-{$month}-1");//"{$year}-{$month}-1"
}catch( Exception $e){
    echo $e->getMessage();
    exit(1);
}
?>
  </head>
  <body>
    <!-- Side Navbar -->
        <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <div class="sidenav-header-inner text-center"><img src="img/avatar-7.jpg" alt="person" class="img-fluid rounded-circle">
            <h2 class="h5">Shuihan Zhang</h2><span>Beautiful girl</span>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <!--<h5 class="sidenav-heading">Main</h5>-->
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
               <li><a href="account_teacher.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>"> <i class="icon-user"></i>Account                             </a></li>
            <li><a href="dashboard_teacher.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>"> <i class="icon-form"></i>Dashboard                      </a></li>
            <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Courses </a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li class="active"><a href="homeTea.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>">Home</a></li>
                <li><a href="syllabust.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>">Syllabus</a></li>
                <li><a href="modulest.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>">Modules</a></li>
                <li><a href="discussion_teacher.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>">Discussions</a></li>
                <li><a href="gradest.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>">Grades</a></li>
                <li><a href="assignmentsTea.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>">Assignment</a></li>
              </ul>
            </li>
            <li class="active"><a href="calendart.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>"> <i class="fa fa-bar-chart"></i>Calendar                    </a></li>
            
            <!--<li><a href="login.html"> <i class="icon-interface-windows"></i>Login page                             </a></li>-->
            <li> <a href="inboxt.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>"> <i class="icon-mail"></i>Inbox
                <div class="badge badge-warning">6 News</div></a></li>
            <li ><a href="helpt.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>"> <i class="icon-search"></i>Help                             </a></li>
            <li><a href="contactt.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>"> <i class="icon-rss-feed"></i>Contact                          </a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="page">
      <!-- navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="account.html" class="navbar-brand">
                  <div class="brand-text d-none d-md-inline-block"><strong class="text-primary">Canvas</strong></div></a></div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                
                
                <!-- Log out-->
                <li class="nav-item"><a href="login.php" class="nav-link logout"> <span class="d-none d-sm-inline-block">Logout</span><i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <!-- Breadcrumb-->
      
      <section>
        <div class="container-fluid">
          <div class="calendar">
      <?php

      $firstWeekDay=(int)$datetime->format('w');

      $lastDay = $datetime->format('t');

      $timestamp = time() ;

      $thisyear = date( "Y" , $timestamp);
      $thismonth = date( "n" , $timestamp);
      $today =  date( "j" , $timestamp ) ;

      $data = array('Sun','Mon','Tue','Wed','Thu','Fri','Sat');
      $day=1;
      ?> 
        <figcaption><?php echo $year.'/',$month?></figcaption>
    <table>
        <thread>
            <tr>
            <?php foreach($data as $day){?>
            <th><?= $day?></th>
            <?php }?>
            </tr>
        </thread> 
        <tbody>
            <tr>
            <?php
              // 通常从第一天到最后一天放入
                for ($date =1; $date<=$datetime->format('t'); $date++){?>
                <?php
                if($date==1){
                    $i=0;
                    while($i<$firstWeekDay){
                ?>     <td>&nbsp;</td>
                <?php
                    $i++;
                    }   
                }
                ?>
                <?php $time = $thisyear.".".$thismonth.".".$date;?>
                


                <!-- 为今天的日期添加背景色 -->
              <?php 
                if($date==$today&&$month==$thismonth&&$year==$thisyear):?>
                <td class="text-lefttop today">
                  <?php echo $date?><br>
                    <?php
                    
                require 'conn.php';
                mysqli_query($conn, 'set names utf8');
                $sql = "SELECT * FROM course WHERE startdate = '{$time}'";
                $result = $conn->query($sql);
                while($row = mysqli_fetch_array($result))
                {   

                    $sql1 = "SELECT * FROM file WHERE ID = '{$row['file1']}'";
                    $result1 = $conn->query($sql1);
                    while($row1 = mysqli_fetch_array($result1)){
                        echo $row['name'];
                        ?><br><?php 
                        $file0 = $row1['route'];
                        $newfile=file($file0);
                            foreach($newfile as $v){
                                    echo '<div class="yuming">'.$v.'</div>';
                            }
                        
        
                    }
                }
                ?>
                    
                    

                </td>
              <?php else: ?>
                <td class="text-lefttop">
                <?php echo $date?><br>
                <?php

                require 'conn.php';
                mysqli_query($conn, 'set names utf8');
                $sql2 = "SELECT * FROM course WHERE startdate = '{$time}'";
                $result2 = $conn->query($sql2);
                while($row2 = mysqli_fetch_array($result2))
                {   

                    $sql3 = "SELECT * FROM file WHERE ID = '{$row2['file1']}'";
                    $result3 = $conn->query($sql3);
                    while($row3 = mysqli_fetch_array($result3)){
                        echo $row2['name'];
                        ?><br><?php 
                        $file3 = $row3['route'];
                        $newfile=file($file3);
                            foreach($newfile as $v){
                                    echo '<div class="yuming">'.$v.'</div>';
                            }
        
                    }
                }
                ?>
                </td>
              <?php endif; ?>
              
                <!-- 即使日期可以被7整除并且一周的第一天是星期日，也会产生换行符 -->
                <?php if($date%7===7-$firstWeekDay||$date%7===0&&$firstWeekDay===0){?>
                </tr><tr>
                <?php }?>
            <?php }?>
            
                 <?php
                  $lastblank = 0;
                  $i=0;
                  while($i<7-($datetime->format('w')+$datetime->format('t'))%7){
                ?>  <td>&nbsp;</td>
              <?php
                    $i++;
                    $lastblank = $i;
                    
                    }   
                ?>

                <?php 
            /*
              if($datetime->format('w')+$datetime->format('t')<35){?>
              <tr>
               <?php 
               $j=0;
                  
               while($j<7+$lastablank){?>
                <td> <?php echo $lastDay;?>&nbsp;</td>
              <?php 
              $j++;
               }
              }*/
              ?>
              </tr> 
        
    
        </tbody>
    </table>  
  </div>
          </div>
        
      </section>
      
    </div>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
  </body>
</html>