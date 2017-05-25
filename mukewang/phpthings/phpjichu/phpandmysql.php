<?php
	header('content-type:text/html;charset=utf-8');
	echo "显示正常".'<br/>';
	if($con=mysql_connect('localhost','root','')){
		echo "连接成功".'<br/>';
	}else{
		echo "连接失败";
	}
	if(mysql_select_db('info')){
		echo "连接数据库成功".'<br/>';
	}else{
		echo "连接数据库失败";
	}
	mysql_query('set names utf8');
	if(mysql_query('insert test1 values(5,"徐静","girl",34)')){
		echo "插入成功".'<br>';
	}else{
		echo "插入失败".'<br/>';
	}
	$res=mysql_query('select * from test1');
	$row=mysql_fetch_array($res);
	var_dump($row);
	echo "<br/>";
	while($rows=mysql_fetch_row($res)){
		print_r($rows);
	}

?>