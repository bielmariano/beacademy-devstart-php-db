--criar banco de dados --
CREATE DATABASE db_store;

-- selecionar o banco --
USE db_store;

-- criar tabela
CREATE TABLE tb_category (
    id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    description VARCHAR (100) NOT NULL
);

--Inserir dados na tabela tb_category
INSERT INTO tb_category (name, description)
VALUES
('Informática', 'Produtos de Informática e acessórios para computadores'),
('Escritório', 'Canetas, Cadernos, folhas, etc'),
('Eletrônicos', 'TVs, Som portátil, Caixas de som, etc');