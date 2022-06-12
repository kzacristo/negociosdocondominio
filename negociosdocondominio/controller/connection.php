<?php

$email = $_POST["email"];
$senha = $_POST["senha"];

if(!$email || !$senha){
    echo "Informe um E-mail ou a Senha ";
}

$username = "root";
$password = "root";
$database = "pj_integrador";
$hostname = "172.20.0.7";

try {
  $conn = new PDO('mysql:host='.$hostname.';dbname='.$database, $username, $password);
  $stmt = $conn->prepare("SELECT c.* FROM cadastro c WHERE c.email LIKE '%$email%' AND c.senha = $senha");
  $stmt->execute();
  
  
  $result = $stmt->fetchAll();
  
  if ( $result ) {
    // var_dump($result); die();
  // $read_file = 'consulta-morador.php';
  header('Location: ../consulta-morador.php ' . $url, true, $statusCode);
  die();
  } else {
    header("Location: ../login.php?erro=dadoserrado");
  }
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
