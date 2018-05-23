<?php

	$id = $_GET['id'];

	//使用超全局数组$_POST获取表单提交的数据

	$title = $_POST['title'];

	$content = urldecode($_POST['content']);

	//引入pdo文件

	include_once 'pdo.php';
	
	//使用sql语句 update 完成新闻的修改
	$sql = "update news set title='{$title}',content='{$content}' where id = '{$id}'";

	$pdo->exec($sql);

	//跳转到列表页面
	header("location:news.list.php");