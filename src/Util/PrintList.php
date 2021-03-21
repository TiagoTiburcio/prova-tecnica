<?php
namespace App\Util;

class PrintList{
    private function multiple(array $a, int $fator, string $texto)
    {
        for ($i=$fator; $i <= 100 ; $i = $i + $fator) {         
            $a[$i] = $texto;        
        }
        return $a;  
    }
    
    public function mountList() 
    {
        $mutiple = array();
        $print = array();
        $mutiple = $this->multiple($mutiple,3,"Three");
        $mutiple = $this->multiple($mutiple,5,"Five");
        $mutiple = $this->multiple($mutiple,15,"ThreeAndFive");
        for ($i=1; $i <= 100 ; $i++) { 
            if (array_key_exists($i, $mutiple)) {
                $print[$i] =  $mutiple[$i];
                continue;
            }
            $print[$i] = $i;
        }
        return $print;
    }    
}
