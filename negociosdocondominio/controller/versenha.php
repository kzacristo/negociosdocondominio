<?php
require_once('conect.php');

$resposta = (isset($_GET['resposta'])) ? $_GET['resposta'] : false;
$minharesposta = (isset($_GET['minharesposta'])) ? $_GET['minharesposta'] : false;

var_dump($resposta, $minharesposta);
die();

$w = "";
foreach ($where as $k => $v) {
    if ($k > 0) $w .= " AND ";
    $w .= $v;
}



try {
    $stmt = $pdo->prepare("SELECT c.* FROM cadastro c WHERE $w ");
    $stmt->execute();

    $row = $stmt->fetchAll();

    $resposta = $row[0]['senha'];

    if ($row) {
        $table =
            "<table class='table table-striped table-sm'>
        <thead>
          <tr>
            <th scope='col'>Pergunta</th>
          </tr>
        </thead>
        <tbody>
        <tr>";
        $result = $table;

        foreach ($row as $key => $value) {
            $result .= "<td>" . $value['perguntasecreta'] . "</td>";
            $result .= "<td>" . "<div class='form-floating'>input type='hidden' name='resposta' class='form-control' id='resposta' value='$resposta'><input type='text' name='minharesposta' class='form-control' id='minharesposta' value=''><label for='floatingInput'>Resposta:</label></div>" . "</td>";
            $result .= "<td>" . "<button  type='submit' class='btn btn-danger'  data-bs-toggle='modal' data-bs-target='#visitarperfil' onclick='resposta()'>Ver Senha</button></form>" . "</td>";
            $result .= "</tr>";
        }
        echo $result .= "</tbody></table>";
    } else {
        echo "Nennhum resultado retornado.";
    }
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>