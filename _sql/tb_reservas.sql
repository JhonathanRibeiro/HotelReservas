create table if not exists tb_reservas(
id int auto_increment not null primary key,
nomePacote varchar(30) not null,
nome varchar(40) not null,
telefone varchar(15) not null,
entrada date not null,
saida date not null,
email varchar(50) not null
)default character set utf8 default collate utf8_general_ci;