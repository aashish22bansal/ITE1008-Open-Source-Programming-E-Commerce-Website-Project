<?php
include("includes/db.php");
?>
<!DOCTYPE html>
<head>
<title>Insert Product</title>
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
<div class="row"><!--breadcrumb row start-->
    <div class="col-1g-12">
        <div class="breadcrumb">
            <li class="active">
                <i class="fa-fa-dashboard"></i>
                Dashboard/Insert Product
            </li>
        </div>
    </div>
</div><!--breadcrumb row end-->
<div class="row">
    <div class="col-1g-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa a-money fa-w"></i>Insert Product
                </h3>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
                    <div class="form-group">
                    <label class="col-md-3 control label">Product title</label>
                    <input type="text" name="product_title" class="form-control">
                    </div>

                    <div class="form-group">
                    <label class="col-md-3 control label">Product Category</label>
                    <select name="product_cat" class="form-control">
                    <option>Select a product category</option>
                    <?php
                    $get_p_cats="select * from product_category";
                    $run_p_cats=mysqli_query($con,$get_p_cats);
                    while($row=mysqli_fetch_array($run_p_cats))
                    {
                        $id=$row['p_cat_id'];
                        $cat_title=$row['p_cat-title'];
                        echo "<option value='$id'>$cat_title</option>";
                    }
                    ?>
                    </div>

                    <div class="form-group">
                    <label class="col-md-3 control label">Product title</label>
                    <input type="text" name="product_title" class="form-control">
                    </div>

                    <div class="form-group">
                    <label class="col-md-3 control label">Product Category</label>
                    <input type="text" name="product_title" class="form-control">
                    </div>

                    <div class="form-group">
                    <label class="col-md-3 control label">Product title</label>
                    <input type="text" name="product_title" class="form-control">
                    </div>

                    <div class="form-group">
                    <label class="col-md-3 control label">Product title</label>
                    <input type="text" name="product_title" class="form-control">
                    </div>

                    <div class="form-group">
                    <label class="col-md-3 control label">Product title</label>
                    <input type="text" name="product_title" class="form-control">
                    </div>

                    <div class="form-group">
                    <label class="col-md-3 control label">Product title</label>
                    <input type="text" name="product_title" class="form-control">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
