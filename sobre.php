<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&family=Secular+One&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="src/css/sobre.css">
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
           <button class="botao">
              Sobre
            </button>
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
      
          <div class="login">
            <h2 class="titulo">Informações sobre o site//Trabalho</h2><br><br>

            					
                        <textarea readonly class="info"> 
                        Membros do Grupo:			

                        Anthony Pereira Almeida Batista     RGM:33542201
                        Eber de Almeida Ferreira     RGM:34281991
                        Leticia Santos de Macedo     RGM:33662801

                        

                        Resumo do Site:

                        O projeto é um site de Ranking de Animes. O usuário (Unicid123) com a senha (ADS123,) faz seu login, após essa etapa ele é redirecionado para a página principal do site(index.php) onde encontrará resumos sobre os 5 animes que estão participando da votação para o ranking, além disso nessa página ele pode navegar pelo site, acessando a área de votação onde poderá realizar seus votos, de contato para mandar alguma mensagem ou tirar alguma dúvida ou entrar no FAQ onde ele poderá ver a pergunta ou mensagem que o usuário enviou.



                        Funionalidades Usadas:

                        No geral:
                        
                        HTML: Foi usado HTML para criar a estrutura da página. Isso inclui a estrutura básica do HTML, como a definição de metadados, o conteúdo do cabeçalho e do corpo, bem como a organização dos elementos na página, foi utilizado também para realizar a navegação entre as páginas, com o auxilio de botões.

                        CSS: Foi usado CSS para estilizar os elementos da página. Isso inclui a definição de estilos para o cabeçalho, o corpo, os botões, a imagem, o conteúdo e os formulários de login. Definindo propriedades de posicionamento, tamanhos, cores, fontes e outras propriedades visuais para os elementos da página. Foi também utilizado algumas funionalidades do CSS como FlexBox: Utilizado para a construção do layout, fazendo o posicionamento através do atributo e valor Display:Flex, em conjunto com o valor absoluto, para realizar o melhor posicionamento dos elementos, e também foi utilizado pseudo classes como ::hover e ::after.

                        Google Fonts: Foi importado através do Google Fonts as fontes Rubik e Secular One para estilizar o texto na página.

                        Imagens e Logotipos: Foi Usadas várias imagens para ilustrar os animes e os logotipos dos animes na página. Isso inclui imagens dos animes "Shingeki no Kyojin," "One Piece," "Naruto," "Hunter x Hunter" e "Haikyuu".

                        
                                                
                        Na página de login (home.php):

                        PHP: Foi usado PHP para lidar com a lógica de login do usuário. Isso inclui o início da sessão, e a verificação de usuário de login e a exibição de mensagens de erro ou sucesso com base na entrada do usuário. Após o sucesso na entrada de informações do usuário, ele está sendo redirecionando página inicial. Todas essas informações foram guardadas através de SESSIONS e repassadas para as próximas páginas.


                        Na página principal do site (index.php):

                        PHP: Foi utilizado PHP e sessões para controlar o acesso do usuário. Se o usuário estiver logado, ele pode ver o conteúdo da página. Caso contrário, ele é redirecionado para a página de login.

                        (Explicação - Não ensinado no Curso) JavaScript: Foi utilizado JavaScript chamado "index.js" para fazer a interatividade dos botões de seleção de animes. Foi utilizado alguns métodos e propriedades do JavaScript como: document.querySelectorAll(".cardbotao"); para realizar a leitura dos botões com essa classe, botoes.forEach(botao, indice) para cada botão iria realizar alguma ação de acordo com o botão ou indice, classList.remove ou .add para remover ou adicionar uma classe em um botão para fazer a interação/troca de conteúdo na página.


                        Na página de votação(votos.php):

                        PHP: Foi utilizado PHP e sessões para controlar o acesso do usuário. Se o usuário estiver logado, ele pode ver o conteúdo da página. Caso contrário, ele é redirecionado para a página de login.

                        Formulários: A página possui vários formulários para permitir que o usuário vote em seus animes favoritos. Cada formulário é enviado para a mesma página (votos.php) e manipulado pelo PHP, onde cada voto é enviado para uma variável de sessão onde é armazenada e exibida para o usuário na própria tela de votação.


                        Na página de contato(contato.php):

                        PHP: Foi utilizado PHP e sessões para controlar o acesso do usuário. Se o usuário estiver logado, ele pode ver o conteúdo da página. Caso contrário, ele é redirecionado para a página de login.
                       
                        Formulário de Contato: O formulário de contato permite que os visitantes do site enviem mensagens com dúvidas ou sugestões. Ele coleta o nome do remetente e a mensagem que o remetente deseja enviar. As sessões PHP foram usadas para armazenar temporariamente informações do usuário, como a mensagem e o nome do remetente, para que possam ser exibidas na página de FAQ onde ficará armazenado tanto o nome do remetente tanto a mensagem enviada.


                        Na página de FAQ(faq.php):

                        PHP: O PHP é utilizado para verificar se o usuário está logado. Se estiver, o conteúdo da página é exibido; caso contrário, ele é redirecionado para a página inicial. As sessões PHP foram usadas para exibir o nome do remetente e a mensagem escrita e enviada pela página de contato na seção de perguntas frequentes.


                        Na página de Sobre(sobre.php):

                        PHP: Foi utilizado PHP e sessões para controlar o acesso do usuário. Se o usuário estiver logado, ele pode ver o conteúdo da página. Caso contrário, ele é redirecionado para a página de login.
                        
                                    </textarea>
          
          </div>


      </div>



  </main>



</body>




</html>
