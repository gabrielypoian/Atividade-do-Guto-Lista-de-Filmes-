<?php

$filmes = ['Homem Aranha', 'Pantera Negra', 'Homem-Formiga e a Verpa'];
echo count($filmes);

echo "<br>Filmes<br>";

for($i = 0; $i < count($filmes); $i++){
    echo $filmes[$i] . "<br>";
}
