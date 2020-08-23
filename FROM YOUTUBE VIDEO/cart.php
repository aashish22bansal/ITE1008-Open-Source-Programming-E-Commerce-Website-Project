<!DOCTYPE html>
<html>
    <head>
        <title>WeCare Ecomm Store</title>
        <link rel="stylesheet" type="text/css" href="styles/style.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <!--font-awesome link-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    </head>
    <body>
        <div id="top"><!--Starting the top bar-->
            <div class="container"><!--Starting of the container-->
                <div class="col-md-6 offer"><!--col-md-6 offer-->
                    <a href="#" class="btn btn-success btn-sm">
                        Welcome Guest
                    </a>
                    <a href="#">Shopping Cart Total Price: INR 100, Total Items: 2</a>
                </div><!--col-md-6 offer-->
                <div class="col-md-6">
                    <ul class="menu">
                        <li>
                            <a href="customer_registration.php">Register</a>
                        </li>
                        <li>
                            <a href="checkout.php">My Account</a>
                        </li>
                        <li>
                            <a href="cart.php">Go to Cart</a>
                        </li>
                        <li>
                            <a href="login.php">Login</a>
                        </li>
                    </ul>
                </div>
            </div><!--Starting of the container-->
        </div><!--Ending the top bar-->

        <div class="navbar navbar-default" id="navbar"><!--Starting the Header = navbar navbar-default-->
            <div class="container"><!--container STARTS-->
                <div class="navbar-header"><!--navbar-header STARTS-->
                    <a class="navbar-brand home" href="HOME_PAGE.php">
                        <img src="images/wecare.jpg" alt="WeCare Ecomm Store" width="180px" height="59px" class="hidden-xs"><!--will be used for all the screens of normal size-->
                        <img src="images/wecare_small.jpg" alt="WeCare Ecomm Store" width="90px" height="29px" class="visible-xs"><!--will be used only when the screen size is small-->
                    </a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle Navigation</span>
                        <i class="fa fa-align-justify"></i><!--font awesome icon-->
                    </button>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                        <span class="sr-only"></span>
                        <i class="fa fa-search"></i><!--font awesome icon-->
                    </button>
                </div><!-- navbar-header ENDS-->

                <div class="navbar-collapse collapse" id="navigation"><!--Collapsable Menu Start-->
                    <div class="padding-nav"><!--padding-nav starts-->
                        <ul class="nav navbar-nav navbar-left"><!--nav navbar-nav navbar-left STARTS-->
                            <li>
                                <a href="HOME_PAGE.php">Home</a>
                            </li>
                            <li>
                                <a href="shop.php">Shop</a>
                            </li>
                            <li>
                                <a href="checkout.php">My Account</a>
                            </li>
                            <li class="active">
                                <a href="cart.php">Shopping Cart</a>
                            </li>
                            <li>
                                <a href="about.php">About Us</a>
                            </li>
                            <li>
                                <a href="services.php">Services</a>
                            </li>
                            <li>
                                <a href="contactus.php">Contact Us</a>
                            </li>
                        </ul><!--nav navbar-nav navbar-left ENDS-->
                    </div><!--padding-nav ends-->
                    <a href="cart.php" class="btn btn-primary navbar-btn right">
                        <i class="fa fa-shopping-cart"></i>
                        <span>Items in Cart</span>
                    </a>
                    <div class="navbar-collapse collapse-right"><!--navbar-collapse collapse-right STARTS-->
                        <button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">
                            <span class="sr-only">Toggle Search</span>
                            <i class="fa fa-search"></i>
                        </button>
                    </div><!--navbar-collapse collapse-right ENDS-->
                    <div class="collapse clearfix" id="search"><!--collapse clearfix STARTS-->
                        <form class="navbar-form" method="get" action="result.php">
                            <div class="input-group">
                                <input type="text" name="user_query" placeholder="Search..." class="form-control" required="">
                                <span class="input-group-btn">
                                    <button type="Submit" value="Search" name="search" class="btn btn-primary">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>
                    </div><!--collapse clearfix ENDS-->
                </div><!--Collapsable Menu end-->
            </div><!--container ENDS-->
            <div id="content">
                <div class="container"><!--container STARTS-->
                    <div class="col-md-12"><!--col-md-12-->
                        <ul class="breadcrumb">
                            <li><a href="HOME_PAGE.php">Home</a></li>
                            <li>
                                Cart
                            </li>
                        </ul>
                    </div><!--col-md-12 ENDS-->
                    <div class="col-md-9" id="cart"><!--col-md-12 STARTS-->
                        <div class="box">
                            <form action="cart.php" method="post" enctype="multipart-form-data">
                                <h1>Shopping Cart</h1>
                                <p class="text-muted">Currently you have 3 item(s) in your cart</p>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thread>
                                            <tr>
                                                <th colspan="2">Product</th>
                                                <th>Quantity</th>
                                                <th>Unit Price</th>
                                                <th>Size</th>
                                                <th colspan="1">Delete</th>
                                                <th colspan="1">Sub Total</th>
                                            </tr>
                                        </thread>
                                        <tbody>
                                            <tr>
                                                <td><img src="admin_area/product_images/product.jpg"></td>
                                                <td>Mardaz Pack of 5 - Multicolor Cotton V-Neck T-shirts for Men</td>
                                                <td>2</td>
                                                <td>INR 200</td>
                                                <td>Large</td>
                                                <td><input type="checkbox" name="remove[]"></td>
                                                <td>INR 400</td>
                                            </tr>
                                            <tr>
                                                <td><img src="admin_area/product_images/product.jpg"></td>
                                                <td>Mardaz Pack of 5 - Multicolor Cotton V-Neck T-shirts for Men</td>
                                                <td>2</td>
                                                <td>INR 200</td>
                                                <td>Large</td>
                                                <td><input type="checkbox" name="remove[]"></td>
                                                <td>INR 400</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th colspan="5">Total</th>
                                                <th colspan="2">INR 400</th>
                                            </tr>
                                        </tfoot>
                                    </table><!--table ENDS-->
                                </div><!--table-responsive-->
                                <div class="box"><!--box STARTS-->
                                    <div class="pull-left"><!--pull-left ENDS-->
                                        <a href="index.php" class="btn btn-default">
                                            <i class="fa fa-chevron-left"></i> Continue Shopping
                                        </a>
                                    </div><!-- pull-left ENDS-->
                                    <div class="pull-right"><!--pull-right ENDS-->
                                        <button class="btn btn-default" type="submit" name="update" value="Update Cart">
                                            <i class="fa fa-refresh"> Update Cart</i>
                                        </button>
                                    </div><!-- pull-right ENDS-->
                                </div><!--box ENDS -->
                            </form>
                        </div><!-- box ENDS-->
                    </div><!--col-md-12 ENDS-->
                </div><!--Contained End-->
            </div><!--Content End-->
        </div><!--navbar navbar-default ENDS-->
        <!--footer start-->
        <?php include("includes/footer.php") ?>
        <!--footer end-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </body>
</html>