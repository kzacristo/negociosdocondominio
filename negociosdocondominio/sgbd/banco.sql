DROP TABLE IF EXISTS cadastro;
DROP TABLE IF EXISTS morador;
DROP TABLE IF EXISTS servicos;

CREATE TABLE cadastro(
	id bigint AUTO_INCREMENT,
    email VARCHAR(50),
    senha VARCHAR(50),
  	nome VARCHAR(50),
    sobrenome VARCHAR(50),
    genero int,
    PRIMARY KEY (id)
);

-- apenas para teste
-- INSERT INTO cadastro (email, senha, nome, genero) VALUES ('adm@adm.com', '123456', 'admin', 1);

CREATE TABLE morador(
  id bigint AUTO_INCREMENT,
  idcadastro bigint,
  bloco INT,
  torre VARCHAR(20),
  nome VARCHAR(55),
  sobrenome VARCHAR(55),
  email VARCHAR(55),
  data_nascimento VARCHAR(20),
  telefone VARCHAR(20),
  whatsapp VARCHAR(20),
  genero VARCHAR(20),

  PRIMARY KEY (id),
  FOREIGN KEY (idcadastro) REFERENCES cadastro(id)
);
-- INSERT INTO `morador`(`bloco`, `torre`, `nome`, `email`, `data_nascimento`) VALUES (1,2,'julia','julia@julia.com','1989-10-12');

CREATE TABLE servicos(
  id bigint AUTO_INCREMENT,
  id_morador bigint,
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

  PRIMARY KEY (id),
  FOREIGN KEY (id_morador) REFERENCES morador(id)
);