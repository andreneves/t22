<?php
/*
2) Conversão de Tempo: Desenvolva um programa em PHP que converta uma quantidade de minutos 
fornecida pelo usuário para horas e minutos. Por exemplo, 150 minutos devem ser convertidos para "2 
horas e 30 minutos".
Dicas:
• Use a divisão inteira para calcular as horas.
• Use o operador de módulo (%) para obter os minutos restantes.
Exemplo de uso:
<?php
// Entrada: $minutos = 150
// Aqui você vai desenvolver seu programa
// Saída: "150 minutos é igual a 2 horas e 30 minutos"
*/

$minutos = 150;

$horas = intval($minutos / 60);
$minutos_restantes = $minutos % 60;

echo "$minutos minutos é igual a $horas horas e $minutos_restantes minutos";

?>