<?php
	header("Esi-enable: true");
?>

<html>
	<head>
		<title>Test ESI</title>
	</head>
	<body>
		<h2>ESI Test Page</h2>
		<p>The esi is inserted between here...</p>
		<br />
		<br />
		<esi:inlcude src='www.jdade.me.uk/mytest.esi' />
		<br />
		<br />
	</body>
</html>
