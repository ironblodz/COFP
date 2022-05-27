create database INFO;
use INFO;

create table Utilizador(
id_utilizador int auto_increment primary key,
primeiro_nome varchar(60) not null,
apelido varchar(60) not null,
data_nasc date not null,
telefone char(9),
email varchar(100) not null unique,
pass varchar(255) not null,
genero enum('Masculino','Feminino','Indefenido') not null,
perfil enum('formando','admin') default 'formando'not null
)engine=innoDB;

create table Professor(
id_professor int auto_increment primary key,
nome varchar(200) not null,
data_nasc date not null,
email varchar(100) not null unique,
genero enum('Masculino','Feminino','Indefenido') not null,
habilitacao enum('Licenciatura','Mestrado','Doutoramento')  not null,
morada text(100), 
area_formacao text(1000),
telefone char(9) unique
)engine=innoDB;

create table Formacao(
id_formacao int auto_increment primary key,
nome varchar(100) not null,
data_formacao date not null,
duracao int not null,
descricao text(1000) not null,
categoria enum('Saúde','Imformática','Gestão','Educação','Turísmo'),
fk_id_professor int not null,
foreign key(fk_id_professor) references Professor(id_professor)
)engine=innoDB;

create table Inscricao(
id_inscricao int auto_increment primary key,
fk_id_formacao int not null,
fk_id_utilizador int not null,
data_inscricao date not null,
foreign key(fk_id_formacao) references Formacao(id_formacao), 
foreign key(fk_id_utilizador) references Utilizador(id_utilizador)
)engine=innoDB;

create table Workshop(
id_workshop int auto_increment primary key,
nome varchar(200) not null,
data_work date not null,
fk_id_professor int not null,
foreign key(fk_id_professor) references Professor(id_professor)
)engine=innoDB;

create table Imagens_Workshop(
id_imagem int auto_increment primary key,
caminho varchar(255) not null,
fk_id_workshop int not null,
foreign key(fk_id_workshop) references Workshop(id_workshop)
)engine=innoDB;

create table Imagens_Formacoes(
id_imagem int auto_increment primary key,
caminho varchar(255) not null,
fk_id_formacao int not null,
foreign key(fk_id_formacao) references Formacao(id_formacao)
)engine=innoDB;



