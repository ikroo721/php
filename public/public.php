<?php 

declare(strict_types = 1);

$root = dirname(__DIR__) . DIRECTORY_SEPARATOR;
define('APP', $root .   'app' . DIRECTORY_SEPARATOR);
define('FILES', $root .   'trans' . DIRECTORY_SEPARATOR);
define('VIEW', $root .   'view' . DIRECTORY_SEPARATOR);

require APP . "app.php";
$files1=getdata(FILES);
$transactions = [];
foreach($files1 as $file_name){
    $transactions = array_merge($transactions , getfile($files1));

}
print_r($transactions);