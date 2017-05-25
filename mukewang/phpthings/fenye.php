<?php
	//传入页码
	$page=$_GET['p'];
	//根据页码取出数据：php->mysql处理
	$host="localhost";
	$username="root";
	$password="";
	$db="pagefenlei";
	$conn=mysql_connect($host,$username,$password);
	if(!$conn){
		echo "数据库连接失败";
		exit;
	}
	mysql_select_db($db);
	mysql_query("SET NAMES UTF8");
	$sql="SELECT * FROM page LIMIT ".($page-1)*10.",10";
	$result=mysql_query($sql);
	echo "<table border="1" cellspacing=0 width=40%>";
	echo "<tr><td>ID</td><td>NAME</td></tr>";
	while ($row=mysql_fetch_assoc($result)) {
		echo "<tr>";
		echo "<td>{$row['id']}</td>";
		echo "<td>{$row['name']}</td>";
		echo "</tr>";
	}
	echo "</table>";
	//显示数据+分页条
	?>
