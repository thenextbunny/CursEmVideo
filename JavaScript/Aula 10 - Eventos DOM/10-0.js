// Eventos DOM
    // click
    var a = document.getElementById('um')
    a.addEventListener('click', clicar)
    
    function clicar() {
        var a = document.getElementById('um')
        a.addEventListener('click', clicar)
        a.innerText = 'clicou'
        a.style.background = 'red'
    }

    // mouseover and mouseout
    var b = document.getElementById('dois')
    b.addEventListener('mouseover', entrar)
    b.addEventListener('mouseout', sair)

    function entrar() {
        b.innerText = 'entrou'
    }

    function sair () {
        b.innerText = 'saiu'
    }

    // mousemove
    // mousedown
    // mouseup

    // ref: https://developer.mozilla.org/pt-BR/docs/Web/Events*/
