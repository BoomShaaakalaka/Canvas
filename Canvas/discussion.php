<?php
session_start();
require_once('db_function.php');
$SID =$_REQUEST['SID'];
$ID =$_REQUEST['ID'];
?> 
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Canvas</title>
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
            <li><a href="account.php?SID=<?php echo $SID?>&ID=<?php echo $ID?>"> <i class="icon-user"></i>Account                             </a></li>
            <li><a href="dashboard.php?SID=<?php echo $SID?>"> <i class="icon-form"></i>Dashboard                      </a></li>
            <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Courses </a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="home.php?SID=<?php echo $SID?>&ID=<?php echo $ID?>">Home</a></li>
                <li><a href="syllabus.php?SID=<?php echo $SID?>&ID=<?php echo $ID?>">Syllabus</a></li>
                <li><a href="modules.php?SID=<?php echo $SID?>&ID=<?php echo $ID?>">Modules</a></li>
                <li class="active"><a href="discussion.php?SID=<?php echo $SID?>&ID=<?php echo $ID?>">Discussions</a></li>
                <li><a href="grades.php?SID=<?php echo $SID?>&ID=<?php echo $ID?>">Grades</a></li>
                <li><a href="assignments.php?SID=<?php echo $SID?>&ID=<?php echo $ID?>">Assignment</a></li>
              </ul>
            </li>
            <li><a href="calendar.php?SID=<?php echo $SID?>&ID=<?php echo $ID?>"> <i class="fa fa-bar-chart"></i>Calendar              </a></li>
            
            <!--<li><a href="login.html"> <i class="icon-interface-windows"></i>Login page                             </a></li>-->
            <li> <a href="inbox.php?SID=<?php echo $SID?>&ID=<?php echo $ID?>"> <i class="icon-mail"></i>Inbox
                <div class="badge badge-warning">6 News</div></a></li>
            <li ><a href="help.php?SID=<?php echo $SID?>&ID=<?php echo $ID?>"> <i class="icon-search"></i>Help                             </a></li>
            <li><a href="connect.php?SID=<?php echo $SID?>&ID=<?php echo $ID?>"> <i class="icon-rss-feed"></i>Contact                          </a></li>
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
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="#" class="navbar-brand">
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
            <tr>
			<th>
                

            </th>
		</tr>
          </header>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Pinned Discussion</th>
                        </tr>
                      </thead>
                    <tbody>
                    <?php 
                        date_default_timezone_set('PRC');
                        $cur_time = date('Y.m.d h:i:s');
                        //echo $cur_time;
                        $result = sql_query("select * from `week`");
                        foreach( $result as $k=>$v)
                        {
                            $read_time = $v['endday']." ".$v['endtime'];
                            //echo $read_time;
                            
                            if(strnatcmp($cur_time,$read_time)>=0)
                            {
                                
                    ?>
                            <table width=100%, border="1"> 
                            <tr>
                                <td height="50" colspan="3">
                                    <a href="discussion_zone.php?SID=<?php echo $SID?>&ID=<?php echo $ID?>">
                       <?php     echo $v['name'];?>
                            </a>
                                </td>
                            </tr>
                            <tr>
                                <td height="50"><table width=100%>
                                    <tr>
                                        <td height="50"><p><font size="2" color="grey">Last post at &nbsp;
                        <?php echo $v['startday'];?>&nbsp; at &nbsp; <?php echo $v['starttime'];?>
                             </font></p></td>
                            <td height="50"><p><font size="2" color="grey">Was Locked at &nbsp;
                            <?php echo $v['endday'];?>&nbsp;at&nbsp;<?php echo $v['endtime']?>
                            </font></p></td>
                            <td height="50"><p><font size="2" color="grey">Due
                             <?php   echo $v['endday'];?>&nbsp; at&nbsp;<?php echo $v['endtime'];?>
                             </font></p></td>
                                        
                                    </tr>
                                </table>
                                </td>
                            
                            </tr>
                            </table>
                        <?php
                            }
                            
                        }
                       
                    ?>
                      
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            
              
            </div>
                
            <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th> Discussions</th>
                        </tr>
                      </thead>
                    <tbody>
                    <?php 
                        date_default_timezone_set('PRC');
                        $cur_time = date('Y.m.d h:i:s');
                        //echo $cur_time;
                        $result = sql_query("select * from `week`");
                        foreach( $result as $k=>$v)
                        {
                            $read_time = $v['endday']." ".$v['endtime'];
                            //echo $read_time;
                            
                            if(strnatcmp($cur_time,$read_time)<0)
                            {
                                
                    ?>
                            <table width=100%, border="1"> 
                            <tr>
                                <td height="50" colspan="3">
                                    <a href="discussion_zone.php?SID=<?php echo $SID?>&ID=<?php echo $ID?>">
                       <?php     echo $v['name'];?>
                            </a>
                                </td>
                            </tr>
                            <tr>
                                <td height="50"><table width=100%>
                                    <tr>
                                        <td height="50"><p><font size="2" color="grey">Last post at &nbsp;
                        <?php echo $v['startday'];?>&nbsp; at &nbsp; <?php echo $v['starttime'];?>
                             </font></p></td>
                            <td height="50"><p><font size="2" color="grey">Was Locked at &nbsp;
                            <?php echo $v['endday'];?>&nbsp;at&nbsp;<?php echo $v['endtime']?>
                            </font></p></td>
                            <td height="50"><p><font size="2" color="grey">Due
                             <?php   echo $v['endday'];?>&nbsp; at&nbsp;<?php echo $v['endtime'];?>
                             </font></p></td>
                                        
                                    </tr>
                                </table>
                                </td>
                            
                            </tr>
                            </table>
                        <?php
                            }
                            
                        }
                       
                    ?>
                    
                      
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            
              
            </div>
                
            <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Closed for Comments</th>
                        </tr>
                      </thead>
                    <tbody>
                    <table width=100% border="1"> 
                        
                    <?php 
                        date_default_timezone_set('PRC');
                        $cur_time = date('Y.m.d h:i');
                        //echo $cur_time;
                        $result = sql_query("select * from `week`");
                        $result1=sql_query("select * from `pinglun`");
                        foreach( $result as $k=>$v)
                        {
                            $read_time = $v['endday']." ".$v['endtime'];
                            
                            //echo $read_time;
                            
                            if(strnatcmp($cur_time,$read_time)>=0)
                            {
                                foreach($result1 as $k1=>$v1)
                                {
                                    if(strnatcmp($v1['time'],$read_time1)<=0)
                                    {
                                        echo '<tr height="50" colspan="3">
                                              <td style="color:blue">';
                                        echo $v1['yonghu'];
                                        echo "&nbsp";
                                        echo $v1['time'];
                                        echo '</td><td>';
                                        echo $v1['content'];
                                        echo '</td></tr>';
                                    }
                                }
                                
                            
                            }
                            
                        }
                    ?>  
                    </table>
                      
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            
              
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





