<?php

	define("DS",DIRECTORY_SEPARATOR); //系统文件分隔符
	define("ROOT",dirname(__FILE__)); //当前文件目录

	function getFileList($dir){ //第一层目录digui-test,递归后是下一层目录
	
		//列出文件 scandir 扫描当前文件夹所有的文件
		$dirs = scandir($dir);

		foreach($dirs as $v){

			//限定只显示文件

			if($v == '.' || $v == '..'){
				continue;
			}

			if(!is_dir($dir.DS.$v)){

				echo $v." <br />"; //终止条件，不是文件目录则直接输出

			}else{

				getFileList($dir.DS.$v); //递归调用本身
			}

		}
		
		
	}

	getFileList(ROOT.DS."diguitest");