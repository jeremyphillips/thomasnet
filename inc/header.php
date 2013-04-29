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

	
<div class="container">

	<header class="navbar navbar-inverse" role="banner">
		<div class="navbar-inner">
			<div id="logo"></div>
			<ul class="nav">
				<li><a href="#">Suppliers</a></li>
				<li><a href="#">Products</a></li>
				<li><a href="#">CAD Drawings</a></li>
				<li><a href="#">Product News</a></li>
			</ul>

			<div class="search-wrap">
			<form method="get" action="/results.html">
				<input name="what" id="what" maxlength="100" type="text">

				<select>
  					<option value="">All States/Provinces</option>
  					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select>

				<div class="search-filters">
					<span>Search by:</span>
					<label class="radio inline">
						<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
						Category
					</label>
					
					<label class="radio inline">
						<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
						Company Name
					</label>

					<label class="radio inline">
						<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
						Brand
					</label>

					<label class="radio inline">
						<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
						UNSPSC Commodity
					</label>


				</div>

				<button value="search" name="submit" type="submit" class="btn">Submit</button>
			</form>
			</div>



		</div>
	</header>