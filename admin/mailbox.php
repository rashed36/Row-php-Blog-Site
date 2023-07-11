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
                                                    <a href="compose.html" class="btn btn-success"><span class="fa fa-pencil-square-o"></span></a>
                                                </div>
                                                <div class="btn-group">
                                                    <a href="" class="btn btn-default"><span class="fa fa-reply"></span></a>
                                                    <a href="" class="hidden-xs hidden-sm btn btn-default"><span class="fa fa-reply-all"></span></a>
                                                    <a href="" class="btn btn-default"><span class="fa fa-share"></span></a>
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
                                            <div class="mailbox-content">
                                                <?php
                                                include"comm/connection.php";
                                                 $q="SELECT * FROM contact_us";
                                                 $qury=mysqli_query($con,$q);
                                                 while ($res = mysqli_fetch_array($qury)) {
                                                 ?>
                                                <a href="mailDetails.php" class="inbox_item unread">
                                                    <div class="inbox-avatar"><img src="assets/dist/img/avatar.png" class="border-green hidden-xs hidden-sm" alt="">

                                                        <div class="inbox-avatar-text">
                                                            <div class="avatar-name"><?php echo $res['your_name']; ?>(3)</div>
                                                            <div><small><span class="bg-green badge avatar-text">SOME LABEL</span><span><strong>Early access: </strong><span> <?php echo $res['Message']; ?></span></span></small></div>
                                                        </div>

                                                        <div class="inbox-date hidden-sm hidden-xs hidden-md">
                                                            <div class="date">Jan 17th</div>
                                                            <div><small>#1</small></div>
                                                        </div>
                                                    </div>
                                                </a>
                                            <?php }?>
                                                <a href="mailDetails.php" class="inbox_item">
                                                    <div class="inbox-avatar"><img src="assets/dist/img/avatar2.png" class="border-red hidden-xs hidden-sm" alt="">
                                                        <div class="inbox-avatar-text">
                                                            <div class="avatar-name">Tuhin Sarker</div>
                                                            <div><small><span class="bg-red badge avatar-text">SOME LABEL</span><span><strong>Early access: </strong><span>It is a long established fact that a reader will be distracted by the </span></span></small></div>
                                                        </div>
                                                        <div class="inbox-date hidden-sm hidden-xs hidden-md">
                                                            <div class="date">Jan 17th</div>
                                                            <div><small>#2</small></div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="mailDetails.php" class="inbox_item unread">
                                                    <div class="inbox-avatar"><img src="assets/dist/img/avatar3.png" class="border-violet hidden-xs hidden-sm" alt="">
                                                        <div class="inbox-avatar-text">
                                                            <div class="avatar-name">Tanjil Ahmed (6)</div>
                                                            <div><small><span class="bg-violet badge avatar-text">SOME LABEL</span><span><strong>Early access: </strong><span>Contrary to popular belief, Lorem Ipsum is not simply random text.</span></span></small></div>
                                                        </div>
                                                        <div class="inbox-date hidden-sm hidden-xs hidden-md">
                                                            <div class="date">Jan 17th</div>
                                                            <div><small>#3</small></div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="mailDetails.php" class="inbox_item unread">
                                                    <div class="inbox-avatar"><img src="assets/dist/img/avatar4.png" class="border-gray hidden-xs hidden-sm" alt="">
                                                        <div class="inbox-avatar-text">
                                                            <div class="avatar-name">Jahangir Alam (2)</div>
                                                            <div><small><span class="bg-gray badge avatar-text">SOME LABEL</span><span><strong>Early access: </strong><span>There are many variations of passages of Lorem Ipsum available, </span></span></small></div>
                                                        </div>
                                                        <div class="inbox-date hidden-sm hidden-xs hidden-md">
                                                            <div class="date">Jan 17th</div>
                                                            <div><small>#4</small></div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="mailDetails.php" class="inbox_item">
                                                    <div class="inbox-avatar"><img src="assets/dist/img/avatar5.png" class="border-yellow hidden-xs hidden-sm" alt="">
                                                        <div class="inbox-avatar-text">
                                                            <div class="avatar-name">Mozammel Hoque</div>
                                                            <div><small><span class="bg-yellow badge avatar-text">SOME LABEL</span><span><strong>Early access: </strong><span>Lorem Ipsum has been the industry's standard dummy text .</span></span></small></div>
                                                        </div>
                                                        <div class="inbox-date hidden-sm hidden-xs hidden-md">
                                                            <div class="date">Jan 17th</div>
                                                            <div><small>#5</small></div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="mailDetails.php" class="inbox_item">
                                                    <div class="inbox-avatar"><img src="assets/dist/img/avatar.png" class="border-green hidden-xs hidden-sm" alt="">
                                                        <div class="inbox-avatar-text">
                                                            <div class="avatar-name">Slaah Uddin</div>
                                                            <div><small><span class="bg-green badge avatar-text">SOME LABEL</span><span><strong>Early access: </strong><span>The point of using Lorem Ipsum is that it has ....</span></span></small></div>
                                                        </div>
                                                        <div class="inbox-date hidden-sm hidden-xs hidden-md">
                                                            <div class="date">Jan 17th</div>
                                                            <div><small>#6</small></div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="mailDetails.php" class="inbox_item">
                                                    <div class="inbox-avatar"><img src="assets/dist/img/avatar2.png" class="border-red hidden-xs hidden-sm" alt="">
                                                        <div class="inbox-avatar-text">
                                                            <div class="avatar-name">Tahmina Akther</div>
                                                            <div><small><span class="bg-red badge avatar-text">SOME LABEL</span><span><strong>Early access: </strong><span>Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia,</span></span></small></div>
                                                        </div>
                                                        <div class="inbox-date hidden-sm hidden-xs hidden-md">
                                                            <div class="date">Jan 17th</div>
                                                            <div><small>#7</small></div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="mailDetails.php" class="inbox_item">
                                                    <div class="inbox-avatar"><img src="assets/dist/img/avatar3.png" class="border-violet hidden-xs hidden-sm" alt="">
                                                        <div class="inbox-avatar-text">
                                                            <div class="avatar-name">Jordyn Ouellet</div>
                                                            <div><small><span class="bg-violet badge avatar-text">SOME LABEL</span><span><strong>Early access: </strong><span>Quam nulla porttitor massa id neque aliquam vestibulum morbi blandit.</span></span></small></div>
                                                        </div>
                                                        <div class="inbox-date hidden-sm hidden-xs hidden-md">
                                                            <div class="date">Jan 17th</div>
                                                            <div><small>#8</small></div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="mailDetails.php" class="inbox_item">
                                                    <div class="inbox-avatar"><img src="assets/dist/img/avatar4.png" class="border-gray hidden-xs hidden-sm" alt="">
                                                        <div class="inbox-avatar-text">
                                                            <div class="avatar-name">Facebook</div>
                                                            <div><small><span class="bg-gray badge avatar-text">SOME LABEL</span><span>Quam nulla porttitor massa id neque aliquam vestibulum morbi blandit.</span></small></div>
                                                        </div>
                                                        <div class="inbox-date hidden-sm hidden-xs hidden-md">
                                                            <div class="date">Jan 17th</div>
                                                            <div><small>#9</small></div>
                                                        </div>
                                                    </div>
                                                </a>
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
        </div> <!-- ./wrapper -->
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