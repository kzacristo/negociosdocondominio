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
          <?php $redesocial = explode(';', $row[0]['redes_socieais']) ?>
          <?php foreach ($redesocial as $key => $link) : ?>
            <?php if (strchr($link, 'LinkedIn') || strchr($link, 'linkedin')) : ?>
              <p>LinkedIn: <a href="<?php echo $link ?>">LinkedIn</a> </p>
            <?php elseif (strchr($link, 'Facebook') || strchr($link, 'facebook')) : ?>
              <p>Facebook:<a href="<?php if (strchr($link, 'Facebook')) echo $link ?>">Facebook</a></p>
            <?php elseif (strchr($link, 'Twitter') || strchr($link, 'twitter')) : ?>
              <p>Twitter:<a href="<?php if (strchr($link, 'Twitter')) echo $link ?>">Twitter</a></p>
            <?php elseif (strchr($link, 'Google+') || strchr($link, 'google+')) : ?>
              <p>Google+:<a href="<?php if (strchr($link, 'Google+')) echo $link ?>"></a></p>
            <?php elseif (strchr($link, 'YouTube') || strchr($link, 'youtube')) : ?>
              <p>YouTube:<a href="<?php if (strchr($link, 'YouTube')) echo $link ?>">YouTube</a></p>
            <?php elseif (strchr($link, 'Instagram') || strchr($link, 'instagram')) : ?>
              <p>Instagram:<a href="<?php if (strchr($link, 'Instagram ')) echo $link ?>">Instagram</a></p>
            <?php endif ?>
          <?php endforeach ?>
        </div>
      </div>
      <div class="col-sm-8">
        <div class="frasedestaque">
          <h1 class="display-6 branco">Professora de Língua Portuguesa, Especialista em Metodologia do Ensino de leitura, interpretação de textos diversificados, Literatura e gramática para o ENEM, vestibulares e concursos</h1>
        </div>
        <h1 class="titulo">Sobre seu trabalho e experiência</h1>
        <?php echo $row[0]['sobre_oque_faz'] ?>
        <h1 class="titulo">Mais sobre informaçoes sobre Lucia Costa </h1>
        <?php echo $row[0]['sobre_voce'] ?>
        <h1 class="titulo">Recomendações</h1>
        <div class="recomendacoes">

          <p><strong>Rosana</strong></p>
          <p><?php echo $row[0]['text_experiencia'] ?></p>
        </div>
      </div>
    </div>
  </div>
</body>

</html>

<?php

include "footer.php"

?>