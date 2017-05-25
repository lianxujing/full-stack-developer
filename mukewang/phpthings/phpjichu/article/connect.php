<?php
	require_once('config.php');
	
	if(!$con=mysql_connect(host,username,password)){
		echo mysql_error();
	}
	
	if(!mysql_select_db('info')){
		echo mysql_error();
	}
	
	if(!mysql_query('set names utf8')){
		echo mysql_error();
	}

?>