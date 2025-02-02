# Buscador de Cursos Alura

O **Buscador de Cursos Alura** é um projeto de **Web Scraping** desenvolvido em PHP, com o objetivo de buscar e listar cursos de programação em PHP disponíveis no site da Alura. O projeto utiliza:

- **GuzzleHttp** para realizar requisições HTTP;
- **Symfony DomCrawler** para extrair e manipular informações do HTML das páginas.

## Funcionalidades

- Realiza uma requisição HTTP para acessar a página de cursos.
- Analisa o HTML e filtra os cursos utilizando seletores CSS.
- Lista os cursos encontrados com seus respectivos nomes.

## Requisitos

- PHP 7.4 ou superior.
- Composer instalado para gerenciamento de dependências.

## Instalação

1. Clone o repositório para o seu ambiente local:
   ```sh
   git clone https://github.com/YagoB16/buscador-curso.git
   ```

2. Navegue até o diretório do projeto:
   ```sh
   cd buscador-curso
   ```

3. Instale as dependências usando o Composer:
   ```sh
   composer install
   ```

## Uso

Para executar o buscador e listar os cursos de programação em PHP disponíveis na Alura, utilize o seguinte comando:
   ```sh
   php buscar-curso.php
   ```

O script irá acessar a URL **https://www.alura.com.br/cursos-online-programacao/php** e exibirá os cursos encontrados no terminal.

## Contribuição

Contribuições são bem-vindas! Se você encontrar algum problema, bug ou tiver sugestões de melhorias, fique à vontade para abrir uma **issue** ou enviar um **pull request**.

## Licença

Este projeto está licenciado sob a licença **GPL-3.0**. Consulte o arquivo `LICENSE` para obter mais detalhes.

