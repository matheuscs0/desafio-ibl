# BookHub

## Descrição do Projeto

O **BookHub** é uma aplicação web desenvolvida como um teste para a empresa IBL Logística. A plataforma permite que os usuários cadastrem, visualizem e pesquisem livros de forma simples e intuitiva. Utilizando o Laravel como backend e JavaScript para o frontend, o projeto foi criado para demonstrar habilidades em desenvolvimento web e gerenciamento de dados.

## Funcionalidades

- **Cadastro de Livros**: Permite a adição de novos livros, com campos para título, autor, edição, ISBN, editora e número de páginas.
- **Visualização de Livros**: Os usuários podem visualizar uma lista de livros cadastrados, com detalhes sobre cada um.
- **Busca de Livros**: Implementa uma funcionalidade de busca que permite filtrar livros pelo título, autor ou editora.

## Tecnologias Utilizadas

- **Backend**: PHP, Laravel
- **Frontend**: HTML, CSS, JavaScript, Tailwind CSS
- **Banco de Dados**: PostgreSQL
- **Outras Ferramentas**: Vite para build de assets

## Instalação

### Requisitos

- PHP 8.0 ou superior
- Composer
- PostgreSQL

### Passos para Instalação

1. Clone o repositório:
   ```bash
   git clone <URL do repositório>
   cd desafio-ibl

Crie um arquivo .env e configure suas credenciais de banco de dados:

.env
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=livraria_db
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha

php artisan serve
