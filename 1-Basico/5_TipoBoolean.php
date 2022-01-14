<div class="modulo">Tipo Boolean</div>

<?php

echo TRUE;
echo '<br>';
echo FALSE;

echo '<br>' . var_export(true);
echo '<br>' . var_export(false);
echo '<br>' . var_export('false');
echo '<br>' . is_bool('true');
echo '<br>' . is_bool(false);

// Fazer as regras de conversões

echo '<br>' . var_export((bool) 0); //Apenas zero é falso
echo '<br>' . var_export((bool) 20);
echo '<br>' . var_export((bool) -1);
echo '<br>' . var_export((bool) 0.00000000001);
echo '<br>' . var_export((bool) "");
echo '<br>' . var_export((bool) "0"); // Retornar falso
echo '<br>' . var_export((bool) " ");
echo '<br>' . var_export((bool) "00");
echo '<br>' . var_export((bool) "false");
echo '<br>' . var_export(!!"false");
