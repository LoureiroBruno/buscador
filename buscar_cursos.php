<?php

// Chamada ao autoload do composer
require_once __DIR__ . '/vendor/autoload.php';

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$cliente = new Client;
$retorno = $cliente->request('GET', 'https://cursos.alura.com.br/category/programacao/php');

$html = $retorno->getBody();

$crawler = new Crawler();
$crawler->addHtmlContent($html);


?>