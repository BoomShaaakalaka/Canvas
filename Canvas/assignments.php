<!DOCTYPE html>
<?php
session_start();
require_once('db_function.php');
$where['ID']=$_REQUEST['ID'];
$where1['SID']=$_REQUEST['SID'];
$course = select("course", $where);//返回course表中满足ID字段的
$max=sql_query("select max(week) from asstea where ID={$where['ID']}");
$select = array('ID' => $course[0]['ID'], 'week' => $max[0]['max(week)']);
$select1 = array('ID' => $course[0]['ID'], 'week' => $max[0]['max(week)'], 'SID' => $where1['SID']);
$assignment= select("assignment", $select1); //返回assignment表中满足ID和week字段的
$assTea=select("assTea",$select);  


?>
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
      <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
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
             <li><a href="account.php?SID=<?php echo $where1['SID']?>&ID=<?php echo isset($course[0]['ID'])?$course[0]['ID']:"";?>"> <i class="icon-user"></i>Account                             </a></li>
            <li><a href="dashboard.php?SID=<?php echo $where1['SID']?>&ID=<?php echo isset($course[0]['ID'])?$course[0]['ID']:"";?>"> <i class="icon-form"></i>Dashboard                      </a></li>
            <li class="active"><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Courses </a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li ><a href="home.php?SID=<?php echo $where1['SID']?>&ID=<?php echo isset($course[0]['ID'])?$course[0]['ID']:"";?>">Home</a></li>
                <li><a href="syllabus.php?SID=<?php echo $where1['SID']?>&ID=<?php echo isset($course[0]['ID'])?$course[0]['ID']:"";?>">Syllabus</a></li>
                <li><a href="modules.php?SID=<?php echo $where1['SID']?>&ID=<?php echo isset($course[0]['ID'])?$course[0]['ID']:"";?>">Modules</a></li>
                <li><a href="discussion.php?SID=<?php echo $where1['SID']?>&ID=<?php echo isset($course[0]['ID'])?$course[0]['ID']:"";?>">Discussions</a></li>
                <li><a href="grades.php?SID=<?php echo $where1['SID']?>&ID=<?php echo isset($course[0]['ID'])?$course[0]['ID']:"";?>">Grades</a></li>
                <li class="active"><a href="assignments.php?SID=<?php echo $where1['SID']?>&ID=<?php echo isset($course[0]['ID'])?$course[0]['ID']:"";?>">Assignment</a></li>
              </ul>
            </li>
            <li><a href="calendar.php?SID=<?php echo $where1['SID']?>&ID=<?php echo isset($course[0]['ID'])?$course[0]['ID']:"";?>"> <i class="fa fa-bar-chart"></i>Calendar                    </a></li>
            
            <!--<li><a href="login.html"> <i class="icon-interface-windows"></i>Login page                             </a></li>-->
            <li> <a href="inbox.php?SID=<?php echo $where1['SID']?>&ID=<?php echo isset($course[0]['ID'])?$course[0]['ID']:"";?>"> <i class="icon-mail"></i>Inbox
                <div class="badge badge-warning">6 News</div></a></li>
            <li ><a href="help.php?SID=<?php echo $where1['SID']?>&ID=<?php echo isset($course[0]['ID'])?$course[0]['ID']:"";?>"> <i class="icon-search"></i>Help                             </a></li>
            <li><a href="contact.php?SID=<?php echo $where1['SID']?>&ID=<?php echo isset($course[0]['ID'])?$course[0]['ID']:"";?>"> <i class="icon-rss-feed"></i>Contact                          </a></li>
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
      <!-- Counts Section -->
      <section class="dashboard-counts section-padding">
        <div class="container-fluid">
          <div class="row">
            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-user"></i></div>
                <div class="name"><strong class="text-uppercase">Assignments</strong>
                  <div class="count-number"></div>
                </div>
              </div>
            </div>
           
          <!-- Count item widget--></div>
        </div>
      </section>
      
      <!-- Header Section-->
      <section class="dashboard-header section-padding">
        <div class="container-fluid">
          <div class="row d-flex align-items-md-stretch">
            <!-- To Do List-->
            <div class="col-lg-5 col-md-6">
              <div class="card to-do">
                  <h2 class="display h4"><font size="5" color="grey"><?php echo $course[0]['name'], ' Week ', $max[0]['max(week)'], ' assignment'?> </font>      </h2>
                  <hr/>
                <table width="502" border="0" style="line-height:50px">
                  <tr>
                    <td width="192">Due：<?php echo $assTea[0]['enddate']?></td> </tr>
                    <tr>
                        <td width="113">Points：<?php echo $assignment[0]['point']?></td></tr>
                    <tr>
                        
                    <td> Assignment: <a href="<?php echo $assTea[0]['file'] ?>" download="Week <?php echo $max[0]['max(week)']?> assignment.txt" > CLICK HERE</a> to download</td>
                    </tr>
                </table>
              </div>
            </div>
            <!-- Pie Chart-->
            <div class="col-lg-1 col-md-6"></div>
            <!-- Line Chart -->
            <div class="col-lg-6 col-md-12 flex-lg-last flex-md-first align-self-baseline">
                <div class="card sales-report"> <font size="5" color="grey">Submit</font><hr/>
<p>&nbsp;</p>
                <!--上传文件-->
                 <form action="uploadHandler.php?SID=<?php echo $where1['SID']?>&ID=<?php echo isset($course[0]['ID'])?$course[0]['ID']:"";?>" method="POST" enctype="multipart/form-data"  >
                     <p><input type="file" name="file1" value="Choose" style="margin-bottom:20px" class="contact100-form-btn" style="width:20px"></p>
                     <p>
                    <input type="submit" value="Upload"  ></p>
                </form>
<p>&nbsp;</p>
                <div class="line-chart"></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Statistics Section--><!-- Updates Section -->
      <section class="mt-30px mb-30px">
        <div class="container-fluid">
          <div class="row"></div>
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
    <script src="js/charts-home.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
  </body>
</html>