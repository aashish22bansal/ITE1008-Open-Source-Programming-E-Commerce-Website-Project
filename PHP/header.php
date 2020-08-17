<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="header.css">
    </head>
    <body>
        <div class="header">
            <div class="column">
                <img src="wecare.jpg" width="200px" height="67px">
            </div>
            <div class="column">
                <a href="HOME_PAGE.html" target="_blank" class="active">Home Page</a>
                <div class="header-left">
                    <a href="Contact.html" target="_blank">Contact</a>
                    <a href="HOME_PAGE.html" target="_blank">About Us</a>
                    <!-- Load icon library -->
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                </div>
                <div class="header-right">
                    <?php
                        session_start();
                        //include 'admin_login.php';
                        //include 'customer_login.php';
                        if($_SESSION["username"]) {
                    ?>
                    Welcome User. Click here to <a href="logout.php" tite="Logout">Logout.
                    <?php
                        }else echo "<h1>Please login first .</h1>";
                    ?>
                </div>
                <form class="example" action="action_page.php">
                    <input type="text" placeholder="Search..." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
    </body>
</html>