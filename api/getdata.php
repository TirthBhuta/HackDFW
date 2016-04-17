<?php
	$file = fopen("data.txt", "r") or die("Unable to open file");
	$data = fread($file, filesize("data.txt"));

	$data = explode(",", $data);
	echo json_encode($data);
?>
