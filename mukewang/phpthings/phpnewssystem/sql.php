<?php
header("content-type:text/html;charset=utf8");
$servername="localhost";
$username="root";
$password="root";
$dbname="news";
//创建连接
$conn=mysqli_connect($servername,$username,$password,$dbname);
mysqli_set_charset($conn,'utf8');//设定字符集
//检测连接
if(!$conn){
	die("连接失败：".mysqli_connect_error());
}
//使用sql创建数据库
$sql="CREATE TABLE new(
	id int(6) unsigned auto_increment primary key,
	title varchar(50) not null,
	content text not null,
	cre_time datetime
);"
if(mysqli_query($conn,$sql)){
	echo "数据表 user 创建成功";
}else{
	echo "创建数据表错误：".mysqli_error($conn);
}
mysqli_close($conn);