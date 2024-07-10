<?php

require ('calcularArea.php');

class CalculaArea {
    // 1
    public function testarArea() {
        $teste1 = new CalculadoraArea();
    
        echo $teste1->areaQuadrado(15) . '
        ';
    }

    // 2
    public function testarRetangulo() {
        $teste2 = new CalculadoraArea();
    
        echo $teste2->areaRetangulo(10, 10) . '
        ';
    }

    // 3
    public function testarCirculo() {
        $teste3 = new CalculadoraArea();
    
        echo $teste3->areaCirculo(20);
    }
}

$teste1 = new CalculaArea();
$teste1->testarArea();

$teste2 = new CalculaArea();
$teste2->testarRetangulo();

$teste3 = new CalculaArea();
$teste3->testarCirculo();

?>