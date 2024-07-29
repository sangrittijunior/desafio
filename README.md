# Teste Técnico Umentor
Cadastro Simples de Usuário Utilizando MySQL/Javascript/PHP

Instalação
------------

Criação do Banco de dados.

```sql
    create database umentor;
```


Criar a tabela no Banco de dados:

```sql
create table usuario(
    id int not null AUTO_INCREMENT,
    nome varchar(255) not null,    
    email varchar(255) not null,
    situacao varchar(255) not null,
    data_admissao date not null,
    created_at date not null,
    updated_at date not null, 
    primary key (id)
)
```