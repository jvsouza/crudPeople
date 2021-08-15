# Crud

## Objetivo geral:
- Desenvolver um CRUD em PHP, HTML5 e CSS3

## Tarefas específicas:
- Armazenar no banco de dados: username, nome e sobre-nome;
- Utilizar identicador único no username;
- Desenvolver páginas separadas para visualização e edição/criação dos itens.

## Estrutura de pastas e arquivos resumida
```text
crudPeople
├── app
│   ├── Http
│   │   └── Controllers
│   │         └── CrudController.php
│   └── Models
│       └── People.php
├── resources
│   ├── css
│   │   └── app.css
│   └── view
│       └── peoples
│             ├── form.blade.php
│             └── list.blade.php
├── routes
│   └── web
├── .env
├── .gitignore
├── .htaccess
├── Procfile
├── README.md
└── webpack.mix.js
```
## Instalação:
1. [Clonar](https://github.com/jvsouza/crudpeople.git) ou [baixar](https://github.com/jvsouza/crudPeople/archive/refs/heads/main.zip) o repositório;
2. Configurar um banco de dados nas tag `DB_` em .env
3. Criar as tabelas no conforme modelos;
	```sh
	$ php artisan migrate
	```
3. Executar o servidor de desenvolvimento do Laravel ou colocar a pasta dessa aplicação na pasta raiz de um servidor web (apache/nginx).
	```sh
	$ php artisan serve
	```
## Deploy
- [Heroku](https://crudpeople.herokuapp.com/) 

## Shields
[![](https://img.shields.io/github/languages/top/jvsouza/crudPeople)]()
[![](https://img.shields.io/github/languages/count/jvsouza/crudPeople)]()
[![](https://img.shields.io/github/license/jvsouza/crudPeople)]()
[![](https://img.shields.io/github/languages/code-size/jvsouza/crudPeople)]()
[![](https://img.shields.io/github/repo-size/jvsouza/crudPeople)]()
[![](https://img.shields.io/github/last-commit/jvsouza/crudPeople)]()

## Badges 
![HTML5](https://img.shields.io/badge/html5-%23E34F26.svg?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/css3-%231572B6.svg?style=for-the-badge&logo=css3&logoColor=white)
![Bootstrap](https://img.shields.io/badge/bootstrap-%23563D7C.svg?style=for-the-badge&logo=bootstrap&logoColor=white)
![Laravel](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-00000F?style=for-the-badge&logo=mysql&logoColor=white)
![Heroku](https://img.shields.io/badge/Heroku-430098?style=for-the-badge&logo=heroku&logoColor=white)