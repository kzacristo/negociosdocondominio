<?php

$email = $_POST["email"];
$senha = $_POST["senha"];

if(!$email || !$senha){
    echo "Informe um E-mail ou a Senha ";
}

$username = "root";
$password = "";
$database = "negociodecondominio";
$hostname = "localhost";

try {
  $conn = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);
  $stmt = $conn->prepare("SELECT c.* FROM cadastro c WHERE c.email LIKE '%$email%' AND c.senha = $senha");
  $stmt->execute();

  $result = $stmt->fetchAll();

  if ( count($result) ) {
   $read_file = 'http://localhost/negociosdocondominio/negociosdocondominio/consulta-morador.php';
   header('Location : ' .$read_file);
  } else {
    echo "Nennhum resultado retornado.";
  }
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>