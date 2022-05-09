<?php 

class ConvertStringTest extends \PHPUnit\Framework\TestCase {
    public function testConvertToUpperCase(){
        $convertString = new App\Controllers\ConvertString;
        
        $result = $convertString->convertToUpperCase("hello world");
        $this->assertEquals("HELLO WORLD", $result);
    }

    public function testAlternateString(){
        $convertString = new App\Controllers\ConvertString;
        
        $result = $convertString->alternateString("hello world");
        $this->assertEquals("hElLo wOrLd", $result);
    }

    public function testExportCsv(){
        $exportCSV = new App\Controllers\CSVExport;        
        $csvFile = $exportCSV->export("hello world");        
        $result = $exportCSV->readfile($csvFile);        
        $this->assertEquals("h,e,l,l,o, ,w,o,r,l,d", $result);
    }
}