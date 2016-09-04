<?php
	if(isset($_FILES["myfile"]))
	{
		$ret = array();
		$uploadDir = 'images'.'/'.date("Ymd").'/';
		$dir = dirname(__FILE__).'/'.$uploadDir;
		file_exists($dir) || (mkdir($dir,0777,true) && chmod($dir,0777));
		if(!is_array($_FILES["myfile"]["name"])) //single file
		{
			$fileName = time().uniqid().'.'.pathinfo($_FILES["myfile"]["name"])['extension'];
			move_uploaded_file($_FILES["myfile"]["tmp_name"],$dir.$fileName);
			$ret['file'] = '/'.$uploadDir.$fileName;
		}
		echo json_encode($ret);
	}
	session_start();
	$_SESSION['uploadDir']=$uploadDir.$fileName;
?>