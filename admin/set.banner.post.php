<?php

	$file1 = $_FILES['banner1']; //获取轮播图1文件

	$file2 = $_FILES['banner2']; //获取轮播图2文件

	$file3 = $_FILES['banner3']; //获取轮播图3文件

	//轮播图文件数组
	$fArr = [];

	//判断是否上传

	if(is_uploaded_file($file1['tmp_name'])){

		move_uploaded_file($file1['tmp_name'],"images/banner1".strrchr($file1['name'],'.'));

		$fArr[] = '/admin/images/banner1'.strrchr($file1['name'],'.');
	}

	if(is_uploaded_file($file2['tmp_name'])){

		move_uploaded_file($file2['tmp_name'],"images/banner2".strrchr($file2['name'],'.'));

		$fArr[] = '/admin/images/banner2'.strrchr($file2['name'],'.');
	}

	if(is_uploaded_file($file3['tmp_name'])){

		move_uploaded_file($file3['tmp_name'],"images/banner3".strrchr($file3['name'],'.'));

		$fArr[] = '/admin/images/banner3'.strrchr($file3['name'],'.');
	}

	//以，连接数组成字符串，方便存入数据库

	$banner = implode(',',$fArr);

	include 'pdo.php';

	if(hasRecord('banner')){

		$sql = "update banner set file = '{$banner}'";
	}else{
		$sql = "insert into banner(file) values('{$banner}')";
	}

	$pdo->exec($sql);

	header("location:operate.success.php");
