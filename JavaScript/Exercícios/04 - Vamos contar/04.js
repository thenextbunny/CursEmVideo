function contar() {
    let inicio = document.getElementById('txti')
    let fim = document.getElementById('txtf')
    let passo = document.getElementById('txtp')
    let res = document.getElementById('display')

    if (inicio.value = 0 || fim.value == 0 || passo.value == 0) {
        res.innerHTML = 'Insira todos os números.'
    } else {
        res.innerHTML = 'Contando: '
        let i = Number(inicio.value)
        let f = Number(fim.value)
        let p = Number(passo.value)

        for (let c = i; c <= f; c +=p) {
            res.innerHTML += `${c} `
        }
    }
}
