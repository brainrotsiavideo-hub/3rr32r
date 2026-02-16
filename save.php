<?php

$key = $_GET["key"];

$file = "keys.txt";
file_put_contents($file, $key."\n", FILE_APPEND);

echo "OK";

?>
