<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&family=Secular+One&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="src/css/reset.css">
  <link rel="stylesheet" href="src/css/votos.css">



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
            <button class="botao">
              Votação
            </button>
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
    <main class="divsanime">
            
        <div class="divsnk">
            <img class="imagem" src="src/imagens/shingeki-animefoto.jpg" alt="Shingeki no Kyojin Foto">

            <div class="conteudo">

            <h2 class="titulo">Shingeki no Kyojin</h2>

                <div class="divpq"> 
                    <img class="imagempq" src="src/imagens/shingeki-animefoto.jpg" alt="Shingeki no Kyojin Foto">
                </div>

                <div class="form">
                <form name="form1" action="votos.php" method="POST">

                        <div class="selectone">

                        <label class="labels" for="select1">Faça seu Voto:</label>
                        <select name="select1" id="select1">
                            <option value="">Selecione uma opção</option>
                            <option value="TOP 1">TOP 1</option>
                            <option value="TOP 2">TOP 2</option>
                            <option value="TOP 3">TOP 3</option>
                            <option value="TOP 4">TOP 4</option>
                            <option value="TOP 5">TOP 5</option>
                        </select>

                        <br><br>
                        <input name="form1_submit" class="submit" type="submit" value="Votar!!!">

                        </div>


                        <div class="phpmsg">
                        <?php

                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            if (isset($_POST['form1_submit'])) {
                                if (isset($_POST['select1'])) {
                                    $select1 = $_POST['select1'];
                                    $_SESSION['select1'] = $select1;
                                    $_SESSION['msg01'] = "s";
                                } else {
                                    echo "Nenhuma opção foi selecionada no primeiro formulário.";
                                }
                            } elseif (isset($_POST['form2_submit'])) {
                                if (isset($_POST['select2'])) {
                                    $select2 = $_POST['select2'];
                                    $_SESSION['select2'] = $select2;
                                    $_SESSION['msg02'] = "s";
                                } else {
                                    echo "Nenhuma opção foi selecionada no segundo formulário.";
                                }
                            } elseif (isset($_POST['form3_submit'])) {
                                if (isset($_POST['select3'])) {
                                    $select3 = $_POST['select3'];
                                    $_SESSION['select3'] = $select3;
                                    $_SESSION['msg03'] = "s";
                                } else {
                                    echo "Nenhuma opção foi selecionada no terceiro formulário.";
                                }
                            } elseif (isset($_POST['form4_submit'])) {
                                if (isset($_POST['select4'])) {
                                    $select4 = $_POST['select4'];
                                    $_SESSION['select4'] = $select4;
                                    $_SESSION['msg04'] = "s";
                                } else {
                                    echo "Nenhuma opção foi selecionada no quarto formulário.";
                                }
                            
                            } elseif (isset($_POST['form5_submit'])) {
                                if (isset($_POST['select5'])) {
                                    $select5 = $_POST['select5'];
                                    $_SESSION['select5'] = $select5;
                                    $_SESSION['msg05'] = "s";
                                } else {
                                    echo "Nenhuma opção foi selecionada no quinto formulário.";
                                }
                            
                            }
                    }

                        if( isset($_SESSION["msg01"]) && $_SESSION["msg01"] == "s" && $_SESSION["logado"] == "s") {							
													
                            $_SESSION['msg1'] = "<p class='mensagem'>ESTE ANIME É SEU:  " . $_SESSION['select1'] . "</p>";
                            echo $_SESSION['msg1'] . "<br>";							
                        }
                        

                        ?>
                        </div>


                </form>

                </div>
            
            </div>

        </div>


        <div class="divone">
            <img class="imagem" src="src/imagens/onepiece-animefoto.jpg" alt="One Piece Foto">


            <div class="conteudo">

                    <h2 class="titulo">One piece</h2>

                        <div class="divpq"> 
                            <img class="imagempq" src="src/imagens/onepiece-animefoto.jpg" alt="Shingeki no Kyojin Foto">
                        </div>

                
                            <form name="form2_submit" action="votos.php" method="POST">
                                    <div class="selecttwo">

                                        <label class="labels" for="select2">Faça seu Voto:</label>
                                        <select name="select2" id="select2">
                                            <option value="">Selecione uma opção</option>
                                            <option value="TOP 1">TOP 1</option>
                                            <option value="TOP 2">TOP 2</option>
                                            <option value="TOP 3">TOP 3</option>
                                            <option value="TOP 4">TOP 4</option>
                                            <option value="TOP 5">TOP 5</option>
                                        </select>

                                        <br><br>
                                        <input name="form2_submit" class="submit" type="submit" value="Votar!!!">

                        </div>


                            <div class="phpmsg">
                        <?php
                            if( isset($_SESSION["msg02"]) && $_SESSION["msg02"] == "s" && $_SESSION["logado"] == "s") {							
													
                             $_SESSION['msg2'] = "<p class='mensagem1'>ESTE ANIME É SEU:  " . $_SESSION['select2'] . "</p>";
                             echo $_SESSION['msg2'] . "<br>";							
                                                     }
                                                     
                         ?> 
                             </div>

                            </form>

    

            </div>
                

        </div>


        <div class="divnrt">
            <img class="imagem" src="src/imagens/naruto-animefoto.jpg" alt="Naruto Foto">

            <div class="conteudo">

                        <h2 class="titulo">Naruto</h2>

                            <div class="divpq"> 
                                <img class="imagempq" src="src/imagens/naruto-animefoto.jpg" alt="Naruto Foto">
                            </div>

                    
                                <form name="form3" action="votos.php" method="POST" >
                                        <div class="selecthree">

                                        <label class="labels" for="select3">Faça seu Voto:</label>
                                        <select name="select3" id="select3">
                                            <option value="">Selecione uma opção</option>
                                            <option value="TOP 1">TOP 1</option>
                                            <option value="TOP 2">TOP 2</option>
                                            <option value="TOP 3">TOP 3</option>
                                            <option value="TOP 4">TOP 4</option>
                                            <option value="TOP 5">TOP 5</option>
                                        </select>

                                        <br><br>
                                        <input name="form3_submit" class="submit" type="submit" value="Votar!!!">

                                        </div>

                            <div class="phpmsg">
                        <?php
                         if( isset($_SESSION["msg03"]) && $_SESSION["msg03"] == "s" && $_SESSION["logado"] == "s") {							
													
                         $_SESSION['msg3'] = "<p class='mensagem2'>ESTE ANIME É SEU:  " . $_SESSION['select3'] . "</p>";

                         echo $_SESSION['msg3'] . "<br>";							
                        }
                                                     
                         ?> 
                                        </div>


                                </form>

        

                </div>

        </div>


        <div class="divhxh">
            <img class="imagem" src="src/imagens/hxh-animefoto.jpg" alt="HXH Foto"> 

                <div class="conteudo">

                        <h2 class="titulo">Hunter X Hunter</h2>

                            <div class="divpq"> 
                                <img class="imagempq" src="src/imagens/hxh-animefoto.jpg" alt="hxh Foto">
                            </div>

                    
                            <form name="form4" action="votos.php" method="POST" >
                                        <div class="selectfour">

                                        <label class="labels" for="select4">Faça seu Voto:</label>
                                        <select name="select4" id="select4">
                                            <option value="">Selecione uma opção</option>
                                            <option value="TOP 1">TOP 1</option>
                                            <option value="TOP 2">TOP 2</option>
                                            <option value="TOP 3">TOP 3</option>
                                            <option value="TOP 4">TOP 4</option>
                                            <option value="TOP 5">TOP 5</option>
                                        </select>

                                        <br><br>
                                        <input name="form4_submit" class="submit" type="submit" value="Votar!!!">

                                        </div>

                            <div class="phpmsg">
                        <?php
                         if( isset($_SESSION["msg04"]) && $_SESSION["msg04"] == "s" && $_SESSION["logado"] == "s") {							
													
                         $_SESSION['msg4'] = "<p class='mensagem3'>ESTE ANIME É SEU:  " . $_SESSION['select4'] . "</p>";

                         echo $_SESSION['msg4'] . "<br>";							
                        }
                                                     
                         ?> 
                                        </div>


                                </form>


        

                </div>

        </div>


        <div class="divhk">
        <img class="imagem" src="src/imagens/haikyuu-animefoto.jpg" alt="Haikyuu Foto">

        <div class="conteudo">

                        <h2 class="titulo">Haikyuu</h2>

                            <div class="divpq"> 
                                <img class="imagempq" src="src/imagens/haikyuu-animefoto.jpg" alt="hxh Foto">
                            </div>

                    
                            <form name="form5" action="votos.php" method="POST" >
                                        <div class="selectfive">

                                        <label class="labels" for="select5">Faça seu Voto:</label>
                                        <select name="select5" id="select5">
                                            <option value="">Selecione uma opção</option>
                                            <option value="TOP 1">TOP 1</option>
                                            <option value="TOP 2">TOP 2</option>
                                            <option value="TOP 3">TOP 3</option>
                                            <option value="TOP 4">TOP 4</option>
                                            <option value="TOP 5">TOP 5</option>
                                        </select>

                                        <br><br>
                                        <input name="form5_submit" class="submit" type="submit" value="Votar!!!">

                                        </div>

                            <div class="phpmsg">
                        <?php
                         if( isset($_SESSION["msg05"]) && $_SESSION["msg05"] == "s" && $_SESSION["logado"] == "s") {							
													
                         $_SESSION['msg5'] = "<p class='mensagem4'>ESTE ANIME É SEU:  " . $_SESSION['select5'] . "</p>";

                         echo $_SESSION['msg5'] . "<br>";							
                        }


                         ?> 
                                        </div>


                                </form>

        

                </div>


        </div>




    </main>

    
</body>
</html>
