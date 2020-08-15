<html>
    <head>
        <title> SIGN-UP</title>
        <link rel="stylesheet" type="text/css" href="signup.css">
        <?php
            session_start();// STARTING THE SESSION
            $connection = mysqli('localhost','root','123Aashish456'); // NEED TO ENTER YOUR OWN DETAILS
            // CHECKING IF IT IS CONNECTED
            if($connection)
            {
                echo("Connection Successful!");
            }
            else{
                echo("NOT CONEECTED");
            }

            //CONNECTING TO A DATABASE NOW
            mysqli_select_db($connection,'admin_');
            $name = $_POST['']
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
    </head>
    <body>
        <center>
            <form action="action_page.php" >
                <div class="container">
                    <h1>Sign Up</h1>
                    <p>Please fill in this form to create an account.</p>
                    <hr>
                    <table style="background-color:white">
                        <tr>
                            <td>
                                <label><b>First Name</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="text" placeholder="Enter first name" name="first name">
                                <br />
                            </td>
                            <td>
                                <label><b>Last Name</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="text" placeholder="Enter last name" name="last name">
                                <br />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label ><b>Email</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="text" placeholder="Enter email" name="email">
                                <br />
                            </td>
                            <td>
                                <label><b>Phone</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="text" placeholder="Enter phone number" name="phone">
                            </td>
                        </tr>

                                <tr>
                                    <td>
                                        <label ><b>Password</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <input type="password" placeholder="Enter password" name="psw" type="*">
                                        <br />
                                    </td>
                                    <td>
                                        <label ><b>Repeat Password</b></label>&nbsp;
                                        <input type="password" placeholder="Repeat password" name="psw-repeat" type="*">
                                        <br />
                                    </td>
                            </tr>
                    </table>
                    <br />
                    <label>
                        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                    </label>
                    <br /><br />
                    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
                    <br /><br />
                    <div class="divbutton">
                        <button type="button" class="cancelbtn">Cancel</button>
                        <button type="submit" class="signupbtn">Sign Up</button>
                    </div>
                </div>
            </form>
        </center>
    </body>
</html>
