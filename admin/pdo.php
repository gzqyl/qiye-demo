<?php

	$dsn = "mysql:host=localhost;dbname=qiye";

	try{
		$pdo = new PDO($dsn,'root','root');
	}catch(PDOException $e){
		
	}

	function hasRecord($table){

		global $pdo;

		$sql = sprintf("select count(*) as num from %s",$table);

		$res = $pdo->query($sql);

		foreach($res as $v){

			if($v['num'] > 0){

				return true;

			}

		}

		return false;

	}

	function hasInfoOne($name){

		global $pdo;

		$sql = "select count(*) as num from info where info_name = '{$name}'";

		$res = $pdo->query($sql);

		foreach($res as $v){

			if($v['num'] > 0){

				return true;

			}

		}

		return false;


	}

