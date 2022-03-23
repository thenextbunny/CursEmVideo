function carregar() {
    var msg = window.document.getElementById('msg')
    var img = window.document.getElementById('foto')

    var data = new Date()
    var hora = data.getHours()
    msg.innerHTML = `Agora são ${hora} horas.`

    if (hora >= 0 && hora < 12) {
        img.src = 'manha.jpg'
        document.body.style.background = '#F2994B'
    } else if (hora >= 12 && hora < 18) {
        img.src = 'tarde.jpg'
        document.body.style.background = '#D9C9BA'
    } else {
        img.src = 'noite.jpg'
        document.body.style.background = '#163A59'
    }
}
