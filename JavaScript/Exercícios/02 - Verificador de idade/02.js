function verificar() {
    var data = new Date()
    var ano = data.getFullYear()
    var fano = document.getElementById('txtano').value
    var res = document.querySelector('div#res')

    if (fano < 0 || fano < 4 || fano > ano) {
        alert('Digite um ano válido')
    } else {
        var idade = ano - fano
        var fsex = document.getElementsByName('sex')
        var gênero = ''
        var img = document.createElement('img')
        //img.setAttribute('id', 'foto')

        if (fsex[0].checked) {
            gênero = 'um homem'
            
            if(idade >=0 && idade < 10) {
                img.setAttribute('src', 'crianca-b.jpg')
            } else if (idade < 21) {
                img.setAttribute('src', 'adolescente-b.jpg')
            } else if (idade < 50) {
                img.setAttribute('src', 'adulto-b.jpg')
            } else {
                img.setAttribute('src', 'idoso-b.jpg')
            }

        } else if(fsex[1].checked) {
            gênero = 'uma mulher'

            if(idade >=0 && idade < 10) {
                img.setAttribute('src', 'crianca-m.jpg')
            } else if (idade < 21) {
                img.setAttribute('src', 'adolescente-w.jpg')
            } else if (idade < 50) {
                img.setAttribute('src', 'adulto-w.jpg')
            } else {
                img.setAttribute('src', 'idoso-w.jpg')
            }
        }
        res.innerHTML = `Detectamos ${gênero} com ${idade} anos.`
        res.appendChild(img)  
    }
}
