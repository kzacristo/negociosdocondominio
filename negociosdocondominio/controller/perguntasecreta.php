<?php
    require_once('conect.php');

    $email = (isset($_GET['email'])) ? $_GET['email'] : false;
    if($email){
        $w = "c.email LIKE '%$email%'";
    }else{
        $erro = 'Digite um e-mail valido';
    }

    try{
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

        foreach($row as $key => $value){
            $result .= "<td>".$value['perguntasecreta']."</td>";
            $result .= "<td>"."<div class='form-floating'> <form action='../controller/versenha.php' method='get' enctype='multipart/form-data'> <input type='text' name='minharesposta' class='form-control' id='minharesposta' value=''><label for='floatingInput'>Resposta:</label></div>"."</td>";
            $result .= "<td>"."<button  type='submit' class='btn btn-danger'  data-bs-toggle='modal' data-bs-target='#visitarperfil'>Ver Senha</button></form>"."</td>";
            $result .="</tr>";
        }
        echo $result .="</tbody></table>";
    } else {
        echo "Nennhum resultado retornado.";
    }
}catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}


?>