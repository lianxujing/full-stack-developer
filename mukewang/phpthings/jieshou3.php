<?php
	include_once 'wenjianshangchuanfengzhuang.php';

	$fileinfo=$_FILES['myFile'];

	$newName = uploadFile($fileinfo);
?>