<?php
require_once("db.php");

	$res = mysql_query("SELECT * FROM messages");
				
	while($write = mysql_fetch_assoc($res)){
			echo "<li id='{$write['message_id']}'><b>{$write['name']}:_</b>{$write['text']}</li>";
	}
	
	mysql_close($link);