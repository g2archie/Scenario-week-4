	<html>
	<head>
	<title>Query string</title>
	</head>
	<body>

	<?php
        $url=$_GET["url"];
	// The value of the variable name is found
	echo "<h1>Hello " . $url . "</h1>";
           echo    '<script type="text/javascript">'
          .     "window.location.href='http://'+'$url';"
          . '</script>'
	?>

	</body>
	</html>
	
