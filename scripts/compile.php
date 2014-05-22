<?php



$filename = "../src/source.md";
if(!$handle = fopen($filename, 'r')) {
	die('Can\'t open file');
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
	print $post_date;
	$post = blog_post($post_date, $content);
	array_push($page, $post);
}

print_r($page);
function get_content($start_point, $end_point, $file){
	$content = substr($file, $start_point+16, $end_point-1);
	return $content;
}

function blog_post($post_date, $content){
	$blog_post = array(
		"date" => $post_date,
		"content" => $content);
	return $blog_post;
}
 	
// 	header("Location: http://sandbox.treerock.me/projects/treerock/news.php");
// 	die();
?>