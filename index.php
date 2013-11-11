<!DOCTYPE html>
<html>

<head>
    <title>Treerock Sandbox Projects</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" />
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Vollkorn:400italic,400" />

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
                <a class="navbar-brand" href="http://www.treerock.me/">Treerock</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="#blog">Blog</a>
                </li>
                <li><a href="#work">Work</a>
                </li>
                <li class="active"><a href="#sandbox">Sandbox</a>
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

        <div class="container clearfix sandbox">
            <?php include('sandbox.php'); ?>
        </div>
    </div>

    <footer>
    </footer>
    <!--<script src="//code.jquery.com/jquery.js"></script>-->
    <!--<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js"></script>-->
    <!--<script src="js/convert.js"></script>-->
</body>

</html>