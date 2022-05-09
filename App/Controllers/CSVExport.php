<?php

namespace App\Controllers;

class CSVExport{
    
    public function export($str){
        $filename = 'output'.date('YmdHis').'.csv';
        // open csv file for writing
        $f = fopen($filename, 'w');

        if ($f === false) {
            die('Error opening the file ' . $filename);
        }
        $data = str_split($str);
        fputcsv($f, $data);
        // close the file
        fclose($f);
        return $filename;
    }

    public function readfile($fileName){        
        $filename = './'.$fileName;
        $data = [];

        // open the file
        $f = fopen($filename, 'r');

        if ($f === false) {
            die('Cannot open the file ' . $filename);
        }

        // read each line in CSV file at a time
        while (($row = fgetcsv($f)) !== false) {
            $data[] = $row;
        }                
        // close the file
        fclose($f);
        // var_dump($data);
        $dtStr = implode(",",$data[0]);
        echo $dtStr;
        return $dtStr;
    }
}