<?php
	include("scripts/log.json.php");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Treerock - Sandbox</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="http://treerock.me/assets/favicon.ico">
    <link href="css/normalize.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://treerock.me/assets/js/html5shiv.js"></script>
      <script src="http://treerock.me/assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>

	<header class="section">
		<div class="content">
			<h1><span>Treerock</span></h1>
			<p class="sub">Sandbox, Log &amp; Portfolio</p>
		</div>
	</header>

	<div class="section row" id="main">
		<div class="portfolio clearfix">
			<div class="item">
        <div class="content">
  				<h2>Turtles and L-Systems</h2>
  				<p>An attempt at creating a <a href="https://en.wikipedia.org/wiki/Turtle_graphics">turtle graphics tool</a> and using it to draw <a href="https://en.wikipedia.org/wiki/L-system">L-Systems</a>. Javascript and Canvas.</p>
        </div>
				<img src="images/tree.gif">
        <p class="link"><a href="https://treerock.github.io/myturtle/">Link</a></p>
  		</div>
    </div>
		<div class="content log">
			<h2>Activity:</h2>
			<?php echo($logTemplate);	?>
		</div>
	</div>

	<footer class="section">
		<div class="content">
			<p>Fais ce que tu veux.</p>
		</div>
	</footer>

</body>

</html>
