<?php

// Chamada ao autoload do composer
require_once __DIR__ . '/vendor/autoload.php';

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$cliente = new Client;
$resposta = $cliente->request('GET', 'https://www.alura.com.br/cursos-online-programacao/php'); // capturado a pagina

$html = $resposta->getBody(); // o conteudo da pagina

$crawler = new Crawler(); // instanciar manipular os pecorrendo os elementos conteudo
$crawler->addHtmlContent($html); // adicionado o conteudo da pagina

$cursos = $crawler->filter('span.card-curso__nome'); // filtar os elementoe por tipo e nome

foreach ($cursos as $curso) { // varrer os elementos filtrados
    echo "<pre>";
    echo $curso->textContent; // exibir por cada elemento tipo string
    echo "</pre>";
}

?>