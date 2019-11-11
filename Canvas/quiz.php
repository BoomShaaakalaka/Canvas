<?php
$cid=$_GET['ID'];
$SID=$_GET['SID'];
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
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <title>题库</title>
    <style type="text/css">
        *{list-style: none;margin:0px;padding: 0px;}
        #tiku{
            width: 300px;
            margin:10px auto;
        }
 
        #tiku ul li{
            float: left;
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
          <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <!--<h5 class="sidenav-heading">Main</h5>-->
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li><a href="account.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>"> <i class="icon-user"></i>Account                             </a></li>
            <li><a href="dashboard.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>"> <i class="icon-form"></i>Dashboard                      </a></li>
            <li class="active"><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Courses </a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="home.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>">Home</a></li>
                <li><a href="syllabus.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>">Syllabus</a></li>
                <li><a href="modules.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>">Modules</a></li>
                <li><a href="discussion.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>">Discussions</a></li>
                <li class="active"><a href="grades.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>">Grades</a></li>
                <li><a href="assignments.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>">Assignment</a></li>
              </ul>
            </li>
            <li><a href="calendar.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>"> <i class="fa fa-bar-chart"></i>Calendar                    </a></li>
            
            <!--<li><a href="login.html"> <i class="icon-interface-windows"></i>Login page                             </a></li>-->
            <li> <a href="inbox.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>"> <i class="icon-mail"></i>Inbox
                <div class="badge badge-warning">6 News</div></a></li>
            <li ><a href="help.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>"> <i class="icon-search"></i>Help                             </a></li>
            <li><a href="contact.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>"> <i class="icon-rss-feed"></i>Contact                          </a></li>
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
          <?php
//获取数据库配置
    
require 'conn.php';

$all = count(mysqli_query($conn, "select * from quiz"));

//定义分页所需的参数
$lenght=1;                             //每页显示的数量
@$page=$_GET['page']?$_GET['page']:1;    //当前页
$offset=($page-1)*$lenght;              //每页起始行编号
$allpage=ceil($all/$lenght);            //所有的页数-总数页
$prepage=$page-1;                       //上一页
if($page==1){
    $prepage=1;                         //特殊的是当前页是1时上一页就是1
    }
$nextpage=$page+1;
if($page==$allpage){
    $nextpage=$allpage;                //特殊的是最后页是总数页时下一页就是总数页
    }
$sql="select * from quiz order by id ASC limit {$offset},{$lenght}";
$rest = $conn->query($sql);
while($row = mysqli_fetch_assoc($rest))
    {
        $id = $row["id"];
        $title = $row["title"];
        $A = $row["answer_A"];
        $B = $row["answer_B"];
        $C = $row["answer_C"];
        $D = $row["answer_D"];
        $true = $row["true"];
        $score = $row["score"];
    }
?>
<div id="tiku">
    <form action="check.php" method="post">
        <p><?php echo $title;?></p>
        <input type="radio" name="xuanxiang" value="<?php echo $A;?>">A：<?php echo $A;?><br>
        <input type="radio" name="xuanxiang" value="<?php echo $B;?>">B：<?php echo $B;?><br>
        <input type="radio" name="xuanxiang" value="<?php echo $C;?>">C：<?php echo $C;?><br>
        <input type="radio" name="xuanxiang" value="<?php echo $D;?>">D：<?php echo $D;?><br><br>
        <input type="hidden" name="id" value="<?php echo $id;?>">
        <input type="hidden" name="ID" value="<?php echo $cid;?>">
        <input type="hidden" name="SID" value="<?php echo $SID;?>">
        <button>提交</button>
    </form>
</div>
    <br/>
    <?php
    echo "<div id='tiku'>";
        echo "<ul>";
            echo "<li><a href='next.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>&page=<?php echo $prepage?>'>上一题</a></li>";
            echo "<li><a href='next.php?ID=<?php echo $cid?>&SID=<?php echo $SID?>&page=<?php echo $nextpage?>'>下一题</a></li>";
        echo "</ul>";
    echo "<div>";
    echo "<br/>";
    echo "<p class='fenye_tips'>A total of".$allpage."questions，this is the".$page."question</p>";
    echo "<br/><br/>";
    echo "</div>";
    ?>
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

