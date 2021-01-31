<?php 

$diaDaSemanda = 8;//date("w");

switch ($diaDaSemanda) {

    case '0':
    echo "hj é domingo";
    break; 

    case '1':
    echo "hj é segunda";
    break;      
    
    case '2':
    echo "hj é terça";
    break;      
    
    case '3':
    echo "hj é quarta";
    break;      
    
    case '4':
    echo "hj é quinta";
    break;      
    
    case '5':
    echo "hj é sexta";
    break;      
    
    case '6':
    echo "hj é sabado";
    break;

    default:
    echo "Data inválida";
}
?>