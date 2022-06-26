<?php
session_start();
$email = $_SESSION['login'];
$id = $_SESSION['id'];

require_once('./controller/conect.php');



try {
  $stmt = $pdo->prepare("SELECT m.* , s.*  FROM morador m LEFT JOIN servicos s ON s.id_morador = m.id WHERE m.email LIKE '%$email%' AND m.idcadastro = $id ORDER BY m.id DESC ");
  $stmt->execute();

  $row = $stmt->fetchAll();
  // var_dump($row); die();


  if (!isset($row) && sizeof($row) <= 0) {
    header('location:index.php');
  }
} catch (PDOException $e) {
  echo 'ERROR: ' . $e->getMessage();
}

$trabalho = (isset($row[0]['data_atendimento']) && sizeof($row[0]['data_atendimento']) > 0) ? $row[0]['data_atendimento'] : false;
if ($trabalho) $trabalho = explode(',', $trabalho);

$redesocial = (isset($row[0]['redes_socieais']) && sizeof($row[0]['redes_socieais']) > 0) ? explode(';', $row[0]['redes_socieais']) : false;
// var_dump($redesocial); die();
if ($redesocial) $redesocial = explode(';', $row[0]['redes_socieais']);

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
          <p><?php echo $row[0]['titulo_anuncio'] ?></p>
          <br>
          <?php if ($row[0]['valor']) : ?>
            <h2>Valor</h2>
            <?php
            switch ($row[0]['tipo_valor']) {
              case 1:
                $tipo_valor = 'Por Hora';
                break;
              case 2:
                $tipo_valor = 'Por Dia';
                break;
              case 3:
                $tipo_valor = 'Por Serviço';
                break;
              default:
                $tipo_valor = 'A combinar';
                break;
            }

            ?>
            <p><?php $valor =  $tipo_valor . ' :' . ' R$. ' . $row[0]['valor'];
                echo $valor ?></p>
            <br>
          <?php endif ?>
          <h2>Informações de contato</h2>
          <p>Telefone: <?php echo $row[0]['telefone'] ?></p>
          <p>Whatsapp: <?php echo $row[0]['whatsapp'] ?></p>
          <p>E-mail: <?php echo $row[0]['email'] ?></p>
          <br>
          <?php if (isset($trabalho) && $trabalho != '') : ?>
            <h2>Horário de funcionamento</h2>
            <?php foreach ($trabalho as $key => $semanal) : ?>
              <p><?php echo $semanal ?></p>
            <?php endforeach ?>
          <?php endif ?>
          <br>
          <h2>Redes socias</h2>
          <?php if ($redesocial) : ?>
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
          <?php endif ?>
        </div>
      </div>
      <div class="col-sm-8">
        <div class="frasedestaque">
          <h1 class="display-6 branco"><?php echo $row[0]['titulo_anuncio'] ?></h1>
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