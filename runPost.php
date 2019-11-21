<html>
	<head>
	</head>
	<body>
		<h1> Hello World!</h1>
		<?php 
			$name = $_POST["name"];
			$email = $_POST["email"];
			echo "Your name is ".$name." and your email is ".$email;
		?>
	</body>
</html>
