<?php
require_once('./controller/conect.php');

include "headerlogin.php";

?>
<div class="container">
  <div class="row justify-content-center">
    <form action="../controller/connection.php" method="post">
      <div class="col-sm-6 "><br><br>
        <div class="branco">
          <div class="text-center"> <img src="images/logo.svg" alt="" width="72" height="57"> </div>
          <h1 class="h3 fw-normal text-center">Recuperar a senha</h1>
          <br>
          <div class="form-floating">
            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" value="">
            <label for="floatingInput">Seu e-mail:</label>
          </div>
          <br>
          <div class="row">
            <div class="col-sm-12">
              <div class="table-responsive" id="result">
                <h4>Pesquisar pergunta secreta?</h4>
                <button class="btn btn-primary" name="button" onclick="pesquisar()" value="sim" type="button">Pesquisar</button>
                <!-- <a class="btn btn-primary" role="button" onclick="cadastrosenha()"  type="button">Sim</a> -->
                <!-- <a class="btn btn-primary bgcinza" onclick="cadastrosenha()" type="button">Não</a> -->
                <button class="btn btn-primary bgcinza" name="button" onclick="goBack()" value="nao" type="button">Cancelar</button>

              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>
</form><!-- fim do formulario de login  -->
</div>
</div>
<?php

include "footer.php"

?>
<script type="text/javascript">
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
  function pesquisar() {

    // Declaração de Variáveis
    var email = document.getElementById("floatingInput").value;

    var xmlreq = CriaRequest();

    // Iniciar uma requisição
    xmlreq.open("GET", "../controller/perguntasecreta.php?email=" + email, true);

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

  function mostrarsenha(dados){
    
    var senha = document.getElementById("resposta").value;

    if(senha == dados){
      $('#resposta').append("<input type='text' name='resposta' class='form-control' id='resposta' value='senha'><label for='floatingInput'>")
    }

    console.log(senha)
    
  }

  function goBack() {
    window.history.back()
}

function resposta(){

    var resposta = document.getElementById("resposta").value;
    console.log(resposta)

}
</script>