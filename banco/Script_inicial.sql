create database sistemalogin;

use sistemalogin;

create table usuario(
id int primary key not null auto_increment,
login varchar (50) not null unique,
email varchar (100) not null unique,
senha varchar(255) not null
)