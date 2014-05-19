<!DOCTYPE html>
<html>

<head>
    <title>Treerock - Sandbox</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="http://treerock.me/assets/favicon.ico">
    <link href="css/normalize.css" rel="stylesheet">
    <link href="css/base.css" rel="stylesheet">
    <link href="css/sandbox.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://treerock.me/assets/js/html5shiv.js"></script>
      <script src="http://treerock.me/assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <nav class="clearfix">
        <div class="container">
            <ul>
                <li><a href="//treerock.me/">Home</a></li>
                <!-- <li><a href="#">News</a></li> -->
                <li><a href="//sandbox.treerock.me/">Sandbox</a></li>
            </ul>
        </div>
    </nav>
    <header class="section">
        <div class="container">
        	<h1>Treerock</h1>
        	<p class="sub"><span>Sandbox Projects</span></p>    
        </div>
    </header>
    
	<div class="sandbox main section">
        <div class="container">
<?php

    $sb_array = array(
        array (
        	"type"	  => "Web App",
            "tags"	  => "js, angular",
            "name"    => "World Cup Sweep",
            "url"     => "//sandbox.treerock.me/projects/sweep/app/",
            "date"    => "2014-04-01",
            "desc"    => "<p>Another <a href='http://www.angularjs.org/'>AngularJS</a>. This one a CRUD application for creating sweepstake style competitions, where a group of friend can pick teams (randomly) from some sporting event or something.</p>",
            "status"  => "C",
            "version" => 1.0,
            "repo"    => "//github.com/treerock/sweep"
        ),
        array (
            "type"	  => "Design",
            "tags"	  => "css, transitions",
            "name"    => "Sliding Boxes",
            "url"     => "//sandbox.treerock.me/projects/sliding-boxes/",
            "date"    => "2013-10-01",
            "desc"    => "<p>Playing with CSS transitions.</p>",
            "status"  => "C",
            "version" => 1.0
        ),
        array (
            "type"	  => "Technologies",
            "tags"	  => "html5, api",
            "name"    => "Image Loading",
            "url"     => "//sandbox.treerock.me/projects/sb-image-loading/",
            "date"    => "2013-06-01",
            "desc"    => "<p>HTML5 included a <a href='http://www.w3.org/TR/FileAPI/'>File API</a> that provides access to local files.
                          This makes it quite easy to quickly drag and drop images into a web application and manipulate them without having to upload them to the client.</p>
                          <p>This version is a quick go at drag and drop.</p>",
            "status"  => "IP", // In progress
            "version" => 0.1
        )
    );
	for ($i=0; $i < count($sb_array); $i++){
        if($sb_array[$i]["status"] == "C"){
            $date_month = date('M-Y',strtotime($sb_array[$i]["date"]));
            $desc = strip_tags($sb_array[$i]["desc"]);
            $desc = substr($desc, 0, 50)."&hellip;";
            $template = 
"<div class='item clearfix'>".
    "<div class='i-type'>".$sb_array[$i]["type"]."</div>".
	"<div class='i-name'>".
   		"<p><a href='".$sb_array[$i]["url"]."'>".$sb_array[$i]["name"]."&#8669;</a></p>".
	    "<p>".$desc."</p>".
    "</div>".
   	"<div class='i-tags'>".$sb_array[$i]["tags"]."</div>".
    "<div class='i-date'><time datetime='".$sb_array[$i]["date"]."'>".$date_month."</time></div>".
    "<div class='i-links'><a href='".$sb_array[$i]["repo"]."'>Github&#8669;</a></div>".
"</div>";
            echo($template);
        }
    } 
?>
    	</div>
    </div>
    <footer class="section clearfix">
        <div class="container">
        	<p>Fais ce que tu veux.</p>
        </div>
    </footer>
</body>

</html>