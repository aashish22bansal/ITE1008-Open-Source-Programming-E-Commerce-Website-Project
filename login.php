<html>
    <head>
        <title>LOGIN</title>
        <link rel="stylesheet" type="text/css" href="login.css">
        <?php
            $servername = "localhost";
            $username = "username";
            $password = "password";
            /*define($servername, "127.0.0.1");

            define("DB_SERVER", "localhost");
            define("DB_USER", "root");
            define("DB_PASSWORD", "");
            define("DB_DATABASE", "databasename");

            $connect = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);
            */
            // Create connection
            $conn = new mysqli($servername, $username, $password);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);            }
            echo "Connected successfully";
        ?>
    </head>
    <body>
        <center>
            <form action="action_page.php" method="post">
                <div class="imgcontainer">
                    <img src="data:image/png;base64,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" alt="photo" class="image">
                </div>

                <div class="container">
                    <label for="uname"><b>MobileNo</b></label>
                    <input type="text" placeholder="Enter Mobile Number" name="mobno">
                    <br><br>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw">
                    <br><br>

                    <button type="submit">Login</button><br>
                    <label>
                        <input type="checkbox" checked="checked" name="remember"> Remember me
                    </label>
                </div>
                <br><br>
                <button type="button" class="cancelbtn">Cancel</button>
                <div class="container" style="background-color:#f1f1f1">
                    <span class="psw">Forgot <a href="#">password?</a></span><br><br>
                </div>
            </form>
        </center>
    </body>
</html>
