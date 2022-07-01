<?php
session_start();
$email = $_SESSION['login'];
$id = $_SESSION['id'];

require_once('conect.php');

$where = array();
// $destinatario = (isset($_GET["destinatario"])) ? $_GET['destinatario'] : false;
// if ($destinatario) array_push($where, " m.nome LIKE '%$destinatario%' ");

// $bloco = (isset($_GET["bloco"])) ? $_GET['bloco'] : false;
// if ($bloco) array_push($where, " s.bloco = $bloco");

// $torre = (isset($_GET["torre"])) ? $_GET['torre'] : false;
// if ($torre) array_push($where, " s.torre = $torre");

$texto = (isset($_GET["texto"])) ? $_GET['texto'] : false;

if($texto == 'alimentacao'){
    if ($texto) array_push($where, " s.area_de_atuacao = 1");
}elseif($texto == 'beleza'){
    if ($texto) array_push($where, " s.area_de_atuacao = 2");
}elseif($texto == 'educacao'){
    if ($texto) array_push($where, " s.area_de_atuacao = 3");
}elseif($texto == 'saude'){
    if ($texto) array_push($where, " s.area_de_atuacao = 4");
}elseif($texto == 'servicosgerais'){
    if ($texto) array_push($where, " s.area_de_atuacao = 5");
}else{
    if ($texto) array_push($where, " s.area_de_atuacao = 6");
}


$w = "";
foreach ($where as $k => $v) {
    if ($k > 0) $w .= " AND ";
    $w .= $v;
}

try {
    $stmt = $pdo->prepare("SELECT s.*, m.nome, m.email, m.telefone, m.whatsapp, m.imagem FROM servicos s LEFT JOIN morador m ON m.id = s.id_morador WHERE $w ");
    $stmt->execute();

    $row = $stmt->fetchAll();

    if ($row) {
        $table =
        "<table class='table table-striped table-sm'>
        <thead>
          <tr>
            <th scopt='col'></th>
            <th scope='col'>Nome</th>
            <th scope='col'>Titulo do Anuncio</th>
            <th scope='col'></th>
          </tr>
        </thead>
        <tbody>
        <tr>";
        $result = $table;
        // var_dump($row); die();

        foreach($row as $key => $value){
            $email = $value['email'];
            $idmorador = $value['id_morador'];
            $imagem = (isset($value['imagem'])) ? $value['imagem'] : '../images/images.jpeg';
            //var_dump($value['id_morador']); 
            $result .= "<td>"."<img src='$imagem' width='32' height='32' class='rounded-circle'>"."</td>";
            $result .= "<td>".$value['nome']."</td>";
            $result .= "<td>".$value['titulo_anuncio']."</td>";
            $result .= "<td>"."<form action='../buscarperfil.php' method='post' enctype='multipart/form-data'> <input type='hidden' class='form-control' id='email' name='email' value='$email' <td>"." <input type='hidden' class='form-control' id='id' name='id' value='$idmorador' />"."<button  type='submit' class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#visitarperfil' >Visitar Perfil</button></form>"."</td>";
            $result .="</tr>";
        }
        echo $result .="</tbody></table>";
    } else {
        echo "Nennhum resultado retornado.";
    }
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
