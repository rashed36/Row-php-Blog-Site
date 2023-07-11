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
            
            <button  style="margin-left: 90px"  type="button" class="btn btn-success w-md m-b-5" onclick="window.location.href='profile.php'">Profile</button>
            <button  type="button" class="btn btn-success w-md m-b-5" onclick="window.location.href='manage_profile.php'">Manage-Profile</button>
            <ol class="breadcrumb">
                <li><a href="index.php"><i class="pe-7s-home"></i> Home</a></li>
                <li><a href="profile.php">Forms</a></li>
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
                            <h4>Profile </h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">
                            <div class="panel-body">
                                <form action="controller.php" method="POST" enctype="multipart/form-data">
                                    <!-- Profile Name -->
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-form-label">Profile Name</label>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-form-label">Name</label>
                                        <input class="form-control" type="text" name="name" id="example-text-input">
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-search-input" class="col-form-label">Date of birth</label>
                                        <input class="form-control" type="date" name="birth" id="example-search-input">
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-email-input" class="col-form-label">Nationality</label>
                                        <input class="form-control" type="text" name="nationality" id="example-email-input">
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-url-input" class="col-form-label">Address</label>
                                        <input class="form-control" type="text" name="address" id="example-url-input">
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-tel-input" class="col-form-label">Phone</label>
                                        <input class="form-control" type="tel" name="phone" id="example-tel-input">
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-password-input" class="col-form-label">Email</label>
                                        <input class="form-control" type="email" name="email" id="example-password-input">
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-number-input" class="col-form-label">Image</label>
                                        <input class="form-control" type="file" name="img" id="example-number-input">
                                    </div>
                                    <!-- Profile Detils -->
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-form-label">Profile Detils</label>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-search-input" class="col-form-label">Title</label>
                                        <input class="form-control" type="text" name="title" >
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-search-input" class="col-form-label">Profile Name</label>
                                        <input class="form-control" type="text" name="pname" >
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-search-input" class="col-form-label">Details</label>
                                        <textarea  type="text" name="details" class="form-control" ></textarea>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-search-input" class="col-form-label">Signature</label>
                                        <input class="form-control" type="text" name="signature" >
                                    </div>
                                    <!-- Social Link -->
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-form-label">Social Links</label>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-search-input" class="col-form-label">Facebook</label>
                                        <input class="form-control" type="text" name="link1" >
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-email-input" class="col-form-label">Twitter</label>
                                        <input class="form-control" type="text" name="link2" >
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-url-input" class="col-form-label">Google plus</label>
                                        <input class="form-control" type="text" name="link3" >
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-tel-input" class="col-form-label">LinkedIN</label>
                                        <input class="form-control" type="text" name="link4" >
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-password-input" class="col-form-label">Pinterest</label>
                                        <input class="form-control" type="text" name="link5" >
                                    </div>
                                    <div class="row">
                                        <button type="submit" name="profile_submit" class="btn btn-primary">Submit</button>
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