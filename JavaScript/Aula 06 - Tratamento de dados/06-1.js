// Formatando strings
var nome = prompt('Qual é seu nome?')

document.write(`Seu nome tem ${nome.length} letras. <hr>`) // O .lenght informa o tamanho da string
document.write(`Seu nome em maiúsculas é ${nome.toUpperCase()} letras. <hr>`) 
document.write(`Seu nome em minúsculas é ${nome.toLowerCase()} letras. <hr>`)

// Formatando números
var n1 = 1545.1

    // Duas casas decimmais use .toFixed(2)
    document.write(n1.toFixed(2) + '<hr>')

    // Trocando ponto por vírgula use .toFixed(2).replace('.', ',')
    document.write(n1.toFixed(2).replace('.', ',') + '<hr>')

    // Convetendo número para moeda de determinado país com .toLocaleString 
    document.write(n1.toLocaleString('pt-br', {style: 'currency', currency: 'BRL'})) // USD, EUR