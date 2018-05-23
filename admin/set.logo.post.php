<?php

	$file = $_FILES['logo']; //获取logo文件

	if(is_uploaded_file($file['tmp_name'])){

		move_uploaded_file($file['tmp_name'],"images/logo".strrchr($file['name'],'.'));

		include 'pdo.php';

		$url = "/admin/images/logo".strrchr($file['name'],'.');

		if(hasRecord('logo')){

			$sql = "update logo set file = '{$url}'";
		}else{
			$sql = "insert into logo(file) values('{$url}')";
		}

		$pdo->exec($sql);

		header("location:operate.success.php");

	}

