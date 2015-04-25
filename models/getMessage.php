<?php
require_once("db.php");

	$lastId = $_POST['lastId'];
		
		$sql = "SELECT name, text FROM messages WHERE message_id>{$lastId}";

		$res = mysql_query($sql);

		while($write = mysql_fetch_assoc($res)){
					echo "<b>{$write['name']}:_</b>{$write['text']}";
		}
		mysql_close($link);