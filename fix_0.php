<?php
$file = 'c:/xampp/htdocs/dr-gaurav-das/resources/assets/css/style.css';
$content = file_get_contents($file);
$content = preg_replace('/^\s*0,/m', '0%,', $content);
file_put_contents($file, $content);
echo "Replaced 0, with 0%,";
