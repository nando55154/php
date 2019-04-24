<?php
$nome = $_POST["nome"];
$precovenda = $_POST["precovenda"];
$quantvend = $_POST["quantvend"];

echo 'o total de vendas do produto '.$nome.' é R$'.$precovenda*$quantvend;
?>