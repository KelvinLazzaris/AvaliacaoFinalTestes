<?php

require ('fatorial.php');

class testeFatorial {
    public function testarFatorial() {
        $teste1 = new CalculadoraFatorial();
    
        echo $teste1->calcular(15);
    }
}

$teste1 = new testeFatorial();
$teste1->testarFatorial();

?>