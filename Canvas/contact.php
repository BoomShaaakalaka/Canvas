<?php
$cid=$_GET['ID'];
$SID=$_GET['SID'];
?>
<!DOCTYPE html>
<html>
<head>
	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>connect</title>
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
</head>
<body>
       <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <div class="sidenav-header-inner text-center"><img src="img/avatar-7.jpg" alt="person" class="img-fluid rounded-circle">
            <h2 class="h5">Shuihan Zhang</h2><span>Beautiful girl</span>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="index.php?ID=<?php echo $cid;?>&SID=<?php echo $SID;?>" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <!--<h5 class="sidenav-heading">Main</h5>-->
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li><a href="account.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>"> <i class="icon-user"></i>Account                             </a></li>
            <li><a href="dashboard.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>"> <i class="icon-form"></i>Dashboard                      </a></li>
            <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Courses </a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li class="active"><a href="home.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>">Home</a></li>
                <li><a href="syllabus.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>">Syllabus</a></li>
                <li><a href="modules.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>">Modules</a></li>
                <li><a href="discussion.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>">Discussions</a></li>
                <li><a href="grades.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>">Grades</a></li>
                <li><a href="assignments.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>">Assignment</a></li>
              </ul>
            </li>
            <li><a href="calendar.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>"> <i class="fa fa-bar-chart"></i>Calendar                    </a></li>
            
            <!--<li><a href="login.html"> <i class="icon-interface-windows"></i>Login page                             </a></li>-->
            <li> <a href="inbox.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>"> <i class="icon-mail"></i>Inbox
                <div class="badge badge-warning">6 News</div></a></li>
            <li ><a href="help.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>"> <i class="icon-search"></i>Help                             </a></li>
            <li class="active"><a href="contact.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>"> <i class="icon-rss-feed"></i>Contact                          </a></li>
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
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="index.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>" class="navbar-brand">
                  <div class="brand-text d-none d-md-inline-block"><strong class="text-primary">Canvas</strong></div></a></div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Notifications dropdown-->
                <!-- Messages dropdown-->
               
                
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
            <h1 class="h3 display">Connect   </h1>
          </header>
	<div class="container-contact100">
		<div class="contact100-map" id="top" data-map-x="40.722047" data-map-y="-73.986422" data-pin="images/icons/map-marker.png" data-scrollwhell="0" data-draggable="1"></div>

		<div class="wrap-contact100">
			<div class="contact100-form-title" style="background-image: url(images/bg-01.jpg);">
				<span class="contact100-form-title-1">
					联系我们
				</span>

			</div>

			<form class="contact100-form validate-form" action="success.php?ID=<?php echo $cid;?>&SID=<?php echo $SID;?>" method="post" name="form1">
				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">姓名：</span>
					<input class="input100" type="text" name="name" placeholder="输入姓名">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">邮箱：</span>
					<input class="input100" type="text" name="email" placeholder="输入邮箱地址">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Phone is required">
					<span class="label-input100">电话：</span>
					<input class="input100" type="text" name="phone" placeholder="输入联系电话">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<span class="label-input100">留言板:</span>
					<textarea class="input100" name="留言板" placeholder="你的留言...."></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					
                        <button class="contact100-form-btn" id="submit" name="submit">
                       
                            <a  style="color: white">提交
				        <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i></a>
						
						
					</button> 
                    
				</div>
			</form>
		</div>
	</div>



	<div id="dropDownSelect1"></div>
    </div>
        </section>
    </div>
</body>
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

