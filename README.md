# ✅ Task Manager API

API REST para gerenciamento de tarefas com autenticação por token.  
Desenvolvida com PHP (Laravel) + MySQL + Laravel Sanctum.

---

## 🚀 Tecnologias utilizadas

- PHP 8.5 + Laravel 13
- MySQL
- Laravel Sanctum (autenticação por token)
- Postman (coleção de testes incluída no repositório — importe o arquivo `postman_collection.json`)

---

## 📋 Endpoints

### 🔓 Públicos
| Método | Rota | Descrição |
|--------|------|-----------|
| POST | /api/register | Cadastrar usuário |
| POST | /api/login | Fazer login e receber token |

### 🔒 Autenticados (Bearer Token)
| Método | Rota | Descrição |
|--------|------|-----------|
| POST | /api/logout | Fazer logout |
| GET | /api/tasks | Listar tarefas do usuário |
| POST | /api/tasks | Criar tarefa |
| GET | /api/tasks/{id} | Buscar tarefa por ID |
| PUT | /api/tasks/{id} | Editar tarefa |
| DELETE | /api/tasks/{id} | Deletar tarefa |

---

## 💡 Funcionalidades

- Cadastro e autenticação de usuários com token
- Cada usuário gerencia apenas as próprias tarefas
- Status de tarefas: `pending`, `in_progress`, `completed`
- Rotas protegidas por autenticação
- Respostas em JSON com status codes corretos

---

## ⚙️ Como rodar localmente

### Pré-requisitos
- PHP 8+
- Composer
- MySQL

### Instalação

1. Clone o repositório:
```bash
git clone https://github.com/evellinsimoes/task-manager-api.git
```

2. Entre na pasta:
```bash
cd task-manager-api
```

3. Instale as dependências:
```bash
composer install
```

4. Copie o arquivo de configuração:
```bash
cp .env.example .env
```

5. Configure o banco de dados no `.env`:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=task_manager
DB_USERNAME=root
DB_PASSWORD=
```

6. Gere a chave da aplicação:
```bash
php artisan key:generate
```

7. Rode as migrations:
```bash
php artisan migrate
```

8. Suba o servidor:
```bash
php artisan serve
```

9. Acesse: `http://127.0.0.1:8000`

---

## 🔒 Segurança

- Autenticação via Laravel Sanctum
- Cada usuário acessa apenas suas próprias tarefas
- Variáveis sensíveis no `.env` (não versionado)

---

## 🤖 Ferramentas de IA utilizadas

Projeto desenvolvido com auxílio do [Claude](https://claude.ai) (Anthropic) para suporte no desenvolvimento e boas práticas.

---

## 👩‍💻 Autora

Évellin Simões  
[linkedin.com/in/evellin-simoes](https://linkedin.com/in/evellin-simoes)  
[github.com/evellinsimoes](https://github.com/evellinsimoes)