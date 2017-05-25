<!DOCTYPE html>
<html>
<head>
	<title>wenjianguanli</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="cikonss.css">
	<style type="text/css">
		body,p,div,ul,ol,table,dl,dd,dt{
			margin:0;
			padding:0;
		}
		a{
			text-decoration: none;
		}
		ul,li{
			list-style: none;
			float: left;
		}
		#top{
			width: 100%;
			height: 48px;
			margin:0 auto;
			background:#e2e2e2;
		}
		#navi a{
			display: block;
			width:48px;
			height: 48px;
		}
		#main{
			margin:0 auto;
			border:2px solid #abcdef;

		}
		img{
			width: 25px;
			height:25px;
			border:0;
		}
	</style>
</head>
<body>
	<h1>慕课网——在线文件管理器</h1>
	<div id="top">
		<ul id="navi">
			<li><a href="wenjianguanli.php" title="主目录"><span style="margin-left: 8px;margin-top: 0px;"></span></a></li>
			<li><a href="#" onclick="show('createFile')" title="新建文件"></a></li>
			<li><a href="#" onclick="show('createFolder')" title="新建文件夹"></a></li>
			<li><a href="#" onclick="show('uploadFile')" title="上传文件"></a></li>
			<li><a href="#" title="返回上级目录" onclick="back('<?php//echo $back;?>')"></a></li>
		</ul>
	</div>
</body>
</html>