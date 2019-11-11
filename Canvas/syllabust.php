<?php
include('db_function.php'); 
require_once('db_function.php');
$cid=$_GET['ID'];
$SID=$_GET['SID'];
?>
<!DOCTYPE html>
<html>
  <head>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>modules</title>
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
          <div class="sidenav-header-logo"><a href="#" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <!--<h5 class="sidenav-heading">Main</h5>-->
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li><a href="account_teacher.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>"> <i class="icon-user"></i>Account                             </a></li>
            <li><a href="dashboard_teacher.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>"> <i class="icon-form"></i>Dashboard                      </a></li>
            <li class="active"><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Courses </a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li ><a href="homeTea.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>">Home</a></li>
                <li class="active"><a href="syllabust.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>">Syllabus</a></li>
                <li><a href="modulest.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>">Modules</a></li>
                <li><a href="discussion_teacher.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>">Discussions</a></li>
                <li><a href="gradest.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>">Grades</a></li>
                <li><a href="assignmentsTea.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>">Assignment</a></li>
              </ul>
            </li>
            <li><a href="calendart.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>"> <i class="fa fa-bar-chart"></i>Calendar                    </a></li>
            
            <!--<li><a href="login.html"> <i class="icon-interface-windows"></i>Login page                             </a></li>-->
            <li > <a href="inboxt.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>"> <i class="icon-mail"></i>Inbox
                <div class="badge badge-warning">6 News</div></a></li>
            <li ><a href="helpt.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>"> <i class="icon-search"></i>Help                             </a></li>
            <li><a href="contactt.php?ID=<?php echo $cid;?>&SID=<?php echo $SID;?>"> <i class="icon-rss-feed"></i>Connect                          </a></li>
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
               
                <li class="nav-item"><a href="login.php"  class="nav-link logout"> <span class="d-none d-sm-inline-block">Logout</span><i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
        
      <!-- Header Section-->
      <section class="dashboard-header section-padding">
        <div class="container-fluid">
          <div class="row d-flex align-items-md-stretch">
        
            <!-- Pie Chart-->
            <div class="col-lg-3 col-md-6">
              <div class="card project-progress">
                <h2 class="display h4">Course Introduction                </h2>
                <?php
                  
                    $select = array( 'ID' => $cid);
                    $result = select("course", $select);
                    $imgroute = $result[0]['image'];
                  
                  ?>
                <div class="pie-chart"><img src=<?php echo $imgroute;?> width="303" height="216" alt="ruangong">                </div>
              </div>
            </div>
            <!-- Line Chart -->
            <div class="col-lg-6 col-md-12 flex-lg-last flex-md-first align-self-baseline">
              <div class="card sales-report">
                <h2 class="display h4"><?php $select2 = array( 'ID' => $cid);
                    $result2 = select("course", $select2); 
                    echo $result2[0]['name'];?></h2>
                <?php
                  
                    $select = array( 'ID' => $cid,'label' => 3);
                    $result = select("file", $select);
                    $fileroute = $result[0]['route'];
                  
                    
                     $route= $fileroute;
                   if(!file_exists($route)){
                     echo "hhhhh";
                 }
                    $file_handle = fopen($route, "r") or die("Unable to open file!");
                
                    if ($file_handle){
                //接着采用while循环一行行地读取文件，然后输出每行的文字
                        while (!feof($file_handle)) { //如果不是最后一行就一直循环执行
                            $line = fgets($file_handle); //读取一行文本
                            echo $line; //输出一行文本
                            echo "<br />"; //换行
                    }
}
                    fclose($file_handle);//关闭文件，释放资源
                    fclose($myfile);
                  ?>
                <div class="line-chart">
                  <p><img src="img/join.png" width="196" height="50" alt="join"></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Statistics Section-->
      <section class="statistics">
        <div class="container-fluid">
          <div class="row d-flex">
            <div class="col-lg-15">
              <!-- Income-->
              <div class="card income text-center"><strong class="text-primary">课程概述</strong>
                    <?php
                   
                    $select = array( 'ID' => $cid,'label' => 2);
                    $result = select("file", $select);
                    $fileroute = $result[0]['route'];
                   
                  $route= $fileroute;
                   if(!file_exists($route)){
                     echo "hhhhh";
                 }
                    $file_handle = fopen($route, "r") or die("Unable to open file!");
                
                    if ($file_handle){
                //接着采用while循环一行行地读取文件，然后输出每行的文字
                        while (!feof($file_handle)) { //如果不是最后一行就一直循环执行
                            $line = fgets($file_handle); //读取一行文本
                            echo $line; //输出一行文本
                            echo "<br />"; //换行
                    }
}
                    fclose($file_handle);//关闭文件，释放资源
                    fclose($myfile);
                  ?>
                <p><br>
                </p>
              </div>
            </div>
            <div class="col-lg-4">
            <!-- Monthly Usage--></div>
          </div>
        </div>
      </section>
      <!-- Updates Section -->
      <section class="mt-30px mb-30px">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-15 col-md-12">
              <!-- Recent Updates Widget          -->
              <div id="new-updates" class="card updates recent-updated">
                <div id="updates-header" class="card-header d-flex justify-content-between align-items-center">
                  <h2 class="h5 display"><a data-toggle="collapse" data-parent="#new-updates" href="#updates-box" aria-expanded="true" aria-controls="updates-box">课程大纲</a></h2><a data-toggle="collapse" data-parent="#new-updates" href="#updates-box" aria-expanded="true" aria-controls="updates-box"><i class="fa fa-angle-down"></i></a>
                </div>
                <div id="updates-box" role="tabpanel" class="collapse show">
                  <ul class="news list-unstyled">
                    <!-- Item-->
                    <li class="d-flex justify-content-between"> 
                      <div class="left-col d-flex">
                        <div class="icon"><i class="icon-rss-feed"></i></div>
                        
                        <?php
                       $select1 = array( 'ID' => $cid);
                    $result1 = select("course", $select);
                    $fileid = $result1[0]['file1'];
                    $select = array( 'ID' => $cid,'label' => 1);
                    $result = select("file", $select);
                    $fileroute = $result[0]['route'];
                    $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
                    $route= $fileroute;
                   if(!file_exists($route)){
                     echo "hhhhh";
                        }
                        $file_handle = fopen($route, "r") or die("Unable to open file!");
                    if ($file_handle){
                //接着采用while循环一行行地读取文件，然后输出每行的文字
                        while (!feof($file_handle)) { //如果不是最后一行就一直循环执行
                            $line = fgets($file_handle); //读取一行文本
                            echo $line; //输出一行文本
                            echo "<br />"; //换行
                        }
                    }
                           fclose($file_handle);//关闭文件，释放资源
                           fclose($myfile);
                        ?>
                       
                      </div>
                    </li>
                    <!-- Item-->
                    <li class="d-flex justify-content-between"></li>
                    <!-- Item-->
                    <li class="d-flex justify-content-between"></li>
                    <!-- Item-->
                    <li class="d-flex justify-content-between"></li>
                    <!-- Item-->
                    <li class="d-flex justify-content-between">
                      <div class="right-col text-right">
                        <div class="update-date"></div>
                      </div>
                    </li>
                    <!-- Item-->
                    <li class="d-flex justify-content-between"></li>
                  </ul>
                </div>
              </div>
              <!-- Recent Updates Widget End-->
            </div>
          </div>
        </div>
      </section>
      <footer class="main-footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <p>Bootstrapious All rights reserved.  &copy; 2017-2019</p>
            </div>
            <div class="col-sm-6 text-right">
            More Templates</div>
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
    <script src="js/charts-home.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
  </body>
</html>