<!DOCTYPE html>
<html>
<head>
	<title>Shubhangi Goyal</title>
	<meta charset="utf-8">
	<meta author="Shubhangi Goyal">
	<link href="https://fonts.googleapis.com/css?family=Redressed" rel="stylesheet">
	<link rel="icon" href="favicon.png">
	<link rel="stylesheet" type="text/css" href="all.css">
	<style>input,select{margin:0;padding:0;border-radius:5%;background-color:#fff;color:#933;font-family:Ubuntu;font-size:100%;}</style>

</head>
<body>
<a href='index.php?home'>< Go back</a><a href='index.php?home'>< Go back</a>
<div class="prac">
<h1> Sample Text </h1>
<p> Hello Mr! How you doin?</p>
<form action="" method="post">
	<select name="language" value=" SELECT LANGUAGE">
		<option>Arabic</option>
		<option>Chinese</option>
		<option>French</option>
		<option>German</option>
		<option>Japanese</option>
		<option>Spanish</option>
		<option>Urdu</option>
	</select>
	<input type="submit" name="submit" value="Translate">
</form>

<?php
if (isset($_POST['submit']))
{
$lang = $_POST['language'];
switch ($lang) {
	case 'Arabic':
		echo "<p class='trans'>مرحبا سيد! كيف حالك؟</p>";
		echo "<p class='sub'>marhabaan syd! kayf halk?</p>";
		break;
	case 'Chinese':
		echo "<p class='trans'>先生你好！ 你好吗？</p>";
		echo "<p class='sub'>Xiānshēng nǐ hǎo! Nǐ hǎo ma?</p>";
		break;
	case 'French':
		echo "<p class='trans'>Bonjour M! Comment vas tu?</p>";
		break;
	case 'German':
		echo "<p class='trans'>Hallo Herr! Wie geht's?</p>";
		break;
	case 'Japanese':
		echo "<p class='trans'>こんにちは、Mr！ 元気かい？</p>";
		echo "<p class='sub'>Kon'nichiwa, Mr! Genki kai?</p>";
		break;
	case 'Spanish':
		echo "<p class='trans'>¡Hola señor! ¿Cómo estás?</p>";
		break;
	case 'Urdu':
		echo "<p class='trans'>سلام محترم! آپکا کیا حال ہے؟</p>";
		break;

	default:
		echo "Invalid Choice";
		break;
}
}
?>
</div>
</body>
</html>
