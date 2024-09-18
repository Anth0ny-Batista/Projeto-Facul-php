<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&family=Secular+One&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="src/css/faq.css">
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
            <h2 class="titulo">Sua pergunta aparecerá aqui em baixo!!!(Enviada pela página de Contato)</h2><br><br>

            					
                        <textarea readonly class="formlogin">

                            
                                              <?php                                  

                                if( isset($_SESSION["mensagemfq"]) && $_SESSION["msgfq"] == "s" && $_SESSION["logado"] == "s") {
                                  if( isset($_SESSION["nomecxmensagem"]) && $_SESSION["msgnm"] == "s"){						
                                                                
                                        $_SESSION['msgfq1'] =  $_SESSION['mensagemfq'];
                                        $_SESSION['msgnm1'] =  $_SESSION['nomecxmensagem'];
                                        echo "\n" . $_SESSION['nomecxmensagem'] . ": \n \n" . $_SESSION['msgfq1'];
                                  }							
                                }
                                                

                                              ?>
                           
              
											
                                    </textarea>
          
          </div>


      </div>



  </main>



</body>




</html>
