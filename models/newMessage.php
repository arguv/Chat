<?php
require_once("db.php");

	$name = trim(strip_tags($_POST['name']));
	$text = trim(strip_tags($_POST['text']));
		
		if (!empty($text)){
		
			$sql = "INSERT INTO messages(name, text) VALUES ('{$name}','{$text}')";
			mysql_query($sql);
			mysql_close($link);
		}