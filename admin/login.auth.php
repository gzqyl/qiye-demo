<?php
	
	session_start();

	function isLogin(){

		if(isset($_SESSION['login']) && $_SESSION['login'] == 1){
			return true;
		}

		return false;

	}

	function testLogin(){

		if(!isLogin()){
			echo '还没有登录';
		}else{
			echo "已成功登录";
		}

		session_destroy();

	}

	//testLogin();

	