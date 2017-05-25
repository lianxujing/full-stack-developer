<?php
header("Content-type:text/html;charset=utf-8");    //设置编码
$servername = "localhost";
$username = "root";
$password = "";
// 创建连接

$conn = mysqli_connect($servername, $username, $password);

 mysqli_set_charset($conn,'utf8'); //设定字符集 
// 检测连接
if (!$conn) {
    die("连接失败: " . mysqli_connect_error());
}
// 创建数据库
$sql = "CREATE DATABASE login2";
if (mysqli_query($conn, $sql)) {
    echo "数据库创建成功";
} else {
    echo "数据库创建失败: " . mysqli_error($conn);
}
//注意这里创建数据表不行，需要重新创建一个php文件来专门执行创建表格
// 使用 sql 创建数据表
/*
$sql = "CREATE TABLE user5 (
 id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 username VARCHAR(30) NOT NULL,
 password VARCHAR(30) NOT NULL
 );";
if (mysqli_query($conn, $sql)) {
    echo "数据表 user5 创建成功";
} else {
    echo "创建数据表错误: " . mysqli_error($conn);
}

*/

mysqli_close($conn);


