// relacionais 
    // sinal - descriçãp - prática = boolean
    // > - maior que - 5 > 2 = true
    // < - menor que - 7 < 4 = false
    // >= - maior ou igual - 8 >= 8 = true
    // <=  - menor ou igual // 9 <=7 = false
    // == - igual a valor - 5 == 5 = false
    // == - igual a valor - 5 == '5' = true
    // === - igual a valor e tipo - 5 === '5' = false
    // === - igual a valor e tipo - 5 === 5 = true
    // != - diferente - 4 != 4 = true

// lógicos
    // sinal - descrição - prática
    // ! - negação - true = false, false = true
    // && - e - true & true = true, true & false = false, false & false = false
    // || - ou - true || true = true, true || false = true, false && false = false

    // exemplos
        idade >= 15 && idade <= 17 // a idade está entre 17 e 15?
        estado == RJ || estado == SP // o estado é RJ ou SP?
        salario > 1500 && sexo != 'mulher' // o salario é acima de 1500 e não é uma mulher?

// ternário
    // teste ? true : false

    //exemplos
        var média = 7.5
        média >= 7.0 ? 'Aprovado' : 'Reprovado'

        var resultado = 8 % 2 ? 'Verdeiro' : 'Falso'