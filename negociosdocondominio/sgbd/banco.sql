CREATE TABLE cadastro(
	id bigint AUTO_INCREMENT,
    email varchar(50),
    senha varchar(50),
  	nome varchar(50),
    genero int,
    PRIMARY KEY (id)
);

-- apenas para teste
INSERT INTO cadastro (email, senha, nome, genero) VALUES ('adm@adm.com', '123456', 'admin', 1)