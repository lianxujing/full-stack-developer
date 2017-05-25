<?php
	$fileinfo=$_FILES['myFile'];

	function uploadFile($fileinfo,$uploadPath='uploads',$flag=true,$allowext = array('jpeg','jpg','png','gif','wbmp'),$maxsize=2097153){
	//错误信息判断
	if($fileinfo['error']>0){
		switch ($fileinfo['error']) {
				case 1:
					$mes= "上传文件超过了PHP配置文件中upload_max_filesize选项的值";
					break;
				case 2:
					$mes= "超过了表单MAX_FILE_SIZE限制的大小";
					break;
				case 3:
						echo "文件被部分上传";
						break;
				case 4:
					$mes= "没有选择上传文件";
					break;
				case 6:
					$mes= "没有找到临时目录";
					break;
				case 7:
				case 8:
					$mes= "系统错误";
					break;
			}
			exit($mes);
	}
	//检测上传文件的类型
	$ext=strtolower(end(explode('.', $fileinfo['name'])));
	/*$allowext = array('jpeg','jpg','png','gif','wbmp');
			if (!in_array($ext, $allowext)) {
				exit("非法文件类型");
			}
	*/
	//检测上传文件的大小是否符合规范
	/*$maxsize=2097153;//允许的最大值*/
	if ($fileinfo['size']>$maxsize) {
				exit("文件上传过大");
			}

	//检测图片是否是真实的图片类型
	//$flag=true;
	if($flag){
		if(getimagesize($fileinfo['tmp_name'])){
			exit("不是真实的图片类型");
		}
	}


	//判断文件是否是通过HTTP POST方式上传来的
			if(!is_uploaded_file($fileinfo['tmp_name'])){
				exit("文件不是通过HTTP POST方式上传来的");
			}
	//移动文件
	//这里移动的时候文件要保证是唯一的
	$uniname=md5(uniqid(microtime(true),true)).'.'.$ext;
	$destination=$uploadPath.'/'.$uniname;
	//移动文件到指定目录的时候如果这个目录不存在的情况下我们要创建
	/*$uploadPath='uploads';*/
	if(!file_exists($uploadPath)){
		mkdir($uploadPath,0777,true);
		chmod($uploadPath, 0777);
	}
	if (@move_uploaded_file($tmp_name, $destination)) {
				echo "文件".$filename."上传成功";
			}else{
				echo "文件".$filename."上传失败";
			}

	return array(
		'newname'=>$destination;
		'size'=>$fileinfo['size'];
		'type'=>$fileinfo['type'];
		);


	}


	//按照之前写上传文件的代码的时候那样写完代码之后，在里面添加一个架子就可以了，function
	//然后看到那些可以当做参数传递
?>