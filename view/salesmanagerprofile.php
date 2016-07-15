<!DOCTYPE html>
<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
    <!-- Mirrored from www.riaxe.com/marketplace/thin-admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Apr 2016 11:18:37 GMT -->
    <head>
        <title>NAIK FEEDS Profile</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="css/thin-admin.css" rel="stylesheet" media="screen">
        <link href="css/font-awesome.css" rel="stylesheet" media="screen">
        <link href="style/style.css" rel="stylesheet">
        <link href="style/dashboard.css" rel="stylesheet">
        <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
              <script src="../../assets/js/html5shiv.js"></script>
              <script src="../../assets/js/respond.min.js"></script>
            <![endif]-->

    </head>
    <body>
        <div class="container">
            <?php 
//                print '<pre>'; print_r($_SESSION['user']); print '</pre>';
                $request_count = 0;
//                foreach( $_SESSION['requestlist'] as $k=>$v){
//                    if($v['status'] == 'Pending'){
//                        ++$request_count;
//                    }
//                }
                require_once 'includes/salesmanagertopbar.php';
            ?>
        </div>
        <div class="wrapper">
            <div class="left-nav">
                <div id="side-nav">
                    <?php require_once 'includes/salesmanagermenu.php'; ?>
                </div>
            </div> 
            <div class="page-content">
                <div class="content container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="widget">
                                <div class="widget-header"> <i class="icon-file-alt"></i>
                                     <h3>My Profile</h3>
                                </div>
                                <div class="widget-content">
                                     
                                    <div class="panel-body">
                                        <form action="salesmanagerprofile" method="post" class="form-horizontal row-border" />
                                        <?php // print '<pre>';print_r($_SESSION); print '</pre>'; ?>
                                        <div class="form-group lable-padd">
                                            <label class="col-sm-3">Full Name:</label>
                                            <div class="col-sm-6">
                                                <p style="text-align: left;"><?= $_SESSION['user']['fullname'] ?></p>
                                            </div>
                                            
                                        </div>
                                        <div class="form-group lable-padd">
                                            <label class="col-sm-3">Username:</label>
                                            <div class="col-sm-6">
                                                <p style="text-align: left;"><?= $_SESSION['user']['username'] ?></p>
                                            </div>
                                            
                                        </div>
                                        <div class="form-group lable-padd">
                                            <label class="col-sm-3">Password:</label>
                                           <div class="col-sm-6">
                                                <p style="text-align: left;"><?= $_SESSION['user']['password'] ?></p>
                                            </div>
                                            
                                        </div>
                                        
                                        <div class="form-group lable-padd">
                                            <label class="col-sm-3">Email</label>
                                            <div class="col-sm-6">
                                                <p style="text-align: left;"><?= $_SESSION['user']['email'] ?></p>
                                            </div>
                                            
                                        </div>
                                        <div class="form-group lable-padd">
                                            <label class="col-sm-3">Phone</label>
                                            <div class="col-sm-6">
                                                <p style="text-align: left;"><?= $_SESSION['user']['phoneno'] ?></p>
                                            </div>
                                            
                                        </div>
                                        <div class="form-group lable-padd">
                                            <label class="col-sm-3">User Type:</label>
                                            <div class="col-sm-6">
                                                <p style="text-align: left;"><?= $_SESSION['user']['usertype'] ?></p>
                                            </div>
                                            
                                        </div>
                                        <div class="form-group lable-padd">
                                            <label class="col-sm-3">Sales Area:</label>
                                            <div class="col-sm-6">
                                                <p style="text-align: left;"><?= $_SESSION['user']['sales_area'] ?></p>
                                            </div>
                                            
                                        </div>
                                        
                                        <div class="form-actions">
                                            <div>
                                                <!--<button id="addUserBtn" class="btn btn-primary" type="submit">Update Profile</button>-->
                                            </div>
                                        </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

<?php require_once 'includes/footer.php'; ?> 

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
        <script src="js/jquery.js"></script> 
        <script type="text/javascript">
            $(document).ready(function () {
                $('#clearBtn').click(function () {
                    $('#fullname').val('');
                    $('#username').val('');
                    $('#password').val('');
                    $('#confirmpassword').val('');
                    $('#phoneno').val('');
                    $('#usertype').val('');
                    $('#email').val('');
                });
            });

        </script>
        <script src="js/bootstrap.min.js"></script> 
        <script type="text/javascript" src="js/smooth-sliding-menu.js"></script> 
        <script class="include" type="text/javascript" src="javascript/jquery191.min.js"></script> 
        <script class="include" type="text/javascript" src="javascript/jquery.jqplot.min.js"></script> 
        <script src="assets/sparkline/jquery.sparkline.js" type="text/javascript"></script>
        <script src="assets/sparkline/jquery.customSelect.min.js" ></script>
        <script src="assets/sparkline/sparkline-chart.js"></script>
        <script src="assets/sparkline/easy-pie-chart.js"></script>
        <script src="js/select-checkbox.js"></script> 
        <script src="js/to-do-admin.js"></script> 

        <!--switcher html start-->
        <!-- <div class="demo_changer active" style="right: 0px;">
          <div class="demo-icon"></div>
          <div class="form_holder">
            <div class="predefined_styles"> <a class="styleswitch" rel="a" href=""><img alt="" src="images/a.jpg"></a> <a class="styleswitch" rel="b" href=""><img alt="" src="images/b.jpg"></a> <a class="styleswitch" rel="c" href=""><img alt="" src="images/c.jpg"></a> <a class="styleswitch" rel="d" href=""><img alt="" src="images/d.jpg"></a> <a class="styleswitch" rel="e" href=""><img alt="" src="images/e.jpg"></a> <a class="styleswitch" rel="f" href=""><img alt="" src="images/f.jpg"></a> <a class="styleswitch" rel="g" href=""><img alt="" src="images/g.jpg"></a> <a class="styleswitch" rel="h" href=""><img alt="" src="images/h.jpg"></a> <a class="styleswitch" rel="i" href=""><img alt="" src="images/i.jpg"></a> <a class="styleswitch" rel="j" href=""><img alt="" src="images/j.jpg"></a> </div>
          </div>
        </div> -->

        <!--switcher html end--> 
        <script src="assets/switcher/switcher.js"></script> 
        <script src="assets/switcher/moderziner.custom.js"></script>
        <link href="assets/switcher/switcher.css" rel="stylesheet">
        <link href="assets/switcher/switcher-defult.css" rel="stylesheet">
        <link rel="alternate stylesheet" type="text/css" href="assets/switcher/a.css" title="a" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="assets/switcher/b.css" title="b" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="assets/switcher/c.css" title="c" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="assets/switcher/d.css" title="d" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="assets/switcher/e.css" title="e" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="assets/switcher/f.css" title="f" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="assets/switcher/g.css" title="g" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="assets/switcher/h.css" title="h" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="assets/switcher/i.css" title="i" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="assets/switcher/j.css" title="j" media="all" />



    </body>

    <!-- Mirrored from www.riaxe.com/marketplace/thin-admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Apr 2016 11:18:37 GMT -->
</html>

