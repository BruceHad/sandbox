<!DOCTYPE html>
<html>

<head>
    <title>Treerock Sandbox</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="http://treerock.me/assets/favicon.ico" />
   
    <!-- Stylesheets -->
    <link href="css/normalize.css" rel="stylesheet" />
    <link href="css/base.css" rel="stylesheet" media="screen" />
    <link href="css/sandbox.css" rel="stylesheet" media="screen" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <header class="navbar navbar-default clearfix">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="http://www.treerock.me/">Home</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="http://www.treerock.me/blog/">Blog</a>
                </li>
                <li><a href="http://www.treerock.me/work/">Work</a>
                </li>
                <li class="active"><a href="http://sandbox.treerock.me/">Sandbox</a>
                </li>
            </ul>
        </div>
    </header>

    <div class="container main clearfix">
        <div class="row heading clearfix">
            <h1>Treerock</h1>
            <p class="subheading">
                Sandbox Projects
                <br />Learning
                <br />\ experiments
            </p>
        </div>
        <div class="sandbox">
<?php

    $sb_array = array(
        array (
            "name"    => "World Cup Sweep",
            "url"     => "//sandbox.treerock.me/sweep/",
            "date"    => "2014-04-01",
            "desc"    => "<p>Another <a href='http://www.angularjs.org/'>AngularJS</a>. This one a CRUD application for creating Sweep Compeitions, where a group of friend can pick teams (randomly) until there is a winner.</p>",
            "status"  => "C",
            "version" => 1.0
        ),
        array (
            "name"    => "Sliding Boxes",
            "url"     => "//sandbox.treerock.me/sliding-boxes/",
            "date"    => "2013-10-01",
            "desc"    => "<p>Playing with CSS transitions.</p>",
            "status"  => "C" // Complete
            "version" => 1.0
        ),
        array (
            "name"    => "Image Loading",
            "url"     => "//sandbox.treerock.me/sb-image-loading/",
            "date"    => "2013-06-01",
            "desc"    => "<p>HTML5 included a <a href='http://www.w3.org/TR/FileAPI/'>File API</a> that provides access to local files.
                          This makes it quite easy to quickly drag and drop images into a web application and manipulate them without having to upload them to the client.</p>
                          <p>This version is a quick go at drag and drop. I'm quite keen to try manipulating the image onscreen later.</p>",
            "status"  => "IP", // In progress
            "version" => 0.1
        )
    );


    for ($i=0; $i < count($sb_array); $i++){
        if($sb_array[$i]["status"] == "C"){
            $date_month = date('M-Y',strtotime($sb_array[$i]["date"]));
            $template = "";
            $template .= "<div class='item'>";
            $template .= "<h1>".$sb_array[$i]["name"]."</h1>";
            $template .= "<time datetime='".$sb_array[$i]["date"]."'>".$date_month."</time>";
            $template .= "<div class='sb-description'>".$sb_array[$i]["desc"]."</div>";
            echo($template);
        }
    } 
    ?>
        </div>
    </div><!-- .container -->

    <footer>
        <div class="container">
            <p>Fais ce que tu veux.</p>
        </div>
    </footer>
</body>

</html>