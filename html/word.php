<?php

if(isset($_POST['word'])){

header("Content-type: application/vnd.ms-word"); 

# replace Wordfile.doc with whatever you want the filename to default to

header("Content-Disposition: attachment;Filename=Wordfile.doc");

header("Pragma: no-cache");

header("Expires: 0");

$current_date = date('d-m-Y');
$heading = $_POST['heading'];

$content = $_POST['content'];

echo "<div style='font-size: 1em; line-height: 1.6em; color: #4E6CA3; padding:10px;' align='right'>Report Date: $current_date</div>";

echo "<div style='font-size: 1em; line-height: 1.6em; color: #4E6CA3; padding:10px;' align='left'>$heading</div>";

echo "<div style='font-size: 1em; line-height: 1.6em; color: #4E6CA3; padding:10px;' align='left'>$content</div>";;

}

?>