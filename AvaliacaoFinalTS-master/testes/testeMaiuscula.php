<?php 

require ('converteMaiuscula.php');

class testeMaiusculaEMinuscula {
    public function testarMaiuscula() {
       $teste1 = new ConversorString();

       echo $teste1->paraMaiusculas('AAAAAAAAAAaaaaaaaa') . '
       ';
    }

    public function testarMinuscula() {
        $teste2 = new ConversorString();
 
        echo $teste2->paraMinusculas('AAAAAAAAAAaaaaaaaa');
        
    }
}

$teste1 = new testeMaiusculaEMinuscula();
$teste1->testarMaiuscula();

$teste1 = new testeMaiusculaEMinuscula();
$teste1->testarMinuscula();

?>