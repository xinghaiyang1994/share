<?php
	require_once('config.php');
	
	$link=mysql_connect(HOST,USERNAME,PASSWORD);
	mysql_query('set names utf8');
	if(!$link){
		echo mysql_error();
	}
	if(!mysql_select_db('artdb')){
		echo mysql_error();
	}
?>