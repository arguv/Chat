$(document).ready(function(){
 
		var x = $("#message");
	
		$.get('models/seeMessages.php', 
				function(data){ x.append(data) }
		);

	window.setInterval(function(){
		var lastId = $("#message li:last-child").attr("id");

		$.ajax({
			url: "models/getMessage.php",
			type: "POST",
			data: {lastId: lastId},
			success: function(data) {
				if (data)
					$("<li id=\""+(parseInt(lastId)+1)+"\"></li>").appendTo("#message").html(data); }
		});

	} , 1000 );

	$("#submit").click(function(){

		var name = $("#name").val();
		var text = $("#text").val();
	
		$.ajax({
			url: "models/newMessage.php",
			type: "POST",
			data: {name: name, text: text},
			success: function(data){
					$("#name").val("");
					$("#text").val(""); }
		});
	
	});

});