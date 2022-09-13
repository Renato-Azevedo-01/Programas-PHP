<?php
#funções variadas 
function media(){
    $args = func_get_args();
    $tot = func_num_args();
    $soma = 0;
    for($i=0;$i < $tot; $i++){
        $soma += $args[$i];    
    }
    return $soma/$tot;
} 

function produto(){
    $args = func_get_args();
    $tot = func_num_args();
    $produto = 1;
    for($i=0;$i < $tot; $i++){
        $produto *= $args[$i];        
    }
    return $produto;
}

function raiz(){
    $args = func_get_args();
    $raiz = pow($args[0],(1/$args[1]));
    
    return $raiz;
} 

function potencia(){
    $args = func_get_args();
    return pow($args[0],$args[1]);

} 
?>