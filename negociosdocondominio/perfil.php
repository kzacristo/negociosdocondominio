<?php

require_once('./controller/conect.php');

try {
  $stmt = $pdo->prepare("SELECT m.* , s.*  FROM morador m LEFT JOIN servicos s ON s.id_morador = m.id WHERE 1 ORDER BY m.id DESC ");
  $stmt->execute();

  $row = $stmt->fetchAll();

  // var_dump($row); die();

  if (!isset($row) && sizeof($row) <= 0) {
    header('location:index.php');
  }
} catch (PDOException $e) {
  echo 'ERROR: ' . $e->getMessage();
}


include "header.php";

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Perfil</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <div class="destaqueperfil"> <img src="<?php echo $row[0]['imagem'] ?>" height="100">
          <h2><?php echo $row[0]['nome'] ?></h2>
          <?php $row ?>
          <p>Aulas de Portugues</p>
          <p> Revisão de texto</p>
          <br>
          <h2>Valor</h2>
          <p>Preço hora/aula: R$85</p>
          <br>
          <h2>Informações de contato</h2>
          <p>Telefone: 11 1234-1234</p>
          <p>Whatsapp: 11 1234-1234</p>
          <p>E-mail: luciaa@mail.com.br</p>
          <br>
          <h2>Horário de funcionamento</h2>
          <p>Terça e Quinta – das 18h00 às 22h00 </p>
          <p>Quarta e Sexta – das 16h00 às 20h00 </p>
          <p>Sábado, domingo e feriados – das 12h00 às 18h00 </p>
          <br>
          <h2>Redes socias</h2>
          <p>LinkedIn: </p>
          <p>Facebook:</p>
          <p>Twitter:</p>
          <p>Google+:</p>
          <p>YouTube:</p>
          <p>Instagram:</p>
        </div>
      </div>
      <div class="col-sm-8">
        <div class="frasedestaque">
          <h1 class="display-6 branco">Professora de Língua Portuguesa, Especialista em Metodologia do Ensino de leitura, interpretação de textos diversificados, Literatura e gramática para o ENEM, vestibulares e concursos</h1>
        </div>
        <h1 class="titulo">Sobre seu trabalho e experiência</h1>
        Sou graduada em Letras, especialista em Metodologia para o ensino de Língua Portuguesa, cursando mestrado em Linguística. Trabalhei em escolas públicas e particulares, especialmente com alunos do ensino médio. Experiência de mais de 15 anos com aulas particulares personalizadas para o ENEM, vestibulares e concursos.
        Tenho preparado milhares de alunos para provas, Enem, Vestibulares e concursos com sucesso! Participei das principais bancas de correção de provas e redações do Enem, de vestibulares e de concursos.
        <h1 class="titulo">Mais sobre informaçoes sobre Lucia Costa </h1>
        As aulas são personalizadas, planejadas de acordo com as necessidades de cada aluno. Utilizo diversos materiais didáticos como vídeos, músicas, textos de jornais, revistas e recursos tecnológicos para estudar os conteúdos da Língua Portuguesa.
        Cursos completos de leitura e interpretação de textos, literatura com contexto social e histórico, gramática e redação para o ENEM, vestibulares e concursos. Atividades práticas com simulados, correção e comentários de provas do ENEM, de concursos e de vestibulares anteriores. Dessa forma o conteúdo é estudado com atividades interativas por meio da teoria, de exemplos e de atividades bastante práticas .
        Quanto tiver dificuldades e quiser descomplicar o uso da Língua Portuguesa é só chamar. Será um prazer ajudar!
        <h1 class="titulo">Recomendações</h1>
        <div class="recomendacoes">

          <p><strong>Rosana</strong></p>
          <p>Conheço a Sirene desde os anos 90, deu-me suporte no TCC da faculdade, é Super profissional e os anos a tornaram exímia no que faz. Suas aulas são momentos de reconhecimento que somos capazes de aprender.</p>
        </div>
      </div>
    </div>
  </div>
</body>

</html>

<?php

include "footer.php"

?>