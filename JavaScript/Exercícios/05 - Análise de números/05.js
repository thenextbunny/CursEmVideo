let addNúmero = document.querySelector('input#addnúmero')
let lista = document.querySelector('select#lista')
let análise = document.querySelector('div#análise')
let valores = []

function adicionar() {

    let número = addNúmero.value
    let item = document.createElement('option')

    if (número == '' || número < 1 || número > 100) {
        console.log('Digite um número entre 1 e 100')
    } else if (valores.includes(número)) {
        valores.push(número)  
        item.text = `Número ${número} adicionado novamente.`
        lista.appendChild(item)
    } else {
        valores.push(número)  
        item.text = `Número ${número} adicionado.`
        lista.appendChild(item)
    }
   addNúmero.value = ''
   análise.innerHTML = ''
}

function analisar() {
    análise.innerHTML = ''
    if (valores.length == 0) {
        window.alert('Adicione valores antes de finalizar.')
    } else {
        let soma = 0
        
        for(let i in valores) {
            soma += Number(valores[i])
        }
        análise.innerHTML += `<p>Ao todo temos ${valores.length} números adicionados. </p> <hr>`
        análise.innerHTML += `<p>O maior valor adionado foi ${Math.max.apply(null, valores)} </p> <hr>`
        análise.innerHTML += `<p>O menor valor adicionado foi ${Math.min.apply(null, valores)} </p> <hr>`
        análise.innerHTML += `<p>A soma dos valores digitados é ${soma} </p> <hr>`
        análise.innerHTML += `<p>A média dos valores digitados é ${soma/valores.length} </p>`
    }
}

function limpar() {
    análise.innerHTML = ''
    lista.innerHTML = ''
    número = ''
    valores = []
}
