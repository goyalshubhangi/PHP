<!DOCTYPE html>
<html>
<head>
	<title><title>Shubhangi Goyal</title>
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
	<form action='' method='post'>
	<p>When is your bday<br> <input type='date' name='a12' value='2000-07-09'></p>
	<input type='submit' name='Submit12' value='Count days to your birthday' style='cursor:pointer;padding:12px'>
</form>

<?php
if (isset($_POST['Submit12']))
{
	$a=$_POST['a12'];
	$b=updateDate($a)->format("Y-m-d");
	$c=date("Y-m-d");

	$date1=date_create($b);
	$date2=date_create($c);

	if ($date1>$date2)
	{
		$diff=date_diff($date2,$date1)->format("%R%a days");
		echo "<p>Number of days to your birthday=$diff</p>
		";
	}

	elseif ($date1==$date2)
	{
		echo "<p>Today is your birthday</p>
		<img style='width:100%' src='https://media1.tenor.com/images/96e8ce44686d720428d7b4ea2385a516/tenor.gif?itemid=4149594'>
		";
	}

	else {
		$b=updateDatePlus1($a)->format("Y-m-d");
		$c=date("Y-m-d");
		$date1=date_create($b);
		$date2=date_create($c);
		$diff=date_diff($date2,$date1)->format("%R%a days");
		echo "<p>Number of days to your birthday=$diff</p>
		";
	}
}

function updateDate($dateString)
{
	$suppliedDate=new \DateTime($dateString);
	$currentYear=(int)(new \DateTime())->format('Y');
	return (new \DateTime())->setDate($currentYear, (int)$suppliedDate->format('m'), (int)$suppliedDate->format('d'));
}

function updateDatePlus1($dateString)
{
	$suppliedDate=new \DateTime($dateString);
	$currentYear=new \DateTime();
	$temp=date_modify($currentYea,"+1 year");
	return (new \DateTime())->setDate($currentYear, (int)$suppliedDate->format('m'), (int)$suppliedDate->format('d'));
}
?>
</div>
</body>
</title>