<html>
	<head>
	</head>
	<body>
		<h1> Hello World!</h1>
		<?php 
			echo "hi its me";
			$myVariable = "<h2>hi its me again</h2>";
			echo $myVariable;
		?>
		<form action = "runGet.php" method ="get">
		Name: <input type ="text" name="name"><br>
		E-mail: <input type="text" name="email"><br>
		<input type ="submit" value="Get">
		</form>
		<form action = "runPost.php" method ="post">
		Name: <input type ="text" name="name"><br>
		E-mail: <input type="text" name="email"><br>
		<input type ="submit" value="Post">
		</form>
	</body>
</html>
