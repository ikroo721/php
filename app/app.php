<?php

declare(strict_types = 1);

function getdata(string $dir_path): array
{
    $files= [];
    foreach(scandir($dir_path) as $file){
       if(is_dir($file)){
        continue;
       }
       $files[]= $dir_path . $file;
       
      
    }
    return $files;
}
function getfile(string $file_name): array
{
    if(!file_exists($file_name){
        trigger_error("file "  . $file_name , E_USER_ERROR)
    })
    $fil=fopen($file_name, 'r');
    $transactions = [];
    while($transaction = fgetcsv($fil) !== false ){
        $transactions[] =  $transaction ;
    }
return $transactions;
}