<?php

$Valor=$_POST["Valor"];
$Valor2=$_POST["Valor2"];
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