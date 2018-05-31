<!doctype html>
<head>
	<title>管理员登录</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>
<body>

	<div class="container">
		<form role="form" action="login.session.php" method="post">
		  <div class="form-group">
		    <label for="name">用户名</label>
		    <input type="text" class="form-control" id="name" name="user" placeholder="用户名">
		  </div>
		  <div class="form-group">
		    <label for="psd">密码</label>
		    <input type="password" class="form-control" id="psd" name="psd" placeholder="密码">
		  </div>
		  <input type="submit" value="提交" class="btn btn-default" />
		</form>
	</div>

</body>
</html>