<?php
	header('content:text/html;charset=utf8');
	echo "慕课网qwasdsa"."<br>";
	echo (12*3)."<br>";
	//php注释
	$var="xiangjiao"."<br>";
	$var="pingguo"."<br>";
	echo $var;
	
	echo $var;
	echo $m1=memory_get_usage();
	echo "<br>";
	$var_string="123";
	echo $m2=memory_get_usage()-$m1;
	echo "<br>";
	$string="就是就是";
	
	var_dump($string);
	$string=1234;
	echo "<br>";
	var_dump($string);
	$man="男";
	$flag=$man=="男";
	echo $flag;
	echo "<br>";
	var_dump($flag);
$string1=<<<GOD
爱上覅阿斯顿发生翻山倒海范德萨发
发生的话费卡收到货
范德萨发独守空房
GOD;
	echo $string1;
	echo "<br>";
	$file=fopen("gd.php", "r");
	echo $file;
	echo "<br>";
	define("PI",321);
	echo PI;
	echo "<br>";
	echo __FILE__;
	echo "<br>";
	echo __LINE__;
	echo "<br>";
	echo PHP_OS;
	echo "<br>";
	echo $m3=defined("PI");
	var_dump($m3);
	echo 8/4;
	echo "<br>";
	$a=12345;
	$b=&$a;
	echo $a;
	echo "<br>";
	echo $b;
	echo "<br>";
	$a=123456778;
	echo $b;
	echo "<br>";
	if(5>14){
		echo 1234;
		echo "<br>";
	}else{
		echo 987;
		echo "<br>";
	}
	$fruit=array(13,12,14,15);
	print_r($fruit);
	echo "<br>";
	print_r($fruit[1]);
	echo "<br>";
	for($i=0;$i<=3;$i++){
		echo "数组第".$i."个的值是：".$fruit[$i]."<br>";
	}
	foreach ($fruit as $k => $v) {
		echo "di".$k."is".$v."<br>";
	}
	function na($c){
		echo "1234"."<br>"+$c;
	}
	na(123);
?>