<?php

use Psr\Http\Client\ClientInterface;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

class MeuBuscador
{
    /**
     * Undocumented variable
     *
     * @var [type]
     */
    private $cliente;

    public function __construct(string $cliente)
    {
        $this->cliente = $cliente;
    }

    public function bucador()
    {
        $cliente = new Client();
        $resposta = $cliente->request('GET', $this->cliente);

        //$resposta = $this->cliente->request('GET', $cliente);
        $html = $resposta->getBody();

        $crawler = new Crawler();
        $crawler->addHtmlContent($html); 

        $cursos = $crawler->filter('span.card-curso__nome');

        foreach ($cursos as $curso) { 
            
            echo "<pre>";
            echo $curso->textContent; 
            echo "</pre>";

            // var_dump($curso->textContent);
           
            //return $curso->textContent . "</br>"; 
 
        }
    }
}

?>