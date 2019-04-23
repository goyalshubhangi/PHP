<!DOCTYPE html>
<html>
<head>
	<title>Shubhangi Goyal</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta author="SHUBHANGI GOYAL">
	<link rel="stylesheet" href="all.css">
	<link rel="icon" href="favicon.png">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script|Indie+Flower|Raleway|Redressed" rel="stylesheet">
</head>
<body>
	<a href='index.php?home'>< Go back</a>
	<div class="prac">
	<form method="post" action="">
		Enter Number: <input type="Number" name="num">
		<input type="submit" name="submit" value="Print">
	</form>

	<?php
	if(isset($_POST['submit'])){
		$a=$_POST['num'];
	echo "RESULT:<p style='text-align:left'>";
	for($i=1;$i<=$a;$i++)
	{
		for($j=1;$j<=$i;$j++)
		{
			echo " * ";
		}
		echo "<br>";
	}
	echo "</p>";
}
	?>
	</div>

</body>
</html>