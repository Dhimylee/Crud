create table usuario(
    id integer primary key AUTO_INCREMENT,
    nome varchar(200) not null,
    sobrenome varchar(300) not null,
    email varchar (300) not null,
    idade int not null,
    sexo char(3) not null
)
