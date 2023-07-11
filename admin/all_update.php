<!-- Include Header file -->
<?php 
include_once('admin_header.php');
include_once('comm/connection.php');
?>
<!-- Content Wrapper. Contains page content -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Update Profile</h1>
            <small>Tabs styles and versions</small>
  
          


            <ol class="breadcrumb">
                <li><a href="index.php"><i class="pe-7s-home"></i> Home</a></li>
                <li><a href="all_update.php">Forms</a></li>
                <li class="active">Update</li>
            </ol>
        </div>
    </section>
    
     <!-------------------- Profile update page ---------------------------->

	
                
 	<section class="content">
 	
       	<div class="row">
            <?php
                    if(isset($_REQUEST['profile_id'])){
                    $profile_id=$_REQUEST['profile_id'];
                    
                    $select_item = "SELECT * FROM profile  where id='$profile_id'";
                    $update_sql=mysqli_query($con,$select_item);
                    while($update_row=mysqli_fetch_assoc($update_sql)){
                    ?>
            <div class="col-sm-8">
                <div class="panel panel-bd lobidrag">

                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Profile </h4>
                        </div>
                    </div>
                    
                    <div class="panel-body">
                         <form action="controller.php?pro_id=<?php echo $_REQUEST['profile_id']; ?>" method="POST" enctype="multipart/form-data">
                         	<div class="form-group row">
                            <label for="example-text-input" class="col-sm-3 col-form-label">Profile Name</label>
                            </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" value="<?php echo $update_row['Name']; ?>" name="name" id="example-text-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-search-input" class="col-sm-3 col-form-label">Date of birth</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="date" value="<?php echo $update_row['birth']; ?>" name="birth" id="example-search-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-email-input" class="col-sm-3 col-form-label">Nationality</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" value="<?php echo $update_row['Nationality']; ?>" name="nationality" id="example-email-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-url-input" class="col-sm-3 col-form-label">Address</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" value="<?php echo $update_row['Address']; ?>" name="address" id="example-url-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-tel-input" class="col-sm-3 col-form-label">Phone</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="tel" value="<?php echo $update_row['Phone']; ?>" name="phone" id="example-tel-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-password-input" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="email" value="<?php echo $update_row['Email']; ?>" name="email" id="example-password-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-number-input" class="col-sm-3 col-form-label">Image</label>
                            <div class="col-sm-9">
                               

                                <input class="form-control" type="file" value="<?php echo $update_row ['Image'];?>" name="img" id="example-number-input">
                            </div>
                            
                        </div>
                        	<div class="form-group row">
                            <label for="example-text-input" class="col-sm-3 col-form-label">Profile Detils</label>
                            </div>
                        <div class="form-group row">
                            <label for="example-search-input" class="col-sm-3 col-form-label">Title</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" value="<?php echo $update_row['Title']; ?>" name="title" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-search-input" class="col-sm-3 col-form-label">Profile Name</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" value="<?php echo $update_row['ProfileName']; ?>" name="pname" >
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="example-search-input" class="col-sm-3 col-form-label">Details</label>
                            <div class="col-sm-9">
                                <textarea  type="text" name="details"  class="form-control" ><?php echo $update_row['Details']; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-search-input" class="col-sm-3 col-form-label">Signature</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" value="<?php echo $update_row['Signature']; ?>" name="signature" >
                            </div>
                        </div>
                        	<div class="form-group row">
                            <label for="example-text-input" class="col-sm-3 col-form-label">Social Links</label>
                            </div>
                        <div class="form-group row">
                            <label for="example-search-input" class="col-sm-3 col-form-label">Facebook</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" value="<?php echo $update_row['Facebook']; ?>" name="link1" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-email-input" class="col-sm-3 col-form-label">Twitter</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" value="<?php echo $update_row['Twitter']; ?>" name="link2" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-url-input" class="col-sm-3 col-form-label">Google plus</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" value="<?php echo $update_row['Google_plus']; ?>" name="link3" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-tel-input" class="col-sm-3 col-form-label">LinkedIN</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" value="<?php echo $update_row['LinkedIN']; ?>" name="link4" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-password-input" class="col-sm-3 col-form-label">Pinterest</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" value="<?php echo $update_row['Pinterest']; ?>" name="link5" >
                            </div>
                        </div>
                        <div>
                            <button type="submit" name="Update_profile_submit" class="btn btn-primary">Submit</button>
                        </div>
                         </form>
                        
                    </div>
                </div>
            </div>
            <?php } }?>
 <!-------------------- Profilo update page ---------------------------->
            <?php
                if(isset($_REQUEST['portfolio_id'])){
                $portfolio_id=$_REQUEST['portfolio_id'];
               
                $select_item = "SELECT * FROM portfolio where id='$portfolio_id'";
                $update_sql=mysqli_query($con,$select_item);
                while($update_row=mysqli_fetch_assoc($update_sql)){
                ?>
        <div class="col-sm-8">
            <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4>Portfolio</h4>
                    </div>
                </div>
                <div class="panel-body">
                    
                   <form action="controller.php?portfolio_id=<?php echo $_REQUEST['portfolio_id']; ?>" method="POST" enctype="multipart/form-data">
                        
                        <div class="form-group">
                            <label for="exampleSelect1">Catagary</label>
                            <select class="form-control" value="<?php echo $update_row['section']; ?>" name="catagary" id="exampleSelect1">
                                <option>Photography</option>
                                <option>Design</option>
                                <option>Video</option>
                                <option>Sketch</option>
                                <option>People</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Link</label>
                            <input type="text" name="link" value="<?php echo $update_row['link']; ?>" class="form-control"   >
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Image</label>
                            <input type="file" class="form-control" value="<?php echo $update_row['image']; ?>" name="img"    >
                        </div>
                        
                        
                        <div>
                            <button type="submit" name="portfolio_update_submit" class="btn btn-primary">Submit</button>
                            
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>

         <?php } } ?>

         <?php
                if(isset($_REQUEST['skill_id'])){
                $skill_id=$_REQUEST['skill_id'];
                
                $select_item = "SELECT * FROM skill_achievement where id=$skill_id";
                $update_sql=mysqli_query($con,$select_item);
                while($update_row=mysqli_fetch_assoc($update_sql)){
                ?>
<!--  Skill Achievement update page -->
    <div class="col-sm-8">
            <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4>Skill Achievement</h4>
                    </div>
                </div>
                <div class="panel-body">
                    
                    <form action="controller.php?skill_id=<?php echo $_REQUEST['skill_id']; ?>" method="POST" enctype="multipart/form-data">
                    
                        <div class="form-group">
                            <label for="exampleInputEmail1">Skill Name</label>
                            <input type="text" name="skillname" value="<?php echo $update_row['SkillName']; ?>" class="form-control"   >
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Success Rate</label>
                            <input type="text" class="form-control" value="<?php echo $update_row['SuccessRate']; ?>" name="SuccessRate"    >
                        </div>
                        
                        <div>
                            <button type="submit" name="skill_update_submit" class="btn btn-primary">Submit</button>
                            
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
        <?php } } ?>
    <!-----Work Experience------>
    <?php
                if(isset($_REQUEST['work_id'])){
                $work_id=$_REQUEST['work_id'];
                
                $select_item = "SELECT * FROM work_experience where id='$work_id'";
                $update_sql=mysqli_query($con,$select_item);
                while($update_row=mysqli_fetch_assoc($update_sql)){
                ?>
          

          <div class="col-sm-8">
            <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4>Work Experience</h4>
                    </div>
                </div>
                <div class="panel-body">
                    
                    <form action="controller.php?work_id=<?php echo $_REQUEST['work_id']; ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Work Names</label>
                            <input type="text" value="<?php echo $update_row['WorkNames']; ?>" name="WorkNames" class="form-control"   >
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Period</label>
                            <input type="text" value="<?php echo $update_row['Period']; ?>" class="form-control" name="Period"    >
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleSelect1">Project complete</label>
                            <input  type="text" value="<?php echo $update_row['Projectcomplete']; ?>" name="Projectcomplete" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect2">Working Houre </label>
                            <input type="text" value="<?php echo $update_row['WorkingHoure']; ?>" name="WorkingHoure" class="form-control"   >
                        </div>
                        
                        <div>
                            <button type="submit" name="work_update_submit" class="btn btn-primary">Submit</button>
                            
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
<?php } } ?>
    <!-- Education update page -->
    <?php
                if(isset($_REQUEST['education_id'])){
                $education_id=$_REQUEST['education_id'];
                
                $select_item = "SELECT * FROM education where id='$education_id'";
                $update_sql=mysqli_query($con,$select_item);
                while($update_row=mysqli_fetch_assoc($update_sql)){
                ?>
        <div class="col-sm-8">
            <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4>Education</h4>
                    </div>
                </div>
                <div class="panel-body">
                    
                    <form action="controller.php?edu_id=<?php echo $_REQUEST['education_id']; ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Institute Name</label>
                            <input type="text" value="<?php echo $update_row['Institute']; ?>" name="place" class="form-control"   >
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Department</label>
                            <input type="text" value="<?php echo $update_row['Department']; ?>" class="form-control" name="category"    >
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect2">Session</label>
                            <input type="text" name="year" value="<?php echo $update_row['Session']; ?>" class="form-control"   >
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect1">Details</label>
                            <textarea  type="text" name="details" class="form-control" ><?php echo $update_row['Details']; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect2">Institute Logo</label>
                            <input type="file" name="img" value="<?php echo $update_row['InstituteLogo']; ?>" class="form-control"   >
                        </div>
                        
                        <div>
                            <button type="submit" name="education_update_submit" class="btn btn-primary">Submit</button>
                            
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
         <?php } }?>
    <!-- Blog form  -->
     <?php
                if(isset($_REQUEST['blog_id'])){
                $blog_id=$_REQUEST['blog_id'];
                
                $select_item = "SELECT * FROM my_blog where id='$blog_id'";
                $update_sql=mysqli_query($con,$select_item);
                while($update_row=mysqli_fetch_assoc($update_sql)){
                ?>

        <div class="col-sm-8">
            <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4>My Blog</h4>
                    </div>
                </div>
                <div class="panel-body">
                    
                    <form action="controller.php?blog_id=<?php echo $_REQUEST['blog_id']; ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Heading</label>
                            <input type="text" value="<?php echo $update_row['heading']; ?>" name="heading" class="form-control"   >
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect1">Post detail</label>
                            <textarea  type="text" name="Postdetail" class="form-control" ><?php echo $update_row['postdetail']; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect2">Image</label>
                            <input type="file" name="img" class="form-control"   >
                        </div>
                        
                        
                        
                        <div>
                            <button type="submit" name="blog_update_submit" class="btn btn-primary">Submit</button>
                            
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
<?php } }?>
    <!-- Contact update page -->
     <?php
                if(isset($_REQUEST['contact_id'])){
                $contact_id=$_REQUEST['contact_id'];
                
                $select_item = "SELECT * FROM contact where id='$contact_id'";
                $update_sql=mysqli_query($con,$select_item);
                while($update_row=mysqli_fetch_assoc($update_sql)){
                ?>
        <div class="col-sm-8">
            <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4>Address</h4>
                    </div>
                </div>
                <div class="panel-body">
                    
                    <form action="controller.php?con_id=<?php echo $_REQUEST['contact_id']; ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Phone</label>
                            <input type="text" value="<?php echo $update_row['phone']; ?>" name="phone" class="form-control"   >
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Email</label>
                            <input type="text" value="<?php echo $update_row['email']; ?>" class="form-control" name="email"    >
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleSelect1">Address</label>
                            <textarea  type="text" name="address" class="form-control" ><?php echo $update_row['website']; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect2">Web site</label>
                            <input type="text" value="<?php echo $update_row['address']; ?>" name="website" class="form-control"   >
                        </div>
                        
                        <div>
                            <button type="submit" name="contact_update_submit" class="btn btn-primary">Submit</button>
                            
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
<?php } }?>




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