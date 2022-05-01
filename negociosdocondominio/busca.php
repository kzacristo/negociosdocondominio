<?php

include "header.php"

?>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h1 class="titulo">Contrate freelancers perto de você</h1>
      <p>Encontre oportunidades ou divulgue a sua vaga para centenas de profissionais.</p>
    </div>
    <div class="col-sm-5">
      <div class="form-floating">
        <input type="text" class="form-control" id="floatingInputGrid" placeholder="Professor de português" >
        <label for="floatingInputGrid">Palavra Chave</label>
      </div>
    </div>
    <div class="col-sm-5">
      <div class="form-floating">
        <select class="form-select" id="floatingSelectGrid">
          <option value="0">Todas as categorias</option>
          <option value="1">Administrativo e Financeiro</option>
          <option value="2">Análise e Gestão de Dados</option>
          <option value="3">Atendimento Publicitário</option>
          <option value="4">Comercial</option>
          <option value="5">Criação</option>
          <option value="6">Customer Success</option>
          <option value="7">Design</option>
          <option value="8">Diversidade, Inclusão e Acessibilidade</option>
          <option value="9">Educação e Treinamento</option>
          <option value="10">Jornalismo</option>
          <option value="11">Marketing</option>
          <option value="12">Mídia</option>
          <option value="13">Planejamento</option>
          <option value="14">Produção</option>
          <option value="15">Programação</option>
          <option value="16">Projetos e Operações</option>
          <option value="17">Recursos Humanos</option>
          <option value="18">Relações Públicas</option>
          <option value="19">Rádio e TV</option>
          <option value="20">Social Media</option>
          <option value="21">Tecnologia da Informação</option>
        </select>
        <label for="floatingSelectGrid">Categorias</label>
      </div>
    </div>
    <div class="col-sm-2 "> <span class="align-middle"> <a class="btn bg-success text-white" href="perfil.php" role="button" target="_blank">Buscar</a> </span> </div>
  </div>
	<br><br>
</div>

<div class="container">
	<hr>
  <div class="row">
    <h2 class="titulo">Resultado da Busca para: Professor</h2>
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <div><img src="https://c.superprof.com/static/img/ok-photo-2.07a75de7.png"></div>
          <br>
          <h5 class="card-title">LUCIA COSTA</h5>
          <p class="card-text">Professora de Língua Portuguesa, Especialista em Metodologia do Ensino de leitura, interpretação de textos diversificados...</p>
          <span class="text">57 avaliações</span>
          <p>Revisão, Reforço</p>
        </div>
        <div class="card-body"> <a class="btn btn-primary" href="perfil.php" role="button">Ver perfil</a> </div>
      </div>
    </div>
  </div>
</div>
<?php

include "footer.php"

?>
