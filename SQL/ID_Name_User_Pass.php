<?php 
// going to use above code 
require 'database.php'; 
  
// printing column name above the data 
echo 'ID'.' '.'Name'.' '.'User'.' '.'Pass'.'<br>'; 
  
// sql query to fetch all the data 
$query = "SELECT * FROM `user_info`"; 
// mysql_query will execute the query to fetch data 
if ($is_query_run = mysql_query($query)) 
{ 
    // echo "Query Executed"; 
    // loop will iterate until all data is fetched 
    while ($query_executed = mysql_fetch_assoc ($is_query_run)) 
    { 
        // these four line is for four column 
        echo $query_executed['ID'].' '; 
        echo $query_executed['First Name'].' '; 
        echo $query_executed['Username'].' '; 
        echo $query_executed['Password'].'<br>'; 
    } 
} 
else
{ 
    echo "Error in execution"; 
} 
?>