# API de Gerenciamento de Produtos

Esta é uma API simples construída com o framework Laravel para realizar operações CRUD (Create, Read, Update, Delete) em produtos.

## Pré-requisitos

Antes de começar, certifique-se de ter instalado em sua máquina:

- [PHP](https://www.php.net/) (versão 7.x ou superior)
- [Composer](https://getcomposer.org/)
- [MySQL](https://www.mysql.com/) ou outro banco de dados de sua escolha
- [Git](https://git-scm.com/)

## Instalação

1. Clone este repositório:

```bash
 Git clone https://github.com/eduardofaria16/Api_gerenciamento.git

1.1 Navegue até o diretório do projeto:

cd seu-projeto

1.2 Instale as dependências do Composer:

composer install

1.3 Crie um arquivo .env na raiz do projeto e configure as informações do banco de dados:

cp .env.example .env

1.4 Gere uma chave de aplicativo:

php artisan key:generate

1.5 Execute as migrações do banco de dados para criar as tabelas necessárias:

php artisan migrate

1.6 Inicie o servidor de desenvolvimento:

php artisan serve












