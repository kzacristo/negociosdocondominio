<?php 
//fbKU162Me6od 
// $username = "epiz_31956677";
// $password = "fbKU162Me6od";
// $database = "epiz_31956677_pj_integrador";
// $hostname = "sql303.epizy.com";
// $dsn = "mysql:host={$hostname};port=3306;dbname={$database}";

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