<?php

	$data = $_POST["data"];
	$file = fopen("data.txt", "w+") or die("File open failed");
	fwrite($file, $data);
	fclose($file);
	echo "test";
?>
