create database mydb;

use mydb;

create table Usuario(
id int not null auto_increment,
nombre varchar not null,
apellido varchar not null,
password text nor null,
usuario varchar not null
primary key(id)
);