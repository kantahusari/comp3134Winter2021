<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$path=isset($_GET['q']) ? $_GET['q'] : '.';
$hidden=basename($path,"/var/www/html")
if(!file_exists($path)){
echo "<h2>File Doesn't Exists ...</h2>"
}else{
echo "<h2>File Exists..</h2>"
print "<pre>";
print_r(scandir($path));
print "</pre>";
?>