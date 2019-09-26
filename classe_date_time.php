<?php 

$dt = new DateTime();

$periodo = new DateInterval("P15D");

echo "Data Inicio ";
echo $dt->format("d/m/Y H:i:s");
echo "<p>";

$dt->add($periodo);

echo "Mais 15 dias ";
echo $dt->format("d/m/Y H:i:s");

?>