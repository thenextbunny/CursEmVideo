// Condições compostas - análise de nacionalidade
function verificar() {
    var pais = document.getElementById('pais').value
    var analise = document.querySelector('p#analise')
    
    if (pais == 'Brasil') {
        analise.innerHTML = ('Você é brasileiro')
    } else if (pais == 'Estados Unidos') {
        analise.innerHTML = ('Você é estaduniense.')
    } else {
        analise.innerHTML = ('Você é estrangeiro.')
    }
}

