<?php
	require_once('./connect.php');

	$txt=$_POST['txt'];

	$sql="select * from cars where title like '%$txt%' or author like '%$txt%' or content like '%$txt%' order by time desc";
	$res=mysql_query($sql,$link);
	if($res&&mysql_num_rows($res)){
		while($row=mysql_fetch_assoc($res)){
			$data[]=$row;
		}
		$num=mysql_num_rows($res);
	}else{
		$data=array();
		$num=0;
	}

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
			<div class="search-wrap">
				<form class="search clearfix" action="search.php" method="post">
					<input type="text" name="txt"  class="search-text fl" />
					<input type="submit"  value="搜索"  class="search-sub fl" />
				</form>
			</div>
			<div class="main">
				<div class="main-manage">
					<h3 class="search-res">搜索到<span><?php echo $num ?></span>个结果</h3>
					<div class="main-title clearfix">
						<span class="fl title">标题</span>
						<span class="fl title-id">司机</span>
						<span class="fl title-do">时间</span>
					</div>
					<ul class="main-listwrap">
						<?php
							if(!empty($data)){
								foreach($data as $item){
						?>
						<li class="clearfix main-list">
							<h4 class="fl"><a href="./detail.php?id=<?php echo $item['id'] ?>"><?php echo $item['title'] ?></a></h4>
							<span class="fl"><?php echo $item['author'] ?></span>
							<em class="fl"><?php echo date('Y-m-d H:i',$item['time']) ?></em>
						</li>
						<?php
								}
							}
						?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
