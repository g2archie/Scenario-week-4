	<html>
	<head>
	<title>Redirecting</title>
	</head>
	<body>

	<?php
        $url=$_GET["url"];
	// The value of the variable name is found
	//echo "<h1>Hello " . $url . "</h1>";
	echo "Redirecting";
           echo    '<script type="text/javascript">'
          .     "window.location.href='$url';"
          . '</script>'
	?>

	</body>
	</html>
	
