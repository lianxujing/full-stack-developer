<!DOCTYPE html>
<html>
<head>
	<title>phpjichu</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		header('content-type:text/html;charset=utf-8');
		
		echo "学习，一定要做出一个网站"."<br/>";
		echo 12*3;
		//php注释
		echo "改变地址"."<br/>";
		$var="学习php"."<br/>";
		echo $var;
		$var="学习完php就可以实现网站的后台了"."<br/>";
		echo $var;
		print_r($var);
		echo $n=memory_get_usage()."<br/>";
		$n1="1234";
		echo $n2=memory_get_usage()-$n1;
		echo "<br/>";
		$n3=1234;
		echo $n4=memory_get_usage()-$n1-$n3;
		echo "<br/>";
		$n5=123;
		var_dump($n5);
		echo "<br/>";
		$n6="lianxujing连旭静";
		var_dump($n6);
		echo "<br>";
		$n7="男";
		$n8=$n7=="男";
		echo $n8;
		echo "<br/>";
		var_dump($n8);
		echo "<br/>";
		$n9=123.3423;
		echo $n9."<br/>";
		$n10="我二手房你";
		$n11="haha，$n10";
		$n12='haha，$n10';
		echo $n11."<br/>";
		echo $n12."<br/>";
		$string1 = <<<GOD
		我有一只小毛驴，我从来也不骑。
		有一天我心血来潮，骑着去赶集。
		我手里拿着小皮鞭，我心里正得意。
		不知怎么哗啦啦啦啦，我摔了一身泥.
GOD;
		echo $string1."<br/>";
		define("NAM", "strkkk");
		echo NAM;
		echo "<br/>";
		echo __FILE__;
		echo "<br/>";
		echo __LINE__;
		echo "<br/>";
		echo PHP_VERSION;
		echo "<br/>";
		echo PHP_OS;
		echo "<br/>";
		echo constant("NAM");
		echo "<br/>";
		echo defined("NAM");
		echo $n10+$n6+$n12;
		echo "<br/>";
		$a="在最短的时间内学习PHP";
		$b=&$a;
		echo $a."<br/>";
		echo $b;
		echo "<br/>";
		$c=78;
		$d=$c>=60?"及格了":"没及格";
		echo $d."<br>";
		$arr=array("句子","苹果","香蕉");
		print_r($arr);
		echo "<br>";
		echo $arr[0];
		echo "<br/>";
		for($i=0;$i<3;$i++){
			echo '<br/>数组第'.$i.'值是：'.$arr[$i];
		}
		foreach($arr as $k=>$v){
			echo '<br>第'.$k.'值是：'.$v;
		}
		echo "<br>";
		
		function name($yige){
			echo $yige;
		}
		name("hahaha");
		echo "<br>";
		/*
		class car{
			$name="汽车";
			function getname(){
				return $this->name;
			}
		}
		$car1 = new car();
		echo $car1->name();
		*/
		if($con=mysql_connect('localhost','root','')){
			echo "连接成功"."<br>";
		}else{
			echo "连接失败";
		}
		if(mysql_select_db('info')){
			echo "选择数据库成功"."<br/>";
		}else{
			echo "选择数据库失败";
		}
		if(mysql_query('insert into test(name) values("abc")')){
			echo "插入成功";
		}else{
			echo "插入失败";
		}
		mysql_query('insert into test(id) values("1")');
		mysql_query('insert into test(name) values("连旭静")');
	?>
</body>
</html>