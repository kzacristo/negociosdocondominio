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

$iddia = explode(',', $row[0]['dia_semana']);
$idhora = explode(',', $row[0]['hora_atendimento']);
$trabalho = array();

foreach ($iddia as $k => $dias) {
  switch ($dias) {
    case 1:
      array_push($trabalho   , 'Segunda');
      break;
    case 2:
      array_push($trabalho ,  'Terça');
      break;
    case 3:
      array_push($trabalho ,  'Quarta');
      break;
    case 4:
      array_push($trabalho , 'Quinta');
      break;
    case 5:
      array_push($trabalho , 'Sexta');
      break;
    case 6:
      array_push($trabalho , 'Sabado');
      break;
    case 7:
      array_push($trabalho , 'Domingo');
      break;
    default:
    array_push($trabalho , 'A combinar');
      break;
  }
}
var_dump($trabalho);
foreach ($idhora as $k => $h) {
  $hora = explode('/',$h);
  foreach($trabalho as $y => $trab){

  }
  switch ($hora[0]) {
    case 1:
      $trabalho[0] .= ' - ' . $hora[1];
      break;
    case 2:
      $trabalho[1] .=  ' - ' . $hora[1];
      break;
    case 3:
      $trabalho[2] .=  ' - ' . $hora[1];
      break;
    case 4:
      $trabalho[3] .=  ' - ' . $hora[1];
      break;
    case 5:
      $trabalho[4] .=  ' - ' . $hora[1];
      break;
    case 6:
      $trabalho[5] .=  ' - ' . $hora[1];
      break;
    case 7:
      $trabalho[6] .=  ' - ' . $hora[1];
      break;
    default:
      $trabalho[7] .=  ' - ' . ' ';
      break;
  }
 
  
}
var_dump($trabalho); die();
// $trabalho = explode(',', $trabalho);
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
          <h2>Informações de contato</h2>
          <p>Telefone: <?php echo $row[0]['telefone'] ?></p>
          <p>Whatsapp: <?php echo $row[0]['whatsapp'] ?></p>
          <p>E-mail: <?php echo $row[0]['email'] ?></p>
          <br>
          <h2>Horário de funcionamento</h2>
          <?php foreach ($trabalho as $key => $semanal) : ?>
            <p><?php echo $semanal ?></p>
          <?php endforeach ?>
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