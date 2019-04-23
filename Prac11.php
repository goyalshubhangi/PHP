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
	<h3>This is the sample string</h3>
	 <p>You're the light, you're the night<br>
		You're the color of my blood<br>
		You're the cure, you're the pain<br>
		You're the only thing I wanna touch<br>
		Never knew that it could mean so much, so much<br>
		You're the fear, I don't care<br>
		'Cause I've never been so high<br>
		Follow me to the dark<br>
		Let me take you past our satellites<br>
		You can see the world you brought to life, to life<br>
		So love me like you do, lo-lo-love me like you do<br>
		Love me like you do, lo-lo-love me like you do<br>
		Touch me like you do, to-to-touch me like you do<br>
		What are you waiting for?<br>
	</p>
	<p>Enter the string you want to find<br></p>
	 <input type="text" name="string1">
	<input type="submit" name="submit" value="Check">
</form>

<?php
if(isset($_POST['submit']))
{
	$a=$_POST['string1'];
	echo "The string to be found is ".$a."<br>";
	$b="You're the light, you're the night<br>
		You're the color of my blood<br>
		You're the cure, you're the pain<br>
		You're the only thing I wanna touch<br>
		Never knew that it could mean so much, so much<br>
		You're the fear, I don't care<br>
		'Cause I've never been so high<br>
		Follow me to the dark<br>
		Let me take you past our satellites<br>
		You can see the world you brought to life, to life<br>
		So love me like you do, lo-lo-love me like you do<br>
		Love me like you do, lo-lo-love me like you do<br>
		Touch me like you do, to-to-touch me like you do<br>
		What are you waiting for?";
		if(strpos($b,$a)===false)
		{
			echo "Match not found<br>";

		}
		else
		{
			echo "Match Found<br>";
		}
}
?>
</div>
</body>
</html>