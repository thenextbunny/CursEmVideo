// aritméticos
    // 5 + 2 = 7
    // 5 - 2 = 3
    // 5 * 2 = 10
    // 5 / 2 = 2.5
    // 5 % 2 = 1 - divisão inteira e resulta no seu resto
    // 5 ** 2 = 25 - potência
    
// Precedência > () > ** > */% > +-

// atribuição
    // atribuição simples
        var a = 5 + 3 // 8
        var b = a % 5 // 3
        var c = 5 * b ** 2 // 45
        var d = 10 - a / 2 // 6
        var e = 6 * 2 / d // 2
        var f = (b % e) + (4 / e) // 3

    // auto-atribuições // resultado // simplicado
    var n = 3 // 3

    n = n + 4 // 7 // n+=4
    n = n - 5 // 2 // n-=5
    n = n * 4 // 8 // n*=4
    n = n / 2 // 4 // n /=2
    n = n ** 2 // 16 // n**=2
    n = n % 5 // 1 // n%=5
    n++ // 2 // pós incremento
    n-- // 1 // pós decremento