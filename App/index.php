<?php

namespace App;
include('./App/Controllers/ConvertString.php');
include('./App/Controllers/CSVExport.php');
$convertString = new \App\Controllers\ConvertString();
$csvExport = new \App\Controllers\CSVExport();

echo "Insert String: ";
$input_str = fopen("php://stdin","r");
$str = trim(fgets($input_str));

$out = fopen('php://output', 'w'); //output handler
fputs($out, $convertString->convertToUpperCase($str)."\n"); //writing output uppercase
fputs($out, $convertString->alternateString($str)."\n"); //writing output alternate string
fputs($out, "CSV FILE: ".$csvExport->export($str)." created!"."\n"); //Generate CSV
fclose($out); //closing handler