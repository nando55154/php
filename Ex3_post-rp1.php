<?php
function desconto ($vlrcompra,$quantdesconto){
    $desconto=$vlrcompra*($quantdesconto/100);
    $vlrcompracomdesconto=$vlrcompra-$desconto;
    return $vlrcompracomdesconto;
}

$precototal = $_POST["precototal"];
$desconto = $_POST["desconto"];

$fun = desconto($precototal,$desconto);
echo 'Valor total com desconto: '.$fun;
?>