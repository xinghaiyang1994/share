<?php
	require_once('../connect.php');
	
	$id=$_GET['id'];
	$sql="update cars set wait=0 where id=$id";
	if(mysql_query($sql)){
		echo '<script>alert("通过审核");location.href="tochecklist.php";</script>';	
	}else{
		echo '<script>alert("未通过审核");location.href="tochecklist.php";</script>';	
	}
?>