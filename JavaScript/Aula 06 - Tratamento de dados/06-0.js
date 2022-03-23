var nome = prompt('Qual é o seu nome?')

document.write('É um grande prazer te ter aqui, ' + nome + '! <hr>')

// O prompt sempre guarda strings, use parseInt, parseFloat ou Number para converter para um número
var n1 = Number(prompt('Digite um número'))
var n2 = parseInt(prompt('Digite um número inteiro'))
var n3 = parseFloat(prompt('Digite um número decimal'))
var soma = (n1 + n2 + n3)

document.write(`A soma dos valores ${n1}, ${n2} e ${n3} é ${soma}`) // ${} = template strings

// Conversão de número para String = String(n) ou n.toString()