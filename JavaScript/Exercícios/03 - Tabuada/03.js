function gerarTabuada() {
    let num = document.getElementById('txtn').value
    let tab = document.getElementById('seltab2')

    if (num == '') {
        tab.innerHTML = ('Por favor, digite um número válido') 
         
    } else {
        tab.innerHTML = ''
        for(let c = 0; c <= 10; c++) {
            let item = document.createElement('option')
            item.text = `${num} × ${c} = ${num*c}`
            item.value = `tab${c}`
            tab.appendChild(item)
        }
    }
    
}