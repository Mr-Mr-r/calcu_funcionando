<?php

$Valor=$_POST["firt_number"];
$Valor2=$_POST["secund_number"];
$operacao=$_POST["operacao"];


    switch($operacao){ 
      case "soma" :
                $resultado=$Valor+$Valor2;
                echo "A soma é: ".$resultado;
        break;

        case "sub" :
                $resultado=$Valor-$Valor2;
                echo "A subtraçao é: ".$resultado;
        break;

        case "divisao" :
                $resultado=$Valor/$Valor2;
                echo "A divisão é: ".$resultado;
        break;
        
        case "mult" :
                $resultado=$Valor*$Valor2;
                echo "A multiplicação é: ".$resultado;
        break;
        
    }
?>