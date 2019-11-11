<?php
session_start();
require_once('db_function.php');
$where['ID']=$_REQUEST['ID'];
$SID=$_REQUEST['SID'];
$course = select("course", $where);//返回course表中满足ID字段的
$select = array('ID' => $course[0]['ID'], 'week' => $course[0]['week']);
$week= select("week", $select); //返回week表中满足ID和week字段的
$select1 = array('ID' => $week[0]['home']);
$file = select("file",$select1);//返回file表中满足ID字段的
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
      <!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
    <style>
      .file {
			position: relative;
			display: inline-block;
			background: #D0EEFF;
			border: 1px solid #99D3F5;
			border-radius: 4px;
			padding: 4px 12px;
			overflow: hidden;
			color: #1E88C7;
			text-decoration: none;
			text-indent: 0;
			line-height: 20px;
		}
		.file input {
			position: absolute;
			font-size: 100px;
			right: 0;
			top: 0;
			opacity: 0;
		}
		.file:hover {
			background: #AADFFD;
			border-color: #78C3F3;
			color: #004974;
			text-decoration: none;
		}

      </style>
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
            <li><a href="account_teacher.php?SID=<?php echo $SID?>&ID=<?php echo isset($course[0]['ID'])?$course[0]['ID']:"";?>"> <i class="icon-user"></i>Account                             </a></li>
            <li><a href="dashboard_teacher.php?SID=<?php echo $SID?>&ID=<?php echo isset($course[0]['ID'])?$course[0]['ID']:"";?>"> <i class="icon-form"></i>Dashboard                      </a></li>
            <li class="active"><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Courses </a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li class="active"><a href="homeTea.php?SID=<?php echo $SID?>&ID=<?php echo isset($course[0]['ID'])?$course[0]['ID']:"";?>">Home</a></li>
                <li><a href="syllabust.php?SID=<?php echo $SID?>&ID=<?php echo isset($course[0]['ID'])?$course[0]['ID']:"";?>">Syllabus</a></li>
                <li><a href="modulest.php?SID=<?php echo $SID?>&ID=<?php echo isset($course[0]['ID'])?$course[0]['ID']:"";?>">Modules</a></li>
                <li><a href="discussion_teacher.php?SID=<?php echo $SID?>&ID=<?php echo isset($course[0]['ID'])?$course[0]['ID']:"";?>">Discussions</a></li>
                <li><a href="gradest.php?SID=<?php echo $SID?>&ID=<?php echo isset($course[0]['ID'])?$course[0]['ID']:"";?>">Grades</a></li>
                <li><a href="assignmentsTea.php?SID=<?php echo $SID?>&ID=<?php echo isset($course[0]['ID'])?$course[0]['ID']:"";?>">Assignment</a></li>
              </ul>
            </li>
            <li><a href="calendart.php?SID=<?php echo $SID?>&ID=<?php echo isset($course[0]['ID'])?$course[0]['ID']:"";?>"> <i class="fa fa-bar-chart"></i>Calendar                    </a></li>
            
            <!--<li><a href="login.html"> <i class="icon-interface-windows"></i>Login page                             </a></li>-->
            <li> <a href="inboxt.php?SID=<?php echo $SID?>&ID=<?php echo isset($course[0]['ID'])?$course[0]['ID']:"";?>"> <i class="icon-mail"></i>Inbox
                <div class="badge badge-warning">6 News</div></a></li>
            <li ><a href="helpt.php?SID=<?php echo $SID?>&ID=<?php echo isset($course[0]['ID'])?$course[0]['ID']:"";?>"> <i class="icon-search"></i>Help                             </a></li>
            <li><a href="contactt.php?SID=<?php echo $SID?>&ID=<?php echo isset($course[0]['ID'])?$course[0]['ID']:"";?>"> <i class="icon-rss-feed"></i>Contact                         </a></li>
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
            <h1 class="h3 display">"Assignments" Edit   </h1>
          </header>
    <div class="container-contact100">
		<div class="contact100-map" id="top" data-map-x="40.722047" data-map-y="-73.986422" data-pin="images/icons/map-marker.png" data-scrollwhell="0" data-draggable="1"></div>

		<div class="wrap-contact100">
			<div class="contact100-form-title" style="background-image: url(img/beijing.jpg);">
				<span class="contact100-form-title-1">
					<?php echo  $course[0]['name'] ?>
				</span>

			</div>

			<form class="contact100-form validate-form" action="assignmentsTeaEditTo1.php?ID=<?php echo $where['ID'];?>&SID=<?php echo $SID?>" method="post" name="form1" enctype="multipart/form-data">
				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Due:</span>
					<input class="input100" type="text" name="due" placeholder="Input assignment's due">
                   
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input">
					<span class="label-input100">Assignment：</span>
					<input class="input100" type="file" name="file1" value="Choose"  >
					<span class="focus-input100"></span>
				</div>

				

				<div class="container-contact100-form-btn">
					
                        <input class="contact100-form-btn" type="submit" name="submit" placeholder="Choose image">
                       
					 
                    
				</div>
			</form>
		</div>
	</div>
<div id="dropDownSelect1"></div>
    </div>
        </section>
                   
    </div>
       </body>
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
 
</html>