#create database
create database if not exists login;

#choose database
use login;

#create tables
create table usuarios (
nombre varchar(15),
contraseña varchar (10)

);

create table registro_user (
nombre varchar(15),
contraseña varchar (10)

);