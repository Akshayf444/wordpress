<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>Drug Store</title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="http://pocketdrugs.com/css/bootstrap.min.css" rel="stylesheet">
        <link href="http://pocketdrugs.com/font-awesome-4.1.0/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="http://pocketdrugs.com/css/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <!--[if lt IE 9]>
                <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link href="http://pocketdrugs.com/css/styles.css" rel="stylesheet">
        <script type='text/javascript' src="http://pocketdrugs.com/js/jquery.js"></script>
        <script type='text/javascript' src="http://pocketdrugs.com/js/jquery-ui.js"></script>
        <script src="http://pocketdrugs.com/js/loadImages.js" type="text/javascript"></script>
        <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <div id="wrapper" class="toggled">           

            <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
                <ul class="nav sidebar-nav">
                    <li class="sidebar-brand">
                        <a href="#">
                            <img src="http://pocketdrugs.com/images/logo1.png" class="img-responsive" alt=""/>
                        </a>
                    </li>
                    <?php if (isset($_SESSION['admin'])) { ?>

                        <li>
                            <a href="medical_stores.php"><i class="fa fa-home"></i>Medical Store</a>
                        </li>
                        <li>
                            <a href="Order.php"><i class="fa fa-shopping-cart"></i> Order</a>
                        </li>
                        <li>
                            <a href="Addproduct.php"><i class="fa fa-briefcase"></i>  Product</a>
                        </li>
                        <li>
                            <a href="medicine.php"><i class="fa fa-medkit"></i> Medicine</a>
                        </li>
                        <li>
                            <a href="plan.php"><i class="fa fa-credit-card"></i> Plan</a>
                        </li>
                        <li>
                            <a href="add_catagories.php"><i class="fa fa-sitemap"></i>Catagories</a>
                        </li>
                        <li>
                            <a href="Customer_list.php"><i class="fa fa-user"></i>Customers</a>
                        </li>
                        <li>
                            <a href="image.php"><i class="fa fa-picture-o "></i>Image Manager</a>
                        </li>

                        <!--                        <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Works <span class="caret"></span></a>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li class="dropdown-header">Dropdown heading</li>
                                                        <li><a href="#">Action</a></li>
                                                        <li><a href="#">Another action</a></li>
                                                        <li><a href="#">Something else here</a></li>
                                                        <li><a href="#">Separated link</a></li>
                                                        <li><a href="#">One more separated link</a></li>
                                                    </ul>
                                                </li>-->

                    <?php } elseif (isset($_SESSION['PE'])) { ?>
                        <li>
                            <a href="RX_list.php">RX List</a>
                        </li>
                        <li>
                            <a href="digi_rx.php">Digitalizer Process</a>
                        </li>

                    <?php } elseif (isset($_SESSION['MS'])) { ?>
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="Customers.php"><i class="fa fa-user"></i>Customer</a>
                        </li>
                        <li>
                            <a href="Order.php"><i class="fa fa-shopping-cart"></i>Order</a>
                        </li>
<!--                        <li>
                            <a href="OTCOrder.php"><i class="fa fa-shopping-cart"></i>OTC Order</a>
                        </li>-->
                        <li>
                            <a href="dispatch.php"><i class="fa fa-truck"></i>Dispatch</a>
                        </li>
                        <li>
                            <a href="delivered.php"><i class="fa fa-truck"></i>Delivery</a>
                        </li>
                        <li>
                            <a href="coupan.php"><i class="fa fa-credit-card"></i>Coupons</a>
                        </li>
                        <li>
                            <a href="sms.php"><i class="fa fa-envelope"></i>SMS</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-file"></i>Report</a>
                        </li>
                        <li>
                            <a href="notification.php"><i class="fa fa-bell"></i>Notification</a>
                        </li>
                        <li>
                            <a href="profile.php"><i class="fa fa-user"></i>Profile</a>
                        </li>
                        <li>
                            <a href="editmedical.php"><i class="fa fa-wrench"></i>Setting</a>
                        </li>
                        <li>
                            <a href="products.php"><i class="fa fa-book"></i>Catalogue</a>
                        </li>
                    <?php } ?>


                </ul>
            </nav>
            <div class="pull-right nav-right-top " id="logout">  
                <?php if (isset($_SESSION['admin'])) { ?>
                    <a  href="logout.php"><i class="fa fa-fw fa-power-off"></i> Logout</a>

                <?php } elseif (isset($_SESSION['PE'])) { ?>

                    <a  href="./logout.php"><div class="pull-right nav-right-top">Medical Name <img src="../medicalstore/image/14374572971.jpg" alt="" class="img-responsive" style="height: 20px" /></div></a>

                <?php } elseif (isset($_SESSION['MS'])) { ?>

                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" data-toggle="dropdown" style="    background-color: transparent;">
                            <img src="../images/singout.png" alt="" class="img-responsive pull-right img-circle pull-left"  style="margin-top: -6px;" />
                            <?php echo isset($_SESSION['medical_name']) ? $_SESSION['medical_name'] : ''; ?>
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" style="">
                            <li><a href="logout.php">Logout</a></li>

                        </ul>
                    </div>

    <!--                    <img src="../images/singout.png" alt="" class="img-responsive pull-right img-circle pull-left"  style="margin-top: -6px;" />
                        <span class="hidden-xs" ><?php echo isset($_SESSION['medical_name']) ? $_SESSION['medical_name'] : ''; ?></span>-->

                    <a href="logout.php">
                    </a>


            <!--                    <a  href="./logout.php"><img src="../medicalstore/image/14374572971.jpg" alt="" class="img-responsive pull-right img-circle pull-left" style="" />&nbsp;<span class="medical-name">Medical Name</span></a>-->

                <?php } ?>
            </div>
            <?php if (isset($_SESSION['MS'])) { ?>
                <form action="unexit.php" method="POST">
                    <input type="text" name="search" required class=" form-control pull-left"  style=" margin-left: 30%; margin-top: 10px;width:20%" placeholder="Enter Mobile Number ">
                </form>
            <?php } ?>
            <div class="overlay"></div>
            <div id="page-content-wrapper">
<!--                <img src="../images/logo1.png" class="img-responsive pull-left" alt=""/>-->
                <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                    <span class="hamb-top"></span>
                    <span class="hamb-middle"></span>
                    <span class="hamb-bottom"></span>
                </button>


                <div id="main-wrapper" class="container-fluid">
