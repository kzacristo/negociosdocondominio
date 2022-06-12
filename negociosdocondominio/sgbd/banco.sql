DROP TABLE IF EXISTS cadastro;
DROP TABLE IF EXISTS morador;
DROP TABLE IF EXISTS servicos;

CREATE TABLE cadastro(
	id bigint AUTO_INCREMENT,
    email varchar(50),
    senha varchar(50),
  	nome varchar(50),
    genero int,
    PRIMARY KEY (id)
);

-- apenas para teste
INSERT INTO cadastro (email, senha, nome, genero) VALUES ('adm@adm.com', '123456', 'admin', 1);

CREATE TABLE morador(
  id bigint AUTO_INCREMENT,
  idcadastro INT,
  bloco INT,
  torre varchar(20),
  nome varchar(55),
  email varchar(55),
  data_nascimento varchar(20),
  telenofe varchar(20),
  PRIMARY KEY (id),
  FOREIGN KEY (idcadastro) REFERENCES cadastros(id)
);
INSERT INTO `morador`(`bloco`, `torre`, `nome`, `email`, `data_nascimento`) VALUES (1,2,'julia','julia@julia.com','1989-10-12');

CREATE TABLE servicos(
  id bigint AUTO_INCREMENT,
  area_de_atuacao VARCHAR(50),
  outra_area VARCHAR(50),
  atendimento VARCHAR(255),
  servicos_ofertados TEXT,
  dia_semana VARCHAR(25),
  hora_atendimento TIME,
  data_atendimento DATE,
  titulo_anuncio VARCHAR(255),
  text_experiencia TEXT,
  redes_socieais VARCHAR(255),
  sobre_voce TEXT,
  sobre_oque_faz  TEXT,
  valor FLOAT,
  tipo_valor INT,
  imagem VARCHAR(255),

  PRIMARY KEY (id)
);