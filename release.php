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
				<div class="main-manage">
					<form action="release.handle.php" method="post">
						<div class="clearfix main-inpbox">
							<span class="fl">标题：</span>
							<input type="text" required name="title" class="fl main-inp" />
						</div>
						<div class="clearfix main-inpbox">
							<span class="fl">作者：</span>
							<input type="text" required name="author" class="fl main-inp" />
						</div>
						<div class="clearfix main-inpbox">
							<span class="fl">内容：</span>
							<textarea required  name="content" class="fl main-txt"></textarea>
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
