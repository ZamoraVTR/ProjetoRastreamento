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

3. **Copie o arquivo de exemplo `.env.example` para `.env` e configure as variáveis de ambiente, incluindo as configurações do banco de dados:**

    ```bash
    cp .env.example .env
    ```

4. **Editando arquivo PHP .ini:**

    ```bash
    php artisan key:generate
    ```

5. **Execute as migrações do banco de dados para criar as tabelas necessárias:**

    ```bash
    php artisan migrate
    ```

6. **Inicie o servidor de desenvolvimento:**

    ```bash
    php artisan serve
    ```

    Acesse o aplicativo em [http://localhost:8000](http://localhost:8000).

## Uso

1. Acesse a aplicação no navegador.
2. Insira o CPF na barra de pesquisa.
3. Visualize os detalhes da encomenda, incluindo o histórico de rastreamento.

## Contribuição

Sinta-se à vontade para contribuir com melhorias, correções de bugs ou novas funcionalidades. Abra uma issue ou envie um pull request!

## Licença

Este projeto é licenciado sob a [Licença MIT](LICENSE).
