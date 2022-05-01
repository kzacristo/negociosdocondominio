<?php

include "header.php";

?>
<div class="container">
  <div class="row justify-content-center">
    <form action="connection.php" method="post">
    <div class="col-sm-6 "><br><br>
      <div class="branco">
        <div class="text-center"> <img src="images/logo.svg" alt="" width="72" height="57"> </div>
        <h1 class="h3 fw-normal text-center">Faça seu login</h1>
        <br>
        <div class="form-floating">
          <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" value="">
          <label for="floatingInput">Seu e-mail:</label>
        </div>
        <br>
        <div class="form-floating">
          <input type="password" name="senha" class="form-control" id="floatingPassword" placeholder="Password" value="">
          <label for="floatingPassword">Sua senha:</label>
        </div>
       
          <div class="row justify-content-center">
            <div style="text-align: center">
              <label style="font-size: 12px;"> <span>
                <input type="checkbox" value="remember-me" >
                LEMBRAR DE MIM &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span><a href="#">ESQUECI A SENHA</a></span></label>
              <button class="w-100 btn btn-lg btn-primary" type="submit">Entrar</button>
              <div class="checkbox mb-3 text-center" >
                <label> <br>
                  Não é cadastrado? <a href="cadastro.php">Crie sua conta</a></label>
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
