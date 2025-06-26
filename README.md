# 📝 Aplicação de Tarefas Agendadas (Laravel + Vue)

Projeto fullstack para cadastro e notificação de tarefas, desenvolvido como teste prático para vaga de Programador Pleno.

## ✅ Funcionalidades

- Cadastro de tarefas com:
  - Título
  - Descrição
  - Data/hora agendada
  - Flag de notificação
- Comando Artisan que busca tarefas agendadas e despacha Job
- Job simula notificação e marca como "notificada"
- API para listagem das tarefas
- Frontend com Vue 3 que consome a API e exibe tarefas com destaque

---

## 🛠️ Tecnologias

- **Backend:** Laravel 12.x, PHP 8.2, SQLite
- **Frontend:** Vue.js 3.4, Vite 6.x, Pinia 2.1, TailwindCSS 4.x

---

## 🚀 Como rodar o projeto

### 1. Clone o repositório
git clone https://github.com/SEU_USUARIO/tarefas-fullstack.git
cd tarefas-fullstack
### 2. Instale dependências do backend
cd tarefas-api
composer install
### 3. Crie o arquivo .env
cp .env.example .env

### Edite o .env e use essas variáveis:
APP_NAME=Laravel
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost:8000

DB_CONNECTION=sqlite
DB_DATABASE=database/database.sqlite
### 4. Crie o arquivo de banco de dados
touch database/database.sqlite
Ou crie manualmente: tarefas-api/database/database.sqlite

### 5. Gere a chave da aplicação
php artisan key:generate
### 6. Rode as migrations + seed
php artisan migrate:fresh --seed
### 7. Suba o backend
php artisan serve

### Acesse: http://localhost:8000/api/tasks

💻 Como rodar o frontend
### 1. Instale as dependências
cd ../tarefas-frontend
npm install

### 2. Inicie o servidor de desenvolvimento
npm run dev
Acesse: http://localhost:5173

### Obs: o frontend se comunica com a API Laravel na porta 8000

📦 Comando para checar tarefas agendadas
php artisan check:tasks
