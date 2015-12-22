<nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
                <ul class="nav sidebar-nav">
                    <li class="sidebar-brand">
                        <a href="#">
                            <img src="http://pocketdrugs.com/images/logo1.png" class="img-responsive" alt=""/>
                        </a>
                    </li>
                    <?php if (isset($_SESSION['admin'])) { ?>

                        <li>
                            <a href="#"><i class="fa fa-home"></i>Medical Store</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-shopping-cart"></i> Order</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-briefcase"></i>  Product</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-medkit"></i> Medicine</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-credit-card"></i> Plan</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap"></i>Catagories</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-user"></i>Customers</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-picture-o "></i>Image Manager</a>
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

                    <?php }// elseif (isset($_SESSION['PE'])) { ?>
                        <li>
                            <a href="RX_list.php">RX List</a>
                        </li>
                        <li>
                            <a href="digi_rx.php">Digitalizer Process</a>
                        </li>

                    <?php //}// elseif (isset($_SESSION['MS'])) { ?>
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
                    <?php// } ?>


                </ul>
            </nav>