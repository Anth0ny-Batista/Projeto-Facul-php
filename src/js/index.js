const botoes = document.querySelectorAll(".cardbotao");
const animes = document.querySelectorAll(".anime");


botoes.forEach((botao, indice) =>{
    
    botao.addEventListener("click", () => {

        const botaoSelecionado = document.querySelector(".cardbotao.selecionado");
        botaoSelecionado.classList.remove("selecionado");

        botao.classList.add("selecionado");


        const animeSelecionado = document.querySelector(".anime.selecionado");
        animeSelecionado.classList.remove("selecionado");

        animes[indice].classList.add("selecionado");


    })
})

