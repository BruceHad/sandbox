<?php

// Function to check for valid urls

function validURL($string){
	$regex = "(\:\/\/)?([a-z0-9-.]*)\.([a-z]{2,4})(\/([a-z0-9+\$_-]\.?)+)*\/?"; 
	if( preg_match( "/$regex/", $string ) == 1 ) {
  	return True;
	} else {
		return False;
	}
}

// http://www.ravelrumba.com/blog/json-google-spreadsheets/
// Function to convert CSV into associative array
function csvToArray($file, $delimiter) {	
  if (($handle = fopen($file, 'r')) !== FALSE) { 
		
    $i = 0; 
    while (($lineArray = fgetcsv($handle, 4000, $delimiter, '"')) !== FALSE) { 
			// check for csv
			if(count($lineArray) < 3){
				return "error";
			}
      for ($j = 0; $j < count($lineArray); $j++) { 
        $arr[$i][$j] = $lineArray[$j];
      } 
      $i++; 
    } 
    fclose($handle); 
	} else {
		return "error";
	}
  return $arr; 
} 
 
// Turn CSV from google $feed into array of data.
$feed = 'https://docs.google.com/spreadsheets/d/1iv715qgjkaSCpnJMprnrmxMkwxqioeENloavDN7HWJk/export?gid=0&format=csv';
$data = csvToArray($feed, ',');
$keys = array();
$logArray = array();
$count = count($data) - 1;// Set number of elements (minus 1 because we shift off the first row)
$labels = array_shift($data);  //Use first row for names 
foreach ($labels as $label) {
	$keys[] = $label;
}
for ($j = 0; $j < $count; $j++) {
	$d = array_combine($keys, $data[$j]);
	$logArray[$j] = $d;
}

// Sort by date descending
// https://stackoverflow.com/questions/2699086/sort-multi-dimensional-array-by-value
function sortByOrder($a, $b) {
  return strtotime($b['date']) - strtotime($a['date']);
}
usort($logArray, 'sortByOrder');
	
// Convert array into text log.
$logTemplate = "";
for ($i = 0; $i < count($logArray); $i++){
	$rec = $logArray[$i];
	$row = "";
	$row .= $rec[date]." ";
	$row .= " **".$rec[action]."** ";
	if(validURL($rec[url])){
		$row .= "<a href='".$rec[url]."'>".$rec[name]."</a>";
	} else {
		$row .= $rec[name]." ";
	}
	if(validURL($rec[repoURL])){
		$row .= " <a href='".$rec[repoURL]."'>github</a>";
	}
	$row .= "...";
	$logTemplate .= "<p>".$row."</p>".PHP_EOL; 
}

?>












