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

Configurar o arquivo de banco de dados no arquivo configuracao.php localizado na raiz do projeto.
Projeto foi desenvolvido com o PHP 7.4.
Mover os arquivos da pasta desafio para a pasta do apache. (htdoc, WWW, etc...).

A estrutura foi criada com MVC, pastas controller, model e view com os respectivos arquivos relacionados ao usuário.
Dentro das VIEW, o layout está separado por aquivos.

Arquivos de estilização e usados no scopo global, estão localizados dentro da public.

Criado um "sistema" de rotas simples, para as chamadas do ajax. Está localizado no arquivo rotas.php na raiz do projeto.