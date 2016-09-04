<?php
	header("Content-Type:text/html; charset=utf-8");
	
 	@ $db = new mysqli('localhost', 'root', 'wwsw', 'user');
 	if (mysqli_connect_errno()) {
	     echo 'Error: Could not connect to database.  Please try again later.';
	     exit;
	}
  $username = $_POST['usern'];
  $passwd = $_POST['userk'];
  //$query = 'insert into user_info values('.'"aa"'.','.'"$passwd_1"'.','.'"sa"'.')';
  $query = "insert into user_info values("."'$username'".","."'$passwd'".","."'na'".")";
  $result = $db->query($query);
	
  	
  	
?>