
	<?php
		header('content-type:text/html;charset=utf-8');
		$maxsize=2097153;//允许的最大值
		$allowext = array('jpeg','jpg','png','gif','wbmp');
		//1.通过$_FILES文件上传变量接收上传文件信息
		$fileinfo=$_FILES['myFile'];
		$filename=$fileinfo['name'];
		$type=$fileinfo['type'];
		$tmp_name=$fileinfo['tmp_name'];
		$size=$fileinfo['size'];
		$error=$fileinfo['error'];
		//2.判断错误号，只有为0或者UPLOAD_ERR_OK,没有错误发生，上传成功
		if($error==UPLOAD_ERR_OK){
			//判断上传文件的大小
			if ($size>$maxsize) {
				exit("文件上传过大");
			}

			$ext=strtolower(end(explode('.', $filename)));
			if (!in_array($ext, $allowext)) {
				exit("非法文件类型");
			}

			//判断文件是否是通过HTTP POST方式上传来的
			if(!is_uploaded_file($tmp_name)){
				exit("文件不是通过HTTP POST方式上传来的");
			}
			
			//移动文件
			if (move_uploaded_file($tmp_name, "uploads/".$filename)) {
				echo "文件".$filename."上传成功";
			}else{
				echo "文件".$filename."上传失败";
			}
		}else{
			//匹配错误信息
			switch ($error) {
				case 1:
					echo "上传文件超过了PHP配置文件中upload_max_filesize选项的值";
					break;
				case 2:
					echo "超过了表单MAX_FILE_SIZE限制的大小";
					break;
				case 3:
						echo "文件被部分上传";
						break;
				case 4:
					echo "没有选择上传文件";
					break;
				case 6:
					echo "没有找到临时目录";
					break;
				case 7:
				case 8:
					echo "系统错误";
					break;
			}
		}
	?>
