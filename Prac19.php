<!DOCTYPE html>
<html>
<head>
	<title>Shubhangi Goyal</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta author="SHUBHANGI GOYAL">
	<link rel="stylesheet" href="all.css">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script|Indie+Flower|Raleway|Redressed" rel="stylesheet">
</head>
<body>
	<a href='index.php?home'>< Go back</a><a href='index.php?home'>< Go back</a>
	<div class="prac">
		<form method="post" action="">
			Enter the String:<input type="text" name="String">
			<input type="submit" name="submit" value="Replace">
		</form>
 
	
	<?php
	if (isset($_POST['submit'])) {
		# code...
		$a=$_POST['String'];
		echo "The original string is ".$a."<br>";
		echo "String after replacing 'the':<br>".str_replace("The", "That",$a);
	}
	
	
	?>
</div>
</body>
</html>