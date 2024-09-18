<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&family=Secular+One&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="src/css/login.css">
    <link rel="stylesheet" href="src/css/reset.css">

    <title>TOP ANIME RANKINGS</title>
</head>

<body>

    <div class="cabecalho">
        <ul class="botoes">
          <li>           
              <button class="botaoinicio"> 
                SEJAM BEM-VINDOS(AS)!!    
              </button>
          </li>

        </ul>

  </div>



  <main>

      <div class="intro">
          <img class="imagem" src="src/imagens/animes-geral.jpg" alt="">

          <div class="conteudo">
            <h2 class="titulo">
              <img src="src/imagens/logo-transformed.png" alt="">
            </h2>
            <p class="descricao">Bem-vindo ao <b>TOP ANIME RANKINGS</b>, o destino definitivo para todos os entusiastas de animação japonesa! Se você é um aficionado por narrativas emocionantes, personagens cativantes e mundos de fantasia inesquecíveis, você veio ao lugar certo. Junte-se a nós nesta jornada de descoberta e celebração da arte e do encanto dos animes. </p>
          </div>


          <div class="login">
            <h2 class="titulo">Login</h2><br><br>

            					
						<?php
						
						session_start();
						
						if( isset($_SESSION["logado"]) && $_SESSION["logado"] == "s") {							
							//Se a sessão existir e for "s" ele realiza a ação
							
                            header ("Location: index.php");
							
						}else{							
							//se a sessão não existir ou não for igual a "s"
							echo "<p class='mensagem'><b>Você ainda não está conectado!</b> </p><br>";
							
							if(isset($_SESSION["erro"]) && $_SESSION["erro"] != ""){
								echo $_SESSION["erro"] . "<br>";
							}
						?>
                        <div class="formlogin">
							<form class="formdescr" action="login.php" method="POST">
								
							<label> Usuário:</label><br>
							<input  type="text" name="usuario" maxlength="30" placeholder="Usuário: Unicid123"><br><br>
							
							<label> Senha:</label><br>
							<input  type="password" name="senha"  placeholder="Senha: ADS123"><br>
							
							<input type="submit" value="Enviar">
											
							</form>
						</div>
							<?php
						}
						?>
          
          </div>


      </div>



  </main>



</body>




</html>
