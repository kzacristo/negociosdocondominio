<?php
 session_start();

require_once('conect.php');

$tipe = $_POST['primeirocadastro'];
$value = $_POST['teste'];

if ($tipe == 1) {

    $nome = (isset($_POST['nome'])) ? $_POST['nome'] : '';
    $sobrenome = (isset($_POST['sobrenome'])) ? $_POST['sobrenome'] : '';
    $senha = (isset($_POST['senha'])) ? $_POST['senha'] : '';
    $bloco = (isset($_POST['bloco'])) ? $_POST['bloco'] : '';
    $torre = (isset($_POST['torre'])) ? $_POST['torre'] : '';
    $datanascimento = (isset($_POST['datanascimento'])) ? $_POST['datanascimento'] : '';
    $genero = (isset($_POST['genero'])) ? $_POST['genero'] : '';
    $email = (isset($_POST['email'])) ? $_POST['email'] : '';
    $telefone = (isset($_POST['telefone'])) ? $_POST['telefone'] : '';
    $zap = (isset($_POST['zap'])) ? $_POST['zap'] : '';
    $pergunta = (isset($_POST['pergunta'])) ? $_POST['pergunta'] : '';
    $resposta = (isset($_POST['resposta'])) ? $_POST['resposta'] : '';
 

    try {
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = $pdo->prepare("SELECT c.* FROM cadastro c WHERE c.nome LIKE '%$nome%' AND c.email LIKE '%$email%'");

        $query->execute();

        $result = $query->fetchAll();

        if (isset($reuslt) && sizeof($reuslt) > 0) {
            $idcadastro = $result[0]['id'];

            

            $image = salvararquivoAction($idcadastro);

            $stmt = $pdo->prepare("INSERT INTO `morador`(`idcadastro`, `bloco`, `torre`, `nome`, `sobrenome`, `email`, `data_nascimento`, `telefone`, `whatsapp`, `genero`, `imagem`) VALUES (?,?,?,?,?,?,?,?,?,?,?)")->execute([$idcadastro, $bloco, $torre, $nome, $sobrenome, $email, $datanascimento, $telefone, $genero, $zap, $image]);
        } else {
            $insertcadastro = $pdo->prepare("INSERT INTO `cadastro`(`email`, `senha`, `perguntasecreta`, `resposta`, `nome`, `sobrenome`, `genero`) VALUES (?,?,?,?,?,?,?)")->execute([$email, $senha, $pergunta, $resposta, $nome, $sobrenome, $genero]);

            $consultacadastro = $pdo->prepare("SELECT c.* FROM cadastro c WHERE c.nome LIKE '%$nome%' AND c.email LIKE '%$email%'");

            $consultacadastro->execute();

            $result = $consultacadastro->fetchAll();

            $idcadastro = $result[0]['id'];

            

            $image = salvararquivoAction($idcadastro);

            $stmt = $pdo->prepare("INSERT INTO `morador`(`idcadastro`, `bloco`, `torre`, `nome`, `sobrenome`, `email`, `data_nascimento`, `telefone`, `whatsapp`, `genero`, `imagem`) VALUES (?,?,?,?,?,?,?,?,?,?,?)")->execute([$idcadastro, $bloco, $torre, $nome, $sobrenome, $email, $datanascimento, $telefone, $genero, $zap, $image]);
        }
       
        $_SESSION['login'] = $email;
        $_SESSION['id'] = (isset($result[0]['id'])) ? $result[0]['id'] : $idcadastro;
        // die($_SESSION['login']);
        if ($value == 'sim') {
            header('Location: ../cadastro-servicos.php');
        } else {
            header('Location: ../perfil.php');
        }
    } catch (PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }
} else {
    // href="perfil.php" 
    $query = $pdo->prepare("SELECT m.* FROM morador m WHERE m.nome LIKE '%$nome%' AND m.email LIKE '%$email%' ORDER BY m.id DESC;");
    $query->execute();

    $result = $query->fetchAll();

    $id_morador = $result[0]['id'];

    $set = array();
    $link = array();

    $areadeatuacao = (isset($_POST['areadeatuacao'])) ? $_POST['areadeatuacao'] : false;
    if ($areadeatuacao) array_push($set, "area_de_atuacao = $areadeatuacao");

    $outraarea = (isset($_POST['outraarea'])) ? $_POST['outraarea'] : false;
    if ($outraarea) array_push($set, "outra_area = '$outraarea'");

    $tipodeatendimento = (isset($_POST['tipodeatendimento'])) ? $_POST['tipodeatendimento'] : false;
    if ($tipodeatendimento) array_push($set, "atendimento = $tipodeatendimento");

    $servicos_ofertados = (isset($_POST['servicos_ofertados'])) ? $_POST['servicos_ofertados'] : false;
    if ($servicos_ofertados) array_push($set, "servicos_ofertados = '$servicos_ofertados'");

    $linckdin = (isset($_POST['linckdin'])) ? $_POST['linckdin'] : false;
    if ($linckdin) array_push($link, strval($linckdin));

    $facebook = (isset($_POST['facebook'])) ? $_POST['facebook'] : false;
    if ($facebook) array_push($link, strval($facebook));

    $twitter = (isset($_POST['twitter'])) ? $_POST['twitter'] : false;
    if ($twitter) array_push($link, strval($twitter));

    $googleplus = (isset($_POST['googleplus'])) ? $_POST['googleplus'] : false;
    if ($googleplus) array_push($link, strval($googleplus));

    $youtube = (isset($_POST['youtube'])) ? $_POST['youtube'] : false;
    if ($youtube) array_push($link, strval($youtube));

    $instagram = (isset($_POST['instagram'])) ? $_POST['instagram'] : false;
    if ($instagram) array_push($link, strval($instagram));


    if ($link) $links =  implode(';', $link);
    array_push($set, "redes_socieais = $links");

    $titulo_anuncio = (isset($_POST['titulo_anuncio'])) ? $_POST['titulo_anuncio'] : false;
    if ($titulo_anuncio) array_push($set, "titulo_anuncio = '$titulo_anuncio'");

    $oquefaz = (isset($_POST['oquefaz'])) ? $_POST['oquefaz'] : false;
    if ($oquefaz) array_push($set, "sobre_oque_faz = '$oquefaz'");

    $sobrevc = (isset($_POST['sobrevc'])) ? $_POST['sobrevc'] : false;
    if ($sobrevc) array_push($set, "sobre_voce = '$sobrevc'");

    $valor = (isset($_POST['valor'])) ? $_POST['valor'] : false;
    if ($valor) {
        array_push($set, "valor = '$valor'");
    } else {
        $acombinar = (isset($_POST['acombinar'])) ? $_POST['acombinar'] : false;
        if ($acombinar) array_push($set, "valor = '$acombinar'");
    }


    $tipovalor = (isset($_POST['tipovalor'])) ? $_POST['tipovalor'] : false;
    if ($tipovalor) array_push($set, "tipo_valor = '$tipovalor'");

    $data_atendimento = array();


    if (isset($_POST['horario1'])) {
        if ((isset($_POST['time1']) && $_POST['time1'] != '') && (isset($_POST['time11'])) && $_POST['time11'] != '') {
            $time = 'Segunda' . '-' . $_POST['time1'] . '-' . $_POST['time11'];
            array_push($data_atendimento, $time);
        }
    }
    if (isset($_POST['horario2'])) {
        if ((isset($_POST['time2']) && $_POST['time2'] != '') && (isset($_POST['time22'])) && $_POST['time22'] != '') {
            $time = 'Terça' . '-' . $_POST['time2'] . '-' . $_POST['time22'];
            array_push($data_atendimento, $time);
        }
    }
    if (isset($_POST['horario3'])) {
        if ((isset($_POST['time3']) && $_POST['time3'] != '') && (isset($_POST['time33'])) && $_POST['time33'] != '') {
            $time = 'Quarta' . '-' . $_POST['time3'] . '-' . $_POST['time33'];
            array_push($data_atendimento, $time);
        }
    }
    if (isset($_POST['horario4'])) {
        if ((isset($_POST['time4']) && $_POST['time4'] != '') && (isset($_POST['time44'])) && $_POST['time44'] != '') {
            $time = 'Quinta' . '-' . $_POST['time4'] . '-' . $_POST['time44'];
            array_push($data_atendimento, $time);
        }
    }
    if (isset($_POST['horario5'])) {
        if ((isset($_POST['time5']) && $_POST['time5'] != '') && (isset($_POST['time55'])) && $_POST['time55'] != '') {
            $time = 'Sexta' . '-' . $_POST['time5'] . '-' . $_POST['time55'];
            array_push($data_atendimento, $time);
        }
    }
    if (isset($_POST['horario6'])) {
        if ((isset($_POST['time6']) && $_POST['time6'] != '') && (isset($_POST['time66'])) && $_POST['time66'] != '') {
            $time = 'Sabado' . '-' . $_POST['time6'] . '-' . $_POST['time66'];
            array_push($data_atendimento, $time);
        }
    }
    if (isset($_POST['horario7'])) {
        if ((isset($_POST['time7']) && $_POST['time7'] != '') && (isset($_POST['time77'])) && $_POST['time77'] != '') {
            $time = 'Domingo' . '-' . $_POST['time7'] . '-' . $_POST['time77'];
            array_push($data_atendimento, $time);
        }
    }
    if (isset($_POST['horario8'])) {
        array_push($data_atendimento, $_POST['horario8']);
    }


    $data_atendimento = implode(',', $data_atendimento);
    // var_dump($data_atendimento); die();


    salvararquivoAction($result[0]['id']);

    $image =  salvararquivoAction($result[0]['id']);
    if ($image) array_push($set, 'imagem = ' . $image);

    $w = "";
    foreach ($set as $k => $v) {
        if ($k > 0) $w .= ", ";
        $w .= $v;
    }

    // die($data_atendimento);

    try {
        $stmt = $pdo->prepare("INSERT INTO `servicos`(`id_morador`, `area_de_atuacao`, `outra_area`, `atendimento`, `servicos_ofertados`, `data_atendimento`, `titulo_anuncio`, `text_experiencia`, `redes_socieais`, `sobre_voce`, `sobre_oque_faz`, `valor`, `tipo_valor`, `imagem`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)")->execute([$id_morador, $areadeatuacao, $outraarea, $tipodeatendimento, $servicos_ofertados, $data_atendimento, $titulo_anuncio, $oquefaz, $links, $sobrevc, $oquefaz, $valor, $tipovalor, $image]);

        header('Location: ../perfil.php');
    } catch (PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }
}


