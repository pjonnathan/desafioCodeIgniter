# Desafio 1 - API de Cadastro de Pedidos de Compra

Este projeto é uma API REST desenvolvida em **CodeIgniter 4** para gerenciar clientes, produtos e pedidos de compra. Ele foi criado como parte de um desafio técnico, onde o objetivo era implementar um CRUD completo para cada entidade, com validações e relacionamentos entre as tabelas.

---

## Tecnologias Utilizadas

- **PHP** (CodeIgniter 4)
- **MySQL** (Banco de dados relacional)
- **Migrations** (Para criação e gerenciamento do banco de dados)
- **API REST** (Endpoints para CRUD de clientes, produtos e pedidos)

---

## Funcionalidades

### 1. Clientes
- **Cadastro de clientes** com os campos:
  - CPF/CNPJ
  - Nome/Razão Social
- **Endpoints**:
  - `GET /clientes` - Listar todos os clientes
  - `GET /clientes/{id}` - Buscar cliente por ID
  - `POST /clientes` - Criar um novo cliente
  - `PUT /clientes/{id}` - Atualizar um cliente existente
  - `DELETE /clientes/{id}` - Excluir um cliente

### 2. Produtos
- **Cadastro de produtos** com os campos:
  - Nome
  - Descrição
  - Preço
- **Endpoints**:
  - `GET /produtos` - Listar todos os produtos
  - `GET /produtos/{id}` - Buscar produto por ID
  - `POST /produtos` - Criar um novo produto
  - `PUT /produtos/{id}` - Atualizar um produto existente
  - `DELETE /produtos/{id}` - Excluir um produto

### 3. Pedidos de Compra
- **Cadastro de pedidos** com os campos:
  - ID do Cliente
  - ID do Produto
  - Quantidade
  - Total (calculado automaticamente)
  - Status (Aberto, Pago, Cancelado)
- **Endpoints**:
  - `GET /pedidos` - Listar todos os pedidos
  - `GET /pedidos/{id}` - Buscar pedido por ID
  - `POST /pedidos` - Criar um novo pedido
  - `PUT /pedidos/{id}` - Atualizar um pedido existente
  - `DELETE /pedidos/{id}` - Excluir um pedido

---

## Instalação

Siga os passos abaixo para configurar e executar o projeto localmente.

### Pré-requisitos

- PHP 7.4 ou superior
- MySQL
- Composer (para instalar as dependências do CodeIgniter)
- Git (opcional)

### Passo a Passo

1. **Clone o repositório**:
   ```bash
   git clone https://github.com/seu-usuario/desafio1-codeigniter.git
   cd desafio1-codeigniter

    ****:
   ```
   composer install

***Configure o banco de dados:***

- Crie um banco de dados MySQL.

- Renomeie o arquivo .env.example para .env.

- Abra o arquivo .env e configure as variáveis de ambiente do banco de dados:

   database.default.hostname = localhost
database.default.database = nome_do_banco
database.default.username = usuario
database.default.password = senha
database.default.DBDriver = MySQLi

**Execute as migrations:**

***As migrations criarão as tabelas necessárias no banco de dados.***
php spark migrate
