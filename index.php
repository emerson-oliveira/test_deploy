<?php
  $erro = isset($_GET['erro']) ? $_GET['erro'] : 0;
  include_once('header.php');
?>    
    <script type="text/javascript">

      $(document).ready( function(){

        //verificar se os campos de usuário e senha foram devidamente preenchidos
        $('#btn_login').click(function(){

          var campo_vazio = false;

          if($('#campo_usuario').val() == ''){
            $('#campo_usuario').css({'border-color': '#A94442'});
            campo_vazio = true;
          } else {
            $('#campo_usuario').css({'border-color': '#CCC'});
          }

          if($('#campo_senha').val() == ''){
            $('#campo_senha').css({'border-color': '#A94442'});
            campo_vazio = true;
          } else {
            $('#campo_senha').css({'border-color': '#CCC'});
          }

          if(campo_vazio) return false;
        });
      }); 

    </script>

  </head>
  <body>
    <!-- Static navbar -->
      <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
           <a class="navbar-brand" href="#">Logo</a>
          </div>
          
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="inscrevase.php">Inscrever-se</a></li>
              <li class="<?= $erro == 1 ? 'open' : '' ?>">
                <a id="entrar" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Entrar</a>
          <ul class="dropdown-menu" aria-labelledby="entrar">
            <div class="col-md-12">
                <p>Você possui uma conta?</h3>
                <br />
              <form method="post" action="controller/validar_acesso.php" id="formLogin">
                <div class="form-group">
                  <input type="text" class="form-control" id="campo_usuario" name="usuario" placeholder="Usuário" />
                </div>
                
                <div class="form-group">
                  <input type="password" class="form-control red" id="campo_senha" name="senha" placeholder="Senha" />
                </div>
                
                <button type="buttom" class="btn btn-primary" id="btn_login">Entrar</button>

                <br /><br />
                
              </form>

              <?php
                if($erro == 1){
                  echo '<font color="#FF0000">Usuário e ou senha inválido(s)</font>';
                }
              ?>

            </form>
            </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>

      <div class="container">

        <!-- Main component for a primary marketing message or call to action -->
        <div class="jumbotron">
          <h1>Bem vindo ao Webapp</h1>
          <p>Vamos registrar seus horários...?</p>
        </div>

        <div class="clearfix"></div>
    </div>


      </div>
<?php  include_once('footer.php'); ?>  