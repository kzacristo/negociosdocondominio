DROP TABLE IF EXISTS redes_sociais;
DROP TABLE IF EXISTS servicos;
DROP TABLE IF EXISTS morador;
DROP TABLE IF EXISTS cadastro;

CREATE TABLE cadastro(
	id bigint AUTO_INCREMENT,
    email VARCHAR(50),
    senha VARCHAR(50),
    perguntasecreta VARCHAR(50),
    resposta VARCHAR(50),
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
  imagem VARCHAR(255),

  PRIMARY KEY (id),
  FOREIGN KEY (idcadastro) REFERENCES cadastro(id)
);
-- INSERT INTO `morador`(`bloco`, `torre`, `nome`, `email`, `data_nascimento`) VALUES (1,2,'julia','julia@julia.com','1989-10-12');

CREATE TABLE servicos(
  id bigint AUTO_INCREMENT,
  id_morador bigint,
  area_de_atuacao VARCHAR(50),
  descricao VARCHAR(255),
  atendimento VARCHAR(255),
  servicos_ofertados TEXT,
  data_atendimento VARCHAR(255),
  titulo_anuncio VARCHAR(255),
  text_experiencia TEXT,
  redes_sociais VARCHAR(255),
  sobre_voce TEXT,
  sobre_oque_faz  TEXT,
  valor VARCHAR(30),
  tipo_valor INT,

  PRIMARY KEY (id),
  FOREIGN KEY (id_morador) REFERENCES morador(id)
);

CREATE TABLE redes_sociais(
  id bigint AUTO_INCREMENT,
  id_morador bigint,
  linkedin VARCHAR(255),
  facebook VARCHAR(255),
  twitter VARCHAR(255),
  googleplus VARCHAR(255),
  youtube VARCHAR(255),
  instagram VARCHAR(255),

  PRIMARY KEY(id),
  FOREIGN KEY (id_morador) REFERENCES morador(id)
);