<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>



## Pré-requisitos
Antes de começar a usar o projeto Laravel, certifique-se de que você tenha as seguintes dependências instaladas:

## PHP: 
Certifique-se de ter o PHP instalado na sua máquina. Você pode baixá-lo em php.net.

## Composer: 
O Composer é um gerenciador de dependências para PHP. Certifique-se de tê-lo instalado. Você pode baixá-lo em getcomposer.org.

## MySQL: 
Você precisará de um servidor MySQL instalado para armazenar os dados do projeto. Você pode baixar o MySQL em mysql.com.

Passos para Utilizar o Projeto Laravel
Aqui estão os passos para utilizar o projeto Laravel:

## Clone o Repositório:

Clone o repositório do projeto Laravel em sua máquina usando o seguinte comando no terminal:

### git clone [URL do Repositório]
Substitua [URL do Repositório] pela URL do repositório do projeto Laravel.

# Instale as Dependências:

Navegue até o diretório do projeto Laravel e execute o seguinte comando para instalar as dependências do Composer:

### comando: "composer install"
Isso instalará todas as bibliotecas e dependências necessárias para o projeto.

## Configure o Banco de Dados:

Crie um banco de dados MySQL para o seu projeto. Você pode usar uma ferramenta de gerenciamento de banco de dados, como o phpMyAdmin, para criar o banco de dados.

Depois de criar o banco de dados, abra o arquivo .env no diretório raiz do projeto e atualize as configurações de banco de dados, incluindo o nome do banco de dados, nome de usuário e senha:


DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=seu_banco_de_dados
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha
Execute as Migrações:

Execute as migrações do Laravel para criar as tabelas no banco de dados:

### comando: "php artisan migrate"
Inicie o Servidor de Desenvolvimento:

Inicie o servidor de desenvolvimento do Laravel com o seguinte comando:

### comando: "php artisan serve"
Isso iniciará o servidor na URL http://localhost:8000.

Acesse o Projeto:

Use o insomnia que esta na raiz do projeto para testar aplicação.
