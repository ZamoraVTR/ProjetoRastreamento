# Rastreamento de Entregas com Laravel

Este projeto Laravel foi desenvolvido para fornecer uma solução de rastreamento de entregas, permitindo que os usuários pesquisem por CPF e visualizem os detalhes da encomenda, incluindo o histórico de rastreamento.

## Funcionalidades

- Pesquisa por CPF para obter informações da encomenda.
- Exibição detalhada da encomenda, incluindo histórico de rastreamento.
- Interface amigável e fácil de usar.

## Pré-requisitos

- [PHP](https://www.php.net/) >= 7.4
- [Composer](https://getcomposer.org/)
- [MySQL](https://www.mysql.com/) ou outro sistema de gerenciamento de banco de dados suportado pelo Laravel.
- [Laravel](https://laravel.com/) >= 7.0.0

## Configuração

1. **Clone o repositório:**

    ```bash
    git clone https://github.com/ZamoraVTR/ProjetoRastreamento.git
    cd ProjetoRastreamento
    ```

2. **Instale as dependências do Composer:**

    ```bash
    composer install
    ```

3. **Execute as migrações do banco de dados para criar as tabelas necessárias:**

    ```bash
    php artisan migrate
    ```

4. **Inicie o servidor de desenvolvimento:**

    ```bash
    php artisan serve
    ```

    Acesse o aplicativo em [http://localhost:8000](http://localhost:8000).

## Uso

1. Acesse a aplicação no navegador.
2. Insira o CPF na barra de pesquisa.
3. Visualize os detalhes da encomenda, incluindo o histórico de rastreamento.

## Solução de Erros

### 1. Acesso a API

Caso tenha problemas para acessar a API da aplicação, encontrei uma solução , adicionando o arquivo "cacert.pem" , com esse arquivo adicionado, abra o seu arquivo "php.ini" busque pela linha "openssl.cafile=" , e aponte para  o caminho em que se encontra o arquivo "cacert.pem" , dentro da pasta do projeto.

### 2. Outros Problemas

Se encontrar outros problemas, consulte a [documentação do Laravel](https://laravel.com/docs) ou abra uma issue no repositório.