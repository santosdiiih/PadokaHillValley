#crianco o database
create database dbContatos20201A;

#ativa a database a ser utilizada
use dbContatos20201A;

#cria a tabela de estados
create table tblEstados(
	idEstado int auto_increment not null primary key,
    sigla varchar(2) not null,
    nome varchar(100) not null
);

#cria a tabela de contatos
create table tblContatos(
	idContato int auto_increment not null,
    nome varchar(100) not null,
    endereco varchar(150),
    bairro varchar(50),
    cep varchar(10),
    idEstado int not null,
    telefone varchar(14) not null,
    celular varchar(15) not null,
    email varchar(100) not null,
    dtNasc date not null,
    sexo varchar(1),
    obs text,
    primary key (idContato),
    
    constraint FK_estados_contatos 
    foreign key (idEstado) 
    references tblEstados (idEstado)
);


show tables;