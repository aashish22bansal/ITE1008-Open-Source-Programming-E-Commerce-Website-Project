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
        <style>
            /* Add a black background color to the top navigation bar */
            .header {
                overflow: hidden;
                background-color: #e9e9e9;
            }

            /* Style the links inside the navigation bar */
            .header a {
                float: left;
                display: block;
                color: black;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
                font-size: 17px;
            }

            /* Change the color of links on hover */
            .header a:hover {
                background-color: #ddd;
                color: black;
            }

            /* Style the "active" element to highlight the current page */
            .header a.active {
                background-color: #2196F3;
                color: white;
            }

            /* Style the search box inside the navigation bar */
            .header input[type=text] {
                float: right;
                padding: 6px;
                border: none;
                margin-top: 8px;
                margin-right: 16px;
                font-size: 17px;
            }

            /* When the screen is less than 600px wide, stack the links and the search field vertically instead of horizontally */
            @media screen and (max-width: 600px) {
                .header a, .header input[type=text] {
                    float: none;
                    display: block;
                    text-align: left;
                    width: 100%;
                    margin: 0;
                    padding: 14px;
                }
                .header input[type=text] {
                    border: 1px solid #ccc;
                }
            }

            body {
                font-family: Arial, Helvetica, sans-serif;
                margin: 0;
            }

            html {
                box-sizing: border-box;
            }

            *, *:before, *:after {
                box-sizing: inherit;
            }

            .column {
                float: left;
                width: 25%;
                margin-bottom: 16px;
                padding: 0 8px;
            }

            .card {
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
                margin: 8px;
            }

            .about-section {
                padding: 50px;
                text-align: center;
                background-color: #474e5d;
                color: white;
            }

            .container {
                padding: 0 16px;
            }

            .container::after, .row::after {
                content: "";
                clear: both;
                display: table;
            }

            .title {
                color: grey;
            }

            .button {
                border: none;
                outline: 0;
                display: inline-block;
                padding: 8px;
                color: white;
                background-color: #000;
                text-align: center;
                cursor: pointer;
                width: 100%;
            }

            .button:hover {
                background-color: #555;
            }

            @media screen and (max-width: 650px) {
                .column {
                width: 100%;
                display: block;
                }
            }
        </style>
        <h2 style="text-align:center">Project Team</h2>
        <div class="row">
            <div class="column">
                <div class="card">
                    <img src="Team Images/Aashish2.jpeg" alt="Team Images/Aashish2.jpeg" style="width:100%" height="284px" width="350px">
                    <div class="container">
                        <h2>Aashish Bansal</h2>
                        <p class="title">Full Stack Developer</p>
                        <p>Designed Front-end, Back-end and Database.</p>
                        <p>aashish.bansal2019@vitsudent.ac.in</p>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <img src="Team Images/Yash2.jpeg" alt="Team Images/Yash2.jpeg" style="width:100%" height="284px" width="350px">
                    <div class="container">
                        <h2>Yash Khandelwal</h2>
                        <p class="title">Full Stack Developer</p>
                        <p>Designed Front-end, Back-end and Database.</p>
                        <p>yash.khandelwal2019@vitstudent.ac.in</p>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <img src="Team Images/Aditya2.jpeg" alt="Team Images/Aditya2.jpeg" style="width:100%" height="284px" width="350px">
                    <div class="container">
                        <h2>Aditya Maheshwari</h2>
                        <p class="title">Full Stack Developer</p>
                        <p>Designed Front-end and Database Constraints.</p>
                        <p>aditya.maheshwari2019@vitstudent.ac.in</p>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <img src="Team Images/Dheeraj2.jpeg" alt="Team Images/Dheeraj2.jpeg" style="width:100%" height="284px" width="350px">
                    <div class="container">
                        <h2>Thiriveedi Dheeraj</h2>
                        <p class="title">Full Stack Developer</p>
                        <p>Designed Front-end and Database.</p>
                        <p>thiriveedi.dheeraj2019@vitstudent.ac.in</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
