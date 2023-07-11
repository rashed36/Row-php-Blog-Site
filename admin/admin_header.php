<?php session_start();
include_once('comm/connection.php');
if(empty($_SESSION['username']))
{
    header("location:login.php");
}
else
{
    $ulogin=$_SESSION['username'];
    $profile=$_SESSION['img'];

}



?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Bdtask - Bootstrap Admin Template Dashboard</title>

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/dist/img/ico/favicon.png" type="image/x-icon">
        <link rel="apple-touch-icon" type="image/x-icon" href="assets/dist/img/ico/apple-touch-icon-57-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="assets/dist/img/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="assets/dist/img/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="assets/dist/img/ico/apple-touch-icon-144-precomposed.png">

        <!-- Start Global Mandatory Style
        =====================================================================-->
        <!-- jquery-ui css -->
        <link href="assets/plugins/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
        <!-- Bootstrap -->
        <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- Bootstrap rtl -->
        <!--<link href="assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
        <!-- Lobipanel css -->
        <link href="assets/plugins/lobipanel/lobipanel.min.css" rel="stylesheet" type="text/css"/>
        <!-- Pace css -->
        <link href="assets/plugins/pace/flash.css" rel="stylesheet" type="text/css"/>
        <!-- Font Awesome -->
        <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <!-- Pe-icon -->
        <link href="assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>
        <!-- Themify icons -->
        <link href="assets/themify-icons/themify-icons.css" rel="stylesheet" type="text/css"/>
        <!-- End Global Mandatory Style
        =====================================================================-->
        <!-- Start page Label Plugins 
        =====================================================================-->
        <!-- Toastr css -->
        <link href="assets/plugins/toastr/toastr.css" rel="stylesheet" type="text/css"/>
        <!-- Emojionearea -->
        <link href="assets/plugins/emojionearea/emojionearea.min.css" rel="stylesheet" type="text/css"/>
        <!-- Monthly css -->
        <link href="assets/plugins/monthly/monthly.css" rel="stylesheet" type="text/css"/>
        <!-- End page Label Plugins 
        =====================================================================-->
        <!-- Start Theme Layout Style
        =====================================================================-->
        <!-- Theme style -->
        <link href="assets/dist/css/styleBD.css" rel="stylesheet" type="text/css"/>
        <!-- Theme style rtl -->
        <!--<link href="assets/dist/css/styleBD-rtl.css" rel="stylesheet" type="text/css"/>-->
        <!-- End Theme Layout Style
        =====================================================================-->
    </head>
    <body class="hold-transition sidebar-mini">
        <!-- Site wrapper -->

        <div class="wrapper">
            <header class="main-header"> 
                <a href="index.php" class="logo"> <!-- Logo -->
                    <span class="logo-mini">
                        <!--<b>A</b>BD-->
                        <img src="assets/dist/img/mini-logo.png" alt="">
                    </span>
                    <span class="logo-lg">
                        <!--<b>Admin</b>BD-->
                        <img src="assets/dist/img/logo.png" alt="">
                    </span>
                </a>
                <!-- Header Navbar -->
                <nav class="navbar navbar-static-top">
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> <!-- Sidebar toggle button-->
                        <span class="sr-only">Toggle navigation</span>
                        <span class="pe-7s-keypad"></span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- Messages -->
                            <li class="dropdown messages-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="pe-7s-mail"></i>
                                    <span class="label label-success">4</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">You have 5 messages</li>
                                    <li>
                                        <ul class="menu">
                                            <li><!-- start message -->
                                                <a href="#">
                                                    <div class="pull-left"><img src="assets/dist/img/avatar.png" class="img-circle" alt="User Image"></div>
                                                    <h4>Lorem Ipsum is simply<small><i class="fa fa-clock-o"></i> 10 mins</small></h4>
                                                    <p>It is a long established fact that a reader</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="pull-left"><img src="assets/dist/img/avatar2.png" class="img-circle" alt="User Image"></div>
                                                    <h4>Contrary to popular belief <small><i class="fa fa-clock-o"></i> 9 hours</small></h4>
                                                    <p>There are many variations of passages</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="pull-left"><img src="assets/dist/img/avatar3.png" class="img-circle" alt="User Image"></div>
                                                    <h4>The standard chunk<small><i class="fa fa-clock-o"></i> 3 hours</small></h4>
                                                    <p>There are many variations of passages</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="pull-left"><img src="assets/dist/img/avatar4.png" class="img-circle" alt="User Image"></div>
                                                    <h4>It is a long<small><i class="fa fa-clock-o"></i> 2 days</small></h4>
                                                    <p>packages and web page editors</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="pull-left"><img src="assets/dist/img/avatar5.png" class="img-circle" alt="User Image"></div>
                                                    <h4>Contrary to popular belief<small><i class="fa fa-clock-o"></i> Yesterday</small></h4>
                                                    <p> Lorem Ipsum is not simply random text</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="#">See All Messages</a></li>
                                </ul>
                            </li>
                            <!-- Notifications -->
                            <li class="dropdown notifications-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="pe-7s-speaker"></i>
                                    <span class="label label-warning">8</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">You have 10 notifications</li>
                                    <li>
                                        <ul class="menu">
                                            <li><a href="#"><i class="ti-user color-gray"></i> 5 new members joined today </a></li>
                                            <li><a href="#"><i class="ti-announcement color-green"></i> Very long description here that may not fit into the page and may cause design problems</a></li>
                                            <li><a href="#"><i class="fa fa-users"></i> 5 new members joined</a></li>
                                            <li><a href="#"><i class="ti-shopping-cart color-violet"></i> 25 sales made</a></li>
                                            <li><a href="#"><i class="ti-twitter color-info"></i>  3 New Followers</a></li>
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="#">View all</a></li>
                                </ul>
                            </li>
                            <!-- Tasks -->
                            <li class="dropdown tasks-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="pe-7s-flag"></i>
                                    <span class="label label-danger">9</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">You have 9 tasks</li>
                                    <li>
                                        <ul class="menu">
                                            <li> <!-- Task item -->
                                                <a href="#">
                                                    <h3>
                                                        Design some buttons
                                                        <small class="pull-right">20%</small>
                                                    </h3>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-primary progress-bar-striped active" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                                                            <span class="sr-only">30% Complete (primary)</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li> <!-- end task item -->
                                            <li> <!-- Task item -->
                                                <a href="#">
                                                    <h3>
                                                        Create a nice theme
                                                        <small class="pull-right">40%</small>
                                                    </h3>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                            <span class="sr-only">40% Complete (primary)</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li> <!-- end task item -->
                                            <li> <!-- Task item -->
                                                <a href="#">
                                                    <h3>
                                                        Some task I need to do
                                                        <small class="pull-right">60%</small>
                                                    </h3>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                            <span class="sr-only">60% Complete (info)</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li> <!-- end task item -->
                                            <li> <!-- Task item -->
                                                <a href="#">
                                                    <h3>
                                                        Make beautiful transitions
                                                        <small class="pull-right">80%</small>
                                                    </h3>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                            <span class="sr-only">80% Complete (warning)</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- end task item -->
                                        </ul>
                                    </li>
                                    <li class="footer">
                                        <a href="#">View all tasks</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- settings -->
                            <li class="dropdown dropdown-user">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="pe-7s-settings"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="profile.html"><i class="pe-7s-users"></i> User Profile</a></li>
                                    <li><a href="#"><i class="pe-7s-settings"></i> Settings</a></li>
                                    <li><a href="session_unset.php"><i class="pe-7s-key"></i> Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- =============================================== -->
            <!-- Left side column. contains the sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel text-center">
                        <div class="image">
                            <img src="<?php echo $profile; ?>" class="img-circle" alt="User Image">
                        </div>
                        <div class="info">
                            <p><?php echo $ulogin; ?></p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form> <!-- /.search form -->
                    <!-- sidebar menu -->
                    <ul class="sidebar-menu">
                        <li class="header">MAIN NAVIGATION</li>
                        <li class="active">
                            <a href="index.php"><i class="ti-home"></i> <span>Dashboard</span>
                                <span class="pull-right-container">
                                    <span class="label label-success pull-right">v.1</span>
                                </span>
                            </a>
                        </li>
                     
                        <li class="treeview">
                            <a href="#">
                                <i class="ti-pencil-alt"></i> <span>Forms</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                
                                <li><a href="profile.php">Profile</a></li>
                                 
                                <li><a href="portfolio.php">Portfolio</a></li>
                                
                                <li><a href="skill.php">Skill Achievement</a></li>
                                
                                <li><a href="work.php">Work Experience</a></li>
                                
                                <li><a href="education.php">Education</a></li>
                               
                                <li><a href="my_blog.php">My Blog</a></li>
                                
                                <li><a href="address.php">Address</a></li>
                                
                               
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="ti-layout"></i> <span>Tables</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                               
                                <li><a href="manage_profile.php">Manage Profile</a></li>
                                <li><a href="manage_Portfolio.php">Manage Portfolio</a></li>
                                <li><a href="manage_skill.php">Manage Skill</a></li>
                                <li><a href="manage_work.php">Manage Work</a></li>
                                 <li><a href="manage_education.php">Manage Education </a></li>
                                 <li><a href="manage_blog.php">Manage My-Blog</a></li>
                                 <li><a href="manage_address.php">Manage Address</a></li>
                            </ul>
                        </li>


                   
                     
                        <li class="treeview">
                            <a href="#">
                                <i class="ti-email"></i> <span>Mailbox</span>
                                <span class="pull-right-container">
                                    <small class="label pull-right bg-yellow">19</small>
                                    <small class="label pull-right bg-green">13</small>
                                    <small class="label pull-right bg-red">3</small>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="mailbox.php">Mailbox</a></li>
                              
                                <li><a href="mailDetails.php">Mailbox Details</a></li>
                                
                            </ul>
                        </li>

                           <li class="treeview">
                            <a href="#">
                                <i class="ti-layout"></i> <span>Other Page</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                 <li><a href="all_update.php">All Update</a></li>
                            </ul>
                        </li>
                        
                      
                 
                       
                          
                        
                                      </div> <!-- /.sidebar -->
            </aside>
            <!-- =============================================== -->