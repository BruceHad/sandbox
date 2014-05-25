<?php

include('Parsedown.php');
$template = "../src/template.html";
$sources = array(
    array(
        "path" => "../src/source.md",
        "type" => "MD")
);

foreach($sources as $source){
    compile_source($source["path"], $source["type"]);
}

function compile_source($src, $type){
    $template = "../src/template.html";
    print $src;
    $handle = fopen($src, "rb") or die("Can't open file.");
    $file = fread($handle, filesize($src));
    fclose($src);
    if($type == "MD"){
        $re = "/\d\d\/\d\d\/\d\d\d\d \d\d:\d\d/";
        preg_match_all($re, $file, $matches, PREG_OFFSET_CAPTURE);
        $matches = $matches[0];
        $posts = array(); // and array of arrays of dates and content
        for($i=0; $i<count($matches)-1; $i++){
            $post_date = ($matches[$i][0]);
            $content_start = $matches[$i][1]+16;
            $content_end = $matches[$i+1][1]-2;
            $length = $content_end - $content_start;
            $content = substr($file, $content_start, $length);
            $post = blog_post($post_date, $content);
            array_push($posts, $post);
        }
        print_r($posts);
    }
}

$filename = "../src/source.md";

$output = "../index.html";

if(!$handle = fopen($filename, 'rb')) {
    die('Can\'t open file, don\'t know why');
}

$handle = fopen($filename, "rb");
$file = fread($handle, filesize($filename));
fclose($handle);

$re = "/\d\d\/\d\d\/\d\d\d\d \d\d:\d\d/";
preg_match_all($re, $file, $matches, PREG_OFFSET_CAPTURE);
$matches = $matches[0];
$page = array();

for($i=0; $i<count($matches)-1; $i++){
    $post_date = ($matches[$i][0]);
    $content_start = $matches[$i][1]+16;
    $content_end = $matches[$i+1][1]-2;
    $length = $content_end - $content_start;
    $content = substr($file, $content_start, $length);
    $post = blog_post($post_date, $content);
    array_push($page, $post);
}
$page = array_map("tag_post", $page);
$html = render_posts($page);
insert_content($html, $template, $output);

// print $html;
//  header("Location: http://sandbox.treerock.me/projects/treerock/news.php");
//  die();

/* Functions */

function blog_post($post_date, $content, $source="treerock"){
    $Parsedown = new Parsedown();
    $blog_post = array(
        "date" => $post_date,
        "content" => $Parsedown->text($content),
        "source" => $source);
    return $blog_post;
}

function tag_post($post){
    $post[date] = "<h2 class='post-date'>".$post[date]."</h2>";
    $post[content] = "<div class='post-content'>".$post[content]."</div>";
    return $post;
}

function render_posts($page){
    $html = "";
    foreach($page as $post){
        $post_html = "<div class='row'>";
        $post_html .= "<div class='col col-3'>".$post[date]."</div>";
        $post_html .= "<div class='col col-9'>".$post[content]."</div>";
        $post_html .= "</div>";
        $html .= $post_html;
    }
    return $html;
}
function insert_content($content, $template, $output){
    $current = file_get_contents($template);    
    $search = "<content>Replace Me</content>";
    $new = str_replace($search, $content, $current);
    file_put_contents($output, $new);
}

?>