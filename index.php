<?php
$n1 = isset($_GET['numero1']) ? $_GET['numero1']*1 : 0 ;
$n2 = isset($_GET['numero2']) ? $_GET['numero2']*1 : 0 ;
$op = isset($_GET['escolha']) ? $_GET['escolha'] : 0 ;

switch ($op){

    case 'Soma':
        $result = $n1 + $n2;
        echo "O Resultado é: $result";
        break;

    case 'Subtração':
        $result = $n1 - $n2;
        echo "O Resultado é: $result";
        break;

    default: # adicionado
        echo "Sem resultado";
}