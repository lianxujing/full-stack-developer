<?php
	header("content-type:text/html;charset=utf8");
	$title=$_POST['title'];
	$content=$_POST['content'];
	$time=date("Y-m-d H:i:s");

	// 创建连接
	$conn = new mysqli("localhost", "root", "root");
	// 检测连接
	if ($conn->connect_error) 
	{    
	    die("连接失败: " . $conn->connect_error);} 
	    // 创建数据库
	    $sql = "CREATE DATABASE news";
	        if ($conn->query($sql) === TRUE) 
	        {    
	        echo "数据库创建成功";
	        } else {    
	        echo "Error creating database: " . $conn->error;
	        }
	    $conn->close();

	$SQL = " CREATE TABLE IF NOT EXISTS `detials` (
	    `id` int(10) NOT NULL AUTO_INCREMENT,
	    `title` varchar(200) CHARACTER SET utf8 NOT NULL,
	   `content` text CHARACTER SET utf8 NOT NULL,
	    `author` varchar(50) CHARACTER SET utf8 NOT NULL,
	   `created_at` datetime CHARACTER SET utf8 NOT NULL,
	    `updated_at` datetime NOT NULL,
	     PRIMARY KEY (`id`),
	     UNIQUE KEY `id` (`id`)
	) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ";



	$conn=mysqli_connect("localhost","root","","news");
	mysqli_set_charset($conn,'utf8');//设定字符集
	if($conn){
		$sql="insert into new(title,content,cre_time) values ('$title','$content','$time')";
		$que=mysqli_query($conn,$sql);
		if($que){
			echo "<script>alert('发布成功，返回新闻列表'):location.href='new.list.php'</script>";
		}else{
			die("数据库连接失败".mysqli_connect_error());
		}
	}
?>