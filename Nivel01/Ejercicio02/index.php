<?php

    function dividir(int $num1, int $num2) : string {
        if ($num2 == 0) {
            $msg = "Error en la línea " . __LINE__ . ": No se puede dividir en 0" . PHP_EOL;
                }  else {
                    $msg = $num1 . "/" . $num2 . "= " . ($num1/$num2) . PHP_EOL;
                }      
        return $msg . "Esta operación se hizo con la funcion: " . __FUNCTION__;
    }

    echo dividir(10, 0);

    echo PHP_EOL. dividir(15, 5);

?>