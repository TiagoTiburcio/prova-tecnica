<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Util\PrintList;

class PrincipalTest extends TestCase
{
    public function testArray(): void
    {   
        $testResponse = new PrintList();        
        if (is_array($testResponse->mountList())) {
            $this->assertTrue(true);    
        }else{
            $this->assertTrue(false);    
        }
        
    }
    public function testNull(): void
    {   
        $testResponse = new PrintList();        
        if (!is_null($testResponse->mountList())) {
            $this->assertTrue(true);    
        }else{
            $this->assertTrue(false);    
        }
        
    }

    public function testElements(): void
    {   
        $testResponse = new PrintList();
        $list = $testResponse->mountList();
        if (($list[15] == "ThreeAndFive") &&
            ($list[5] == "Five") &&
            ($list[3] == "Three") 
            ) {
            $this->assertTrue(true);    
        }else{
            $this->assertTrue(false);    
        }
        
    }
}
