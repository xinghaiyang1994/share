<?php
	require_once('./connect.php');
	
	$name=$_POST['name'];
	$password=$_POST['password'];
	$sql="select password from drivers where name='$name'";
	$res=mysql_query($sql);
	$data=mysql_fetch_assoc($res);
	if($password == $data['password']){
		echo '<script>alert("果然老司机");location.href="./admin/checkedlist.php";</script>';
	}else{
		echo '<script>alert("新司机不要瞎捣蛋");location.href="./login.php";</script>';
	}
?>