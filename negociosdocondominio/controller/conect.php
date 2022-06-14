<?php 
//fbKU162Me6od 

$username = "root";
$password = "root";
$database = "pj_integrador";
$hostname = "172.20.0.7";
$dsn = "mysql:host={$hostname};port=3306;dbname={$database}";

    try 
    {
        // Conectando
        $pdo = new PDO($dsn, $username, $password);
    } 
    catch (PDOException $e) 
    {
        // Se ocorrer algum erro na conexão
        die($e->getMessage());
    }

?>