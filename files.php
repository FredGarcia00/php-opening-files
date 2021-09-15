<?php

$file = "example.txt";


$handle = fopen($file, "w");
echo $handle;
fclose($handle);

?>