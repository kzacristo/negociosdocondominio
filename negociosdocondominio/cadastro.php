<?php

include "header.php"

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Perfil</title>
  <script src=“js/jquery.js”></script>
</head>

<body>
  <div class="container">
    <div class="row">
      <h1 class="titulo">Cadastro de Morador</h1>
      <h2 class="nomecondominio">Nome Condominio</h2>
      <form action="../controller/cadastrosemservico.php" method="post">
        <div class="col-sm-12">
          <div class="row">
            <div class="col-sm-6 camposform">
              <label for="bloco" class="form-control">Bloco / torre</label>
              <!-- <select class="form-select " name="bloco">
              <option selected>Selecionar</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select> -->
              <input type="text" class="form-control " id="bloco" placeholder="Bloco/torre" value="" name="bloco" required>
            </div>
            <div class="col-sm-6 camposform">
              <label for="unidade" class="form-control">Unidade / Apartamento</label>
              <!-- <select class="form-select " name="torre">
              <option selected>Selecionar</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select> -->
              <input type="text" class="form-control " id="torre" placeholder="Unidade/ Apartamento" value="" name="torre" required>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 camposform">
            <label for="nome" class="form-control">Nome</label>
            <input type="text" class="form-control " id="nome" placeholder="" value="" name="nome" required>
            <div class="invalid-feedback">Campo Obrigatório </div>
          </div>
          <div class="col-sm-6 camposform">
            <label for="sobrenome" class="form-control">Sobrenome</label>
            <input type="text" class="form-control " id="sobrenome" placeholder="" value="" name="sobrenome" required>
            <div class="invalid-feedback">Campo Obrigatório</div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-3 camposform">
            <label for="datanascimento" class="form-control">Data de Nascimento</label>
            <input type="date" class="form-control " id="datanascimento" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" placeholder="" value="" name="datanascimento" required>
            <div class="invalid-feedback">Campo Obrigatório</div>
          </div>
          <div class="col-sm-3 camposform">
            <label for="genero" class="form-control" required>Gênero</label>
            <select class="form-select" name="genero">
              <option selected>Feminino</option>
              <option value="1">Masculino</option>
              <option value="2">Não binário</option>
              <option value="2">Prefiro não dizer</option>
            </select>
            <div class="invalid-feedback">Campo Obrigatório</div>
          </div>

          <div class="col-sm-6 camposform">
            <label for="e-mail" class="form-control">E-mail</label>
            <div class="input-group has-validation"> <span class="input-group-text">@</span>
              <input type="text" class="form-control input-group-lg" id="username" placeholder="E-mail" name="email" required>
              <div class="invalid-feedback"> Campo Obrigatório </div>
            </div>
          </div>



        </div>
        <div class="row">
          <!-- pattern="^\\([0-9]{2}\\)((3[0-9]{4}-[0-9]{4})|(9[0-9]{3}-[0-9]{5}))$" -->

          <div class="col-sm-6 camposform">
            <label for="telefone" class="form-control">Telefone </label>
            <input type="text" class="form-control" name="telefone" id="telefone" placeholder="+55(XX)XXXX-XXXX" required>
            <div class="invalid-feedback"> Campo Obrigatório </div>
          </div>

          <div class="col-sm-6 camposform">
            <label for="telefone" class="form-control">Whatsapp </label>
            <input type="text" class="form-control" name="zap" id="telefone" placeholder="+55(XX)XXXX-XXXX">

          </div>

        </div>




        <input type="hidden" class="form-control" id="primeirocadastro" name="primeirocadastro" value="1" />




        <div class="row">
          <div class="col-sm-6 camposform" id="cadastrosenha">
            <h4>Deseja incluir serviços?</h4>
            <button class="btn btn-primary" name="button" onclick="comservico()" value="sim" type="button">Sim</button>
            <!-- <a class="btn btn-primary" role="button" onclick="cadastrosenha()"  type="button">Sim</a> -->
            <!-- <a class="btn btn-primary bgcinza" onclick="cadastrosenha()" type="button">Não</a> -->
            <button class="btn btn-primary bgcinza" name="button" onclick="semservico()" value="nao" type="button">Não</button>
          </div>
        </div>

      </form>
    </div>
  </div>
</body>

</html>
<?php

include "footer.php"

?>

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript">
  function comservico() {

    $('#cadastrosenha').html(' ')
    $("#cadastrosenha").show()
    $('#cadastrosenha').append('<label for="senha" class="form-control">Digite a sua senha </label><br />')
    $('#cadastrosenha').append('<input type="password" name="senha" class="form-control input-group-lg"  id="senha" value="" /><br />')
    $('#cadastrosenha').append('<input type="text" name="pergunta" class="form-control input-group-lg"  id="pergunta" value="" /><br />')
    $('#cadastrosenha').append('<input type="text" name="resposta" class="form-control input-group-lg"  id="resposta" value="" /><br />')
    $('#cadastrosenha').append('<input type="hidden" name="teste" class="form-control input-group-lg"  id="teste" value="sim" /><br />')
    $('#cadastrosenha').append('<button class="btn btn-primary" name="button" type="submit">Salvar</button>')
    $('#cadastrosenha').append('<button class="btn btn-primary bgcinza" name="button" href="#" type="submit">Cancelar</button><br />')
    // document.getElementById(cadastrosenha).appendChild(cadastrosenha);


  }

  function semservico() {

    $('#cadastrosenha').html(' ')
    $("#cadastrosenha").show()
    $("#cadastrosenha").append('<div class="col-sm-6 camposform" id="image">')
    $("#image").append('<div class="row" id="image2">')
    $("#image2").append('<label for="e-mail" class="form-label">Exemplos </label>')
    $("#image2").append('<p><img src="https://c.superprof.com/static/img/ok-photo-1.64dfba7a.png" > <img src="https://c.superprof.com/static/img/ok-photo-2.07a75de7.png"> <img src="https://c.superprof.com/static/img/ok-photo-3.ccfd4b68.png"> </p>')
    $("#image2").append('<input class="form-control" type="file" name="file" id="formFile"></div></div><br>')
    $('#cadastrosenha').append('<label for="senha" class="form-control">Digite a sua senha </label><br />')
    $('#cadastrosenha').append('<input type="password" name="senha" class="form-control input-group-lg"  id="senha" value="" /><br />')
    $('#cadastrosenha').append('<input type="text" name="pergunta" class="form-control input-group-lg"  id="pergunta" value="" /><br />')
    $('#cadastrosenha').append('<input type="text" name="resposta" class="form-control input-group-lg"  id="resposta" value="" /><br />')
    $('#cadastrosenha').append('<input type="hidden" name="teste" class="form-control input-group-lg"  id="teste" value="nao" /><br />')
    $('#cadastrosenha').append('<button class="btn btn-primary" name="button" type="submit">Salvar</button>')
    $('#cadastrosenha').append('<button class="btn btn-primary bgcinza" name="button" href="#" type="submit">Cancelar</button><br />')
    // document.getElementById(cadastrosenha).appendChild(cadastrosenha);


  }
</script>