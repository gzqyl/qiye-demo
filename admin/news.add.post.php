<?php

	session_start(); //开启会话

	//设定默认时区
	date_default_timezone_set("Asia/Shanghai");

	//使用超全局数组$_POST获取表单提交的数据

	$title = $_POST['title'];

	$content = urldecode($_POST['content']);

	//引入pdo文件

	include_once 'pdo.php';

	$uid = $_SESSION['uid']; //发布者id

	$time = date("Y-m-d H:i:s",time()); //发布的时间

	//使用sql语句 insert 完成新闻的增加
	$sql = "insert into news(title,content,uid,publish_time) values('{$title}','{$content}','{$uid}','{$time}')";

	$pdo->exec($sql);

	//跳转到操作成功页面
	header("location:operate.success.php");