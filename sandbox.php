<?php

function buildItem(){
   //$title, $url, $date, $description
   $template = "<div class='col col-4'>
                    <div class='item'>
                        <h1>Metric Convertions</h1>
                        <time datetime='2013-11-01'>November 2013</time>
                        <div class='sb-description'>
                            <p>'Metric Convertions' is an experiment with <a href='http://www.angularjs.org/'>AngularJS</a>. It converts various values (.e.g Temperatures and Heights) from metric to imperial and other scales. I've tried to make heavy use of Angular, e.g. the html (view) is built from data stored in Javascript objects (model) so the page really doesn't work unless Javascript is enabled.</p>
                            <p>It also used <a href='https://developer.mozilla.org/en-US/docs/Web/Guide/CSS/Using_CSS_transitions'>CSS Transitions</a> to make simple animated elements on the page.</p>
                        </div>
                    </div>
                </div>";
    return $template;
}

for ($i=0; $i < 5; $i++){
    echo(buildItem());
}