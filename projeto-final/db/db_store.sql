--criar banco de dados --
CREATE DATABASE db_store;

-- selecionar o banco --
USE db_store;

-- criar tabela category
CREATE TABLE tb_category (
    id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    description VARCHAR (100) NOT NULL
);

-- criar tabela product
CREATE TABLE tb_product (
    id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    description VARCHAR(255) NOT NULL,
    photo VARCHAR(255) NOT NULL,
    value FLOAT(5,2) NOT NULL,
    category_id int(11) NOT NULL,
    quantity INT(5) NOT NULL,
    created_at DATETIME NOT NULL
);

-- DESC tb_product para ver a tabela criada.

--Inserir dados na tabela tb_category
INSERT INTO tb_category (name, description)
VALUES
('Informática', 'Produtos de Informática e acessórios para computadores'),
('Escritório', 'Canetas, Cadernos, folhas, etc'),
('Eletrônicos', 'TVs, Som portátil, Caixas de som, etc');

--Inserir produtos
INSERT INTO tb_product (name, description, photo, value, category_id, quantity, created_at)
VALUES
('Teclado 2', 'Teclado Bla Bla', 'https://m.media-amazon.com/images/I/71xVYmz-y9S._AC_SY450_.jpg', 199.89, 1, 50, '2022-05-10 09:30:34'),
('Teclado 3', 'Teclado Bla Bla', 'https://m.media-amazon.com/images/I/71xVYmz-y9S._AC_SY450_.jpg', 199.89, 1, 50, '2022-05-10 09:30:34');


