<?php
	$dbc =  @mysql_connect('localhost','root','123Aashish456') or die("couldn't connect".mysql_error());
	$db =  mysql_select_db("dbms") or die("couldn't connect to datbase");
?>
