create database Programa;

use Programa;

create table Usuario(
    id integer primary key auto_increment,
    nome varchar(200) not null,
    sobrenome varchar(200) not null,
    email varchar(150) not null,
    senha varchar(250) not NULL,
    created_at timestamp null,
    update_a timestamp null
);

create table registro(
    id integer primary key auto_increment,
    nome varchar(120) not null,
    id_Usuario integer,
    Foreign Key (id_usuario) REFERENCES Usuario(id)
);