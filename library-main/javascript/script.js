/*
SE (tamanhoY_documento < tamanhoY_tela) {
    fotter = recebe classe fixada 
} SE NÃO {
    fotter = remove classe fixada
}
*/

window.onload = function() { calculaPosicaoFotter() };
window.onresize = function() { calculaPosicaoFotter() };

function calculaPosicaoFotter() {
    let footer = document.getElementById("footer");
    let documentH = $(document).height(); //Mudar
    let windowH = window.screen.height;

    console.log('documentH = ' + documentH);
    console.log('windowH = ' + windowH);

    if (documentH < windowH) {
        if (!footer.classList.contains("fixed-bottom")) {
            footer.classList.add("fixed-bottom");
        }
    } else {
        if (footer.classList.contains("fixed-bottom")) {
            footer.classList.remove("fixed-bottom");
        }
    }


// let eventoBotao6  = {
//     nome: "Thyago",
//     atribuiFuncaoNoBotao: function() {
//         document.querySelector("#botao6").addEventListener('click', () => { // arrow function não tem escopo, o escopo dela é o escopo do pai dela , neste caso eu posso acessar uma variavel que está no escopo do pai, então eu posso colocar o this q ela consegue pegar a var. 
//             alert(this.nome); //Arrow funcion não tem escopo, this = escopo do pai
//         });// tomar cuidado com onde usar => pq ela pega o escopo do pai.
//     }
// }
// eventoBotao6.atribuiFuncaoNoBotao();
