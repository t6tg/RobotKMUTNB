<!DOCTYPE html><html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Process ...</title>

	<!--iOS -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/main.css">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>
	<style type="text/css">
	.back-link a {
		color: #4ca340;
		text-decoration: none; 
		border-bottom: 1px #4ca340 solid;
	}
	.back-link a:hover,
	.back-link a:focus {
		color: #408536; 
		text-decoration: none;
		border-bottom: 1px #408536 solid;
	}
	h1 {
		height: 100%;
		/* The html and body elements cannot have any padding or margin. */
		margin: 0;
		font-size: 14px;
		font-family: 'Open Sans', sans-serif;
		font-size: 32px;
		margin-bottom: 3px;
	}
	.entry-header {
		text-align: left;
		margin: 0 auto 50px auto;
		width: 80%;
        max-width: 978px;
		position: relative;
		z-index: 10001;
	}
	#demo-content {
		padding-top: 100px;
	}
	</style>
</head>
<body class="demo">		
	<div id="demo-content">


		</header>

		<div id="loader-wrapper">
			<div id="loader"></div>

			<div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>

		</div>

		<div id="content">
		<?php header('Refresh:2 , url=main.php'); ?>
		</div>

	</div>
	<!-- /Demo content -->

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
	<script src="js/main.js"></script>

</body>
</html>
