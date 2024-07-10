<?php

require ('gerarAleatorio.php');

class testeAleatorio {
    public function testarAleatorio() {
        $teste1 = new GeradorNumeroAleatorio();
    
        echo $teste1->gerar(1, 5);
    }
}

$teste1 = new testeAleatorio();
$teste1->testarAleatorio();

?>