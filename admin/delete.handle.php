<?php
	require_once('../connect.php');
	$href=$_SERVER['HTTP_REFERER'];
	$hrefArr=explode("/", $href);
	$hrefLast=end($hrefArr);
	
	$id=$_GET['id'];
	$sql="delete from cars where id=$id";
	if(mysql_query($sql)){
		echo '<script>alert("删除成功");location.href="'.$hrefLast.'";</script>';	
	}else{
		echo '<script>alert("删除失败");location.href="'.$hrefLast.'";</script>';	
	}
?>