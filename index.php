<?php

$files = scandir($_SERVER['DOCUMENT_ROOT']);

foreach ($files as $filename) {
	if(!is_file($filename) || $_SERVER['SCRIPT_NAME'] == '/'.$filename) {
		
	}
	else {
		echo '<a href="'.$filename.'" style="text-decoration: none">'.$filename.'</a>';
 	}
}