function salvararquivoAction($id)
{
    $file = (isset($_FILES['file'])) ? $_FILES['file'] : false;
   

    $_UP['pasta'] = '../images/';
    $_UP['tamanho'] = 1024 * 1024 * 2;
    $_UP['extensoes'] = array('jpg', 'png', 'jpeg');

    // Renomeia o arquivo? (Se true, o arquivo será salvo como .jpg e um nome único)
    $_UP['renomeia'] = true;

    // Array com os tipos de erros de upload do PHP
    $_UP['erros'][0] = 'Não houve erro';
    $_UP['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
    $_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
    $_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
    $_UP['erros'][4] = 'Não foi feito o upload do arquivo';

    // Verifica se houve algum erro com o upload. Se sim, exibe a mensagem do erro
    if ($_FILES['file']['error'] != 0) {
        $nome_final = $id . '_usuario' . '.jpg';
        $caminho = $_UP['pasta'] . $nome_final;
        return $caminho;
        // die("Não foi possível fazer o upload, " . $_UP['erros'][$_FILES['file']['error']]);
        // exit; // Para a execução do script
    }
    // Faz a verificação da extensão do arquivo
    $extensao = strtolower(end(explode('.', $_FILES['file']['name'])));
    // die($extensao);
    if (array_search($extensao, $_UP['extensoes']) === false) {
        echo "Por favor, envie arquivos com as seguintes extensões: jpg, png, jpeg ou gif";
    }

    // Faz a verificação do tamanho do arquivo
    else if ($_UP['tamanho'] < $_FILES['file']['size']) {
        echo "O arquivo enviado é muito grande, envie arquivos de até 2Mb.";
    }

    // O arquivo passou em todas as verificações, hora de tentar movê-lo para a pasta
    else {
        // Primeiro verifica se deve trocar o nome do arquivo
        if ($_UP['renomeia'] == true) {

            // Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .jpg
            $nome_final = $id . '_usuario' . '.jpg';
        } else {
            // Mantém o nome original do arquivo
            $nome_final = $_FILES['file']['name'];
        }

        // Depois verifica se é possível mover o arquivo para a pasta escolhida
        if (move_uploaded_file($_FILES['file']['tmp_name'], $_UP['pasta'] . $nome_final)) {
            // Upload efetuado com sucesso, exibe uma mensagem e um link para o arquivo
            // echo "Upload efetuado com sucesso!";
            $caminho = $_UP['pasta'] . $nome_final;
            return $caminho;
        } else {
            // Não foi possível fazer o upload, provavelmente a pasta está incorreta
            $caminho = $_UP['pasta'] . $nome_final;
            return $caminho;
        }
    }
}
