<?php
session_start();
 
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" href="images/fev-icon.png"/>
        <title>Resuma - Responsive HTML Template</title>
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <!-- ALL CSS SCRIPT FILE -->
        <!-- google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Oswald:300,400,700|Sacramento" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Magnific Popup core CSS file -->
        <link href="css/magnific-popup.css" rel="stylesheet" type="text/css"/> 
        <!-- font-awesome -->
        <link href="font-awesome-4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <!-- Flaticon css -->
        <link href="css/flaticon.css" rel="stylesheet" type="text/css"/>
        <!-- Important Owl style sheet -->
        <link href="owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css"/>
        <!-- Default Theme -->
        <link href="owl-carousel/owl.theme.css" rel="stylesheet" type="text/css"/>
        <!-- Owl animation -->
        <link href="owl-carousel/owl.transitions.css" rel="stylesheet" type="text/css"/>
        <!-- css stylesheets -->
        <link href="css/style.css" rel="stylesheet" type="text/css"/> 
    </head>
    <body id="page-top">
        <div class="se-pre-con"></div>
        <!-- navber -->
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="resume-horizontal.html">Adelaide</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a class="page-scroll" href="#home">Home <span class="sr-only">(current)</span></a></li>
                        <li><a class="page-scroll" href="#portfolio">Portfolio</a></li>
                        <li><a class="page-scroll" href="#skill">Skill</a></li>
                        <li><a class="page-scroll" href="#education">Education</a></li>
                        <li><a class="page-scroll" href="#blog">My blog</a></li>
                        <li><a class="page-scroll" href="#contact">Contact</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >Pages<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blog-details.html">Blog details</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
        <!-- Home section -->
        <?php
         include"comm/connection.php";
        $q="SELECT * FROM profile ORDER BY id DESC LIMIT 1";
        $qury=mysqli_query($con,$q);
        while ($res = mysqli_fetch_array($qury)) {
        ?>
        <div class="section" id="home">
            <div class="container">
                <div class="row row-margin about-wrapper">
                    <div class="col-sm-4 my-padding">
                        <ul class="my-image-wrapper">
                            <li>
                                <figure>
                                    
                                    <img src="admin/<?php echo $res['Image']; ?>" class="img-responsive" alt="">
                                    <figcaption>
                                        <div class="personal-details-wrapper">
                                            <h3><?php echo strtoupper($res['Name']); ?></h3>
                                            <ul class="personal-details ">
                                                <li><b>Name:</b><?php echo $res['Name']; ?> </li>
                                                <li><b>Date of birth:</b><?php echo $res['birth']; ?></li>
                                                <li><b>Nationality:</b><?php echo $res['Nationality']; ?></li>
                                                <li><b>Address:</b><?php echo $res['Address']; ?></li>
                                                <li><b>Phone:</b><?php echo $res['Phone']; ?></li>
                                                <li><b>Email:</b><?php echo $res['Email']; ?></li>
                                            </ul>
                                        </div>
                                    </figcaption>
                                </figure>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-8 col-md-6 my-padding">
                        <div class="about-text-bg">
                            <h5><?php echo $res['Title']; ?></h5>
                            <h3><?php echo $res['ProfileName']; ?></h3>
                            <p><?php echo $res['Details']; ?></p>
                            <h2><?php echo $res['Signature']; ?></h2>
                        </div>
                    </div>
                    <div class="col-sm-2 my-padding hidden-sm">
                        <div class="social-link">
                            <ul>
                                <li>
                                    <a href="<?php echo $res['Facebook']; ?>" class="facebook"><span>Facebook</span></a>
                                </li>
                                <li>
                                    <a href="<?php echo $res['Twitter']; ?>" class="twitter"><span>Twitter</span></a>
                                </li>
                                <li>
                                    <a href="<?php echo $res['Google_plus']; ?>" class="google-plus"><span>Google plus</span></a>
                                </li>
                                <li>
                                    <a href="<?php echo $res['LinkedIN']; ?>" class="linkedin"><span>LinkedIN</span></a>
                                </li>
                                <li>
                                    <a href="<?php echo $res['Pinterest']; ?>" class="pinterest"><span>Pinterest</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <?php } ?>
        <!-- /.Home section -->
        <!-- Portfolio section -->
        <div class="section" id="portfolio">
            <div class="container">
                <div class="row row-margin portfolio">
                    <!-- title -->
                    <div class="col-md-6 col-md-offset-3">
                        <div class="title-inner">
                            <h2>Portfolio</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry'</p>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <ul class="portfolio-sorting list-inline text-center">
                            <li><a href="#" data-group="all" class="active">All</a></li>
                            <li><a href="#" data-group="photography">Photography</a></li>
                            <li><a href="#" data-group="design">Design</a></li>
                            <li><a href="#" data-group="video">Video</a></li>
                            <li><a href="#" data-group="sketch">Sketch</a></li>
                            <li><a href="#" data-group="sketch">People</a></li>
                        </ul> <!--end portfolio sorting -->
                        <div class="portfolio-items list-unstyled zoom-gallery" id="grid">
                            <?php
                                 $q="SELECT * FROM portfolio WHERE section='video'";
                                 $qury=mysqli_query($con,$q);
                                  while ($res = mysqli_fetch_assoc($qury)) {
                             ?>
                            <div class="col-sm-3 my-padding" data-groups='["video"]'>
                                <figure class="portfolio-item">
                                    <a href="<?php echo $res['link']; ?>" class="popup-youtube img-hover">
                                        <img src="admin/<?php echo $res['image']; ?>" alt="Item 1" class="img-responsive">
                                        <span><i class="glyph-icon flaticon-multimedia" aria-hidden="true"></i></span>
                                    </a>
                                </figure>
                            </div>
                            <?php 
                                } 
                                 $q="SELECT * FROM portfolio WHERE section='design'";
                                 $qury=mysqli_query($con,$q);
                                  while ($res = mysqli_fetch_array($qury)) {
                             ?>
                            <div class="col-sm-3 my-padding" data-groups='["design"]'>
                                <figure class="portfolio-item">
                                    <a href="admin/<?php echo $res['image']; ?>" class="img-hover">
                                        <img src="admin/<?php echo $res['image']; ?>" alt="Item 2" class="img-responsive">
                                        <span><i class="glyph-icon flaticon-photo-camera-1" aria-hidden="true"></i></span>
                                    </a>
                                </figure>
                            </div>
                            <?php
                                }
                                 $q="SELECT * FROM portfolio WHERE section='photography'";
                                 $qury=mysqli_query($con,$q);
                                  while ($res = mysqli_fetch_array($qury)) {
                             ?> 
                            <div class="col-sm-3 my-padding" data-groups='["photography"]'>
                                <figure class="portfolio-item">
                                    <a href="admin/<?php echo $res['image']; ?>" class="img-hover">
                                        <img src="admin/<?php echo $res['image']; ?>" alt="Item 3" class="img-responsive">
                                        <span><i class="glyph-icon flaticon-photo-camera-1" aria-hidden="true"></i></span>
                                    </a>
                                </figure>
                            </div>
                            <?php 
                                }
                                $q="SELECT * FROM portfolio WHERE section='sketch'";
                                $qury=mysqli_query($con,$q);
                                while ($res = mysqli_fetch_array($qury)) {
                             ?>
                            <div class="col-sm-3 my-padding" data-groups='["sketch"]'>
                                <figure class="portfolio-item">
                                    <a href="admin/<?php echo $res['image']; ?>" class="img-hover">
                                        <img src="admin/<?php echo $res['image']; ?>" alt="Item 18" class="img-responsive">
                                        <span><i class="glyph-icon flaticon-photo-camera-1" aria-hidden="true"></i></span>
                                    </a>
                                </figure>
                            </div>
                            <?php } ?>
                           </div> <!-- End portfolio grid -->
                        <button type="button" class="btn btn-primary center-block">load more</button>
                    </div>
                </div> <!-- End row -->
            </div> <!-- End container -->
        </div>
        <!-- /.Portfolio section -->
        <!-- Skill section -->
        <div class="section" id="skill">
            <div class="container">
                <div class="row row-margin skill-wrapper">
                    <div class="col-sm-6 skill-padding">
       
                        <h2>Skill<br> Achievement</h2>
                                         <?php
         include"comm/connection.php";
        $q="SELECT * FROM skill_achievement";
        $qury=mysqli_query($con,$q);
        while ($res = mysqli_fetch_array($qury)) {
        ?>
                        <div class="barWrapper">
                            <span class="progressText"><?php echo $res['SkillName']; ?></span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $res['SuccessRate']; ?>" aria-valuemin="0" aria-valuemax="100" >   
                                    <span  class="popOver" data-toggle="tooltip" data-placement="top" title="<?php echo $res['SuccessRate']; ?>%"> </span>     
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    </div>
                    <div class="col-sm-6 skill-padding">
                        <h2>Work<br> Experience</h2>
                        <div  class="owl-demo owl-carousel owl-theme">
                            <div class="item">
                                <div class="row">
                                    <?php
                                             include"comm/connection.php";
                                             $q="SELECT * FROM work_experience";
                                             $qury=mysqli_query($con,$q);
                                            while ($res = mysqli_fetch_array($qury)) {
                                        ?>
                                    <div class="col-sm-6">
                                        <blockquote>
                                            
                                            <h4><?php echo $res['WorkNames']; ?></h4>
                                            <div class="date">Period: <?php echo $res['Period']; ?></div>
                                            <div class="project">Project complete : <?php echo $res['Projectcomplete']; ?></div>
                                            <div class="hour">Working Houre : <?php echo $res['WorkingHoure']; ?> </div>
                                        
                                        </blockquote>
                                    </div>
                                    <?php } ?>
                                    </div>
                                </div>
                                <div class="item">
                                <div class="row">
                                    <?php
                                             include"comm/connection.php";
                                             $q="SELECT * FROM work_experience";
                                             $qury=mysqli_query($con,$q);
                                            while ($res = mysqli_fetch_array($qury)) {
                                        ?>
                                    <div class="col-sm-6">
                                        <blockquote>
                                            
                                            <h4><?php echo $res['WorkNames']; ?></h4>
                                            <div class="date">Period: <?php echo $res['Period']; ?></div>
                                            <div class="project">Project complete : <?php echo $res['Projectcomplete']; ?></div>
                                            <div class="hour">Working Houre : <?php echo $res['WorkingHoure']; ?> </div>
                                        
                                        </blockquote>
                                    </div>
                                    <?php } ?>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       
        <!-- /.Skill section -->
        <!-- Education section-->
       
        <div class="section" id="education">
            <div class="container">
                <div class="row education-wrapper row-margin ">
                    <!-- title -->
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="title-inner">
                                <h2>Education</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry'</p>
                            </div>

                        </div>
                         </div>
                         
                   
                    <div class="row row-margin">
                        <?php
                                             include"admin/comm/connection.php";
                                             $q="SELECT * FROM education";
                                             $qury=mysqli_query($con,$q);
                                            while ($res = mysqli_fetch_array($qury)) {
                                        ?>
                        <div class="col-xs-12 col-sm-6 education-content">
                            <div class="media">
                                <a class="" href="#">
                                    <img src="admin/<?php echo $res['InstituteLogo']; ?>" class="img-responsive" alt="">
                                </a>
                                <div class="media-body">
                                    <h3 class="media-heading"><?php echo $res['Institute']; ?></h3>
                                    <h5><?php echo $res['Department']; ?></h5>
                                    <span class="year"><?php echo $res['Session']; ?></span>
                                    <p><?php echo $res['Details']; ?></p>
                                </div> <!-- /.Media-body -->
                            </div> <!-- /.Media -->
                        </div>
                        <?php } ?>

                       
                            </div> <!-- /.Media -->
                             
                        </div>
                    </div>
                </div>
           
    
        <!-- /.Education section-->
        <!-- Blog section -->
        <div class="section" id="blog">
            <div class="container">
                <div class="row row-margin blog-wrapper">
                    <!-- title -->
                    <div class="col-md-6 col-md-offset-3">
                        <div class="title-inner">
                            <h2>My Blog</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry'</p>
                        </div>
                    </div>
                  <?php
                                             include"comm/connection.php";
                                             $ulogin=$_SESSION['username'];  
                                             $q="SELECT * FROM my_blog";
                                             $qury=mysqli_query($con,$q);
                                            while ($res = mysqli_fetch_array($qury)) {
                                        ?>
                    <div class="col-sm-4 blog-padding">
                         
                        <div class="blog-post">
                            
                            <a href="blog-details.html" class="img-hover">
                                <img src="admin/<?php echo $res['image']; ?>" alt="Item 1" class="img-responsive">
                                <span><i class="glyph-icon flaticon-photo-camera-1" aria-hidden="true"></i></span>
                            </a>
                            <h3><a href="blog-details.html"><?php echo $res['heading']; ?></a></h3>
                            <div class="blog-entry-meta">
                                <a href="#"><i class="fa fa-user"></i><?php echo $ulogin; ?></a>                         
                                <a href="#"><i class="fa fa-clock-o"></i><?php echo $res['date_time']; ?></a>
                                <a href="#"><i class="fa fa-comments"></i>6 Comments</a>
                            </div>
                            <p><?php echo $res['postdetail']; ?></p>
                            <a href="blog-details.html" class="btn-read">Read more <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        
                        </div>

                    </div>
                   <?php } ?>
                </div>
            </div>
        </div>
        <!-- /.Blog section -->
        <!-- Contact section -->
        <div class="section" id="contact">
            <div class="container">
                <div class="row row-margin contact-wrapper">
                    <div class="col-sm-5 my-padding">
                        <div class="address-wrap">
                            <?php
                                             include"admin/comm/connection.php";
                                             $q="SELECT * FROM contact ORDER BY id DESC LIMIT 1";
                                             $qury=mysqli_query($con,$q);
                                            while ($res = mysqli_fetch_array($qury)) {
                                        ?>
                            <h2>Address</h2>
                            <div class="address-panel">
                                <i class="fa fa-mobile"></i>
                                <div class="address-panel-name">Phone:</div>
                                <p><?php echo $res['phone']; ?></p>
                            </div>
                            <div class="address-panel">
                                <i class="fa fa-envelope-o"></i>
                                <div class="address-panel-name">Email:</div>
                                <p> <?php echo $res['email']; ?></p>
                            </div>
                            <div class="address-panel">
                                <i class="fa fa-map-marker"></i>
                                <div class="address-panel-name">Address:</div>
                                <p><?php echo $res['website']; ?></p>
                            </div>
                            <div class="address-panel">
                                <i class="fa fa-globe"></i>
                                <div class="address-panel-name">Website:</div>
                                <p><?php echo $res['address']; ?></p>
                            </div>
                            <!-- Social icon -->
                           <div class="social">
                                <?php
                                 include"comm/connection.php";
                                $q="SELECT * FROM profile ORDER BY id DESC LIMIT 1";
                                 $qury=mysqli_query($con,$q);
                                 while ($res = mysqli_fetch_array($qury)) {
                                 ?>
                                <ul>
                                    <li><a href="<?php echo $res['Facebook']; ?>"><i class="fa fa-lg fa-facebook"></i></a></li>
                                    <li><a href="<?php echo $res['Twitter']; ?>"><i class="fa fa-lg fa-twitter"></i></a></li>
                                    <li><a href="<?php echo $res['Google_plus']; ?>"><i class="fa fa-lg fa-google-plus"></i></a></li>
                                    <li class="hidden-sm"><a href="<?php echo $res['Pinterest']; ?>"><i class="fa fa-lg fa-pinterest"></i></a></li>
                                    <li class="hidden-sm"><a href="<?php echo $res['LinkedIN']; ?>"><i class="fa fa-lg fa-dribbble"></i></a></li>
                                </ul>
                                <?php } ?>
                            </div>
                        <?php } ?>
                        
                            <!-- /.Social icon -->
                        </div>
                    </div>
                    <div class="col-sm-7 my-padding">
                        <div class="form-wrapper">
                            <h2>Contact Form</h2>
                            <form action="admin/controller.php" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <span class="input">
                                            <input class="input__field" type="text" name="your_name" id="input-1" />
                                            <label class="input__label" for="input-1">
                                                <span class="input__label-content">Your Name</span>
                                            </label>
                                        </span>
                                    </div>
                                    <div class="col-sm-6">
                                        <span class="input">
                                            <input class="input__field" type="email" name="email" id="input-2" />
                                            <label class="input__label" for="input-2">
                                                <span class="input__label-content">Email Address</span>
                                            </label>
                                        </span>
                                    </div>
                                </div>
                                <span class="input">
                                    <input class="input__field" type="text" name="company_name" id="input-3" />
                                    <label class="input__label" for="input-3">
                                        <span class="input__label-content">Company Name</span>
                                    </label>
                                </span>
                                <span class="input">
                                    <textarea class="input__field" name="message" id="input-4"></textarea>
                                    <label class="input__label" for="input-4">
                                        <span class="input__label-content">Message</span>
                                    </label>
                                </span>
                                <input type="Submit" name="contactus_submit" value="Submit" class="btn btn-primary">
                                
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-12 my-padding">
                        <!-- Map Section -->
                        <div id="map"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- /.Contact section -->
        <!-- /.Page piling -->
        <!-- footer -->
        <footer class="footer_wrapper">
            <div class="container">
                <div class="row">
                    <div class="footer-center">
                        <div class="footer-border"></div>
                        <div class="copyright"> <span>Copyright © 2016. All rights reserved</span></div>
                        <div class="footer-border"></div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /.footer -->
        <!-- #**************ALL JAVA SCRIPT FILE**********************# -->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.easing.min.js" type="text/javascript"></script>
        <!-- shuffle -->
        <script src="js/jquery.shuffle.min.js" type="text/javascript"></script>
        <!-- Magnific Popup core JS file -->
        <script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
        <!-- Include js plugin -->
        <script src="owl-carousel/owl.carousel.js" type="text/javascript"></script>
        <!-- form js -->
        <script src="js/classie.js" type="text/javascript"></script>
        <!-- google map -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-EEPxbay_aFpp3jcFXpjyPQcVQUJ2pp0"></script>        
        <!-- my custom js -->
        <script src="js/custom.js" type="text/javascript"></script>
    </body>
</html>
