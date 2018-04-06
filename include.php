<?php
//auto include everything in /var/www/include/
$path = "/var/www/html/include/*.php";
foreach(glob($path) as $filename){
require_once $filename;
};
?>
