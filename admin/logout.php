<?php

	session_start();

	session_destroy(); //销毁会话

	header("location:login.php");