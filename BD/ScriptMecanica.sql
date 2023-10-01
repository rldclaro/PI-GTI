drop database mecanica;

create database mecanica character set UTF8;
use mecanica;

create table Pessoa(
	cod_Pessoa int(5) not null primary key auto_increment,
    cpf_Pessoa varchar(15) not null,
    nome_Pessoa varchar(100) not null,
	telefone varchar (15),
    RG varchar(15) not null,  
    dtNasc_Pessoa date not null,
	email varchar(40) not null,
	senha varchar(255)not null
);

create table Cliente(
	cod_Cliente int(5) not null primary key auto_increment,
    login_Cliente varchar(150) not null,
    senha_Cliente varchar(150) not null,
    cod_ReferenciaPessoa int(5) not null,
    foreign key (cod_ReferenciaPessoa) references Pessoa(cod_Pessoa)
);

create table Montadora(
	cod_Montadora int (5) primary key auto_increment not null,
	nome_montadora varchar (30)
);

create table ModeloMotocicleta(
	cod_Modelo int(5) not null primary key auto_increment,
    cod_ReferenciaMontadora int(5) not null,
	nome_Modelo varchar(30) not null,
    foreign key (cod_ReferenciaMontadora) references Montadora(cod_Montadora)
);

create table Motocicleta(
	cod_Motocicleta int(5) not null primary key auto_increment,
    placa_Moto varchar(10) not null,
    cod_ReferenciaMontadora int(5) not null,
    cod_ReferenciaModelo int(5) not null,
    cod_ReferenciaCliente int(5) not null,
    foreign key (cod_ReferenciaCliente) references Cliente(cod_Cliente),
    foreign key (cod_ReferenciaMontadora) references Montadora(cod_Montadora),
    foreign key (cod_ReferenciaModelo) references ModeloMotocicleta(cod_Modelo)
);

create table Fornecedor(
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

create table Empresa(
	cod_Empresa int(5) not null primary key auto_increment,
	CNPJ varchar(14) not null,
    razao_Social varchar(100) not null,
    nome_Fantasia varchar(100) not null,
    ddd_Empresa varchar(3) not null,
    telefone_Empresa int(9) not null,
    cod_ReferenciaPessoa int(5) not null,
    foreign key (cod_ReferenciaPessoa) references Pessoa(cod_Pessoa)
);

create table Funcionario(
	cod_Funcionario int(5) not null primary key auto_increment,
    login_Funcionario varchar(150) not null,
    senha_Funcionario varchar(150) not null,
    cod_ReferenciaEmpresa int(5) not null,
    cod_ReferenciaPessoa int(5) not null,
    privilegiosadm varchar(30) not null default "false",
    foreign key (cod_ReferenciaEmpresa) references Empresa(cod_Empresa),
    foreign key (cod_ReferenciaPessoa) references Pessoa(cod_Pessoa)
);

create table Produto(
	cod_Produto int(5) not null primary key auto_increment,
    nome_Produto varchar(100) not null,
    qtd_produto int(3) not null,
    tipoProduto varchar(30) not null,
    categoria varchar(30) not null,
    cod_ReferenciaPessoa int(5) not null,
    data_Cadastro date,
    foreign key (cod_ReferenciaPessoa) references Pessoa(cod_Pessoa)
);

create table ProdutoFornecedor(
	cod_prodforn int(20) not null primary key,
	cod_ReferenciaProduto int (5) not null,
	cod_Referenciafornecedor int(5) not null,
	quantidade_prodForn int(5) not null,
	foreign key (cod_ReferenciaProduto) references Produto (cod_Produto),
	foreign key (cod_Referenciafornecedor) references Fornecedor (cod_Fornecedor)
);

create table StatusServico(
	cod_Status int(1) primary key not null auto_increment,
	descricao_status varchar(34)
);

create table servico(
	cod_Servico int (11) primary key not null auto_increment,
	cod_ReferenciaCliente int (5) not null,
    cod_ReferenciaProduto  int (11) not null,
	valortotal_servico decimal (7,2) null,
	Status_servico int(2),
	data_servico date not null,
	hora_pedido time not null,
	observacao varchar (255) null,
    foreign key (cod_ReferenciaProduto) references Produto(cod_Produto),
	foreign key (cod_ReferenciaCliente) references Cliente (cod_Cliente),
	foreign key (Status_servico) references StatusServico(cod_Status)
);


insert into Pessoa values (NULL, "472.931.338-04", "Rildo", "19 99745-2533", "45.368.338-1", "1999.04.10", "admin@gmail.com", "98fbc344e5bba6fbdf48b0af5b084c06eeeafa78")
