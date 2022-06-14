<?php

require_once('conect.php');

$email = $_POST["email"];
$senha = $_POST["senha"];

if (!$email || !$senha) {
  echo "Informe um E-mail ou a Senha ";
}

try {
  $stmt = $pdo->prepare("SELECT c.* FROM cadastro c WHERE c.email LIKE '%$email%' AND c.senha = $senha");
  $stmt->execute();


  $result = $stmt->fetchAll();

  if ($result) {
    // var_dump($result); die();
    // $read_file = 'consulta-morador.php';
    $_SESSION['login'] = $email;
    $_SESSION['senha'] = $senha;  
  
    header('Location: ../consulta-morador.php ' . $url, true, $statusCode);
    die();
  } else {
    unset($_SESSION['login']);
    unset($_SESSION['senha']);

    header("Location: ../login.php?erro=dadoserrado");
  }
} catch (PDOException $e) {
  echo 'ERROR: ' . $e->getMessage();
}
