<?php

include "header.php"

?>
<div class="container">
  <div class="row">
    <h1 class="titulo">Consulta de Encomendas</h1>
    <h2 class="nomecondominio">Nome Condominio</h2>
<form>
<div class="row">
  <div class="col-sm-12">
    <div class="mb-4 camposform">
      <label for="disabledTextInput" class="form-label">Destinatário</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="Nome do Destinatário">
    </div>
  </div>
  <div class="col-sm-4 camposform">
    <label for="torre" class="form-label">Bloco / torre</label>
    <select class="form-select  " >
      <option selected>Selecionar</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
    </select>
  </div>
  <div class="col-sm-3 camposform">
    <label for="unidade" class="form-label">Unidade / Apartamento</label>
    <select class="form-select ">
      <option selected>Selecionar</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
    </select>
  </div>
  <div class="col-sm-3 camposform">
    <label for="periodo" class="form-label">Periodo</label>
    <select class="form-select  " >
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
  <div class="col-sm-12"><br>
    </br>
    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">Situação</th>
            <th scope="col">Data Entrada</th>
            <th scope="col">Protocolo Entrada </th>
            <th scope="col">Destinatario</th>
            <th scope="col">Saida Entrega</th>
            <th scope="col">Ação</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Entregue</td>
            <td>15/10/2021</td>
            <td>1234</td>
            <td>Luciana
              </th>
            <td>16/10/2021
              </th>
            <td><button type="button" class="btn bg-success fontebranca" data-bs-toggle="modal" data-bs-target="#staticBackdropLive"> Entregue </button></td>
          </tr>
          <tr>
            <td>Pendente</td>
            <td>15/10/2021</td>
            <td>1234</td>
            <td>Luciana
              </th>
            <td>16/10/2021
              </th>
            <td><button type="button" class="btn btn-warning " data-bs-toggle="modal" data-bs-target="#staticBackdropLive"> Entregue </button></td>
          </tr>
            </tr>
          
        </tbody>
      </table>
    </div>
  </div>
  <div class="modal fade" id="staticBackdropLive" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLiveLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLiveLabel">Informações</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-sm-6 camposform">
              <label for="destinatario" class="form-label">Situação</label>
              <input type="text" id="disabledTextInput" class="form-control" placeholder="Ativo">
            </div>
            <div class="col-sm-6 camposform">
              <label for="destinatario" class="form-label">Data de Entrada</label>
              <input type="text" id="disabledTextInput" class="form-control" placeholder="16/10/2021">
            </div>
            <div class="col-sm-12 camposform">
              <label for="destinatario" class="form-label">Remetente</label>
              <input type="text" id="disabledTextInput" class="form-control" placeholder="Marco">
            </div>
            <div class="col-sm-12 camposform">
              <label for="destinatario" class="form-label">Destinatatio</label>
              <input type="text" id="disabledTextInput" class="form-control" placeholder="Marco">
            </div>
            <div class="col-sm-12 camposform">
              <label for="descricao_ecomenda" class="form-label">Descrição da Encomenta</label>
              <textarea class="form-control" aria-label="With textarea" ></textarea>
            </div>
            <div class="col-sm-6 camposform">
              <label for="destinatario" class="form-label">Data da Entrega</label>
              <input type="text" id="disabledTextInput" class="form-control" placeholder="16/10/2021">
            </div>
            <div class="col-sm-12 camposform">
              <label for="destinatario" class="form-label">Responsável pelo recebimento</label>
              <input type="text" class="form-control"  value="" required>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
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
