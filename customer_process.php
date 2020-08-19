<!DOCTYPE html>

<!--?php
    $connection = new mysqli('localhost' , 'root', '123Aashish456') or die ("failed to query database".mysql_error($connection));
    $username = $_POST['username'];
    $password = $_POST['password'];
    $username_ = stripcslashes($username);
    $password_ = stripcslashes($password);
    //$username_ = mysql_real_escape_string($username__);
    //$password_ = mysql_real_escape_string($password__);
    
    $selecting_db = mysqli_select_db($connection,'admin_');
    $result=mysqli_query($connection,"select * from users where username ='$username_' and password ='$password_' ");
    $row=mysqli_fetch_array($result, MYSQLI_ASSOC);
    if($row['username']== $username_  && $row['password'] ==$password_ )
    {
        echo "<a href='http://localhost/Open-Source-Programming-E-Commerce-Project/cart.php'>CLICK HERE TO ENTER</a>";
    }
    else
    {
        echo "The Details that you've entered is incorrect. Please check the details and try again.";
    }
?-->
<html>
    <head>
        <title>Admin Logged in</title>
        <link rel="stylesheet" type="text/css" href="admin_process.php">
    </head>
    <body>
        <div>
            <h1>Welcome</h1>
        </div>
        <?php
            session_start();// STARTING THE SESSION
            //echo("Hi");
            $connection = new mysqli('localhost','root','123Aashish456'); // NEED TO ENTER YOUR OWN DETAILS
            // CHECKING IF IT IS CONNECTED
            if($connection)
            {
                echo("<h2>Connected Successfully!</h2>");
            }
            else{
                echo("<h2>NOT CONEECTED</h2>");
            }

            //CONNECTING TO A DATABASE NOW
            mysqli_select_db($connection,'customer');
            $name = strip_tags($_POST["username"]);
            $pass = strip_tags($_POST["password"]);

            // QUERY TO INSERT DATA
            $q = "select * from admin_ where CustomerID = '$name' && Password = '$pass'";

            // VERIFYING THE QUERY
            $result = mysqli_query($connection,$q,MYSQLI_STORE_RESULT);
            /*
            echo "<button style='background-color: #4CAF50; /* Green background 
                                 border: none; //* Remove borders 
                                 color: white; //* White text *
                                 padding: 12px 16px; //* Some padding *
                                 font-size: 16px //* Set a font size *'
                          onclick='<a href='http://localhost/Open-Source-Programming-E-Commerce-Project/PHP/action_page.php'>CLICK HERE TO ENTER</a>'
                  >
                    <i class='fa fa-circle-o-notch fa-spin'></i>CLICK HERE TO ENTER
                  </button>";
            */
        ?>
        <!--input type="button" value="Home" class="homebutton" id="btnHome" onClick="document.location.href='some/page'" /-->
        <button id="myBtn">Redirect</button>
        <script>
            var btn = document.getElementById('myBtn');
            btn.addEventListener('click', function() {
                document.location.href = 'PHP/action_page.php';
            });
        </script>
        <?php

            ////echo "<a href='http://localhost/Open-Source-Programming-E-Commerce-Project/PHP/action_page.php'>CLICK HERE TO ENTER</a>";
            /*
            $num = mysqli_num_rows($result);

            if($num==true)
            {
                echo("Duplicate Data");
            }
            else
            {
                $qy = "insert into admin_(AdminID,AdminPassword) values($name,$pass)";
                mysqli_query($connection,$qy);
                echo "<a href='http://localhost/Open-Source-Programming-E-Commerce-Project/PHP/action_page.php'>CLICK HERE TO ENTER</a>";
            }
            /*
            if($num==true)
            {
                echo("Duplicate Data");
            }
            else
            {
                $qy = "insert into admin_(AdminID,AdminPassword) values($name,$pass)";
                mysqli_query($connection,$qy);
            }
                */
            /*$servername = "localhost";
            $username = "username";
            $password = "password";

            // Create connection
            $conn = new mysqli($servername, $username, $password);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            echo "Connected successfully";
            */


        ?>
    </body>
</html>