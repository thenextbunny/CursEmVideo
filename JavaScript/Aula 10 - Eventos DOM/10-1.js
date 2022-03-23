function somar() {
    let tn1 = window.document.getElementById('txt1')
    let tn2 = window.document.querySelector('input#txt2')
    let n1 = Number(tn1.value)
    let n2 = Number(tn2.value)
    let soma = n1 + n2
    document.getElementById('resultado').value = soma
}