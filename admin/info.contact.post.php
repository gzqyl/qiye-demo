<?php

	include 'pdo.php';

	foreach($_POST as $k=>$v){

		if(hasInfoOne($k)){
			$sql = "update info set info_content = '{$v}' where info_name = '{$k}'";
		}else{
			$sql = "insert into info(info_name,info_content) values('{$k}','{$v}')";
		}

		$pdo->exec($sql);

	}

	header("location:info.contact.php");