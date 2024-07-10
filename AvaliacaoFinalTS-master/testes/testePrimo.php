<?php

require ('primo.php');

class testePrimo {
    public function testarPrimo() {
        $teste1 = new VerificadorNumeroPrimo();
    
        echo $teste1->ehPrimo(7);
    }
}

$teste1 = new testePrimo();
$teste1->testarPrimo();

?>