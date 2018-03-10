<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?">
<?php wp_head(); ?>
	<?php wp_head(); ?>

</head>
<body>

	<!-- Header -->
	<div class="container">
		<div class="page-header">
			<div class="row">
				<div class="col-sm-5"></div>
				<div class="col-sm-2"><h1>PHP test</h1></div>
				<div class="col-sm-5"></div>
			</div>
			
		</div>


	<!-- Navigatsioon -->	
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="Index.html">Testsite</a>
				</div>
				<ul class="nav navbar-nav">
      				<li class="active"><a href="Index.html">Home</a></li>
      				<li><a href="Sisu1.html">Page 1</a></li>
			      	<li><a href="Sisu2.html">Page 2</a></li>
			    </ul>

			    <!-- Registratsioon-->
			    <ul class="nav navbar-nav navbar-right">
			      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Register</a></li>

			    <!-- Login -->
			      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			    </ul>	



			</div>
		</nav>