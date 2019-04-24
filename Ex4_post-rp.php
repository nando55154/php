<?php
$a = array();
$a[0] = (10);
$a[1] = (8);
$a[2] = (3);
for ($i=0; $i<=2; $i++){
echo "Posição: $i - valor: $a[$i] <br>";
}
function somar($num1,$num2) {
$somar = $num1 + $num2;
return $somar;
}
$somar = somar($a[1], 5);
echo $somar;

//parenteses no lugar dos couchetes para informar uma posição de array
//a função dentro do for nao funciona 
// no echo do for após posição não é necessario $a[$i] porque assim eles iriram mostrar o valor ao enves da posição e o depois de "valor" o $a deva ser seguido de [$i] para mostrar o valor 
//para poder chamar a função é necessario fazer isso dentro de uma variavel
//o for esta indo até 3 que não existe no array
?>

