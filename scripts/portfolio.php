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
		$type = $sb_array[$i]["type"];
		$url = $sb_array[$i]["url"];
		$name = $sb_array[$i]["name"];
// 		$desc = strip_tags($sb_array[$i]["desc"]); $desc = substr($desc, 0, 1000)."&hellip;";
		$desc = $sb_array[$i]["desc"];
		$tags = $sb_array[$i]["tags"];
		$date = $sb_array[$i]["date"];
		$date_month = date('M-Y',strtotime($date));
		$repo = $sb_array[$i]["repo"];
		$itype = "<div class='i-type'>".$type."</div>";
		$iname = "<div class='i-name'><p><a href='".$url."'>".$name."&#8669;</a></p><div class='i-desc'>".$desc."</div></div>";
		$itags = "<div class='i-tags'>".$tags."</div>";
		$idate = "<div class='i-date'><time datetime='".$date."'>".$date_month."</time></div>";
		if($repo == '') $irepo = "";
		else $irepo = "<div class='i-links'><a href='".$repo."'>Github&#8669;</a></div>";
		$temp = 
			"<div class='item clearfix'>".
				$itype.
				$iname.
				$itags.
				$idate.
				$irepo.
			"</div>";
		$template .= $temp;
	}
} 
