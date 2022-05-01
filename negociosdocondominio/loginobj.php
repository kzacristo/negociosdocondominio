<?php
    include "connection.php";

   $email = (isset($_POST["email"])) ? $_POST["email"] : false;
   $senha = (isset($_POST["senha"])) ? $_POST["senha"] : false;;
   
   if(($email) && ($senha)){
       $query = "SELECT c.*
                 FROM cadastros c
                 WHERE c.email LIKE '%$email%' AND c.senha = $senha ";
        $resp = mysqli_query($query);
        
   }
?>