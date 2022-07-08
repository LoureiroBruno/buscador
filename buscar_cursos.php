<?php

namespace GuzzleHttp;

use GuzzleHttp\Client;

$cliente = new Client();
$retorno = $cliente->request('GET', 'https://api.github.com/repos/guzzle/guzzle');

echo "teste";
?>