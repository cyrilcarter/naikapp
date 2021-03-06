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
        <title>NAIK FEEDS Add Expense</title>
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
                $request_count = 0;
                foreach( $_SESSION['requestlist'] as $k=>$v){
                    if($v['status'] == 'Pending'){
                        ++$request_count;
                    }
                }
                require_once 'includes/receptionisttopbar.php';
            ?>
        </div>
        <div class="wrapper">
            <div class="left-nav">
                <div id="side-nav">
                    <?php require_once 'includes/receptionistmenu.php'; ?>
                </div>
            </div>
            <div class="page-content">
                <div class="content container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="widget">
                                <div class="widget-header"> <i class="icon-file-alt"></i>
                                    <h3>ADD EXPENSE</h3>
                                </div>
                                <div class="widget-content" >
                                    
                                    <div class="panel-body" >
                                        <center><img src="img/expense.png" width="250px" height="250px" align="top|left"/><h2>Add an Expense</h2></center>
                                        <form action="addexpense" method="post" class="form-horizontal row-border" />

                                        <div class="form-group lable-padd">
                                            <label class="col-sm-3">Description:</label>
                                            <div class="col-sm-6">
                                                <select class="form-control" name="description">
                                                    <option>Big Generator Maintenance</option>
                                                    <option>Mercedes Maintenance</option>
                                                    <option>BUS JJN Renewal Paper</option>
                                                    <option>Mercedes Maintenance</option>
                                                    <option>Fork Lift Maintenance</option>
                                                    <option>BUS BUU Fuel</option>
                                                    <option>BUS BUU Maintenance</option>
                                                    <option>Mgr. Phone cards</option>
                                                    <option>First Aid</option>
                                                    <option>Stationaries</option>
                                                    <option>Machine Maintenance</option>
                                                    <option>External Labor</option>
                                                    <option>Staff Canteen</option>
                                                    <option>Sewing Machine Maintainance</option>
                                                    <option>Data Subscription (modem)</option>
                                                    <option>fan belt ( 6) p.s</option>
                                                    <option>Scel maintainace</option>
                                                    <option>Mr Chidi airtime</option>
                                                    <option>Mr Chidi transport</option>
                                                    <option>Package to Abuja </option>
                                                    <option>Package to Kano</option>
                                                    <option>Data Subscription for Agwom</option>
                                                </select>
                                            </div>
                                            
                                        </div>
                                        <div class="form-group lable-padd">
                                            <label class="col-sm-3">Amount:</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" placeholder="" name="amount" id="amount" required/>
                                            </div>
                                            <div class="col-sm-3 left-align">
                                                <p class="help-block">60,000</p>
                                            </div>
                                        </div>
                                        <div class="form-group lable-padd">
                                            <label class="col-sm-3">Date:</label>
                                            <div class="col-sm-6">
                                                <input type="date" class="form-control" placeholder="" name="date" id="amount" required/>
                                            </div>
                                            <div class="col-sm-3 left-align">
                                                <p class="help-block">22/06/2016</p>
                                            </div>
                                        </div>
                                        
                                        <div class="form-actions">
                                            <div>
                                                <button id="addUserBtn" class="btn btn-primary" type="submit">Save</button>
                                                <button id="clearBtn" class="btn btn-default" type="button">Clear</button>
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

        <div class="bottom-nav footer"> 2016 &copy; Powered By Sleek Konsult. </div>


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

