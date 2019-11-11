<?php
session_start();
require_once('db_function.php');
$ID=$_REQUEST['ID'];
$SID=$_REQUEST['SID'];
//$SID=1;
//$ID=0;

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
          <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <!--<h5 class="sidenav-heading">Main</h5>-->
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li><a href="account_teacher.php?SID=<?php echo $SID?>&ID=<?php echo $ID?>"> <i class="icon-user"></i>Account                             </a></li>
            <li><a href="dashboard_teacher.php?SID=<?php echo $SID?>"> <i class="icon-form"></i>Dashboard                      </a></li>
            <li class="active"><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Courses </a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="homeTea.php?SID=<?php echo $SID?>&ID=<?php echo $ID?>">Home</a></li>
                <li><a href="syllabust.php?SID=<?php echo $SID?>&ID=<?php echo $ID?>">Syllabus</a></li>
                <li><a href="modulest.php?SID=<?php echo $SID?>&ID=<?php echo $ID?>">Modules</a></li>
                <li class="active"><a href="discussion_teacher.php?SID=<?php echo $SID?>&ID=<?php echo $ID?>">Discussions</a></li>
                <li><a href="gradest.php?SID=<?php echo $SID?>&ID=<?php echo $ID?>">Grades</a></li>
                <li><a href="assignmentsTea.php?SID=<?php echo $SID?>&ID=<?php echo $ID?>">Assignment</a></li>
              </ul>
            </li>
            <li><a href="calendart.php?SID=<?php echo $SID?>&ID=<?php echo $ID?>"> <i class="fa fa-bar-chart"></i>Calendar              </a></li>
            
            <!--<li><a href="login.html"> <i class="icon-interface-windows"></i>Login page                             </a></li>-->
            <li> <a href="inboxt.php?SID=<?php echo $SID?>&ID=<?php echo $ID?>"> <i class="icon-mail"></i>Inbox
                <div class="badge badge-warning">6 News</div></a></li>
            <li ><a href="helpt.php?SID=<?php echo $SID?>&ID=<?php echo $ID?>"> <i class="icon-search"></i>Help                             </a></li>
            <li><a href="contactt.php?SID=<?php echo $SID?>&ID=<?php echo $ID?>"> <i class="icon-rss-feed"></i>Contact                          </a></li>
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
                          <th>Comments</th>
                        </tr>
                      </thead>
                    <tbody>
                    <table width=100%, border="1"> 
                        <tr>
                            
                            <form action="pinglunchuli_teacher.php?SID=<?php echo $SID?>&ID=<?php echo $ID?>" method="post">
                                评论内容：
                                <input type="text" name="content"><input type="submit" value="评论"><!--评论显示的地方--><!--单击评论提交内容进处理页面-->
                            </form>
                            <?php
  require"DBDA.class.php"; //调用封装类注意修改数据库名
  $db = new DBDA();
  $sql ="select * from pinglun";
  $arr = $db->query($sql,1);
  foreach($arr as $v)
  {
    echo '
       
      <table class="table" style="color:blue">
            <thead>
                <tr>
                <th>';
      echo $v[2];
      echo "\t";
      echo '</th>
                </tr>
             </thead>
            <tbody>
            <tr>
                <td>';
          echo $v[1];
        
          echo '</td>
                        <td>';
          echo $v[3];
          echo '</td>
                </tr>
                    
            </tbody>
        </table>';
        
     
?>
    <div>
       <form action="delchuli_teacher.php?ID=<?php echo $ID?>&SID=<?php echo $SID?>&time=<?php echo $v[3]?>&id=<?php echo $v[0]?>" method="post"> <!--删除按钮-->
        <input type="submit" value="删除">
        
       </form>
    </div>
              <br/>          
    <div>
        
       <form action="huifuchuli_teacher.php?ID=<?php echo $ID?>&time=<?php echo $v[3]?>&sid=<?php echo $SID?>&id=<?php echo $v[0]?>" method="post"> <!--回复按钮-->
        回复内容：<input name="Comment"><input type="submit" value="回复">
       </form></div>
<?php
        
      $dc = new DBDA(); 
      
      $sql1 ="select * from huifu where jieshouid ='{$v[0]}' and time ='{$v[3]}'"; //查询回复表中的id和传过去的id是不是一样的
          $arr1 = $dc->query($sql1,1);
      foreach($arr1 as $k)
      {
        echo '
       <div style="color:black">
      <table class="table">
            <thead>
                <tr>
                <th>';
      echo $k[4];
      echo "\t";
      echo '</th>
                </tr>
             </thead>
            <tbody>
            <tr>
                <td>';
          echo $k[2];
        
          echo '</td>
                        <td>';
          echo $k[3];
          echo '</td>
                </tr>
                    
            </tbody>
        </table>';
        
      echo '</div>';
      }   
  }
      
?>
                        
   
                            
                        </tr>
                        
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





