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
    $stmt = $pdo->prepare("SELECT s.*, m.nome, m.email, m.telefone, m.whatsapp FROM servicos s LEFT JOIN morador m ON m.id = s.id_morador WHERE $w ");
    $stmt->execute();

    $row = $stmt->fetchAll();

    if ($row) {
        $table =
        "<table class='table table-striped table-sm'>
        <thead>
          <tr>
            <th scopt='col'>Imagem</th>
            <th scope='col'>Nome</th>
            <th scope='col'>E-mail</th>
            <th scope='col'>Telefone/whatsapp</th>
            <th scope='col'>area_de_atuacao</th>
            <th scope='col'>titulo_anuncio</th>
            <th scope='col'>Ação</th>
          </tr>
        </thead>
        <tbody>
        <tr>";
        $result = $table;
        // var_dump($row); die();

        foreach($row as $key => $value){
            $email = $value['email'];
            $idmorador = $value['id_morador'];
            $imagem = $value['imagem'];
            $result .= "<td>"."<a class='nav-link active' aria-current='page' href='login.php'><img src='<?php echo $imagem?>' class='logo'>"."</td>";
            $result .= "<td>".$value['nome']."</td>";
            $result .= "<td>".$value['email']."</td>";
            $result .= "<td>".$value['telefone']."/".$value['whatsapp']."</td>";
            $result .= "<td>".$value['area_de_atuacao']."</td>";
            $result .= "<td>".$value['titulo_anuncio']."</td>";
            $result .= "<td>"."<form action='../controller/cadastrosemservico.php' method='post' enctype='multipart/form-data'> <input type='hidden' class='form-control' id='email' name='email' value='<?php echo $email ?>' <td>"." <input type='hidden' class='form-control' id='id' name='id' value='<?php echo $id ?>' />"."<button  type='submit' class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#visitarperfil' >Visitar Perfil</button>,</form>"."</td>";
            $result .="</tr>";
        }
        echo $result .="</tbody></table>";
    } else {
        echo "Nennhum resultado retornado.";
    }
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
