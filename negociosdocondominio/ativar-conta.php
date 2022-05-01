<?php

include "header.php"

?>
<div class="container">
  <div class="row">
    <h1 class="titulo">Liberação do cadastro</h1>
    <h2 class="destaquetexto">Buscar morador</h2>
    <div class="col-sm-5 camposform ">
      <label for="lastName" class="form-label">Bloco / torre</label>
      <select class="form-select ">
        <option selected="">Selecionar</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
    </div>
    <div class="col-sm-5 camposform">
      <label for="lastName" class="form-label">Unidade / Apartamento</label>
      <select class="form-select ">
        <option selected="">Selecionar</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
    </div>
    <div class="col-sm-2 camposform">
      <label for="lastName" class="form-label">Consultar</label>
      <br>
      <button type="button" class="btn btn-primary btbusca">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
      </svg>
      Buscar </button>
    </div>
    <div class="col-10 camposform">
      <label for="e-mail" class="form-label">E-mail</label>
      <div class="input-group has-validation"> <span class="input-group-text">@</span>
        <input type="text" class="form-control input-group-lg" id="username" placeholder="E-mail" required>
        <div class="invalid-feedback"> E-mail Obrigatório </div>
      </div>
    </div>
    <div class="col-sm-2 camposform">
      <label for="consulta" class="form-label ">Consultar</label>
      <br>
      <button type="button" class="btn btn-primary btbusca input-group-lg">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
      </svg>
      Buscar </button>
    </div>
    <div class="col-sm-5 camposform" >
      <label for="firstName" class="form-label">Nome</label>
      <input type="text" class="form-control " id="firstName" placeholder="" value="" required>
      <div class="invalid-feedback">Campo Obrigatório </div>
    </div>
    <div class="col-sm-5 camposform">
      <label for="lastName" class="form-label">Sobrenome</label>
      <input type="text" class="form-control " id="lastName" placeholder="" value="" required>
      <div class="invalid-feedback">Campo Obrigatório</div>
    </div>
    <div class="col-sm-2 camposform">
      <label for="consulta" class="form-label ">Consultar</label>
      <br>
      <button type="button" class="btn btn-primary btbusca input-group-lg">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
      </svg>
      Buscar </button>
    </div>
    <div class="col-12">
      <div class="row">
        <div class="col-sm-10 camposform" >
          <label for="telefone" class="form-label">Telefone / Whatsapp</label>
          <input type="text" class="form-control" id="telefone" placeholder="+55(XX)XXXX-XXXX" required>
          <div class="invalid-feedback"> Campo Obrigatório </div>
        </div>
        <div class="col-sm-2 camposform">
          <label for="consulta" class="form-label ">Consultar</label>
          <br>
          <button type="button" class="btn btn-primary btbusca input-group-lg">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
          </svg>
          Buscar </button>
        </div>
      </div>
      <hr>
      <br>
      <div class="row">
        <div class="col-sm-5 camposform ">
          <select class="form-select ">
            <option selected="">Ações em massa</option>
            <option value="1">Aprovar</option>
            <option value="2">Excluir</option>
            <option value="3">Revisar</option>
          </select>
        </div>
        <div class="col-sm-6 camposform">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdropLive">Aplicar</button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-12 camposform">
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr style="border-top:  2px solid #000; ">
              <th scope="col" style="border-left: 2px solid #000;"></th>
              <th scope="col">Nome</th>
              <th scope="col">E-mail</th>
              <th scope="col">Telefone</th>
              <th scope="col">Status</th>
              <th scope="col" style="border-right: 2px solid #000; "></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td style="border-left: 2px solid #dee2e6;"><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></td>
              <td>Julia</td>
              <td>julia@julia.com.br</td>
              <td>+55 11 1234 1234</td>
              <td>Publicado</td>
              <td style="border-right: 2px solid #dee2e6; "><a class="btn bg-info" href="perfil.php" role="button" target="_blank">Vizualizar</a>
            </tr>
          </tbody>
        </table>
      </div>
      <a class="btn bg-success text-white" href="perfil.php" role="button" target="_blank">Salvar</a> </div>
  </div>
</div>
<?php

include "footer.php"

?>
