<?php

$variavel = array(1, 2, 3, 4, 5);

echo $variavel; #vai dar erro
print_r($variavel); #forma mais fácil de imprimir uma lista

#forma alternativa, útil se quiser fazer algum tratamento
foreach ($variavel as $valor) {
    echo $valor;
}

$maphash = array("A" => 'Abacaxi', 'B' => 'Bola', 'C' => 'Cachorro');
print_r($maphash);
// para imprimir somente um valor do hash ou lista, faça assim:
echo $variavel[0];
echo $maphash['A'];

// # while loop
// $i = 0;
// while (i < 10) {
//     echo $i;
//     $i++;
// }
// 
// #do while loop
// $j = 0;
// do {
//     echo $j;
//     $j++;
// } while (j < 10);
// 
// #for loop
// for ($k = 0; $k < 10; $k++) {
//     echo $i;
// }
// 
// #foreach
// $i = [1, 2, 3, 4, 5, 6, 7, 8, 9];
// foreach ($l as $value) {
//     echo $value;
// }



//Aula sobre Operadores Condicionais
//$x = 4;
//$y = 5;
//
//if ($x % 2 === 1) {
//    echo "Número Ímpar";
//} else {
//    echo "Número Par";
//}
//
// Aula sobre Operações
// $a = 2;
// $b = 3;
// $soma          = $a + $b;
// $subtracao     = $a - $b;
// $multiplicacao = $a * $b;
// $divisao       = $a / $b;
// $exponenciacao = $a ** $b;
// echo $soma;
// echo $subtracao;
// echo $multiplicacao;
// echo $divisao;
// echo $exponenciacao;

// Aula sobre Variáveis
// $mensagem = 'hello world';
// echo $mensagem;
