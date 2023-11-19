CREATE DATABASE login;

USE login;

create table tbCourse(
	codCourse INT PRIMARY KEY AUTO_INCREMENT
    , nameCourse VARCHAR(200) not null
);

create table tbUser(
    codUser int PRIMARY KEY AUTO_INCREMENT
    , codCourse int
    , nameUser varchar(50) not null
    , foreign key (codCourse) references tbCourse(codCourse)
    , emailUser varchar(200) not null
    , password varchar(50) not null
);

insert into tbCourse(nameCourse)
values
	('Desenvolvimento de sistemas')
    , ('Sistemas de informação')
    , ('Ciência da computação')
    , ('Engenharia de software');