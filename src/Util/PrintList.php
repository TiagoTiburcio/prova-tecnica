<?php
namespace App\Util;

class PrintList{
    
    /**
     *  function multiple
     *  Responsável por posicionar no Array $a os multiplicadores do fator $fator iniciando a sequência em $fator adicionando o $texto na posição $i do Array.   
     */
    private function multiple(array $a, int $fator, string $texto)
    {
        for ($i=$fator; $i <= 100 ; $i = $i + $fator) {         
            $a[$i] = $texto;        
        }
        return $a;  
    }
    /**
     * Monta array resultado conforme solicitado na prova técnica
     */
    public function mountList() 
    {
        $mutiple = array();
        $print = array();
        $mutiple = $this->multiple($mutiple,3,"Three"); // Posiciona Multiplos de 3
        $mutiple = $this->multiple($mutiple,5,"Five");  // Posiciona Multiplos de 5
        $mutiple = $this->multiple($mutiple,15,"ThreeAndFive"); // Posiciona Multiplos de 15 - 15 é minimo divisor comun entre 3 e 5 que significa que todos os seus multiplos são os de 3 e 5 por conseqência.
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
