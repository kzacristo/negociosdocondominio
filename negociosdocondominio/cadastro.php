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

          <div class="col-sm-6 camposform">
            <label for="telefone" class="form-control">Telefone </label>
            <input type="text" class="form-control" name="telefone" id="telefone" pattern="[0-9]{9}" placeholder="+55(XX)XXXX-XXXX" required>
            <div class="invalid-feedback"> Campo Obrigatório </div>
          </div>

          <div class="col-sm-6 camposform">
            <label for="telefone" class="form-control">Whatsapp </label>
            <input type="text" class="form-control" name="zap" id="telefone" pattern="[0-9]{9}" placeholder="+55(XX)XXXX-XXXX">

          </div>

        </div>




        <input type="hidden" class="form-control" id="primeirocadastro" name="primeirocadastro" value="1" />




        <h4>Deseja incluir serviços?</h4>
        <div class="row">
          <div class="col-sm-6 camposform" id="cadastrosenha">
            <button class="btn btn-primary" name="button" onclick="cadastrosenha()" type="button">Sim</button>
            <!-- <a class="btn btn-primary" role="button" onclick="cadastrosenha()"  type="button">Sim</a> -->
            <!-- <a class="btn btn-primary bgcinza" onclick="cadastrosenha()" type="button">Não</a> -->
            <button class="btn btn-primary bgcinza" name="button" onclick="cadastrosenha()"  type="button">Não</button>
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
  function cadastrosenha() {

    $('#cadastrosenha').html(' ')
    $("#cadastrosenha").show()
    $('#cadastrosenha').append('<input type="password" name="senha" id="senha" value="" /><br />')
    $('#cadastrosenha').append('<button class="btn btn-primary" name="button" value="sim" type="submit">Salvar</button>')
    $('#cadastrosenha').append('<button class="btn btn-primary bgcinza" name="button" href="#" type="submit">Canselar</button><br />')
    // document.getElementById(cadastrosenha).appendChild(cadastrosenha);


  }
</script>