<?php
	require_once('../connect.php');
	
	$id=$_GET['id'];
	$sql="select * from cars where id=$id";
	$res=mysql_query($sql);
	$data=mysql_fetch_assoc($res);
	
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
<link rel="stylesheet" type="text/css" href="../css/base.css"/>
<link rel="stylesheet" type="text/css" href="../css/main.css"/>
</head>
<body>
	<div class="wrap clearfix">
		<div class="left fl">
			<h1 class="back-brand">后台管理</h1>
			<ul class="nav">
				<li>
					<a href="checkedlist.php">已审核文章列表</a>
				</li>
				<li>
					<a href="tochecklist.php">待审核文章列表</a>
				</li>
			</ul>
		</div>
		<div class="right fl">
			<div class="main">
				<div class="detail-wrap">
					<h2><?php echo $data['title']?></h2>
					<div class="clearfix detail-info">
						<span class="fr "><?php echo $data['time']; ?></span>
						<span class="fr "><?php echo $data['author']; ?></span>
					</div>
					<div class="detail-content">
							<?php echo $data['content']; ?>
						</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
