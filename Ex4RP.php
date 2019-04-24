<?php
function desconto ($vlrcompra,$quantdesconto){
    $desconto=$vlrcompra*($quantdesconto/100);
    $vlrcompracomdesconto=$vlrcompra-$desconto;
    return $vlrcompracomdesconto;
}
$m= desconto(1000,10);
echo $m. "<br>";
$m= desconto(1500,5);
echo $m;
?>