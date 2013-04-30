<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js ie6 oldie" lang="en"><![endif]-->
<!--[if IE 7]><html class="no-js ie7 oldie" lang="en"><![endif]-->
<!--[if IE 8]><html class="no-js ie8 oldie" lang="en"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="js/modernizr-latest.js"></script>
</head>

<body>

<div id="signupMod" class="modal hidden">
	<div class="modal-inner">
		<span class="closeMod"></span>
		<h3>Sign Up</h3>
			<!--?php include('inc/form.php'); ?-->
	</div>
</div>

<div id="referMod" class="modal hidden">
	<div class="modal-inner">
		<span class="closeMod"></span>
		<h3>Sign up</h3>
			<?php include('inc/form.php'); ?>
	</div>	
</div>

<div id="overlay"></div>

<?php 
	include('inc/header.php');
 ?>


	<section class="winner">
		<h3>Winner announced here</h3>
		<div class="speaker"></div>
	</section>

	<section class="signup-refer">
		<div class="inner span7">
			<h1>HEADLINE GOES HERE</h1>
			<h3>Intro paragraph goes here leading into:</h3>

			<div class="btn-container span7">
				<h3>Webinar signup and share</h3>
				<a class="btn btn-large btn-primary" id="signUp" href="#">Sign up</a>
				<a class="btn btn-large btn-primary" id="refer" href="#">Refer</a>
			</div>	
		</div>

		<div class="head span5"></div>
	</section>

	<section class="categories row show-grid">

		<h2 class="span12">Subhead goes here leading into 3 categories</h2>

		<div class="span4">
			<div class="inner">
			<h4>RFI FUNTIONALITY</h4>
			<ul>
				<li>Lorem ipsum dolor sit amet, 
consectetur adipiscing elit. Aenean 
ultrices erat non mi mattis eu 
congue lacus pellentesque.</li>
				<li>Lorem ipsum dolor sit amet, 
consectetur adipiscing elit. Aenean 
ultrices erat non mi mattis eu 
congue lacus pellentesque.</li>
			</ul>
			<a href="#" class="btn btn-block">Button</a>
		</div>
		</div>

			<div class="span4">
				<div class="inner">
			<h4>CERTIFICATION SEARCH</h4>
			<ul>
				<li>Lorem ipsum dolor sit amet, 
consectetur adipiscing elit. Aenean 
ultrices erat non mi mattis eu 
congue lacus pellentesque.</li>
				<li>Lorem ipsum dolor sit amet, 
consectetur adipiscing elit. Aenean 
ultrices erat non mi mattis eu 
congue lacus pellentesque.</li>
			</ul>
			<a href="#" class="btn btn-block">Button</a>
		</div>
	</div>

			<div class="span4">
				<div class="inner">
			<h4>PROCUREMENT JOURNAL</h4>
			<ul>
				<li>Lorem ipsum dolor sit amet, 
consectetur adipiscing elit. Aenean 
ultrices erat non mi mattis eu 
congue lacus pellentesque.</li>
				<li>Lorem ipsum dolor sit amet, 
consectetur adipiscing elit. Aenean 
ultrices erat non mi mattis eu 
congue lacus pellentesque.</li>
			</ul>
			<a href="#" class="btn btn-block">Button</a>
		</div>
		</div>

	</section>

<?php 
include('inc/footer.php'); 
?>