<?php

require_once 'vendor/autoload.php';
require_once 'src/MeuBuscador.php';

// use MeuBuscador;

$teste = new MeuBuscador("https://www.alura.com.br/cursos-online-programacao/php");
// echo "<pre>";
echo $teste->bucador();
// echo "</pre>";

echo "<hr>";

//var_dump($teste);

?>