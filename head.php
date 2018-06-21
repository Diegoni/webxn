<!DOCTYPE html>
<html lang="en">
<head>
<title>XNativa</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Prefabrication Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/bootstrap2.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/font-awesome.css" type="text/css" media="all" />
<!--// css -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>

<link rel="stylesheet" href="librerias/WOW/css/libs/animate.css">
</head>
<body>

<?php

include_once('lenguage.php');

function getMenu($menu, $lenguage)
{
	$html = '<!-- navigation -->
	<div class="nav-links">	
	<nav class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button>
				<a class="navbar-brand" href="index.php"><img src="images/xnativa_logo.png" /></a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav link-effect">';
	if($menu == 1)
	{
		$html .= '<li class="active"><a href="index.php">'.$lenguage['quienes_somos'].'</a></li>';
	}else
	{
		$html .= '<li><a href="index.php">'.$lenguage['quienes_somos'].'</a></li>';
	}
	
	if($menu == 2)
	{
		$html .= '<li class="active"><a href="servicios.php">'.$lenguage['soluciones'].'</a></li>';
	}else
	{
		$html .= '<li><a href="servicios.php">'.$lenguage['soluciones'].'</a></li>';
	}
	
	if($menu == 3)
	{
		$html .= '<li class="active"><a href="projects.html">'.$lenguage['mercados'].'</a></li>';
	}else
	{
		$html .= '<li><a href="projects.html">'.$lenguage['mercados'].'</a></li>';
	}


	if($menu == 4)
	{
		$html .= '<li class="active"><a href="contacto.php">'.$lenguage['contacto'].'</a></li>';
	}else
	{
		$html .= '<li><a href="contacto.php">'.$lenguage['contacto'].'</a></li>';
	}


	$html .= '</ul>
			</div>
		</div>
	</nav>
</div>';

	return $html;
}
?>			
