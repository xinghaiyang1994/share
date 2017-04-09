<?php
	require_once('connect.php');
	
	$title=$_POST['title'];
	$author=$_POST['author'];
	$content=$_POST['content'];
	$time=time();
	$sql="insert into cars(title,author,content,time) values('$title','$author','$content',$time)";
	echo '<script>console.log("'.$sql.'");</script>';
	if(mysql_query($sql)){
		echo '<script>alert("插入数据成功");location.href="./release.php";</script>';
	}else{
		echo '<script>alert("插入数据失败");location.href="./release.php";</script>';
	}
	
	
?>