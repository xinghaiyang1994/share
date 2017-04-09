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
				<div class="main-manage">
					<form action="./change.handle.php" method="post">
						<input type="hidden" name="id" value="<?php echo $data['id']?>" />
						<div class="clearfix main-inpbox">
							<span class="fl">标题：</span>
							<input type="text" required name="title" class="fl main-inp" value="<?php echo $data['title']?>" />
						</div>
						<div class="clearfix main-inpbox">
							<span class="fl">作者：</span>
							<input type="text" required name="author" class="fl main-inp"  value="<?php echo $data['author']?>" />
						</div>
						<div class="clearfix main-inpbox">
							<span class="fl">内容：</span>
							<textarea required  name="content" class="fl main-txt"> <?php echo $data['content']?></textarea>
						</div>
						<div class="clearfix main-inpbox">
							<span class="fl"></span>
							<input type="submit" class="fl main-sub" value="提交" />
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
