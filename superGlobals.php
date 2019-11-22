<html>
	<head>
	<style>
	#peeps {
		color: red;
	}
	</style>
	</head>
	<body>
		<?php
			echo "Hello World - from:".$_SERVER['SERVER_SOFTWARE'];
			echo "<h1 id = 'peeps'>".$_SERVER['HTTP_HOST']."</h1>";
			
			$testArray = array('test1', 'test2');
			foreach($testArray as $test){
				echo $test;
			}
		?>
	</body>
</html>>
