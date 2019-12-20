# Students CRUD

Uma api simples que implementa o CRUD (Create, Read, Update e Delete) de estudantes.

## Instalação

Clonar o repositório:

```sh
git clone https://github.com/Pr3d4dor/students-crud.git students-crud
cd students-crud
```

Instalar dependências do composer:

```sh
composer install
```

Instalar dependências do npm:

```sh
npm install ou yarn install
```

Compilar assets:

```sh
npm run dev ou yarn dev
```

Configuração do env:

```sh
cp .env.example .env
```

Gerar chave da aplicação:

```sh
php artisan key:generate
```

Crie um banco de dados SQLite. Você também pode usar outro banco de dados (MySQL, Postgres), basta atualizar sua configuração de acordo.

```sh
touch database/database.sqlite
```

Rodar migrations:

```sh
php artisan migrate
```

Rodar seeders:

```sh
php artisan db:seed
```

Iniciar aplicação:

```sh
php artisan serve
```

Gerar documentação automática da API:
```sh
php artisan apidoc:generate
```

## Rotas API

Posts:
- GET /api/students
- GET /api/students/{id}
- POST /api/students
- PUT/PATCH /api/students/{id}
- DELETE /api/students/{id}

Corpo das requisicoes POST, PUT/PATCH:
```
{
    "name": "Gianluca Bine",
    "birthdate": "1996-08-26",
    "grade": "1",
    "postcode": "85015310",
    "street": "Rua Teste",
    "number": "123",
    "complement": "Teste",
    "neighborhood": "Batel",
    "city": "Guarapuava",
    "state": "PR",
    "mother_name": "Marlene Campos Bine",
    "mother_cpf": "41029950997",
    "preferred_day_for_monthly_payment": "5"
}
```

## Testes

Para rodar os testes (Feature e Unitários) basta rodar:
```
/vendor/bin/phpunit ou composer test
```
