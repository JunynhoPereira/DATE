<?php 

// Configuração regional para Windows, Linux e pontuação
setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

// Mostrar %A dia da semana completo, %B Mês completo
echo strftime("%A %B");
echo "<p>";

// Mostrar %a dia da semana abreviado, %b Mês abreviado
echo strftime("%a %b");
echo "<p>";

// Exemplo de frase
echo strftime("Dia da semana é %A do Mês %B");
echo "<p>";

?>