<!DOCTYPE html>
<html>
<head>
	<title>Shubhangi Goyal</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta author="SHUBHANGI GOYAL">
		<link rel="icon" href="favicon.png">
	<link rel="stylesheet" href="all.css">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script|Indie+Flower|Raleway|Redressed" rel="stylesheet">
</head>
<body>
	<a href='index.php?home'>< Go back</a>
	<div class="prac">
<form method="Post" action="">
	Username: <input type="name" name="Name" ><br><br>
	Password: <input type="Password" name="pass"><br><br>
	<input type="submit" name="submit" value="LOGIN">
</form>

<?php
if(isset($_POST['submit']))
{
	$a=$_POST['Name'];
	$b=$_POST['pass'];
	$servername= "localhost";
	$username="root";
	$password="";
	$dbname="example";
	$conn= new mysqli($servername, $username, $password, $dbname);
	if (!$conn) {
		die("Connection failed: " . $conn->connect_error);
	}
	$sql = "SELECT * FROM id_pass WHERE Username = '$a' AND Password = '$b'";
	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result) > 0)	
	{
			echo "<p>WELCOME, $a</p>";
	}
	else
	{
		echo "Username $a does not exist";
			
	}
	mysqli_close($conn);
} 
?>
</div>
</body>
</html>