<?php
require 'vendor/autoload.php';


use GuzzleHttp\Client;
use Alura\BuscadorCursos\Buscador;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client(['base_uri' => 'https://www.alura.com.br', 'verify' =>false]);
$crawler = new Crawler();

$buscador = new Buscador($client, $crawler);

$linguagem = 'java';

$cursos = $buscador->buscar('/cursos-online-programacao/'.$linguagem);

foreach($cursos as $curso){
    exibeMensagem($curso);
    
}