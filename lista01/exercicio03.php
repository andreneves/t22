<?php
/*
3) Divisão de Conta em Restaurante: Escreva um programa em PHP que divida o valor total 
de uma conta de restaurante entre um determinado número de pessoas. O usuário deve
fornecer o valor total da conta e o número de pessoas. O programa deve calcular quanto 
cada pessoa deve pagar, incluindo uma gorjeta de 10%.
Dicas:
• Calcule o valor total incluindo a gorjeta.
• Divida o valor total pelo número de pessoas.
Exemplo de uso:
// Entrada: $valor_total = 200, $num_pessoas = 4
// Aqui você vai desenvolver seu programa
// Saída: "Cada pessoa deve pagar: R$55.00
*/

$valor_total_conta = 200;
$numero_pessoas = 4;

$total_por_pessoa = ($valor_total_conta / $numero_pessoas) * 1.1;

echo($total_por_pessoa);

?>