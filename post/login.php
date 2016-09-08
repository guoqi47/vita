<?php
	header("Content-Type:text/html; charset=utf-8");

	@ $db = new mysqli('localhost', 'root', 'wwsw', 'user');
	/*@ $db = new mysqli('103.250.15.189', 'a08300436584Eb', 'wwswwwsw', 'a08300436584eb');*/
	if (mysqli_connect_errno()) {
			 echo 'Error: Could not connect to database.  Please try again later.';
			 exit;
	}

	$query = "select * from user_info where username ="."'{$_REQUEST['username']}'";
	$result = $db->query($query);
	$row = mysqli_fetch_assoc($result);//mysql_fetch_assoc() 函数从结果集中取得一行作为*关联*数组。
	if(!$_REQUEST['username']){
		echo "用户名不能为空！";
		exit; 
	}else if(!$_REQUEST['userkey']){
		echo "密码不能为空！";
		exit;
	}else if(!$row){
		echo "用户名不存在，请注册！";
		exit;
	}else if($row['userkey'] == $_REQUEST['userkey']){
		echo "登录成功,自动跳转中...";
		$url = "index.html";  

		/*//跳转
		echo('<script language="JavaScript">');
		echo("location.href='$url';");
		echo('</script>');
		*/
	}else{
		echo "密码错误";
		exit; 
	}
		
?>
<html>   
<head>   
<meta http-equiv="refresh" content="3;  
url=<?php echo $url; ?>">   
</head>   
<body>   
</body> 
</html>