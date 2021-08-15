# Inoa Challenge

Objetivo geral:
- CRUD :: Create, Read, Upload and Delete.
Tarefas específicas:
- Campos: username, nome e sobre nome;
- username como chave primária.

## Estrutura de pastas e arquivos
```text
crudPeople
├── app
├── database
├── resources
├── routes
├── .env
├── .gitignore
├── .htaccess
├── artisan
├── Procfile
├── README.md
├── server.php
└── webpack.mix.js
```
## Pré-requisitos
- [Composer](https://getcomposer.org/)
- [NPN](https://www.npmjs.com/)
- [Laravel](https://laravel.com/)

## Instalação;
1. [Clonar](https://github.com/jvsouza/crudpeople.git) | [baixar](https://github.com/jvsouza/crudpeople/master.zip) o repositório;
2. Atualizar o banco de dados;
	```sh
		$ php artisan migrate
	```
3. Executar o servidor.
	```sh
		$ php artisan serve
	```
