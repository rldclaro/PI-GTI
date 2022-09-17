drop database mecanica;
create database mecanica character set UTF8;
use mecanica;

create table Pessoa(
	cod_Pessoa int(5) not null primary key auto_increment,
    cpf_Pessoa int(11) not null,
	nome_Pessoa varchar(100) not null,
    dtNasc_Pessoa date,
	Data_Cadastro date

);

create table EnderecoPessoa(
	cod_Endereco int (5) not null primary key auto_increment,
    cep varchar(8) not null,
    numero int(9) not null,
    complemento varchar (30) not null,
    referencia varchar (50),
    cod_ReferenciaPessoa int (5) not null,
    foreign key (cod_ReferenciaPessoa) references Pessoa(cod_Pessoa)
);

create table ContatoPessoa(
	cod_Telefone int (5) not null primary key auto_increment,
    ddd_contatoPessoa varchar(3) not null,
    numero_contatoPessoa int(9) not null,
    tipo_contatoPessoa varchar(15),
    cod_ReferenciaPessoa int(5) not null,
    foreign key (cod_ReferenciaPessoa) references Pessoa(cod_Pessoa)
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
    cod_ReferenciaPessoa int(5) not null,
    data_Cadastro date,
    logradouro varchar(150) not null,
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

create table Categorias(
	cod_categoria int (2) primary key auto_increment not null,
	descricao_categoria varchar (30)
);

create table TipoProduto(
	cod_tipoProd int(2) not null primary key auto_increment,
	desc_tipoProd varchar(30) not null
);

create table Produto(
	cod_Produto int(5) not null primary key auto_increment,
    nome_Produto varchar(100) not null,
    categoria_produto int (2) not null,
    tipo_produto int(2) not null,
    qtd_produto int(3) not null,
    img varchar (130) default "",
    foreign key (categoria_produto) references Categorias (cod_categoria),
	foreign key (tipo_produto) references TipoProduto (cod_tipoProd)
);

create table ProdutoFornecedor(
	cod_prodforn int(20) not null primary key,
	cod_ReferenciaProduto int (5) not null,
	cod_Referenciafornecedor int(5) not null,
	quantidade_prodForn int(5) not null,
	foreign key (cod_ReferenciaProduto) references Produto (cod_Produto),
	foreign key (cod_Referenciafornecedor) references Fornecedor (cod_Fornecedor)
);

create table StatusPedido(
	cod_Status int(1) primary key not null auto_increment,
	descricao_status varchar(34)
);

create table Pedido(
	cod_Pedido int (11) primary key not null auto_increment,
	cod_ReferenciaCliente int (5) not null,
    cod_ReferenciaProduto  int (11) not null,
	valortotal_pedido decimal (7,2) null,
	StatusPedido int(2),
	data_pedido date not null,
	hora_pedido time not null,
	observacao varchar (255) null,
    foreign key (cod_ReferenciaProduto) references Produto(cod_Produto),
	foreign key (cod_ReferenciaCliente) references Cliente (cod_Cliente),
	foreign key (StatusPedido) references StatusPedido(cod_Status)
);

create table agendamento(
	cod_Agendamento int(20) primary key not null auto_increment,
    cod_ReferenciaPedido int(11) not null,
    data_Agendamento date not null,
    hora_Agendamento time not null,
    foreign key (cod_ReferenciaPedido) references Pedido(cod_Pedido)
);