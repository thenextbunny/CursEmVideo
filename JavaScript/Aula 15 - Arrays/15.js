// Variáveis compostas 
// Arrays
// vetor é Array(), eles são composto de elementos com índices que possuem conteúdos

let a = [5, 8, 9, 2, 3]

    // Substituindo valores
    a[2] = 10

    // Adicionando valores no final
    a.push(4)

    // Saber o comprimento do Array
    a.length // 0, 1, 2, 3, 4, 5, 6

    // Alinha os elementos em ordem crescente
    a.sort()

    // Use a[1] para ver o que está no indíce

    // Mostrar vetor sem [] com for
    for(let pos = 0; pos < a.length; pos++) {
        console.log([pos])
    }

    // Mostrar vetor sem [] com for(.. in ..) -- para cada posição .. em ..
    for(let pos in a) {
        //console.log(a[pos])
    }

    // Buscar conteúdo dentro de vetores
    console.log(a.indexOf(2))
