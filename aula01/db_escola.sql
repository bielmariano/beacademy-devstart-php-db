-- mostra os bancos existentes
SHOW DATABASES

-- Para criar um banco de dados o comando é --
CREATE DATABASE db_escola;

-- selecionar o banco de dados --
USE db_escola;

-- Excluir tabela
DROP TABLE tb_professor;

CREATE TABLE tb_professor (
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    cpf CHAR(11) UNIQUE NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL
);

-- mostra as tabebelas no banco selecionado
SHOW TABLES

CREATE TABLE tb_aluno (
    nome VARCHAR(100) NOT NULL,
    cpf CHAR(11) UNIQUE NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    matricula VARCHAR (10) UNIQUE NOT NULL
);

CREATE TABLE tb_curso (
    nome VARCHAR(100) UNIQUE NOT NULL,
    codigo VARCHAR(100) UNIQUE NOT NULL
);

CREATE TABLE tb_disciplina (
    nome VARCHAR(100) UNIQUE NOT NULL,
    professor VARCHAR(100) NOT NULL,
    codigo VARCHAR(10) UNIQUE NOT NULL
);

-- inserir dados
INSERT INTO tb_professor (nome, email, cpf)
VALUES (
    'Alessandro', 'ale@email.com', '12345678911'
);

INSERT INTO tb_professor (nome, email, cpf)
VALUES (
    'AlessandroO', 'aleEE@email.com', '11122233344'
);

INSERT INTO tb_professor (nome, email, cpf)
VALUES (
    'Bruno', 'bruno@email.com', '12345678911'
);

-- mostrar os dados --
SELECT * FROM tb_professor;

-- excluir tabela
DROP TABLE tb_professor;

-- curso / disciplina