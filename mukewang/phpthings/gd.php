<?php 
		/*
		//创建画布
		$width=500;
		$height=300;
		$image=imagecreatetruecolor($width, $height);
		//创建颜色
		$red=imagecolorallocate($image, 255, 0, 0);
		$blue=imagecolorallocate($image, 200, 124, 0);
		$white=imagecolorallocate($image, 255, 255, 255);
		//绘制填充矩形
		imagefilledrectangle($image, 0, 0, 500, 300, $white);
		//开始绘画
		//横写一个字符
		imagechar($image, 15, 20, 10, 'K', $red);
		imagestring($image, 29, 100, 200, 'string', $red);
		//告诉浏览器以图片的形式来显示
		header('content-type:image/png');
		//输出图像
		imagepng($image);
		imagepng($image,'images/gd.png');
		//销毁资源
		imagedestroy($image);
		*/
		//打开图片
			//配置图片路径
		$src="FCC.jpg";
			//获取图片信息
		$info=getimagesize($src);
			//通过图像编号来获取图像的类型
		$type=image_type_to_extension($info[2],false);
			//在内存中创建一个和我们图像类型一样的图像
		$fun="imagecreatefrom{$type}";
			//把图片复制到我们的内存中
		$image=$fun($src);

		//操作图片
			//设置字体的路径
		$font="msyh.ttf";
			//填写我们的水印内容
		$content="你好，慕课";
			//设置字体的颜色和透明度
		$col=imagecolorallocatealpha($image, 55, 55, 255, 50);
		    //写入文字
		imagettftext($image, 20, 30, 20, 30, $col, $font, $content);
		//输出图片
		    //浏览器输出
		header("content-type:".$info['mime']);
		$func="image{$type}";
		$func($image);
		    //保存图片
		$func($image,'newimage.'.$type);
		//销毁图片
		imagedestroy($image);



?>
