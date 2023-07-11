<!-- Include Header file -->
<?php include_once'admin_header.php'?>
<!-- Content Wrapper. Contains page content -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Portfolio</h1>
            <small>Tabs styles and versions</small>
  
           <button  style="margin-left: 90px"  type="button" class="btn btn-success w-md m-b-5" onclick="window.location.href='portfolio.php'">Portfolio</button>
 		<button  type="button" class="btn btn-success w-md m-b-5" onclick="window.location.href='manage_Portfolio.php'">Manage-Portfolio</button>


            <ol class="breadcrumb">
                <li><a href="index.php"><i class="pe-7s-home"></i> Home</a></li>
                <li><a href="portfolio.php">Forms</a></li>
                <li class="active">Profile</li>
            </ol>
        </div>
    </section>
    
 <!-- start form  ----------->

	
                
 	<section class="content">
 	
       	<div class="row">

                    <div class="col-sm-12">

            <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4>Portfolio</h4>
                    </div>
                </div>
                <div class="row">
                        <div class="col-sm-2"></div>
                <div class="col-sm-8">
                <div class="panel-body">
                    
                    <form action="controller.php" method="POST" enctype="multipart/form-data">
                        
                        <div class="form-group">
                            <label for="exampleSelect1">Catagary</label>
                            <select class="form-control" name="catagary" id="exampleSelect1">
                                <option>Photography</option>
                                <option>Design</option>
                                <option>Video</option>
                                <option>Sketch</option>
                                <option>People</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Link</label>
                            <input type="text" name="link" class="form-control"   >
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Image</label>
                            <input type="file" class="form-control" name="img"    >
                        </div>
                        
                        
                        <div>
                            <button type="submit" name="portfolio_submit" class="btn btn-primary">Submit</button>
                            
                        </div>
                        
                    </form>
                </div>
                </div>
            </div>
            </div>
        </div>
                </div>
    </section>
</div>





<!-- .footer -->
<footer class="main-footer">
        <div class="pull-right hidden-xs"> <b>Version</b> 1.0</div>
        <strong>Copyright &copy; 2016-2017 <a href="#">bdtask</a>.</strong> All rights reserved. <i class="fa fa-heart color-green"></i>
    </footer>
    
     <!-- ./wrapper -->
    <!-- ./wrapper -->
    <!-- Start Core Plugins
    =====================================================================-->
    <!-- jQuery -->
    <script src="assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
    <!-- jquery-ui -->
    <script src="assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
    <!-- Bootstrap -->
    <script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- lobipanel -->
    <script src="assets/plugins/lobipanel/lobipanel.min.js" type="text/javascript"></script>
    <!-- Pace js -->
    <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src="assets/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
    <!-- AdminBD frame -->
    <script src="assets/dist/js/frame.js" type="text/javascript"></script>
    <!-- End Core Plugins
    =====================================================================-->
    <!-- Start Theme label Script
    =====================================================================-->
    <!-- Dashboard js -->
    <script src="assets/dist/js/dashboard.js" type="text/javascript"></script>
    <!-- End Theme label Script
    =====================================================================-->
</body>
</html>