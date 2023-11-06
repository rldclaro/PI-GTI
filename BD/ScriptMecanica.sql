drop database mecanica;

create database mecanica character set UTF8;
use mecanica;

create table pessoa(
	cod_Pessoa int(5) not null primary key auto_increment,
    cpf_Pessoa varchar(15) not null,
    nome_Pessoa varchar(100) not null,
	telefone varchar (15),
    RG varchar(15) not null,  
    dtNasc_Pessoa date not null,
	email varchar(40) not null,
	senha varchar(255)not null
);

create table cliente(
	cod_Cliente int(5) not null primary key auto_increment,
    nomeCliente varchar(100) not null,
    marca varchar(100) not null,
    modelo varchar(100) not null,
    ano varchar(100) not null,
    placa varchar(100) not null,
    cor varchar(100) not null,
    cod_ReferenciaPessoa int(5) not null,
    foreign key (cod_ReferenciaPessoa) references Pessoa(cod_Pessoa)
);

create table fornecedor(
	cod_Fornecedor int(5) not null primary key auto_increment,
    razao_SocialFornecedor varchar(100) not null,
    cnpj varchar(14) not null,
    nome_FantasiaFornecedor varchar(100) not null,
    inscricaoEstadual varchar(16) not null,
    cod_ReferenciaPessoa int(5) not null,
    data_Cadastro date,
    logradouro varchar(150) not null,
    estado varchar(3) not null,
    foreign key (cod_ReferenciaPessoa) references Pessoa(cod_Pessoa)
);

create table empresa(
	cod_Empresa int(5) not null primary key auto_increment,
	CNPJ varchar(14) not null,
    razao_Social varchar(100) not null,
    nome_Fantasia varchar(100) not null,
    ddd_Empresa varchar(3) not null,
    telefone_Empresa int(9) not null,
    cod_ReferenciaPessoa int(5) not null,
    foreign key (cod_ReferenciaPessoa) references Pessoa(cod_Pessoa)
);

create table funcionario(
	cod_Funcionario int(5) not null primary key auto_increment,
    login_Funcionario varchar(150) not null,
    senha_Funcionario varchar(150) not null,
    cod_ReferenciaEmpresa int(5) not null,
    cod_ReferenciaPessoa int(5) not null,
    privilegiosadm varchar(30) not null default "false",
    foreign key (cod_ReferenciaEmpresa) references Empresa(cod_Empresa),
    foreign key (cod_ReferenciaPessoa) references Pessoa(cod_Pessoa)
);

create table produto(
	cod_Produto int(5) not null primary key auto_increment,
    nome_Produto varchar(100) not null,
    qtd_produto int(3) not null,
    tipoProduto varchar(30) not null,
    categoria varchar(30) not null,
    cod_ReferenciaPessoa int(5) not null,
    data_Cadastro date,
    foreign key (cod_ReferenciaPessoa) references Pessoa(cod_Pessoa)
);

create table servico(
	cod_Servico int (11) primary key not null auto_increment,
    nome_cliente varchar(100) not null,
    nome_serviço varchar(100) not null,
    modelo_moto varchar(100) not null,
	observacao varchar (255) null,
    data_servico date not null
);


insert into pessoa values (NULL, "472.931.338-04", "Rildo", "19 99745-2533", "45.368.338-1", "1999.04.10", "admin@gmail.com", "98fbc344e5bba6fbdf48b0af5b084c06eeeafa78");
insert into pessoa values (NULL, "230.467.968-46", "Beatriz", "19 99416-2442", "38.436.141-9", "2003.05.30", "admin@admin.com", "98fbc344e5bba6fbdf48b0af5b084c06eeeafa78");

