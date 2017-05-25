<?php
	/*打开图片*/
	//1.配置图片路径
	$src="FCC.jpg";
	$info = getimagesize($src);
	$type = image_type_to_extension($info[2],false);
	$fun = "imagecreatefrom{$type}";
	$image = $fun($src);
	/*操作图片*/
	$image_mark="lian.jpg";
	$info2=getimagesize($image_mark);
	$type2=image_type_to_extension($info2[2].false);
	$fun2="imagecreatefrom{$type}";
	$water=$fun2($image_mark);
	imagecopymerge($image, $water, 20, 30, 0, 0, $info2[0], $info2[1], 30);
	imagedestroy($water);
	header("Content-type:".$info['mime']);
	header('charset=utf-8');
	$funs="image{$type}";
	$funs($image);
	$imagedestroy($image);
	/*
	$font = "BlackoakStd.otf";
	$content = "yidfs";
	$col = imagecolorallocatealpha($image, 255, 255, 255, 50);
	imagettftext($image, 20, 0, 20, 30, $col, $font, $content);
	/*输出图片
	header("Content-type:".$info['mime']);
	$func = "image{$type}";
	$func($image);
	$func($image,'liankai.'.$type);
	/*销毁图片
	imagedestroy($image);
	*/
	//为什么汉字水印不行？
?>
