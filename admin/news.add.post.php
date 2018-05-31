<?php

	session_start(); //开启会话

	//设定默认时区
	date_default_timezone_set("Asia/Shanghai");

	//使用超全局数组$_POST获取表单提交的数据

	$title = $_POST['title'];

	$content = urldecode($_POST['content']);

	$about = $_POST['about'];

	//引入pdo文件

	include_once 'pdo.php';

	$uid = $_SESSION['uid']; //发布者id

	$time = date("Y-m-d H:i:s",time()); //发布的时间

	$tupian_id = time();

	$file = '/admin/images/news/tupian_'.$tupian_id.strrchr($_FILES['tupian']['name'],'.');

	if(is_uploaded_file($_FILES['tupian']['tmp_name'])){

		move_uploaded_file($_FILES['tupian']['tmp_name'],'images/news/tupian_'.$tupian_id.strrchr($_FILES['tupian']['name'],'.'));

		//使用sql语句 insert 完成新闻的增加
		$sql = "insert into news(title,about,tupian,content,uid,publish_time) values('{$title}','{$about}','{$file}','{$content}','{$uid}','{$time}')";

	}else{

		//使用sql语句 insert 完成新闻的增加
		$sql = "insert into news(title,about,content,uid,publish_time) values('{$title}','{$about}','{$content}','{$uid}','{$time}')";
	}
	

	$pdo->exec($sql);

	//跳转到操作成功页面
	header("location:operate.success.php");