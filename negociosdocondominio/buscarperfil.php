<?php
$email = $_POST['email'] ;
$id =  $_POST['id'];
//var_dump($_POST['email'], $_POST['id']); die();
require_once('./controller/conect.php');

try {
  $stmt = $pdo->prepare("SELECT m.* , s.*  FROM morador m LEFT JOIN servicos s ON s.id_morador = m.id WHERE m.id = $id ORDER BY m.id DESC ");
  $stmt->execute();

  $row2 = $stmt->fetchAll();
//   var_dump($row); die();


  if (!isset($row2) && sizeof($row2) <= 0) {
    header('location:index.php');
  }
} catch (PDOException $e) {
  echo 'ERROR: ' . $e->getMessage();
}
$idmorador = (isset($row2) && (int)$row2[0]['id'] > 0 ) ? $row2[0]['id'] : 0;

$dataatendimento = (isset($row2[0]['data_atendimento'])) ? explode(',',$row2[0]['data_atendimento']) : false;

$trabalho = (isset($row2[0]['data_atendimento']) && sizeof($dataatendimento) > 0) ? $row2[0]['data_atendimento'] : false;
if ($trabalho) $trabalho = explode(',', $trabalho);

// var_dump($redesocial); die();
// var_dump($row); die();
if ($row[0]['redes_sociai'] = 'sim'){
  $query = $pdo->prepare("SELECT r.* FROM redes_sociais r WHERE r.id_morador = $idmorador");
  $query->execute();

  $redesocial= $query->fetchAll();
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
        <div class="destaqueperfil"> 
        <?php if (isset($row2[0]['imagem']) && $row2[0]['imagem'] != '' ) : ?>
            <img src="<?php echo $row2[0]['imagem'] ?>" height="100">
          <?php else : ?>
            <img src="./images/images.jpeg" height="100">
          <?php endif ?>
          <h2><?php echo $row2[0]['nome'] ?></h2>
          <p><?php echo $row2[0]['titulo_anuncio'] ?></p>
          <br>
          <?php if ($row2[0]['valor']) : ?>
            <h2>Valor</h2>
            <?php
            switch ($row2[0]['tipo_valor']) {
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
          <p>Telefone: <?php echo $row2[0]['telefone'] ?></p>
          <p>Whatsapp: <?php echo $row2[0]['whatsapp'] ?></p>
          <p>E-mail: <?php echo $row2[0]['email'] ?></p>
          <br>
          <?php if (isset($trabalho) && $trabalho != '') : ?>
            <h2>Horário de funcionamento</h2>
            <?php foreach ($trabalho as $key => $semanal) : ?>
              <p><?php echo $semanal ?></p>
            <?php endforeach ?>
          <?php endif ?>
          <br>
          <?php if ($redesocial) : ?>
            <h2>Redes socias</h2>
            <?php foreach ($redesocial as $key => $link) : ?>
                <p>LinkedIn: <a href="<?php echo $link['linkedin'] ?>">LinkedIn</a> </p>
                <p>Facebook:<a href="<?php echo $link['facebook'] ?>">Facebook</a></p>
                <p>Twitter:<a href="<?php echo $link['twitter'] ?>">Twitter</a></p>
                <p>Google+:<a href="<?php echo $link['googleplus'] ?>">Google+</a></p>
                <p>YouTube:<a href="<?php echo $link['youtube'] ?>">YouTube</a></p>
                <p>Instagram:<a href="<?php echo $link['instagram'] ?>">Instagram</a></p>
            <?php endforeach ?>
          <?php endif ?>
          </div>
      </div>
      <div class="col-sm-8">
        <div class="frasedestaque">
          <h1 class="display-6 branco"><?php echo $row2[0]['titulo_anuncio'] ?></h1>
        </div>
        <?php if ($row2[0]['sobre_oque_faz']) : ?>
          <h1 class="titulo">Sobre seu trabalho e experiência</h1>
          <?php echo $row2[0]['sobre_oque_faz'] ?>
        <?php endif ?>
        <?php if ($row[0]['sobre_voce']) : ?>
          <h1 class="titulo">Mais sobre informações sobre <?php echo $row[0]['nome'] ?> </h1>
          <?php echo $row2[0]['sobre_voce'] ?>
        <?php endif ?>
          </div>
      </div>
    </div>
  </div>
</body>

</html>

<?php

include "footer.php"

?>