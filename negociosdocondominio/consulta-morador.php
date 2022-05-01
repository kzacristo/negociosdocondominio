<?php

include "header.php"

?>

<div class="container">
<div class="row">
<h1 class="titulo">Consulta Morador</h1>
<h2 class="nomecondominio">Nome Condominio</h2>
<form>
<div class="row">
  <div class="col-sm-12">
    <div class="mb-4 camposform">
      <label for="disabledTextInput" class="form-label">Destinatário</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="Nome do Destinatário">
    </div>
  </div>
  <div class="col-sm-5 camposform">
    <label for="torre" class="form-label">Bloco / torre</label>
    <select class="form-select  " >
      <option selected>Selecionar</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
    </select>
  </div>
  <div class="col-sm-5 camposform">
    <label for="unidade" class="form-label">Unidade / Apartamento</label>
    <select class="form-select " aria-label=".form-select-lg example">
      <option selected>Selecionar</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
    </select>
  </div>
  <div class="col-sm-2 camposform">
    <label for="consulta" class="form-label">Consultar</label>
    <br>
    <button type="button" class="btn btn-primary btbusca">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
      <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
    </svg>
    Buscar </button>
  </div>
</div>
<div class="row">
  <div class="col-sm-12">
    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">Nome</th>
            <th scope="col">E-mail</th>
            <th scope="col">Telefone</th>
            <th scope="col">Ação</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Julia</td>
            <td>julia@julia.com.br</td>
            <td>+55 11 1234 1234</td>
            <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletarmorador">Deletar</button></td>
          </tr>
          <tr>
            <td>Roberto</td>
            <td>roberto@roberto.com.br</td>
            <td>+55 11 1234 1234</td>
            <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletarmorador">Deletar</button></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<div class="modal fade" id="deletarmorador" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLiveLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="staticBackdropLiveLabel">ATENÇÃO</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-3 col-form-label">Nome:</label>
        <div class="col-sm-9">
          <input type="text" readonly class="form-control-plaintext" id="" value="Julia">
        </div>
        <label for="staticEmail" class="col-sm-3 col-form-label">E-mail:</label>
        <div class="col-sm-9">
          <input type="text" readonly class="form-control-plaintext" id="" value="julia@julia.com.br">
        </div>
        <label for="staticEmail" class="col-sm-3 col-form-label">Telefone:</label>
        <div class="col-sm-9">
          <input type="text" readonly class="form-control-plaintext" id="" value="+55 11 1234 1234">
        </div>
      </div>
      <h4>Confirma a exclusão do morador?</h4>
      <div class="row">
        <div class="col-sm-12 camposform">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdropLive"> Salvar </button>
          <a class="btn btn-primary btn-danger" href="login.php">Excluir</a>
          <button type="reset" class="btn bgcinza" data-bs-toggle="modal" data-bs-target="#staticBackdropLive"> Cancelar</button>
        </div>
      </div>
    </div>
  </div>
</div>

</div>
	
	</div>
	</div>
<?php

include "footer.php"

?>
