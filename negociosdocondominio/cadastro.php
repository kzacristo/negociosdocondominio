<?php

include "header.php"

?>
<div class="container">
  <div class="row">
    <h1 class="titulo">Cadastro de Morador</h1>
    <h2 class="nomecondominio">Nome Condominio</h2>
    <form>
      <div class="col-sm-12">
        <div class="row">
          <div class="col-sm-6 camposform">
            <label for="bloco" class="form-label">Bloco / torre</label>
            <select class="form-select ">
              <option selected>Selecionar</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
          <div class="col-sm-6 camposform">
            <label for="unidade" class="form-label">Unidade / Apartamento</label>
            <select class="form-select " >
              <option selected>Selecionar</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 camposform" >
          <label for="nome" class="form-label">Nome</label>
          <input type="text" class="form-control " id="nome" placeholder="" value="" required>
          <div class="invalid-feedback">Campo Obrigatório </div>
        </div>
        <div class="col-sm-6 camposform">
          <label for="sobrenome" class="form-label">Sobrenome</label>
          <input type="text" class="form-control " id="sobrenome" placeholder="" value="" required>
          <div class="invalid-feedback">Campo Obrigatório</div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3 camposform">
          <label for="sobrenome" class="form-label">Data de Nascimento</label>
          <input type="date" class="form-control " id="sobrenome" placeholder="" value="" required>
          <div class="invalid-feedback">Campo Obrigatório</div>
        </div>
        <div class="col-sm-3 camposform">
          <label for="sobrenome" class="form-label" required >Gênero</label>
          <select class="form-select" >
            <option selected>Feminino</option>
            <option value="1">Masculino</option>
            <option value="2">Não binário</option>
            <option value="2">Prefiro não dizer</option>
          </select>
          <div class="invalid-feedback">Campo Obrigatório</div>
        </div>
		  
		          <div class="col-sm-6 camposform">
          <label for="e-mail" class="form-label">E-mail</label>
          <div class="input-group has-validation"> <span class="input-group-text">@</span>
            <input type="text" class="form-control input-group-lg" id="username" placeholder="E-mail" required>
            <div class="invalid-feedback"> Campo Obrigatório </div>
          </div>
        </div>
		  
		  

      </div>
      <div class="row">

        <div class="col-sm-6 camposform">
          <label for="telefone" class="form-label">Telefone </label>
          <input type="text" class="form-control" id="telefone" placeholder="+55(XX)XXXX-XXXX" required>
          <div class="invalid-feedback"> Campo Obrigatório </div>
        </div>
		  
		  <div class="col-sm-6 camposform">
          <label for="telefone" class="form-label">Whatsapp </label>
          <input type="text" class="form-control" id="telefone" placeholder="+55(XX)XXXX-XXXX" >
          
        </div>
		  
      </div>
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
      <h4>Deseja incluir serviços?</h4>
      <div class="row">
        <div class="col-sm-6 camposform"> <a class="btn btn-primary" href="cadastro-servicos.php" role="button">Sim</a> <a class="btn btn-primary bgcinza" href="#" role="button">Não</a> </div>
      </div>
    </form>
  </div>
</div>
<?php

include "footer.php"

?>
