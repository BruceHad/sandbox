<?php

$sb_array = array(
    array (
        "name"    => "Metric Convertion",
        "url"     => "//sandbox.treerock.me/convert/",
        "date"    => "2013-11-01",
        "desc"    => "<p>'Metric Convertions' is an experiment with <a href='http://www.angularjs.org/'>AngularJS</a>. It converts various values (.e.g Temperatures and Heights) from metric to imperial and other scales. I've tried to make heavy use of Angular, e.g. the html (view) is built from data stored in Javascript objects (model) so the page really doesn't work unless Javascript is enabled.</p>
                      <p>It also used <a href='https://developer.mozilla.org/en-US/docs/Web/Guide/CSS/Using_CSS_transitions'>CSS Transitions</a> to make simple animated elements on the page.</p>"
    ),
    array (
        "name"    => "Name",
        "url"     => "//sandbox.treerock.me/name/",
        "date"    => "2099-11-01",
        "desc"    => "<p>Blank Description of the project"
    )
);


for ($i=0; $i < count($sb_array); $i++){
    $date_month = date('M-Y',strtotime($sb_array[$i]["date"]));
    $template = "";
    if($i%3 == 0){
        $template .= "<div class='row clearfix'>";
    }
    $template .= "<div class='col col-4'>";
    $template .= "<div class='item'>";
    $template .= "<h1>".$sb_array[$i]["name"]."</h1>";
    $template .= "<time datetime='".$sb_array[$i]["date"]."'>".$date_month."</time>";
    $template .= "<div class='sb-description'>".$sb_array[$i]["desc"]."</div>";
    $template .= "</div>";
    $template .= "</div>";
    if($i+1%3 == 0 || $i == count($sb_array)-1){
        $template .= "</div><!-- row -->";
    }
    echo($template);
}