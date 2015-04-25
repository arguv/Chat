<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta name="description" content="Chat">
<meta name="keywords" content="Chat">
<meta name="author" content="ARGUV">
<title>Chat</title>
<link rel="stylesheet" type="text/css" href="css/main.css">
<!------------------------------------------------------------------------------------------>
</head>
<body>
<div id='main'>
	<div id='header'>My Chat</div>
	<div id='wrapper'>
		<div id='content'>
			<ul id='message'>
			</ul>
			
			<label for="name">Name</label><br />
			<input id="name" type="text" name="name" required="required" /><br />
			<label for="text">Message</label><br />
			<textarea id="text" name="text" rows="7" cols="38" required="required"></textarea><br />
			<input id="submit" type='submit' name='Submit' value='Submit'>
		
		</div>
	</div>
	<div id='footer'>Copyright 2015</div>
</div>
<!------------------------------------------------------------------------------------------>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>