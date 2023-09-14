create table usuario(
    id integer primary key AUTO_INCREMENT,
    nome varchar(200) not null,
    sobrenome varchar(300) not null,
    idade integer not null,
    sexo char(1) not null
)