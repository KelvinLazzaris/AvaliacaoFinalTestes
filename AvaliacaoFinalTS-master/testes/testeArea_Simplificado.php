<?php

require ('calcularArea.php');

class CalculaArea {
    
    public function testarArea() {
        $teste1 = new CalculadoraArea();
    
        echo $teste1->areaQuadrado(15) . '
        ';
        echo $teste1->areaRetangulo(10, 10) . '
        ';
        echo $teste1->areaCirculo(20);
    }
}

$teste1 = new CalculaArea();
$teste1->testarArea();


?>