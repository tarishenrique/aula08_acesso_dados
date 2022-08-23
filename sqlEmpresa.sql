CREATE DATABASE empresa

CREATE TABLE cliente
(
cpf VARCHAR(15) PRIMARY KEY,
nome VARCHAR(50),
endereco VARCHAR(100),
telefone VARCHAR(20)
)

CREATE TABLE fornecedor
(
cnpj VARCHAR(25) PRIMARY KEY,
nome VARCHAR(50),
endereco VARCHAR(100),
telefone VARCHAR(20),
email VARCHAR(100)
)

CREATE TABLE produto
(
idProduto int PRIMARY KEY auto_increment,
descricao VARCHAR(100),
fornecedor_cnpj VARCHAR(25) REFERENCES fornecedor(cnpj)
)