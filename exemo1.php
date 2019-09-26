<?php 

// Data com ano com 4 digitos
echo date("d/m/Y");
echo "<p>";

// Data com ano com 2 digitos
echo date("d/m/y");
echo "<p>";

// Mostrar o dia da semana
echo date("l d/m/y");
echo "<p>";

// Data e hora, minutos e segundos
echo date("d/m/Y H:i:s");
echo "<p>";

// Retorna o timestamp Unix atual
echo time();
echo "<p>";

// Retorna o timestamp Unix de uma data especifica
echo strtotime("1995-11-10");
echo "<p>";

// Converter o timestamp Unix de uma data especifica para visualização normal
$ts = strtotime("1995-11-10");
echo date("d/m/Y", $ts);
echo "<p>";

?>