USE db_escola;

-- inserir 1 registro
INSERT INTO tb_professor (nome, email, cpf)
VALUES ('Chiquim das Tapiocas', 'chiquim@email.com', '11111111111');

-- inserir mais de 1 registro
INSERT INTO tb_professor (nome, email, cpf)
VALUES
('Zezim das Rapaduras', 'chiquimdasrapa@email.com', '11111111114'),
('Maria das Rapaduras', 'maria@email.com', '11111111112'),
('Luiza das Rapaduras', 'luiza@email.com', '11111111113');

-- Excluir 1 registro --
DELETE FROM tb_professor WHERE id='5' -- também poderia: email='email@email.com' / id>'5'...

-- Excluir todos --
DELETE FROM tb_professor;

-- editar dados de 1 registro --
UPDATE tb_professor SET nome='Luiza da Caucaia' WHERE cpf='11111111113';

-- editar dados de todos os registros --
UPDATE tb_professor SET nome='Francisco'; -- com isso todos os nomes ficarão como Francisco;

-- selecionar todos os dados do professor com id = 5 --
SELECT * FROM tb_professor WHERE id='5';

-- selecionar alguns os dados de todos os professores --
SELECT nome, cpf FROM tb_professor;
