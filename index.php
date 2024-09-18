<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&family=Secular+One&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="src/css/reset.css">
  <link rel="stylesheet" href="src/css/index.css">

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



  </div>

  <main class="animes">

      <div class="anime"> 
        <img class="imagem" src="src/imagens/shingeki-animefoto.jpg" alt="Shingeki no Kyojin Foto">
      
        <div class="conteudo">
          <h2 class="titulo">Shingeki no Kyojin</h2>
          <p class="descricao">"Shingeki no Kyojin" é um anime que retrata a luta desesperada da humanidade contra os Titãs, criaturas gigantescas que devoram seres humanos. Eren Yeager, Mikasa Ackerman e Armin Arlert, ao se juntarem à Divisão de Reconhecimento, descobrem segredos sombrios sobre a verdadeira natureza dos Titãs e a história da humanidade, enfrentando desafios morais e dilemas pessoais enquanto questionam o significado da liberdade em um mundo repleto de perigos iminentes.</p>
        </div>
      </div>

      <div class="anime"> 
        <img class="imagem" src="src/imagens/onepiece-animefoto.jpg" alt="One Piece Foto">
        
        <div class="conteudo">
          <h2 class="titulo">One Piece</h2>
          <p class="descricao">"One Piece" é um anime que segue a aventura de Monkey D. Luffy e sua tripulação em busca do tesouro lendário conhecido como One Piece, que lhes concederá o título de Rei dos Piratas. Enfrentando desafios épicos, batalhas emocionantes e inimigos poderosos, eles exploram um vasto e perigoso mundo de mares traiçoeiros e ilhas exóticas, ao mesmo tempo em que enfrentam a Marinha Mundial, outros piratas e forças malignas. Ao longo da jornada, descobrem segredos sobre o passado de cada personagem e desvendam mistérios intrigantes em uma narrativa repleta de humor, ação e emoção.</p>
        </div>
      </div>

      <div class="anime"> 
        <img class="imagem" src="src/imagens/naruto-animefoto.jpg" alt="Naruto Foto">
        
        <div class="conteudo">
          <h2 class="titulo">Naruto</h2>
          <p class="descricao">"Naruto" é um anime que narra a jornada de Naruto Uzumaki, um jovem ninja que almeja se tornar o Hokage, o líder máximo de sua vila, Konoha. Com um passado marcado pela solidão e rejeição, Naruto luta para provar seu valor e conquistar o respeito de seus pares, enfrentando desafios que vão desde missões perigosas a batalhas contra ameaças poderosas, incluindo o temível antagonista conhecido como Akatsuki. Ao longo de sua jornada, ele forma laços de amizade e supera obstáculos, demonstrando determinação e força de vontade enquanto busca alcançar seus objetivos e proteger aqueles que ama.</p>
        </div>
      </div>

      <div class="anime selecionado"> 
        <img class="imagem" src="src/imagens/hxh-animefoto.jpg" alt="HXH Foto">
       
        <div class="conteudo">
          <h2 class="titulo">Hunter x Hunter</h2>
          <p class="descricao">"Hunter x Hunter" é um anime que segue a jornada de Gon Freecss, um jovem determinado a se tornar um Hunter, um título que concede acesso a informações privilegiadas, áreas restritas e aventuras emocionantes. Ao longo de sua busca para encontrar seu pai, um lendário Hunter, Gon faz amizade com outros aspirantes a Hunters, como Killua, Kurapika e Leorio, e enfrenta desafios perigosos, incluindo criaturas místicas, criminosos poderosos e forças misteriosas que ameaçam o equilíbrio do mundo. Com elementos de ação, aventura e drama, o anime aborda temas como amizade, lealdade e o significado de se tornar um verdadeiro Hunter.</p>
        </div>
      </div>
      
      <div class="anime"> 
        <img class="imagem" src="src/imagens/haikyuu-animefoto.jpg" alt="HXH Foto">

        <div class="conteudo">
          <h2 class="titulo">Haikyuu</h2>
          <p class="descricao">"Haikyuu!!" é um anime que gira em torno da jornada de Shoyo Hinata, um jovem apaixonado por voleibol que almeja superar sua baixa estatura para se tornar um jogador excepcional. Após se juntar ao time de voleibol de sua escola, ele forma uma dupla improvável com Tobio Kageyama, um talentoso jogador conhecido como "Rei da Quadra", e juntos buscam levar o time à vitória em torneios locais e nacionais. Com ênfase na superação de desafios e na construção de amizades duradouras, o anime retrata a jornada emocionante de Hinata e seus companheiros enquanto eles enfrentam equipes habilidosas e desenvolvem suas habilidades no voleibol.
          </p>
        </div>
      </div>




      <div class="cardsanimes">

        <h1 class="titulocard">VEJA OS CONCORRENTES AO TOP 5 DE 2023:</h1>

        <ul class="cardbotoes">

          <li>
            <button class="cardbotao">
            <img class="cardbotaosnk" src="src/imagens/shingeki-logo.png" alt="logo-hxh">
            </button>
          </li>
          
          <li>
            <button class="cardbotao">
            <img class="cardbotaoone" src="src/imagens/onepiece-Logo.png" alt="logo-hxh">
            </button>
          </li>

          <li>
            <button class="cardbotao">
            <img class="cardbotaonrt" src="src/imagens/naruto-logo.png" alt="logo-hxh">
            </button>
          </li>

          <li>
            <button class="cardbotao selecionado">
            <img class="cardbotaohxh" src="src/imagens/hxh-logo.png" alt="logo-hxh">
            </button>
          </li>

          <li>
            <button class="cardbotao">
            <img class="cardbotaohk" src="src/imagens/haikyuu-Logo.png" alt="logo-hxh">
            </button>
          </li>

        </ul>



        <script src="./src/js/index.js"></script>



      </div>

    </main>
</body>

</html>