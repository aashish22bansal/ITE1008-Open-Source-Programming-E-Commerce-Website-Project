<?php 
// this php script is for connecting with database 
// data have to fetched from local server 
$mysql_host = 'localhost'; 
  
// user name is root 
$mysql_user = 'root'; 
  
// function to connect with database having  
// argument host and user name 
if (!@mysql_connect ($mysql_host, $mysql_user)) 
{ 
    die('Cannot connect to database'); 
} 
else
{ 
    // database name is server 
    if (@mysql_select_db('server')) 
    { 
        echo "Connection Success"; 
    } 
    else
    { 
        die('Cannot connect to database'); 
    } 
} 
?>