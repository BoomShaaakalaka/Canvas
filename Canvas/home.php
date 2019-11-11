<?php
session_start();
require_once('db_function.php');
$where['ID']=$_REQUEST['ID'];
$SID=$_REQUEST['SID'];
$course = select("course", $where);//返回course表中满足ID字段的
$select = array('ID' => $course[0]['ID'], 'week' => $course[0]['week']);
$week= select("week", $select); //返回week表中满足ID和week字段的
$select = array('TID' => $course[0]['TID']);
$teacher = select("teacher",$select);   //返回老师的名字
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Dashboard</title>
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
          <div class="sidenav-header-logo"><a href="index.php" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <!--<h5 class="sidenav-heading">Main</h5>-->
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li><a href="account.php?ID=<?php echo isset($course[0]['ID'])?$course[0]['ID']:"";?>&SID=<?php echo $SID?>"> <i class="icon-user"></i>Account                             </a></li>
            <li><a href="dashboard.php?ID=<?php echo isset($course[0]['ID'])?$course[0]['ID']:"";?>&SID=<?php echo $SID?>"> <i class="icon-form"></i>Dashboard                      </a></li>
            <li class="active"><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Courses </a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li class="active"><a href="home.php?ID=<?php echo isset($course[0]['ID'])?$course[0]['ID']:"";?>&SID=<?php echo $SID?>">Home</a></li>
                <li><a href="syllabus.php?ID=<?php echo isset($course[0]['ID'])?$course[0]['ID']:"";?>&SID=<?php echo $SID?>">Syllabus</a></li>
                <li><a href="modules.php?ID=<?php echo isset($course[0]['ID'])?$course[0]['ID']:"";?>&SID=<?php echo $SID?>">Modules</a></li>
                <li><a href="discussion.php?ID=<?php echo isset($course[0]['ID'])?$course[0]['ID']:"";?>&SID=<?php echo $SID?>">Discussions</a></li>
                <li><a href="grades.php?ID=<?php echo isset($course[0]['ID'])?$course[0]['ID']:"";?>&SID=<?php echo $SID?>">Grades</a></li>
                <li><a href="assignments.php?ID=<?php echo isset($course[0]['ID'])?$course[0]['ID']:"";?>&SID=<?php echo $SID?>">Assignment</a></li>
              </ul>
            </li>
            <li><a href="calendar.php?SID=<?php echo $SID?>"> <i class="fa fa-bar-chart"></i>Calendar                    </a></li>
            
            <!--<li><a href="login.html"> <i class="icon-interface-windows"></i>Login page                             </a></li>-->
            <li> <a href="inbox.php?ID=<?php echo isset($course[0]['ID'])?$course[0]['ID']:"";?>&SID=<?php echo $SID?>"> <i class="icon-mail"></i>Inbox
                <div class="badge badge-warning">6 News</div></a></li>
            <li ><a href="help.php?ID=<?php echo isset($course[0]['ID'])?$course[0]['ID']:"";?>&SID=<?php echo $SID?>"> <i class="icon-search"></i>Help                             </a></li>
            <li><a href="contact.php?ID=<?php echo isset($course[0]['ID'])?$course[0]['ID']:"";?>&SID=<?php echo $SID?>"> <i class="icon-rss-feed"></i>Contact                          </a></li>
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
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="index.html" class="navbar-brand">
                  <div class="brand-text d-none d-md-inline-block"><strong class="text-primary">Canvas</strong></div></a></div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
               
                <!-- Log out-->
                <li class="nav-item"><a href="login.php" class="nav-link logout"> <span class="d-none d-sm-inline-block">Logout</span><i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      
      <section class="charts">
        <div class="container-fluid">
          <!-- Page Header-->
          <header> 
             
              <b><font size="5" color="	#363636">Recent Anoucements</font></b>
              <b><p><font size="6" color="grey">2019FS <?php echo $week[0]['name'], '  ',$teacher[0]['name'], '--', $course[0]['name'] ?></font></p></b>
              <hr/>
            
          </header>
            
          <div class="row" >
              <b><font size="5" color="black" face="Verdana">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $week[0]['name']?>: Week <?php echo $course[0]['week']?></font></b>
            </div>
            <div class="row" align="center" style="margin-top:20px">
              <img src=<?php echo $week[0]['image']?> alt="The picture cannot be displayed." class="img-fluid" >
            </div>
            <hr/>
            <div class="row">
                <b><font size="4" color="black">Getting started with week <?php echo $course[0]['week']?>:</font></b>
                <p>&nbsp;Please visit the Module Section, or go directly to the <?php echo $week[0]['name']?>. To begin the assignment for this week, CLICK HERE.</p></div>
            <div class="row">
                <p>
               <?php
                    $str = file_get_contents($week[0]['home']);
                   echo $str;
                    ?></p>
            </div>
                
        
        </div>
      </section>
      <footer class="main-footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">

            </div>
            <div class="col-sm-6 text-right">
              
              
            </div>
          </div>
        </div>
      </footer>
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
    <script src="js/charts-custom.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
  </body>
</html>