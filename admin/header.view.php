<!doctype html>
<head>
	<title>管理后台</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/common.css" />
</head>
<body>

	<div class="container-fluid header">
		<p style="padding-bottom:10px;">

			<span class="welcome">
				欢迎 ：<?php echo $_SESSION['name']; ?>
					
			</span>
			
			<a href="/admin/logout.php"><span class="welcome-right">退出</span></a>
		</p>
	</div>