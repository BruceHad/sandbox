<?php

function csv_to_array($filename='', $delimiter=','){
	// http://gist.github.com/385876
    if(!file_exists($filename) || !is_readable($filename))
        return FALSE;

    $header = NULL;
    $data = array();
    if (($handle = fopen($filename, 'r')) !== FALSE)
    {
        while (($row = fgetcsv($handle, 1000, $delimiter)) !== FALSE)
        {
            if(!$header)
                $header = $row;
            else
                $data[] = array_combine($header, $row);
        }
        fclose($handle);
    }
    return $data;
}

$sb_array = csv_to_array('portfolio.txt');

$template = "";
for ($i=0; $i < count($sb_array); $i++){
	if($sb_array[$i]["status"] == "C"){
		$date_month = date('M-Y',strtotime($sb_array[$i]["date"]));
		$desc = strip_tags($sb_array[$i]["desc"]);
		$desc = substr($desc, 0, 100)."&hellip;";
		$temp = 
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
		$template .= $temp;
	}
} 
