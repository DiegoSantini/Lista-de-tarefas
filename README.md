📝 ###Aplicação de Tarefas Agendadas (Laravel + Vue)

Projeto fullstack para cadastro e notificação de tarefas, desenvolvido como teste prático para vaga de Programador Pleno.

✅ Funcionalidades
Cadastro de tarefas com:

Título

Descrição

Data/hora agendada

Flag de notificação

Comando Artisan que busca tarefas agendadas e despacha um Job

Job simula o envio da notificação e marca a tarefa como “notificada”

API para listagem das tarefas

Frontend em Vue 3 que consome a API e exibe tarefas com destaque visual

🛠️ Tecnologias Utilizadas
### Backend
Laravel 12.x

PHP 8.2+

SQLite

### Frontend
Vue.js 3.4

Vite 6.x

Pinia 2.1

TailwindCSS 4.x

🚀 Como Rodar o Projeto
### 1. Clone o repositório
git clone https://github.com/DiegoSantini/Lista-de-tarefas.git
cd Lista-de-tarefas
### 2. Backend (Laravel)
Instale as dependências:
cd tarefas-api
composer install

### Crie o arquivo .env:
cp .env.example .env

### Edite o .env com as variáveis abaixo:
APP_NAME=Laravel
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost:8000
DB_CONNECTION=sqlite
DB_DATABASE=database/database.sqlite

### Crie o arquivo do banco de dados:
touch database/database.sqlite
Ou crie manualmente: tarefas-api/database/database.sqlite

### Gere a chave da aplicação:
php artisan key:generate
### Execute as migrations e seeds:
php artisan migrate:fresh --seed
### Inicie o servidor:
php artisan serve

### Acesse a API em: http://localhost:8000/api/tasks

### 3. Frontend (Vue)
Instale as dependências:
cd ../tarefas-frontend
npm install
### Inicie o servidor de desenvolvimento:
npm run dev

### Acesse: http://localhost:5173

ℹ️ O frontend se comunica com a API Laravel na porta 8000.

📦 Comando Artisan para Checar Tarefas Agendadas

php artisan check:tasks
