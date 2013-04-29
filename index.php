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

<?php 
	include('inc/form-signup.php'); 
	include('inc/form-refer.php'); 
?>
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

	<section class="mailer">
		<?php 
			//require_once "inc/phpmailer/class.phpmailer.php"; 
			//require_once "inc/functions.php";



		?>

		<!--form>
			<input type="text" name="name" id="name" />
			<input type="email" name="email" id="email"/>
			<input type="text" name="question" id="question"/>
		</form-->
		

	</section>
	

	

	<footer role="contentinfo">

	</footer>

</div>



<script src="js/bootstrap.min.js"></script>
<script src="js/plugins.js"></script>

    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-XXXXXX-XX']);
      _gaq.push(['_trackPageview']);
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>

</body>
</html>