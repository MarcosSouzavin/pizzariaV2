# 🍕 PizzariaV2

Sistema completo de pedidos de pizzaria desenvolvido em **PHP + MySQL + JavaScript**, com arquitetura organizada, uso de `.env` para configuração e separação clara entre **models, services, routes e views**.

O objetivo do projeto é construir um sistema real de pedidos online de forma progressiva, mantendo o código limpo, simples e fácil de manter.

---

# 🚀 Tecnologias utilizadas

* PHP 8+
* MySQL / MariaDB
* JavaScript (Vanilla JS)
* HTML5
* CSS3
* WAMP / XAMPP
* Arquitetura MVC leve

---

# 📂 Estrutura do projeto

```
pizzariaV2/
│
├── app/
│   ├── config/
│   ├── controllers/
│   ├── models/
│   ├── services/
│   ├── helpers/
│   └── middleware/
│
├── public/
│   ├── index.php
│   ├── assets/
│   │   ├── css
│   │   ├── js
│   │   └── img
│   └── uploads/
│
├── routes/
│   ├── web.php
│   ├── api.php
│   └── admin.php
│
├── views/
│   ├── layouts
│   ├── pages
│   ├── auth
│   └── admin
│
├── storage/
├── vendor/
│
├── .env
├── .env.example
├── composer.json
└── README.md
```

---

# ⚙️ Configuração do projeto

## 1️⃣ Clonar o repositório

```
git clone https://github.com/seuusuario/pizzariaV2.git
```

ou baixar o ZIP do projeto.

---

## 2️⃣ Criar o arquivo `.env`

Copie o arquivo de exemplo:

```
.env.example
```

para:

```
.env
```

Exemplo de configuração:

```
APP_NAME=Pizzaria V2
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost/pizzariaV2/public

DB_HOST=127.0.0.1
DB_PORT=3306
DB_NAME=pizzaria_v2
DB_USER=root
DB_PASS=

SESSION_NAME=pizzaria_v2_session
CSRF_KEY=chave_super_secreta
```

---

# 🗄️ Banco de dados

Crie o banco:

```sql
CREATE DATABASE pizzaria_v2
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;
```

Depois rode os scripts de criação das tabelas.

Tabelas principais do sistema:

* users
* addresses
* categories
* products
* product_sizes
* product_extras
* orders
* order_items
* order_item_extras

---

# 🍕 Funcionalidades atuais

### Cliente

✔ visualizar cardápio
✔ produtos organizados por categoria
✔ pizzas com tamanhos
✔ extras (borda, adicionais etc)
✔ adicionar ao carrinho
✔ carrinho em sessão
✔ cálculo de total

---

### Backend do sistema

✔ conexão segura com PDO
✔ leitura de variáveis `.env`
✔ separação de camadas
✔ models para acesso ao banco
✔ services para lógica do sistema
✔ rotas web e API

---

# 🛒 Fluxo do pedido

Fluxo planejado do sistema:

1️⃣ Cliente acessa cardápio
2️⃣ Escolhe pizza
3️⃣ Seleciona tamanho
4️⃣ Adiciona extras
5️⃣ Adiciona ao carrinho
6️⃣ Vai para checkout
7️⃣ Informa endereço
8️⃣ Escolhe pagamento
9️⃣ Confirma pedido
🔟 Pedido aparece no painel admin

---

# 🔜 Próximas funcionalidades

Planejadas para evolução do projeto:

* sistema de login
* cadastro de usuário
* checkout completo
* registro de pedidos
* painel administrativo
* gerenciamento de pizzas
* gerenciamento de pedidos
* status do pedido em tempo real
* integração com pagamento (PIX)

---

# 🧠 Objetivo do projeto

Este projeto foi criado para:

* praticar **arquitetura de sistemas web**
* aprender **PHP backend estruturado**
* construir um **sistema real de pedidos**
* evoluir progressivamente a complexidade do código

---

# 📜 Licença

Este projeto é livre para estudo e uso educacional.

---

# 👨‍💻 Autor

Desenvolvido por **Marcos Vinicius**

Back-end developer focado em:

* PHP
* JavaScript
* Banco de dados
* Arquitetura de sistemas
