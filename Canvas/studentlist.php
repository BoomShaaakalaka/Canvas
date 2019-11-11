<?php
session_start();
require_once('db_function.php');

$ID=$_REQUEST['ID'];
//$ID=1;  //学生编号
$result = sql_query("select * from `student`");
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
          <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <!--<h5 class="sidenav-heading">Main</h5>-->
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li ><a href="admin_account.php?ID=<?php echo $ID?>"> <i class="icon-user"></i>Account                             </a></li>
            <li class="active"><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>User List </a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="teacherlist.php?ID=<?php echo $ID?>">Teacher List</a></li>
                <li class="active"><a href="studentlist.php?ID=<?php echo $ID?>">Student List</a></li>
                <li><a href="adminlist.php?ID=<?php echo $ID?>">Admin List</a></li>
              </ul>
            </li>
              <li><a href="courselist.php?ID=<?php echo $ID?>"> <i class="fa fa-bar-chart"></i>Course List                    </a></li>
            <li><a href="#exampledropdownDropdown1" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Administration </a>
              <ul id="exampledropdownDropdown1" class="collapse list-unstyled ">
                <li><a href="addcourse.php?ID=<?php echo $ID?>">Add Course</a></li>
                <li><a href="adduser.php?ID=<?php echo $ID?>">Add User</a></li>
                
              </ul>
            </li>
            
            
            <!--<li><a href="login.html"> <i class="icon-interface-windows"></i>Login page                             </a></li>-->
            
            
            <li><a href="contact_admin.php?ID=<?php echo $ID?>"> <i class="icon-rss-feed"></i>Contact                          </a></li>
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
                  <div class="brand-text d-none d-md-inline-block"><strong class="text-primary">Canvas Admin</strong></div></a></div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                
                <!-- Log out-->
                <li class="nav-item"><a href="login.php" class="nav-link logout"> <span class="d-none d-sm-inline-block">Logout</span><i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <section>
        <div class="container-fluid">
          
          <div class="row">
              <div class="card-body">
              <div class="col-lg-12">
              <div class="card">
                  <div class="card-header">
                  <h4>
                      Student List
                  </h4>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                          <th>学号</th>
                          <th>
                            姓名
                          </th>
                            <th>
                                密码
                            </th>
                            <th>邮箱</th>
                        </tr>
                      </thead>
                      <tbody>
              <?php
            foreach( $result as $k=>$v){
              
             ?>                    
                      
                        <tr>
                          
                          <td><?php echo $v['SID']?></td>
                            <td><?php echo $v['name']?></td>
                            <td>
                              <?php echo $v['password'];?></td>
                            <td>
                              <?php echo $v['email'];?></td>
                            <td>
                                <form action="xiugaichuli_student.php?email=<?php echo $v['email']?>&name=<?php echo $v['name']?>&SID=<?php echo $v['SID']?>&password=<?php echo $v['password']?>" method="post">                            
                                <input type="submit" value="修改"><!--评论显示的地方--><!--单击评论提交内容进处理页面-->
                                </form>
                                <form action="shanchuchuli_student.php?SID=<?php echo $v['SID']?>" method="post">
                                <input type="submit" value="删除"><!--评论显示的地方--><!--单击评论提交内容进处理页面-->
                                </form>
                            </td>
                        </tr>
                        
                        
                     
        
              <?php
              }
             
            ?>
                     </tbody>
                    </table>
                  </div>
            </div>
            </div>
            </div>
              
            </div>
          </div>
          
      </section>
    </div>

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