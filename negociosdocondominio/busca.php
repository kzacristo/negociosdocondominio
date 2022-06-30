<?php

include "header.php";
require_once('./controller/conect.php');

?>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h1 class="titulo">Encontre profissionais ou serviços perto de você</h1>
    </div>
    <div class="servicos">
      <div class="row">
        <div class="col-6 col-sm-6 col-md-2 col-lg-2 bgservicos">
          <button class="btservicos alimentacao" id="alimentacao" name="alimentacao" value="alimentacao" onclick="pesquisar(this.value)"><img src="images/alimentacao.jpeg">
            <p>Alimentação</p>
          </button>
        </div>
        <div class="col-6 col-sm-6 col-md-2 col-lg-2 bgservicos">
          <button class="btservicos beleza" id="beleza" name="beleza" value="beleza" onclick="pesquisar(this.value)"><img src="images/beleza.jpeg">
            <p>Beleza</p>
          </button>
        </div>
        <div class="col-6 col-sm-6 col-md-2 col-lg-2 bgservicos">
          <button class="btservicos educacao" id="educacao" name="educacao" value="educacao" onclick="pesquisar(this.value)"><img src="images/educacao.jpeg">
            <p>Educação</p>
          </button>
        </div>
        <div class="col-6 col-sm-6 col-md-2 col-lg-2 bgservicos">
          <button class="btservicos saude" id="saude" name="saude" value="saude" onclick="pesquisar(this.value)"> <img src="images/saude.jpeg">
            <p>Saúde/Bem-Estar</p>
          </button>
        </div>
        <div class="col-6 col-sm-6 col-md-2 col-lg-2 bgservicos">
          <button class="btservicos servicosgerais" id="servicosgerais" value="servicosgerais" name="servicosgerais" onclick="pesquisar(this.value)"><img src="images/servicosgerais.jpeg">
            <p>Serviços Gerais</p>
          </button>
        </div>
        <div class="col-6 col-sm-6 col-md-2 col-lg-2 bgservicos">
          <button class="btservicos outros" id="outros" name="outros" value="outros" onclick="pesquisar(this.value)"><img src="images/outros.jpeg">
            <p>Outros</p>
          </button>
        </div>
      </div>
    </div>
  </div>
  <br>
  <br>
</div>
<div class="container">
  <!-- <hr>
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
</div> -->
  <div class="row">
    <div class="col-sm-12">
      <div class="table-responsive" id="result">

      </div>
    </div>
  </div>
  <?php

  include "footer.php"

  ?>
  <script type="text/javascript">
    /**
     * Função para criar um objeto XMLHTTPRequest
     */
    function CriaRequest() {
      try {
        request = new XMLHttpRequest();
      } catch (IEAtual) {

        try {
          request = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (IEAntigo) {

          try {
            request = new ActiveXObject("Microsoft.XMLHTTP");
          } catch (falha) {
            request = false;
          }
        }
      }

      if (!request)
        alert("Seu Navegador não suporta Ajax!");
      else
        return request;
    }

    /**
     * Função para enviar os dados
     */
    function pesquisar(dados = false) {

      var valor = dados
      console.log(valor)

      // var alimentacao = document.getElementById("alimentacao").value;
      // var beleza = document.getElementById("beleza").value;
      // var educacao = document.getElementById("educacao").value;
      // var saude = document.getElementById("saude").value;
      // var servicosgerais = document.getElementById("servicosgerais").value;
      // var outros = document.getElementById("outros").value;

      // console.log(alimentacao, beleza, educacao, saude, servicosgerais, outros )

      var xmlreq = CriaRequest();

      // Exibi a imagem de progresso
      // result.innerHTML = '<img src="Progresso1.gif"/>';

      // Iniciar uma requisição
      xmlreq.open("GET", "../controller/pesquisar.php?texto=" + valor, true);
      // Atribui uma função para ser executada sempre que houver uma mudança de ado
      xmlreq.onreadystatechange = function() {

        // Verifica se foi concluído com sucesso e a conexão fechada (readyState=4)
        if (xmlreq.readyState == 4) {

          // Verifica se o arquivo foi encontrado com sucesso
          if (xmlreq.status == 200) {
            result.innerHTML = xmlreq.responseText;
          } else {
            result.innerHTML = "Erro: " + xmlreq.statusText;
          }
        }
      };
      xmlreq.send(null);
    }
  </script>