<?php
session_start();
$email = $_SESSION['login'];
$id = $_SESSION['id'];

include "header.php"

?>
<div class="container">
  <div class="row">
    <h1 class="titulo">Cadastro de serviços</h1>
  <form action="../controller/cadastrosemservico.php" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col-sm-6 camposform ">
          <label for="bloco" class="form-label">Área de atuação</label>
          <select class="form-select" required name="areadeatuacao">
            <option value="0">Selecionar</option>
            <option value="1">alimentacao</option>
            <option value="2">Beleza</option>
            <option value="3">Educação</option>
            <option value="4">Saúde/Bem-Estar</option>
            <option value="5">Serviços Gerais</option>
            <option value="6">Outros</option>
            <!-- <option value="7">Design</option>
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
            <option value="22">Bife</option>
            <option value="23">Restaurante</option> -->
          </select>
        </div>
        <!-- <div class="col-sm-3 camposform ">
          <label for="destinatario" class="form-label">Descrição área de atuação</label>
          <input type="text" class="form-control" name="outraarea"  value="">
        </div> -->
        <div class="col-sm-3 camposform">
          <label for="sobrenome" class="form-label" required >Tipo de atendimento</label>
          <select class="form-select" name="tipodeatendimento">
            <option selected>Selecionar</option>
            <option value="1">Presencial</option>
            <option value="2">Online</option>
            <option value="3">Hibrido</option>
          </select>
          <div class="invalid-feedback">Campo Obrigatório</div>
        </div>
      </div>
	  
	  
	  
	  
	  
      <div class="row">
        <div class="col-sm-12 camposform ">
          <label for="descricao_ecomenda" class="form-label">Quais serviços você oferece? <span style="color: crimson; text-transform: lowercase">Separar por ;</span></label>
          <textarea class="form-control" name="servicos_ofertados" aria-label="With textarea" ></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 camposform">
          <label for="destinatario" class="form-label camposform">Horário de atendimento</label>
          <div class="form-check">
            <input class="form-check-input checkmark" type="checkbox" value="1" id="flexCheckDefault" name="horario1">
            <label class="form-check-label " for="flexCheckDefault"> Segunda-feira das </label>
            <input type="time" class="form-control" name="time1" value="" >
            às
            <input type="time" class="form-control" name="time11" value="" >
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="2" id="flexCheckDefault" name="horario2">
            <label class="form-check-label " for="flexCheckDefault"> Terça-feira das </label>
            <input type="time" class="form-control" name="time2" value="" >
            às
            <input type="time" class="form-control" name="time22" value="" >
          </div>
          <div class="form-check ">
            <input class="form-check-input" type="checkbox" value="3" id="flexCheckDefault" name="horario3">
            <label class="form-check-label " for="flexCheckDefault"> Quarta-feira das </label>
            <input type="time" class="form-control" name="time3" value="" >
            às
            <input type="time" class="form-control" name="time33" value="" >
          </div>
          <div class="form-check ">
            <input class="form-check-input" type="checkbox" value="4" id="flexCheckDefault" name="horario4">
            <label class="form-check-label " for="flexCheckDefault"> Quinta-feira das </label>
            <input type="time" class="form-control" name="time4" value="">
            às
            <input type="time" class="form-control" name="time44" value="" >
          </div>
          <div class="form-check ">
            <input class="form-check-input" type="checkbox" value="5" id="flexCheckDefault" name="horario"5>
            <label class="form-check-label " for="flexCheckDefault"> Sexta-feira das </label>
            <input type="time" class="form-control" name="time5" value="" >
            às
            <input type="time" class="form-control" name="time55" value="" >
          </div>
          <div class="form-check ">
            <input class="form-check-input" type="checkbox" value="6" id="flexCheckDefault" name="horario6">
            <label class="form-check-label " for="flexCheckDefault"> Sabádo das </label>
            <input type="time" class="form-control" name="time6" value="" >
            às
            <input type="time" class="form-control" name="time66" value="" >
          </div>
          <div class="form-check ">
            <input class="form-check-input" type="checkbox" value="7" id="flexCheckDefault" name="horario7">
            <label class="form-check-label " for="flexCheckDefault"> Domingo das </label>
            <input type="time" class="form-control" name="time7" value="" >
            às
            <input type="time" class="form-control" name="time77" value="" >
          </div>
          <div class="form-check ">
            <input class="form-check-input" type="checkbox" value="8" id="flexCheckDefault" name="horario8">
            <label class="form-check-label " for="flexCheckDefault"> A combinar</label>
          </div>
          <br>
        </div>
        <div class="col-sm-6 camposform">
          <label for="destinatario" class="form-label camposform">Redes Sociais</label>
          <div class="input-group input-group-sm mb-3"> <span class="input-group-text" id="inputGroup-sizing-sm">LinkedIn</span>
            <input type="text" name="linckdin" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
          </div>
          <div class="input-group input-group-sm mb-3"> <span class="input-group-text" id="inputGroup-sizing-sm">Facebook</span>
            <input type="text" name="facebook" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
          </div>
          <div class="input-group input-group-sm mb-3"> <span class="input-group-text" id="inputGroup-sizing-sm">Twitter</span>
            <input type="text" name="twitter" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
          </div>
          <div class="input-group input-group-sm mb-3"> <span class="input-group-text" id="inputGroup-sizing-sm">Google+</span>
            <input type="text" name="googleplus" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
          </div>
          <div class="input-group input-group-sm mb-3"> <span class="input-group-text" id="inputGroup-sizing-sm">YouTube</span>
            <input type="text" name="youtube" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
          </div>
          <div class="input-group input-group-sm mb-3"> <span class="input-group-text" id="inputGroup-sizing-sm">Instagram</span>
            <input type="text" name="instagram" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
          </div>
        </div>
      </div>
      <h1 class="titulo">Informações importantes para seu anúncio</h1>
      <br/>
      <br/>
      <div class="row">
        <div class="col-sm-4 ">
          <div class="info ">
            <h2 >Titulo do Anúncio </h2>
            <p>Seu título é a peça chave do seu anúncio! A primeira impressão é a que fica. Redija um título em pelo menos 12 palavras:</p>
          </div>
        </div>
        <div class="col-sm-8 camposform">
          <label for="e-mail" class="form-label">Titulo do Anúncio </label>
          <textarea class="form-control" name="titulo_anuncio" aria-label="With textarea" rows="2"></textarea>
        </div>
      </div>
      <br/>
      <br/>
      <div class="row">
        <div class="col-sm-4">
          <div class="info ">
            <h2>Sobre o que você faz e sua experiência.</h2>
            <p>Conte sobre como você trabalha, o que você faz, fale sobre sua exeperiência. </p>
            <p><strong>NÃO ESQUEÇA </strong><br>
              Seu sobrenome, dados de contato ou website não devem aparecer no seu texto.</p>
          </div>
			
        </div>
        <div class="col-sm-8 camposform">
          <label for="e-mail" class="form-label">Sobre o que você faz. </label>
          <textarea class="form-control" name="oquefaz" aria-label="With textarea rows="4"" ></textarea>
        </div>
      </div>
  
      <div class="row">
        <div class="col-sm-4 ">
          <div class="info ">
            <h2>Sobre você.</h2>
            <p>Inspire credibilidade, legitimidade e demonstre seu profissionalismo. É uma das primeiras coisas que seus futuros clientes lerão sobre você. Preste atenção na ortografia e no conteúdo do mesmo, sempre parecendo o mais agradável possível. :)
            <p><strong>LEMBRE-SE</strong> <br>
              Seu sobrenome, dados de contato ou website não devem aparecer no seu texto.</p>
          </div>
        </div>
        <div class="col-sm-8 camposform">
          <label for="e-mail" class="form-label">Sobre você. </label>
          <textarea class="form-control" name="sobrevc" aria-label="With textarea" ></textarea>
        </div>
      </div>
      <br/>
      <br/>
      <div class="row">
        <div class="col-sm-4 ">
          <div class="info ">
            <h2>Quanto você cobra?</h2>
            <p>Você pode escolher a tarifa horária que desejar e modificá-la a qualquer momento.
              
              Se você é iniciante, sugerimos que não escolha uma tarifa muito elevada. O ideal é aguardar obter muitas recomendações e avaliações para poder aumentar o preço. </p>
          </div>
        </div>
        <div class="col-sm-6 camposform">
          <div class="row">
            <label for="e-mail" class="form-label">Quanto você cobra? </label>
            <div class="col-sm-6 camposform">
              <select class="form-select" name="tipovalor" >
                <option selected>Selecionar</option>
                <option value="1">Por hora</option>
                <option value="2">Por dia</option>
                <option value="3">Por serviço</option>
              </select>
              <input class="form-check-input" name="acombinar" type="checkbox" value="acombinar" id="flexCheckDefault" >
              <label class="form-check-label " for="flexCheckDefault"> A combinar</label>
            </div>
            <div class="col-sm-6 camposform">
              <input type="text" class="form-control" name="valor" value="">
            </div>
          </div>
        </div>
      </div>
      <br/>
      <br/>
      <div class="row">
        <div class="col-sm-4 ">
          <!-- <div class="info ">
            <h2>Sua foto</h2>
            <p>A foto é a primeira coisa que o aluno verá. Inspire confiança e mostre sua cara. </p>
            <p><b>Sorridente</b>: está perfeito<br>
              <b>Criativa</b>, de destaque<br>
              <b>Apenas você</b> e mais ninguém na foto</p>
          </div> -->
        </div>
        <!-- <div class="col-sm-6 camposform">
          <div class="row">
            <label for="e-mail" class="form-label">Exemplos </label>
            <p><img src="https://c.superprof.com/static/img/ok-photo-1.64dfba7a.png" > <img src="https://c.superprof.com/static/img/ok-photo-2.07a75de7.png"> <img src="https://c.superprof.com/static/img/ok-photo-3.ccfd4b68.png"> </p>
            <input class="form-control" type="file" name="file" id="formFile">
          </div> -->
          <input type="hidden" id="email" name="email" value="<?php echo $email ?>" />
          <input type="hidden" id="id_morador" name="id_morador" value="<?php echo $id ?>" />
          <br>
          <br>
          <button class="btn btn-primary" type="submit" >Salvar</button> <a class="btn btn-primary bgcinza" href="#" role="button">Voltar</a> </div>
      </div>
    
    <br>
    <br>
  </form>
  </div>
</div>
<?php

include "footer.php"

?>
