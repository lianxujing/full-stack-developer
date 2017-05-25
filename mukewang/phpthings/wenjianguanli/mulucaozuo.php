<!DOCTYPE html>
<html>
<head>
	<title>mulucaozuo</title>
	<meta charset="utf-8">
</head>
<body>
	<!--这个页面存放所有和目录相关的操作，并且把这个操作封装成了一个函数-->
	<!--把常用的代码封装成函数，方便代码的重用和管理-->
	<?php
		function readDirectory($path){
			//打开指定目录
			$handle=opendir($path);
			while(($item=readdir($handle))!==false){
				if($item!="." && $item!=".."){
					if(is_file($path."/".$item)){
						$arr['wenjianguanli'][]=$item;
					}
					if(is_dir($path."/".$item)){
						$arr['dir'][]=$item;
					}
				}
			}
			closedir($handle);
			return $arr;
		}
		$path="wenjianguanli";
		print_r(readDirectory($path));
	?>
</body>
</html>