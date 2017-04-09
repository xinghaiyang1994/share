<?php
	require_once('../connect.php');
	
	$id=$_POST['id'];
	$title=$_POST['title'];
	$author=$_POST['author'];
	$content=$_POST['content'];
	$time=time();
	$sql="update cars set title='$title',author='$author',content='$content',time=$time where id=$id";
	echo '<script>console.log("'.$sql.'");</script>';
	if(mysql_query($sql)){
		echo '<script>alert("修改数据成功");location.href="./checkedlist.php";</script>';
	}else{
		echo '<script>alert("修改数据失败");location.href="./checkedlist.php";</script>';
	}
	
	
?>