<?php

	$dsn = "mysql:host=localhost;dbname=qiye";

	try{
		$pdo = new PDO($dsn,'root','root');
	}catch(PDOException $e){
		
	}

	//@param $table string 表名

	function getOne($table){

		global $pdo;

		$sql = "select * from $table limit 0,1";

		$_res = [];

		$res = $pdo->query($sql);

		if($res){

			foreach($res as $v){

				$_res[] = $v;

			}
		}
		

		if(count($_res) == 0){

			return [];

		}

		return $_res[0];

	}