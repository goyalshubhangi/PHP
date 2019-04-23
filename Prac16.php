
<html>
<head>
	<title>Shubhangi Goyal</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta author="SHUBHANGI GOYAL">
	<link rel="stylesheet" href="all.css">
	<link rel="icon" href="favicon.png">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script|Indie+Flower|Raleway|Redressed" rel="stylesheet">
</head>
<body>
	<a href='index.php?home'>< Go back</a><a href='index.php?home'>< Go back</a>
	<div class="prac">
	<?php
	$colors=array("red","green","blue","white");
	echo "The given colors are: <br> ";
	for ($i=0; $i<4 ; $i++) { 
		# code...
		echo $colors[$i]."<br>";
	}
	sort($colors);
	echo "<br><br>Colors after sorting are: <br> ";
	for ($i=0; $i<4 ; $i++) { 
		# code...
		echo "<li>".$colors[$i]."<br></li>";
	}
	?>
</div>

</body>
</html>