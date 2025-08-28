create database sistemalogin;

use sistemalogin;

create table usuario(
id int primary key not null auto_increment,
nome varchar (100) not null,
email varchar (100) not null unique,
senha varchar(255) not null
)
