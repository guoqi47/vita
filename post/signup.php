<?php   
$url = "http://www.guoqiproject.com/post/index.html"; 

header("Content-Type:text/html; charset=utf-8");
  
   /*@ $db = new mysqli('localhost', 'root', 'wwsw', 'user');*/
  @ $db = new mysqli('103.250.15.189', 'a08300436584Eb', 'wwswwwsw', 'a08300436584eb');
   if (mysqli_connect_errno()) {
       echo 'Error: Could not connect to database.  Please try again later.';
       exit;
  }
  $username = $_POST['usern'];
  $passwd = $_POST['userk'];
  //$query = 'insert into user_info values('.'"aa"'.','.'"$passwd_1"'.','.'"sa"'.')';
  $query = "insert into user_info values("."'$username'".","."'$passwd'".","."'na'".")";
  $result = $db->query($query);
  
  if(!$result){
    echo"系统繁忙，注册不成功，请稍后再试！";  
    echo"<a href='signup.html'>返回</a>";
    exit();
  }else{
    echo"注册成功!";
  }

  /*$result->free();
  $db->close();*/
?> 
<html>   
<head>   
<meta http-equiv="refresh" content="5;  
url=<?php echo $url; ?>">   
</head>   
<body>   
3秒后自动跳转......  
</body> 
</html>  




