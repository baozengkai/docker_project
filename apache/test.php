<?php
	$con = mysql_connect(getenv("MYSQL_ADDR"),getenv("MYSQL_USER"),getenv("MYSQL_PASS"));
	if(!$con)
	{
		 die("连接失败".mysql_error());
	}
	else{
		echo "连接成功";
	}
?>
