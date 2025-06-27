## 📝 Aplicação de Tarefas Agendadas (Laravel + Vue)

Projeto fullstack para cadastro e notificação de tarefas, desenvolvido como teste prático para vaga de Programador Pleno.

---

## ✅ Funcionalidades

### Cadastro de tarefas com:

- Título  
- Descrição  
- Data/hora agendada  
- Flag de notificação  

### Outras funcionalidades:

- Comando Artisan que busca tarefas agendadas e despacha um Job  
- Job simula o envio da notificação e marca a tarefa como “notificada”  
- API para listagem das tarefas  
- Frontend em Vue 3 que consome a API e exibe tarefas com destaque visual  

---

## 🛠️ Tecnologias Utilizadas

### Backend:

- Laravel 12.x  
- PHP 8.2+  
- SQLite  

### Frontend:

- Vue.js 3.4  
- Vite 6.x  
- Pinia 2.1  
- TailwindCSS 4.x  

---

## 🚀 Como Rodar o Projeto

### 1. Clone o repositório

```bash
git clone https://github.com/DiegoSantini/Lista-de-tarefas.git  
cd Lista-de-tarefas