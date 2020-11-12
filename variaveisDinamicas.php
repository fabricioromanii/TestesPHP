<?php

$bebida = "refrigerante";

//o nome dessa variavel sera o valor da var bebida;
//estou atribuindo o valor dinamicamente;
//neste momento, $bebida esta recebendo o valor de "refrigerante";
$$bebida = "Coca";

echo $refrigerante;

echo "<hr>";

$assunto = "moto";
$$assunto = "Tornado XR 250";
echo "A moto dele é uma $moto </br>";
echo "No momento o assunto é $assunto. </br>";
    
echo "<hr>";


$assunto = "carro";
$$assunto = "Hilux";
echo "O carro dele é uma $carro </br>";
echo "No momento o assunto é $assunto. </br>";

?>