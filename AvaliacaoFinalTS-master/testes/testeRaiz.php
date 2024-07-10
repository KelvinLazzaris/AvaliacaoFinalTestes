<?php 

require ('raizquadrada.php');

class testeRaiz {
    public function testarRaiz() {
       $teste1 = new CalculadoraRaizQuadrada();

       echo $teste1->calcular(100);
    }
}

$teste1 = new testeRaiz();
$teste1->testarRaiz();

?>