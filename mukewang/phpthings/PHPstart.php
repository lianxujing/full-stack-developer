<!DOCTYPE html>
<html>
<head>
	<title>PHP入门篇</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		echo "连旭静"."<br/>";
		echo "杨凯"."<br/>";
		echo 12*3;
		echo "<br/>";
		//PHP注释
		$var ="大家来学PHP";
		echo $var."<br/>";
		$var ="大家来学PHP2";
		echo $var;
		var_dump($var);
		echo "<br/>";
		$int =124;
		echo $int;
		var_dump($int);
		echo "<br/>";
		$man="男";
		$flag = $man =="男";
		echo $flag;
		var_dump($flag);
		echo "<br/>";
		define("PI", 123);
		echo PI;
		echo "<br/>";
		echo __FILE__;
		echo "<br/>";
		echo __LINE__;
		echo "<br/>";
		echo PHP_OS;
		echo "<br>";
		define("PII", 3.14);
		$r=3;
		$area=PII*$r*$r;
		echo $area;
		echo "<br/>";
		$a=78;
		$b=$a>=60?"及格":"不及格";
		echo $b;

	?>
	<h1>wampsever的根目录已经更改了，不在C盘了</h1>
	<img src="images/歌厅.jpg"/>

</body>
</html>