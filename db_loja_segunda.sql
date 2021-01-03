CREATE DATABASE db_loja_segunda;

USE db_loja_segunda;

CREATE TABLE estados
(
	id		INTEGER 		NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome	VARCHAR(150) 	NOT NULL, 
    sigla	VARCHAR (2)		NOT NULL
    
);

CREATE TABLE cidades
(
	id			INTEGER 		NOT	NULL PRIMARY KEY AUTO_INCREMENT,
    nome		VARCHAR(200) 	NOT NULL,
    estado_id	INTEGER 		NOT NULL REFERENCES estados(id)
);

CREATE TABLE produtos
(
	id			INTEGER 		NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome		VARCHAR(140)	NOT NULL,
    descricao	TEXT			NOT NULL,
    preco		DECIMAL(10,2)	NOT NULL,
    imagem		VARCHAR(255)	NULL,
    ativo		INTEGER(1)		NOT NULL,
    criado		DATETIME		NOT NULL,
    modificado	DATETIME		NOT NULL
    
);

CREATE TABLE usuarios
(
	id			INTEGER			NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome		VARCHAR(100)	NOT NULL,
    email 		VARCHAR(255)	NOT NULL,
    senha		VARCHAR(255)	NOT NULL,
    ativo		INTEGER(1)		NOT NULL,
    criado		DATETIME		NOT NULL,
    modificado	DATETIME		NOT NULL
    
);


CREATE TABLE clientes
(
	id			INTEGER			NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome		VARCHAR(140)	NOT NULL,
    email		VARCHAR(255)	NOT NULL,
    senha		VARCHAR(255)	NOT NULL,
    telefone	VARCHAR(15)		NOT NULL,
    cpf			VARCHAR(11)		NOT NULL,
    cep			VARCHAR(10)		NOT NULL,
    endereco	VARCHAR(150)	NOT NULL,
    bairro		VARCHAR(100)	NOT NULL,
    numero		VARCHAR(10)		NOT NULL,
    complemento	VARCHAR(50)		NULL,
    cidade_id	INTEGER			NOT NULL REFERENCES cidades(id),
    ativo 		INTEGER(1)		NOT NULL,
    criado		DATETIME		NOT NULL,
    modificado	DATETIME		NOT NULL
);

CREATE TABLE pedido_status
(
	id			INTEGER		NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome		VARCHAR(30)		NOT NULL
);

CREATE TABLE pedidos
(
	id					INTEGER			NOT NULL PRIMARY KEY AUTO_INCREMENT,
    cliente_id			INTEGER			NOT NULL REFERENCES clientes(id),
    pedido_status_id	INTEGER			NOT NULL REFERENCES pedido_status(id),
    valor				DECIMAL(10,2)	NULL,
    criado				DATETIME		NOT NULL,
    modificado			DATETIME		NOT NULL
);


CREATE TABLE pedido_itens
(
	id				INTEGER			NOT NULL PRIMARY KEY AUTO_INCREMENT,
    pedido_id		INTEGER			NOT NULL REFERENCES pedidos(id),
    produto_id 		INTEGER			NOT NULL REFERENCES produtoS(id),
    preco			DECIMAL(10,2)	NOT NULL,
    quantidade		INTEGER			NOT NULL,
    criado			DATETIME		NOT NULL
);