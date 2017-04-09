<?php
	require_once('../connect.php'); 
	mysql_query('set names utf8');
//	$time=time();
//	$sql="insert into cars(title,author,content,time) values('这是第一个','车身','不要动不动就开车',".$time.")";
	$time=time();
	$sql="select * from cars where wait=1 order by time desc";
	$res=mysql_query($sql,$link);
	if($res&&mysql_num_rows($res)){
		while($row=mysql_fetch_assoc($res)){
			$data[]=$row;
		}
	}else{
		$data=array();
	}

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
			<div class="search-wrap">
				<h2>待审核文章列表</h2>
			</div>
			<div class="main">
				<div class="main-manage">
					<div class="main-title clearfix">
						<span class="fl back-title">标题</span>
						<span class="fl back-author">司机</span>
						<span class="fl back-time">时间</span>
						<span class="fl back-do">操作</span>
					</div>
					<ul class="main-listwrap">
						<?php
							if(!empty($data)){
								foreach($data as $item){
						?>
						<li class="clearfix back-list">
							<h4 class="fl"><a href=""><?php echo $item['title'] ?></a></h4>
							<span class="fl"><?php echo $item['author'] ?></span>
							<em class="fl"><?php echo date('Y-m-d H:i',$item['time']) ?></em>
							<div class="back-list-do fl">
								<a href="./throughcheck.handle.php?id=<?php echo $item['id'] ?>">通过</a>
								<a href="change.php?id=<?php echo $item['id'] ?>">修改</a>
								<a href="delete.handle.php?id=<?php echo $item['id'] ?>">删除</a>
							</div>
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
