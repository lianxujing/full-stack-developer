<?php
	header('content-type:text/html;charset=utf-8');
	/*print_r($_FILES);
	$filename=$_FILES['myFile']['name'];
	$type=$_FILES['myFile']['type'];
	$tmp_name=$_FILES['myFile']['tmp_name'];
	$size=$_FILES['myFile']['size'];
	$error=$_FILES['myFile']['error'];*/
	//将服务器上的临时文件移动到指定目录下
	//第一种形式
	/*
	move_uploaded_file($tmp_name,$destination):将服务器上的临时文件移动到指定目录下叫什么名字，移动成功返回true，否则返回false。
	*/
	//move_uploaded_file($tmp_name, "uploads/".$filename);
	/*
	copy($src,$dst):将文件拷贝到指定目录，拷贝成功返回ture,否则返回false
	*/
	
	$fileinfo=$_FILES['myFile'];
	$filename=$fileinfo['name'];
	$type=$fileinfo['type'];
	$tmp_name=$fileinfo['tmp_name'];
	$size=$fileinfo['size'];
	$error=$fileinfo['error'];
	
	if($error==UPLOAD_ERR_OK){
		if(copy($tmp_name, "uploads/".$filename)){
		echo $filename."文件上传成功";}
	}else{
		switch($error){
			case 1:
				echo '上传文件超过了PHP配置文件中上传文件限制最大的值';
				break;
			case 4:
				echo "没有选择上传文件";
				break;
		}
	}
?>