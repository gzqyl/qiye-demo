<?php

	$file = $_FILES['news']; //获取logo文件

	if(is_uploaded_file($file['tmp_name'])){

		move_uploaded_file($file['tmp_name'],"images/news".strrchr($file['name'],'.'));

		include 'pdo.php';

		$url = "/admin/images/news".strrchr($file['name'],'.');

		if(hasRecord('news_logo')){

			$sql = "update news_logo set file = '{$url}'";
		}else{
			$sql = "insert into news_logo(file) values('{$url}')";
		}

		$pdo->exec($sql);

		header("location:operate.success.php");

	}

