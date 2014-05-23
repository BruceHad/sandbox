<?php

$filename = "../src/source.md";
$template = "../src/template.html";
$output = "../src/output.html";

if(!$handle = fopen($filename, 'rb')) {
	die('Can\'t open file, don\'t know why');
}

$handle = fopen($filename, "rb");
$file = fread($handle, filesize($filename));
fclose($handle);

$re = "/\d\d\/\d\d\/\d\d\d\d \d\d:\d\d/";
preg_match_all($re, $file, $matches, PREG_OFFSET_CAPTURE);

$page = array();

for($i=0; $i<count($matches[0])-1; $i++){
	$post_date = ($matches[0][$i][0]);
 	$content = get_content($matches[0][$i][1], $matches[0][$i+1][1], $file);
	$post = blog_post($post_date, $content);
	array_push($page, $post);
}
$page = array_map("tag_post", $page);
$html = render_posts($page);
insert_content($html, $template, $output);
//print $html;


/* Functions */
function get_content($start_point, $end_point, $file){
	$content = substr($file, $start_point+16, $end_point-1);
	return $content;
}

function blog_post($post_date, $content, $source="treerock"){
	$blog_post = array(
		"date" => $post_date,
		"content" => $content,
    	"source" => $source);
	return $blog_post;
}

function tag($name, $content, $attributes) {
  	$tag = array(
        "name" => $name, 
        "attributes" => $attributes, 
        "content" => $content);
    return $tag;
}

function tag_post($post){
    $post[date] = "<h2>".$post[date]."</h2>";
    $post[content] = "<div class='post-content'>".$post[content]."</div>";
    return $post;
}

function render_posts($page){
    $html = "";
    foreach($page as $post){
        //print_r($post);
        $post_html = "<div class='post'>".$post[date].$post[content]."</div>";
        $html .= $post_html;
    }
    return $html;
}
function insert_content($content, $template, $output){
    $current = file_get_contents($template);
    
    $search = "<content>Replace Me</content>";
    $new = str_replace($search, $content, $current);
    print_r($current);
    print_r($new);
    file_put_contents($output, $new);
}
 	
// 	header("Location: http://sandbox.treerock.me/projects/treerock/news.php");
// 	die();
?>