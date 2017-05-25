<!DOCTYPE html>
<html>
<head>
	<title>shangchuanxaizai</title>
	<meta charset="utf-8">
	<style type="text/css">
		div{
			width: 500px;
			border:1px solid black;
			margin:50px;
			padding:50px;
		}
	</style>
</head>
<body>
	<div>
	<form action="jieshou.php" method="post" enctype="multipart/form-data">
		请选择您要上传的文件：
		<input type="file" name="myFile"/>
		<br/><br/>
		<input type="submit" name="上传文件" value="提交按钮" />
	</form>
	</div>
</body>
</html>