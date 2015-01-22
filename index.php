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
			<h1>Treerock</h1>
			<p class="sub"><span>Log</span></p>    
		</div>
	</header>
	
	<div class="section grid grid-pad" id="main">
		<div class="col-6-12">
			<div class="content log">
				
				<p>----------------</p>
				<p>..<span style="text-decoration: blink">.</span></p>
				<?php echo($logTemplate);	?>					
				<p>----------------</p>
			</div>
		</div>
		<div class="col-6-12 alt">
			<div class="content">
				<p>Stuff written here.</p>
			</div>
		</div>
	</div>
	
	<footer class="section">
		<div class="content">
			<p>Fais ce que tu veux.</p>
		</div>
	</footer>
	
</body>

</html>