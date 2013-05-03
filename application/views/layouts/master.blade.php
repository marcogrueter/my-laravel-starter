<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8 ie7" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width">

	<base href="<?php echo URL::base(); ?>/" />

	<title>haves</title>
	<base href="<?php echo URL::base(); ?>/" />

	<!-- <script type="text/javascript" src="//use.typekit.net/owr7xgc.js"></script> -->
	<script type="text/javascript">
		// try{Typekit.load();}catch(e){}
		var BASE = "<?php echo URL::base(); ?>";
	</script>

	<?= Asset::container('head')->scripts() ?>
	<?= Asset::container('head')->styles() ?>

	<!--[if (gte IE 6)&(lte IE 8)]>
	  <script type="text/javascript" src="/js/lib/selectivizr-min.js"></script>
	<![endif]-->

	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>

<body>

	<div class="container">

		<header class="row">
			<div class="twelve columns">
				<img src="http://placehold.it/960x150&text=header" />
			</div>
		</header>

		<div class="row">
			<div class="twelve columns">
				<nav class="top-bar">
				    <ul>
			        	<!-- Title Area -->
			        	<li class="name"><h1><a href="#">Navigation</a></h1></li>
			        	<li class="toggle-topbar"><a href="#"></a></li>
			      	</ul>
			    	<section>
			        <!-- Left Nav Section -->
			        <ul class="left">
						<li class="divider"></li>
	          			<li>
	            			<a class="active" href="#">Navigation Item 1</a>
	            		</li>
	            		<li>
	            			<a href="#">Navigation Item 2</a>
	            		</li>
	            		<li class="has-dropdown">
	            			<a href="#">Navigation Item 3</a>
	            			<ul class="dropdown">
								<li><a href="#">Subnav 3.1</a></li>
								<li><a href="#">Subnav 3.2</a></li>
								<li><a href="#">Subnav 3.3</a></li>
							</ul>
						</li>
			        </ul>
				</nav>
			</div>
		</div>

		<div class="row" role="main" id="main">
			<div class="twelve columns">
				@yield('content')
			</div>
		</div>

	</div>

	<footer>
		<div class="row">
			<div class="twelve columns text-center">
				<h2>footer</h2>
			</div>
		</div>
	</footer>

	<?= Asset::container('bottom')->scripts() ?>

</body>
</html>
