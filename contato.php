<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&family=Secular+One&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="src/css/contato.css">
    <link rel="stylesheet" href="src/css/reset.css">

    <title>TOP ANIME RANKINGS</title>
</head>

<body>
                        <?php
						
						session_start();
						
						if( isset($_SESSION["logado"]) && $_SESSION["logado"] == "s") {							
									
						}else{														
							header ("Location: home.php");							
                        }
						?>

  <div class="cabecalho">
        <ul class="botoes">
          <li>
            <a href="index.php"> 
              <button class="botaoinicio"> 
              <img class="logo" src="src/imagens/logo-transformed.png" alt="Logo site">              
              </button>
            </a>
          </li>

          <li>
            <a href="votos.php"> 
              <button class="botao">
                Votação
              </button>
            </a>
          </li>

          <li>
            <a href="contato.php"> 
                <button class="botao">
                Contato
                </button>
            </a>
          </li>

          <li>
          <a href="sobre.php">
           <button class="botao">
              Sobre
            </button>
          </a>
          </li>

          <li>
          <a href="faq.php"> 
           <button class="botao">
              FAQ
            </button>
            </a>
          </li>

          <div class="logout">

              <form class="botaologout" action="logout.php" method="post">
                <input type="submit" value="Logout" class="botaosubmit">
              </form>

          </div>

        </ul>



  <main>

      <div class="intro">
          <img class="imagem" src="src/imagens/animes-geral.jpg" alt="">

          <div class="conteudo">
          
              <img src="src/imagens/logo-transformed.png" alt="">
            

          </div>


          <div class="login">
            <h2 class="titulo">Entre em Contato conosco!</h2><br><br>

            					
                        <div class="formlogin">
							<form class="formdescr" action="contato.php" method="POST">
								
							<label> Ficou com alguma dúvida ou tem alguma sugestão? Mande uma mensagem para gente!!! </label><br> <br>
              <textarea class="nomemensagem" name="nomecxmensagem" id="nome" cols="1" rows="1" placeholder="Digite seu nome//Id:" required ></textarea> 
              <textarea class="cxmensagem" id="mensagem" name="mensagemfq" rows="4" cols="50" placeholder="Digite sua mensagem!" required></textarea><br><br>
						  <input name="fqsub" class="submit" type="submit" value="Enviar">



              <?php


                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (isset($_POST['mensagemfq']) && isset($_POST['nomecxmensagem'])   ) {
                    if (isset($_POST['fqsub'])) {
                    $mensagemfq = $_POST['mensagemfq'];
                    $_SESSION['mensagemfq'] = $mensagemfq;
                    $_SESSION['msgfq'] = "s";

                    $nomecxmensagem = $_POST['nomecxmensagem'];
                    $_SESSION['nomecxmensagem'] = $nomecxmensagem;
                    $_SESSION['msgnm'] = "s";
                    }
                  }
                }


              ?>
											
							</form>
						</div>
          
          </div>


      </div>



  </main>



</body>




</html>
