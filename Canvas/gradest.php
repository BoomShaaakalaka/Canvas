<?php
$SID=$_REQUEST['SID'];
//$ID=0;
$cid=$_REQUEST['ID'];
$num=$_REQUEST['num'];
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
            <li><a href="account_teacher.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>"> <i class="icon-user"></i>Account                             </a></li>
            <li><a href="dashboard_teacher.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>"> <i class="icon-form"></i>Dashboard                      </a></li>
            <li class="active"><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Courses </a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li ><a href="homeTea.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>">Home</a></li>
                <li><a href="syllabust.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>">Syllabus</a></li>
                <li><a href="modulest.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>">Modules</a></li>
                <li><a href="discussion_teacher.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>">Discussions</a></li>
                <li class="active"><a href="gradest.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>">Grades</a></li>
                <li><a href="assignmentsTea.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>">Assignment</a></li>
              </ul>
            </li>
            <li><a href="calendart.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>"> <i class="fa fa-bar-chart"></i>Calendar                    </a></li>
            
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
                <div class="name"><strong> Grades FOR ALICE</strong>
                    <button type="button" class="btn btn-default btn-lg"><li ><a href="uploadquiz.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>">上传考试</a></li></button>
                   
                    
                  <form name="form1" method="post" action="">
                  </form>
                  <div class="count-number"></div>
                </div>
              </div>
            </div>
          <!-- Count item widget--><!-- Count item widget--><!-- Count item widget--><!-- Count item widget--><!-- Count item widget--></div>
        </div>
      </section>
     
      <!-- Statistics Section-->
      <section class="statistics">
        <div class="container-fluid">
          <div class="row d-flex">
            <div class="col-lg-4">
              <!-- Income-->
              <div>
                <p>&nbsp;</p>
                <table width="747" border="0">
                <tr>
                  <td height="50"><table width="747" border="0">
                    <tr>
                      <td width="276" height="50"><div align="left"><dfn>Student ID(SID)</dfn></div></td>
                    <td width="276" height="50"><div align="left"><dfn>grades</dfn></div></td>
                        <td width="276" height="50"><div align="left"><dfn></dfn></div></td>
                    </tr>
                    <?php
                        require 'conn.php';
                   $sql = "SELECT * FROM quiz1";
                   $result = $conn->query($sql);

                        while($row = mysqli_fetch_array($result)){
                            ?>
                            <tr><td width="276" height="50"><div align="left"><dfn>
                            <?php
                            echo $row['SID'];
                            $SSID = $row['SID'];
                            ?>
                            </dfn></div></td><td width="276" height="50"><div align="left"><dfn>
                                <?php
                             require 'conn.php';
                    mysqli_query($conn, 'set names utf8');
                      $sql1 = "SELECT * FROM stucour";
                    $result1 = $conn->query($sql1);
                    while($row1 = mysqli_fetch_array($result1)){
                        if($row1['SID'] == $SSID){
                            if($row1['CID'] == $cid){
                              
         
                        $grades = $row1['grade'];
                        echo $grades;
                                  }
                        }
                    }
                            ?>
                                </dfn></div></td>
                                <?php 
                            
                           if ($num == 1){
                                ?>
                                <td><button type="button" class="btn btn-default btn-lg"><li ><a href=''>批改考试</a></li></button></td>
                                <?php
                                $num = 1;
                                echo $num;
                            }else{
                                ?> 
                                
                                <td><button type="button" class="btn btn-default btn-lg"><li><a href='checkquiz.php?ID=<?php echo $cid;?>&SID=<?php echo $SID;?>'>批改考试</a></li></button></td>
                                <?php
                            }
                           
                                
                      ?>
                      </tr>
                      
                      <?php
                            
                            
                      }?>
                    
                    
                  </table>                    <dfn></dfn></td>
                </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Updates Section -->
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