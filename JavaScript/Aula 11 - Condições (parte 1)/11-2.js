// Condição simples - sistema de multas

function calcular() {
    var velocidade = document.getElementById('velocidade').value
    
    var resultado = window.document.querySelector('p#resultado')
    resultado.innerHTML = `Sua velocidade atual é de <strong>${velocidade}</strong>km/h<br>`
    
    if (velocidade > 60) {
        resultado.innerHTML += 'Você foi multado por excesso de velocidade! Dirija com cuidado.'
    }
}
