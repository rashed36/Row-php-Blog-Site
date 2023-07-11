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
            <h1>My Blog</h1>
            <small>Tabs styles and versions</small>
  
           <button  style="margin-left: 90px"  type="button" class="btn btn-success w-md m-b-5" onclick="window.location.href='my_blog.php'">My Blog</button>
        <button  type="button" class="btn btn-success w-md m-b-5" onclick="window.location.href='manage_blog.php'">Manage My-Blog</button>


            <ol class="breadcrumb">
                <li><a href="index.php"><i class="pe-7s-home"></i> Home</a></li>
                <li><a href="my_blog.php">Forms</a></li>
                <li class="active">Manage My-Blog</li>
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
                        <h4>My Blog Table </h4>
                    </div>
                </div>
                <div class="panel-body">
                    
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Select</th>
                                <th>Image</th>
                                <th>Date</th>
                                <th>Name</th>
                                <th>Heading</th>
                                <th>Post detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include"comm/connection.php";
                            $q="SELECT * FROM my_blog";
                            $qury=mysqli_query($con,$q);
                            while ($res = mysqli_fetch_array($qury)) {
                            ?>
                            <tr>
                                <td>
                                    <div class="checkbox checkbox-success">
                                        <input id="checkbox1" type="checkbox">
                                        <label for="checkbox1"></label>
                                    </div>
                                </td>
                                <td><img width="50" src="<?php echo $res['image']; ?>"></td>
                                <td><?php echo $res['date_time']; ?></td>
                                <td><?php echo $res['profile_name']; ?></td>
                                <td><?php echo $res['heading']; ?></td>
                                <td><?php echo $res['postdetail']; ?></td>
                                <td>
                                    <a href="all_update.php?blog_id=<?php echo $res['id'];?>" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="Update"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    
                                    <a href="delete.php?blog_id=<?php echo $res['id'];?>" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="right" title="Delete "><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
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