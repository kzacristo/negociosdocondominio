<?php 

$tipe = $_POST['primeirocadastro'];

$username = "root";
$password = "root";
$database = "pj_integrador";
$hostname = "172.20.0.7";


if($tipe == 1){
   $nome = (isset($_POST['nome'])) ? $_POST['nome'] : '';
   $sobernome = (isset($_POST['sobernome'])) ? $_POST['sobernome'] : '';
   $bloco = (isset($_POST['bloco'])) ? $_POST['bloco'] : '';
   $torre = (isset($_POST['torre'])) ? $_POST['torre'] : '';
   $datanascimento = (isset($_POST['datanascimento'])) ? $_POST['datanascimento'] : '';
   $genero = (isset($_POST['genero'])) ? $_POST['genero'] : '';
   $email = (isset($_POST['email'])) ? $_POST['email'] : '';
   $telefone = (isset($_POST['telefone'])) ? $_POST['telefone'] : '';
   $zap = (isset($_POST['zap'])) ? $_POST['zap'] : '';


   try {
    $conn = new PDO('mysql:host=' . $hostname . ';dbname=' . $database, $username, $password);
    $stmt = $conn->prepare("INSERT INTO `morador`(`bloco`, `torre`, `nome`, `sobrenome`, `email`, `data_nascimento`, `telefone`, `genero`, `whatsapp`) VALUES (?,?,?,?,?,?,?,?,?)")->execute([$bloco,$torre,$nome,$sobrenome,$email,$datanascimento,$telefone,$genero,$zap]);

    header('Location: ../cadastro-servicos.php ' . $url, true, $statusCode);

} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}


}else{
    // href="perfil.php" 
    $areadeatuacao = (isset($_POST['areadeatuacao'])) ? $_POST['areadeatuacao'] : false;
    $outraarea = (isset($_POST['outraarea'])) ? $_POST['outraarea'] : false;
    $servicos_ofertados = (isset($_POST['servicos_ofertados'])) ? $_POST['servicos_ofertados'] : false;
    $diasemana = (isset($_POST['diasemana'])) ? $_POST['diasemana'] : false;
    $areadeatuacao = (isset($_POST['areadeatuacao'])) ? $_POST['areadeatuacao'] : false;
    $linckdin = (isset($_POST['linckdin'])) ? $_POST['linckdin'] : false;
    $facebook = (isset($_POST['facebook'])) ? $_POST['facebook'] : false;
    $twitter = (isset($_POST['twitter'])) ? $_POST['twitter'] : false;
    $googleplus = (isset($_POST['googleplus'])) ? $_POST['googleplus'] : false;
    $youtube = (isset($_POST['youtube'])) ? $_POST['youtube'] : false;
    $instagram = (isset($_POST['instagram'])) ? $_POST['instagram'] : false;
    $titulo_anuncio = (isset($_POST['titulo_anuncio'])) ? $_POST['titulo_anuncio'] : false;
    $oquefaz = (isset($_POST['oquefaz'])) ? $_POST['oquefaz'] : false;
    $sobrevc = (isset($_POST['sobrevc'])) ? $_POST['sobrevc'] : false;
    $valor = (isset($_POST['valor'])) ? $_POST['valor'] : false;
    $file = (isset($_POST['file'])) ? $_POST['file'] : false;

    $horario = array();

    if(isset($_POST['horario1'])){ array_push($horario, $_POST['horario1']);}
    if(isset($_POST['horario2'])){ array_push($horario, $_POST['horario2']);}
    if(isset($_POST['horario3'])){ array_push($horario, $_POST['horario3']);}
    if(isset($_POST['horario4'])){ array_push($horario, $_POST['horario4']);}
    if(isset($_POST['horario5'])){ array_push($horario, $_POST['horario5']);}
    if(isset($_POST['horario6'])){ array_push($horario, $_POST['horario6']);}
    if(isset($_POST['horario7'])){ array_push($horario, $_POST['horario7']);}
    if(isset($_POST['horario8'])){ array_push($horario, $_POST['horario8']);}

    foreach($horario as $key => $h){
        
    }

    $time = (isset($_POST['time'])) ? $_POST['time'] : false;

    var_dump($horario,$time);die();

    try {
        $conn = new PDO('mysql:host=' . $hostname . ';dbname=' . $database, $username, $password);
        $stmt = $conn->prepare("INSERT INTO `servicos`(`id`, `area_de_atuacao`, `outra_area`, `atendimento`, `servicos_ofertados`, `dia_semana`, `hora_atendimento`, `data_atendimento`, `titulo_anuncio`, `text_experiencia`, `redes_socieais`, `sobre_voce`, `sobre_oque_faz`, `valor`, `tipo_valor`, `imagem`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]','[value-12]','[value-13]','[value-14]','[value-15]','[value-16]')")->execute([$anuncio,$areadeatuacao,$tipodeatendimento,$areadeatuacao,$diasemana,$horario]);
    
    } catch (PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }
}




?>