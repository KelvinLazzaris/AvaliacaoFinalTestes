<?php

class VerificadorNumeroPrimo {
    public function ehPrimo($numero) {
        if ($numero <= 1) {
            echo "0";
            return false;
        }
        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i == 0) {
                echo "0";
                return false;
            }
        }
        return true;
    }
}
?>