<?php
define('Db_HOST' , 'localhost');
define('Db_LOGIN' , 'root');
define('Db_PASSWORD' , '');
	
	$link = mysql_connect(Db_HOST , Db_LOGIN , Db_PASSWORD);
		
		$db = mysql_select_db("chat",$link);