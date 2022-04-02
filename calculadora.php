<?php

$Valor1=$_POST["first_number"];
$Valor2=$_POST["secund_number"];
$operacao=$_POST["operacao"];
$resultado;

    switch($operacao){ 
      case "soma" :
                $resultado=$Valor1+$Valor2;
                echo "A soma é: ".$resultado;
        break;

        case "sub" :
                $resultado=$Valor1-$Valor2;
                echo "A subtraçao é: ".$resultado;
        break;

        case "divisao" :
                $resultado=$Valor1/$Valor2;
                echo "A divisão é: ".$resultado;
        break;
        
        case "mult" :
                $resultado=$Valor1*$Valor2;
                echo "A multiplicação é: ".$resultado;
        break;
        
    }
?>
