<?php

$where = array();
$destinatario = (isset($_GET["destinatario"])) ? $_GET['destinatario'] : false;
if ($destinatario) array_push($where, " m.nome LIKE '%$destinatario%' ");

$bloco = (isset($_GET["bloco"])) ? $_GET['bloco'] : false;
if ($bloco) array_push($where, " m.bloco = $bloco");

$torre = (isset($_GET["torre"])) ? $_GET['torre'] : false;
if ($torre) array_push($where, " m.torre = $torre");
// var_dump($_GET["destinatario"], $_GET["bloco"], $_GET['torre']); die();  

$w = "";
foreach ($where as $k => $v) {
    if ($k > 0) $w .= " AND ";
    $w .= $v;
}

$username = "root";
$password = "root";
$database = "pj_integrador";
$hostname = "localhost:3306";

try {
    $conn = new PDO('mysql:host=' . $hostname . ';dbname=' . $database, $username, $password);
    $stmt = $conn->prepare("SELECT m.* FROM morador m WHERE $w ");
    $stmt->execute();

    $row = $stmt->fetchAll();

    if ($row) {
        $table =
        "<table class='table table-striped table-sm'>
        <thead>
          <tr>
            <th scope='col'>Nome</th>
            <th scope='col'>E-mail</th>
            <th scope='col'>Telefone</th>
            <th scope='col'>Ação</th>
          </tr>
        </thead>
        <tbody>
        <tr>";
        $result = $table;

        foreach($row as $key => $value){
            $result .= "<td>".$value['nome']."</td>";
            $result .= "<td>".$value['email']."</td>";
            $result .= "<td>".$value['telefone']."</td>";
            $result .= "<td>"."<button type='button' class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#deletarmorador'>Deletar</button>"."</td>";
            $result .="</tr>";
        }
        echo $result .="</tbody></table>";
    } else {
        echo "Nennhum resultado retornado.";
    }
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
