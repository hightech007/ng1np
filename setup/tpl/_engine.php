<!DOCTYPE html>
<html lang="sr">
<head>
	<meta charset="utf-8"/>
	<title>ng1np | engine up</title>
	<meta name="description" content="ng1np je engine otvorenog koda, tako ce i ostati.">
	<meta name="keywords" content="ng1np, engine up, lightweight, php, psp, development ...">
	<meta name="robots" content="index,follow"> 
	<meta name="robots" content="all"/>
	<link rel="stylesheet" href="setup/css/stil.css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link rel="shortcut icon" href="media/favicon.ico">
	<link rel="apple-touch-icon" href="media/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="media/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="media/apple-touch-icon-114x114.png">
</head>
<body>
<header>
	<form>	
		<input name="up" method="get" type="search"  class="" placeholder=" Type the command " autofocus>
		<input type="submit" value="ENTER" class="button">
	</form>
</header>

<?php 
echo '<h2>'.$row->title.'</h2>'; 
echo '<p>'.$row->url.'</p>'; 
echo '<img src="'.$row->img.'"><br/>'; 
echo $row->desc.'<br/>'; 
echo $row->date.'<br/>';
?>
</body>
</html>