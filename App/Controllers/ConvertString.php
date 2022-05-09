<?php

namespace App\Controllers;

class ConvertString{
    
    public function convertToUpperCase($str){
        return strtoupper($str);
    }
    
    public function alternateString($str){
        $chars = str_split($str);
        $result = join(array_map(function($char, $i) {
            return $i % 2 ? strtoupper($char) : strtolower($char);
        }, $chars, array_keys($chars)));

        return $result;
    }
}