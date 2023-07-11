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
            <h1>Profile</h1>
            <small>Tabs styles and versions</small>
  
           <button  style="margin-left: 30px"  type="button" class="btn btn-success w-md m-b-5" onclick="window.location.href='profile.php'">Profile</button>
        <button  type="button" class="btn btn-success w-md m-b-5" onclick="window.location.href='manage_profile.php'">Manage-Profile</button>

      


            <ol class="breadcrumb">
                <li><a href="index.php"><i class="pe-7s-home"></i> Home</a></li>
                <li><a href="profile.php">Forms</a></li>
                <li class="active">Manage Profile</li>
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
                        <h4>Profile page Table </h4>
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
                                <th>Name</th>
                                <th>Date of birth </th>
                                <th>Nationality</th>
                                <th>Address </th>
                                <th>Phone</th>
                                <th>Email </th>
                                <th>Title </th>
                                <th>Profile Name</th>
                                <th>Profile Text</th>
                                <th>Signature</th>
                                <th>Facebook</th>
                                <th>Twitter</th>
                                <th>Google plus</th>
                                <th>LinkedIN</th>
                                <th>Pinterest</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include"comm/connection.php";
                            $q="SELECT * FROM profile ";
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
                                <td><img width="50" src="<?php echo $res['Image']; ?>"></td>
                                <td><?php echo $res['Name']; ?></td>
                                <td><?php echo $res['birth']; ?></td>
                                <td><?php echo $res['Nationality']; ?></td>
                                <td><?php echo $res['Address']; ?></td>
                                <td><?php echo $res['Phone']; ?></td>
                                <td><?php echo $res['Email']; ?></td>
                                <td><?php echo $res['Title']; ?></td>
                                <td><?php echo $res['ProfileName']; ?></td>
                                <td style="overflow: scroll;height: 100px ; display: block;"><?php echo $res['Details']; ?></td>
                                <td><?php echo $res['Signature']; ?></td>
                                <td><?php echo $res['Facebook']; ?></td>
                                <td><?php echo $res['Twitter']; ?></td>
                                <td><?php echo $res['Google_plus']; ?></td>
                                <td><?php echo $res['LinkedIN']; ?></td>
                                <td><?php echo $res['Pinterest']; ?></td>
                                
                                <td>
                                    <a href="all_update.php?profile_id=<?php echo $res['id'];?>" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="Update"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    
                                    <a href="delete.php?profile_id=<?php echo $res['id'];?>" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="right" title="Delete "><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                    
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    
                
 <!-- --------------------  ----------->
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