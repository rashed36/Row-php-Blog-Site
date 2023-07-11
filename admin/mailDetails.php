<?php
include_once'admin_header.php';
?>
            <!-- =============================================== -->
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="mailbox">
                                <div class="mailbox-header">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <div class="inbox-avatar"><img src="assets/dist/img/user2-160x160.png" class="img-circle border-green" alt="">
                                                <div class="inbox-avatar-text hidden-xs hidden-sm">
                                                    <div class="avatar-name">Naeem Khan</div>
                                                    <div><small>Mailbox</small></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-8">
                                            <div class="inbox-toolbar btn-toolbar">
                                                <div class="btn-group">
                                                    <a href="mailbox.php" class="btn btn-default"><span class="fa fa-long-arrow-left"></span></a>
                                                </div>
                                                <div class="btn-group">
                                                    <a href="compose.html" class="btn btn-success"><span class="fa fa-pencil-square-o"></span></a>
                                                </div>
                                                <div class="btn-group">
                                                    <a href="" class="btn btn-default"><span class="fa fa-reply"></span></a>
                                                    <a href="" class="hidden-xs hidden-sm btn btn-default"><span class="fa fa-reply-all"></span></a>
                                                    <a href="" class="btn btn-default"><span class="fa fa-share"></span></a>
                                                </div>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-default" onclick="myFunction()"><span class="fa fa-print"></span></button>
                                                </div>
                                                <div class="hidden-xs hidden-sm btn-group">
                                                    <button type="button" class="text-center btn btn-danger"><span class="fa fa-exclamation"></span></button>
                                                    <button type="button" class="btn btn-danger"><span class="fa fa-trash"></span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mailbox-body">
                                    <div class="row m-0">
                                        <div class="col-sm-3 p-0 inbox-nav hidden-xs hidden-sm">
                                            <div class="mailbox-sideber">
                                                <div class="profile-usermenu">
                                                    <h6>Mailbox</h6>
                                                    <ul class="nav">
                                                        <li class="active"><a href="#"><i class="fa fa-inbox"></i>Inbox <small class="label pull-right bg-green">61</small></a></li>
                                                        <li><a href="#"><i class="fa fa-envelope-o"></i>Send Mail</a></li>
                                                        <li><a href="#"><i class="fa fa-star-o"></i>Starred</a></li>
                                                        <li><a href="#"><i class="fa fa-trash-o"></i>Tresh </a></li>
                                                        <li><a href="#"><i class="fa fa-paperclip"></i>Attachments</a></li>
                                                    </ul>
                                                    <h6>Other</h6>
                                                    <ul class="nav">
                                                        <li><a href="#"><i class="fa fa-exclamation"></i>Spam</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i>Draft</a></li>
                                                    </ul>
                                                    <h6>Tags</h6>
                                                    <ul class="nav">
                                                        <li><a href="#"><i class="fa fa-circle color-green"></i>#sometag</a></li>
                                                        <li><a href="#"><i class="fa fa-circle color-red"></i>#anothertag</a></li>
                                                        <li><a href="#"><i class="fa fa-circle color-yellow"></i>#anotheronetag</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-9 p-0 inbox-mail">
                                            <?php
                                                include"comm/connection.php";
                                                 $q="SELECT * FROM contact_us";
                                                 $qury=mysqli_query($con,$q);
                                                 while ($res = mysqli_fetch_array($qury)) {
                                                 ?>
                                            <div class="inbox-avatar p-20 border-btm">
                                                <img src="assets/dist/img/avatar5.png" class="border-green hidden-xs hidden-sm" alt="">
                                                <div class="inbox-avatar-text">
                                                    <div class="avatar-name"><strong>From: </strong>
                                                        <?php echo $res['your_name']; ?> - <em><?php echo $res['email']; ?></em>
                                                    </div>
                                                    <div><small><strong>Subject: </strong> Regd financial projections for the next five years</small></div>
                                                </div>
                                                <div class="inbox-date text-right hidden-xs hidden-sm">
                                                    <div><span class="bg-green badge"><small>OPPORTUNITIES</small></span></div>
                                                    <div><small>Aug 21st, 11:30 PM</small></div>
                                                </div>
                                            </div>
                                            <?php }?>
                                            <div class="inbox-mail-details p-20">
                                                <p><strong>Hi Naeem,</strong></p>
                                                <p><span>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that</span></p>
                                                <p><span>Maecenas sed enim ut sem viverra aliquet. Consectetur adipiscing elit ut aliquam purus sit amet luctus.</span><span>Bibendum est ultricies integer quis :</span></p>
                                                <div>
                                                    <ul>
                                                        <li><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span></li>
                                                        <li><span>Quisque dictum lorem id tempus lacinia.</span></li>
                                                        <li><span>Aenean placerat metus eget dignissim sodales.</span></li>
                                                        <li><span>Vivamus pretium risus vitae nibh maximus bibendum.</span></li>
                                                        <li><span>Curabitur maximus neque eget elit fermentum, at sagittis elit gravida.</span></li>
                                                    </ul>
                                                    <blockquote><small><strong>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</strong></small></blockquote>
                                                </div>
                                                <p><span>Ac tincidunt vitae semper quis lectus nulla at volutpat diam. Pellentesque massa placerat duis ultricies.</span></p>
                                                <div><strong>Regards,</strong></div>
                                                <div><strong>Tanjil Ahmed</strong></div>
                                                <hr>
                                                <h4> <i class="fa fa-paperclip"></i> Attachments <span>(3)</span> </h4>
                                                <div class="row">
                                                    <div class="col-sm-2 col-xs-4">
                                                        <a href="#"><img class="img-thumbnail img-responsive" alt="attachment" src="assets/dist/img/Zipper-icon.jpg"> </a>
                                                    </div>
                                                    <div class="col-sm-2 col-xs-4">
                                                        <a href="#"><img class="img-thumbnail img-responsive" alt="attachment" src="assets/dist/img/Zipper-icon.jpg"> </a>
                                                    </div>
                                                    <div class="col-sm-2 col-xs-4">
                                                        <a href="#"><img class="img-thumbnail img-responsive" alt="attachment" src="assets/dist/img/Zipper-icon.jpg"> </a>
                                                    </div>
                                                </div>
                                                <div class="m-t-20 border-all p-20">
                                                    <p class="p-b-20">click here to <a href="#">Reply</a> or <a href="compose.html">Forward</a></p>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> <!-- /.content -->
            </div> <!-- /.content-wrapper -->
            <footer class="main-footer">
                <div class="pull-right hidden-xs"> <b>Version</b> 1.0</div>
                <strong>Copyright &copy; 2016-2017 <a href="#">bdtask</a>.</strong> All rights reserved. <i class="fa fa-heart color-green"></i>
            </footer>
        </div>
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
        <script>
                                                        "use strict"; // Start of use strict
                                                        function myFunction() {
                                                            window.print();
                                                        }
        </script>
    </body>
</html>