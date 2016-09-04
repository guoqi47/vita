<?php
	header("Content-Type:text/html; charset=utf-8");
	
 	@ $db = new mysqli('localhost', 'root', 'wwsw', 'user');
 	if (mysqli_connect_errno()) {
	     echo 'Error: Could not connect to database.  Please try again later.';
	     exit;
	}

	$query = "select * from user_info where username ="."'{$_REQUEST['username']}'";
  	$result = $db->query($query);
  	$row = mysqli_fetch_assoc($result);//mysql_fetch_assoc() 函数从结果集中取得一行作为*关联*数组。
  	if(!$row){
  		echo "用户名不存在，请注册";
  	}else if($row['userkey'] == $_REQUEST['userkey']){
  		echo "登录成功";
  	}else{
  		echo "密码错误";
  	}
	//echo $row['userkey'];
  	//echo $query;
  	
?>