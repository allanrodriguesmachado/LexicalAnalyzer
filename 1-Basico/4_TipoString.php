<div class="modulo">Tipo String</div>

<?php

echo 'Eu sou uma string';
echo '<br>';
var_export("Eu também");
echo '<br>';

//Concatenação
echo "Nós também" . ' somos';
echo '<br>', 'Também aceito', ' virgulas';
echo '<br>';

echo '<br>';
echo "'TESTE' " . ' "TESTE2"' . "\"TESTE3\" ";
echo '<br>';

echo '<br>';
print("Também existe a função print");
echo '<br>';


//Funções de string

echo '<br>' . mb_strtoupper('eu sou uma string');
echo '<br>' . mb_strtolower('EU SOU UMA STRING');
echo '<br>' . ucfirst('só a primeira letra');
echo '<br>' . ucwords('todas as palavras');
echo '<br>' . strlen('Eu também, sou uma string');
echo '<br>' . mb_strlen('Eu também, sou uma string');
echo '<br>' . mb_substr('Eu também, sou uma string', 10, 15);
echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso isso');

