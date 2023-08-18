
<h1>Buscador de Cursos Alura</h1>

<p>O Buscador de Cursos Alura é um projeto que tem como objetivo buscar e listar os cursos de programação em PHP disponíveis no site da Alura. Ele utiliza o pacote GuzzleHttp para realizar solicitações HTTP e o Symfony DomCrawler para fazer a análise do conteúdo HTML das páginas.</p>

<h2>Funcionalidades</h2>
<ul>
    <li>Buscar cursos de programação em PHP no site da Alura.</li>
    <li>Listar os cursos encontrados com seus respectivos detalhes.</li>
</ul>

<h2>Requisitos</h2>
<ul>
    <li>PHP 7.4 ou superior.</li>
    <li>Composer instalado para gerenciamento de dependências.</li>
</ul>

<h2>Instalação</h2>
<ol>
    <li>Clone o repositório para o seu ambiente local:</li>
</ol>
<pre><code>git clone https://github.com/YagoB16/buscador-curso.git</code></pre>

<ol start="2">
    <li>Navegue até o diretório do projeto:</li>
</ol>
<pre><code>cd buscador-curso</code></pre>

<ol start="3">
    <li>Instale as dependências usando o Composer:</li>
</ol>
<pre><code>composer install</code></pre>

<h2>Uso</h2>
<ol>
    <li>Execute o script "buscar-curso.php" para buscar e listar os cursos de programação em PHP disponíveis na Alura:</li>
</ol>
<pre><code>php buscar-curso.php</code></pre>

<p>O script irá acessar a URL "https://www.alura.com.br/cursos-online-programacao/php" e exibirá os cursos encontrados.</p>

<h2>Contribuição</h2>
<p>Contribuições são bem-vindas! Se você encontrar algum problema, bug ou tiver sugestões de melhorias, fique à vontade para abrir uma issue ou enviar um pull request.</p>

<h2>Licença</h2>
<p>Este projeto está licenciado sob a licença GPL-3.0. Consulte o arquivo <a href="LICENSE">LICENSE</a> para obter mais detalhes.</p>

</body>
</html>
