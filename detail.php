<?php
	require_once('./connect.php');
	
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
<link rel="stylesheet" type="text/css" href="css/base.css"/>
<link rel="stylesheet" type="text/css" href="css/main.css"/>
</head>
<body>
	<div class="wrap clearfix">
		<div class="left fl">
			<div class="logo-box">
				<div class="logo">
					<img src="img/logo.jpg" class=""/>
					<div class="logo-come">
						<img src="img/beer.jpg"/>
						<a href="./login.php">管理员登录</a>
					</div>
				</div>
			</div>
			<ul class="nav">
				<li>
					<a href="./list.php">读书使人进步</a>
				</li>
				<li>
					<a href="./release.php">我要当雷锋</a>
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
