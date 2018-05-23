<?php


	//使用超全局数组$_POST获取表单提交的数据

	$content = urldecode($_POST['content']);

	//引入pdo文件

	include_once 'pdo.php';


	//处理上传的首页图片文件

	$home_img = $_FILES['home'];

	move_uploaded_file($home_img['tmp_name'],"images/home_img".strrchr($home_img['name'],'.'));


	$url = "/admin/images/home_img".strrchr($home_img['name'],'.');


	$sum = $_POST['sum'];


	if(hasRecord('company')){

		$sql = "update company set home_img = '{$url}',content= '{$content}',sum = '{$sum}'";

	}else{

		$sql = "insert into company(home_img,content,sum) values('{$url}','{$content}','{$sum}')";
	}

	$pdo->exec($sql);

	//跳转到操作成功页面
	header("location:operate.success.php");