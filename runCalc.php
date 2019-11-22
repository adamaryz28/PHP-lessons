<html>
	<head>
	</head>
	<body>
		<h1> Hello World!</h1>
		<?php 
			$name = $_GET["num1"];
			$email = $_GET["num2"];
			$type = $_GET("type");
			$answer = 0;
			if($type == "Add"){
				$answer = $num1+$num2;
				
			}
			else{
				$answer = $num1 - $num2;		
			}
			echo "Your total is".$answer;
		?>
	</body>
</html>
