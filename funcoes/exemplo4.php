<?php

function ola(){
    $argumentos = func_get_args(10);
    return $argumentos;
}



var_dump(ola("bom dia"))

?>