<?php
    if (!isset($_SESSION['admin_email'])) {
        echo "<script>window.open('login.php','_self')</script>";
    }else{

?>
<br>
<div class="row"><!--1st Row Start-->
    <div class="col-lg-12">
        <h1 class="page-header">Dashboard</h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> Dashboard
            </li>
        </ol>
    </div>
</div><!--1st Row End-->


<div class="row"><!--2nd Row Start-->
    <div class="col-lg-3 col-md-6"><!--col-lg-3 col-md-6 starts-->
        <div class="panel panel-primary"><!--panel panel-primary starts-->
            <div class="panel-heading"><!--panel-heading starts-->
	            <div class="row"><!--panel heading row starts-->
                    <div class="col-xs-3"><!--col-xs-3 starts-->
                        <i class="fa fa-tasks fa-5x"> </i>
                    </div><!-- col-xs-3 Ends -->
                    <div class="col-xs-9 text-right"><!--col-xs-9 text-right starts-->
                        <div class="huge"> <?php echo $count_pro ?> </div>
                        <div>Products</div>
                    </div><!--col-xs-9 text-right Ends-->
                </div><!--panel heading row Ends-->
            </div><!--panel heading Ends-->
            <a href="index.php?view_product">
                <div class="panel-footer"><!-- Panel-footer starts-->
                    <span class="pull-left"> View Details </span>
                    <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
                    <div class="clearfix"></div>
                </div><!-- Panel-footer Ends-->
            </a>
        </div><!--panel panel-primary Ends-->
    </div><!--col-lg-3 col-md-6 Ends-->
    <div class="col-lg-3 col-md-6"><!--col-lg-3 col-md-6 Starts-->
        <div class="panel panel-green"><!--panel panel-green starts-->
            <div class="panel-heading"><!--panel-heading Starts-->
                <div class="row"><!--panel-heading row starts-->
                    <div class="col-xs-3"><!--col-xs-3 Starts-->
                        <i class="fa fa-comments fa-5x"> </i>
                    </div><!--col-xs-3 Ends-->
                    <div class="col-xs-9 text-right"><!--col-xs-9 text-right starts-->
	                    <div class="huge"><?php echo $count_cust ?></div>
                            <div>Customers</div>
                        </div><!--col-xs-9 text-right Ends-->
                    </div><!--panel-heading row Ends-->
                </div><!--panel-heading Ends-->
                <a href="index.php?view_customer">
                    <div class="panel-footer"><!--panel-footer Starts-->
                        <span class="pull-left"> View Details</span>
                        <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
                        <div class="clearfix"></div>
                    </div><!--panel-footer Endss-->
                </a>
            </div><!--panel panel-green Ends-->
        </div><!--col-lg-3 col-md-6 Ends-->
        <div class="col-lg-3 col-md-6"><!--col-lg-3 col-md-6 Starts-->
            <div class="panel panel-yellow"><!--panel panel-yellow starts-->
                <div class="panel-heading"><!--panel-heading Starts-->
	                <div class="row"><!--panel-heading row starts-->
	                    <div class="col-xs-3"><!--col-xs-3 Starts-->
	                        <i class="fa fa-shopping-cart fa-5x"> </i>
                        </div><!--col-xs-3 Ends-->
                        <div class="col-xs-9 text-right"><!--col-xs-9 text-right starts-->
	                        <div class="huge"><?php echo $count_p_cat ?></div>
                                <div>Product Categories</div>
                            </div><!--col-xs-9 text-right Ends-->
                        </div><!--panel-heading row Ends-->
                    </div><!--panel-heading Ends-->
                    <a href="index.php?view_product_cat">
                        <div class="panel-footer"><!--panel-footer Starts-->
                            <span class="pull-left"> View Details</span>
                            <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
                            <div class="clearfix"></div>
                        </div><!--panel-footer Endss-->
                    </a>
                </div><!--panel panel-yellow Ends-->
            </div><!--col-lg-3 col-md-6 Ends-->
            <div class="col-lg-3 col-md-6"><!--col-lg-3 col-md-6 Starts-->
                <div class="panel panel-red"><!--panel panel-green starts-->
                    <div class="panel-heading"><!--panel-heading Starts-->
	                    <div class="row"><!--panel-heading row starts-->
	                        <div class="col-xs-3"><!--col-xs-3 Starts-->
	                            <i class="fa fa-support fa-5x"> </i>
                            </div><!--col-xs-3 Ends-->
                            <div class="col-xs-9 text-right"><!--col-xs-9 text-right starts-->
	                            <div class="huge"><?php echo $count_order ?></div>
                                <div>Orders</div>
                            </div><!--col-xs-9 text-right Ends-->
                        </div><!--panel-heading row Ends-->
                    </div><!--panel-heading Ends-->
                    <a href="index.php?view_order">
                        <div class="panel-footer"><!--panel-footer Starts-->
                            <span class="pull-left"> View Details</span>
                            <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
                            <div class="clearfix"></div>
                        </div><!--panel-footer Endss-->
                    </a>
                </div><!--panel panel-green Ends-->
            </div><!--col-lg-3 col-md-6 Ends-->
        </div><!--2 row Ends-->
        <!--NEXT PART STARTING-->
        <div class="row"><!--3 Row Starts-->
            <div class="col-lg-8"><!--col-lg-8-->
                <div class="panel panel-primary"><!--panel panel-primary Starts-->
                    <div class="panel heading"><!--panel heading Starts-->
                        <h3 class="panel-title"><!--panel-title Starts-->
                            <i class="fa fa-money fa-fw"></i> New Orders
                        </h3><!--panel-title Ends-->
                    </div><!--panel heading Ends-->
                    <div class="panel-body"><!--panel body starts-->
                        <div class="table-responsive"><!--table-responsive--Starts-->
                            <table class="table table-bordered table-hover table-striped"><!--table table-bordered table-hover table-striped Starts-->
                                <thead><!--thead starts-->
                                    <tr>
                                        <th>Order No</th>
                                        <th>Customer Email</th>
                                        <th>Invoice No</th>  
                                        <th>Product ID</th> 
                                        <th>Total</th>
                                        <th>Size</th>
                                        <th>Status</th>
                                    </tr>
                                </thead><!--thead ends-->
                                <tbody><!--tbody Starts-->
                                    <?php
                                        $i=0;
                                        $get_order = "select * from customer_order order by 1 DESC LIMIT 0,5";
                                        $run_order = mysqli_query($con,$get_order);
                                        while($row_order = mysqli_fetch_array($run_order)){
                                            $order_id = $row_order['order_id'];
                                            $customer_id = $row_order['customer_id'];
                                            $product_id = $row_order['product_id'];
                                            $invoice_no = $row_order['invoice_no'];
                                            $qty = $row_order['qty'];
                                            $size = $row_order['size'];
                                            $status = $row_order['order_status'];
                                            $i++;
                                    ?>
                                    <tr>
                                        <td><?php echo $i ?></td>
                                        <td>
                                            <?php 
                                                $get_customer = "select * from customers where customer_id='$customer_id'";
                                                $run_customer = mysqli_query($con,$get_customer);
                                                $row_customer = mysqli_fetch_array($run_customer);
                                                $customer_email = $row_customer['customer_email'];
                                                echo $customer_email;   
                                            ?>                                       
                                        </td>
                                        <td><?php echo $invoice_no ?></td>
                                        <td><?php echo $product_id ?></td>
                                        <td><?php echo $qty ?></td>
                                        <td><?php echo $size ?></td>
                                        <td><?php echo $status ?></td>
                                    </tr>
                                    <?php }
                                    ?>
                                </tbody><!--tbody Ends-->
                            </table><!--table table-bordered table-hover table-striped Ends-->
                        </div><!-- table-responsive Ends-->
                        <div class="text-right"><!--text-right Starts-->
                            <a href="index.php?view_order">
                                View All Orders<i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div><!--text-right Ends-->
                    </div><!--panel body ends-->
                </div><!--panel panel-primary Ends-->
            </div><!--col-lg-8 Ends-->
            <div class="col-md-4"><!-- col-md-4 Starts-->
                <div class="panel"><!--panel Starts-->
                    <div class="panel-body"><!--panel-body starts-->
                        <div class="thumb-info mb-md"><!--thumb-info mb-md starts-->
                            <img src="admin_images/<?php echo $admin_image ?>" class="rounded img-responsive">
                            <div class="thumb-info-title"><!--thumb-info-title starts-->
                                <span class="thumb-info-inner"><b><?php echo $admin_name ?></b></span><br>
                                <span class="thumb-info-type"><i><?php echo $admin_job ?></i></span><br>
                            </div><!--thumb-info-title Ends-->
                        </div><!--thumb-info mb-md ends-->
                        <div class="mb-md"><!--mb-md Starts-->
                            <div class="widget-content-expanded"><!--widget-content-expanded starts--><br>
                                <i class="fa fa-user"></i><span><b> ID: </b></span><?php echo $admin_id ?><br>
                                <i class="fa fa-user"></i><span><b> Email: </b></span><?php echo $admin_email ?><br>
                                <i class="fa fa-user"></i><span><b> Country: </b></span><?php echo $admin_country ?><br>
                                <i class="fa fa-user"></i><span><b> Contact: </b></span><?php echo $admin_contact ?><br>
                            </div><!--widget-content-expanded Ends-->
                            <hr class="dotted short">
                            <h5 class="text-muted">About</h5>
                            <p>
                                <?php echo $admin_about ?>
                            </p>
                        </div><!--mb-md Ends-->
                    </div><!--panel-body Ends-->
                </div><!--panel Ends-->
            </div><!--col-md-4 Ends-->
        </div><!--3 Row Ends-->
    </div>
<?php } 
?>