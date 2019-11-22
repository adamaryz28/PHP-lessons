<html>
	<head>
	<style>
	#peeps {
		color: red;
	}
	.list{
		font-family: courier new;
		color: blue;
	}
	</style>
	</head>
	<body>
		<?php
			echo "Hello World - from:".$_SERVER['SERVER_SOFTWARE'];
			echo "<h1 id = 'peeps'>".$_SERVER['HTTP_HOST']."</h1>";
			
			$testArray = array('test1', 'test2', 'test3', 'test4');
			echo "<ol>";
			foreach($testArray as $test){
				echo "<li class = 'list'>".$test."</li>";
			}
			echo "</ol>";
		?>
	</body>
</html>
