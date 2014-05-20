'monitoring'@'localhost' / 'm0nit0r_Th15'

<?php
	$con = new mysqli('localhost', 'monitoring', 'm0nit0r_Th15');

	if ($con->connect_errno > 0){
		header($_SERVER["SERVER_PROTOCOL"]." 488 What database");
	}
?>
<html><head><title>jdade.me.uk::full-status-test</title></head>
<body>
	<p>DB is up and fine</p>
</body>
</html>
