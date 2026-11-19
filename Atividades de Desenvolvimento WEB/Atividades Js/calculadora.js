// Uma função para cada operação.

function somar() {
    let texto1 = document.getElementById("numero1").value;
    let texto2 = document.getElementById("numero2").value;
    let numero1 = Number(texto1);
    let numero2 = Number(texto2);

    // isNaN verifica se o valor não é um número.
    if (texto1.trim() === "" || texto2.trim() === "" || !Number.isFinite(numero1) || !Number.isFinite(numero2)) {
        document.getElementById("resultado").innerHTML = "Digite dois números válidos. Use ponto nos decimais.";
    } else {
        let resultado = numero1 + numero2;
        document.getElementById("resultado").innerHTML = "Resultado: " + resultado;
    }
}

function subtrair() {
    let texto1 = document.getElementById("numero1").value;
    let texto2 = document.getElementById("numero2").value;
    let numero1 = Number(texto1);
    let numero2 = Number(texto2);

    // isNaN verifica se o valor não é um número.
    if (texto1.trim() === "" || texto2.trim() === "" || !Number.isFinite(numero1) || !Number.isFinite(numero2)) {
        document.getElementById("resultado").innerHTML = "Digite dois números válidos. Use ponto nos decimais.";
    } else {
        let resultado = numero1 - numero2;
        document.getElementById("resultado").innerHTML = "Resultado: " + resultado;
    }
}

function multiplicar() {
    let texto1 = document.getElementById("numero1").value;
    let texto2 = document.getElementById("numero2").value;
    let numero1 = Number(texto1);
    let numero2 = Number(texto2);

    // isNaN verifica se o valor não é um número.
    if (texto1.trim() === "" || texto2.trim() === "" || !Number.isFinite(numero1) || !Number.isFinite(numero2)) {
        document.getElementById("resultado").innerHTML = "Digite dois números válidos. Use ponto nos decimais.";
    } else {
        let resultado = numero1 * numero2;
        document.getElementById("resultado").innerHTML = "Resultado: " + resultado;
    }
}

function dividir() {
    let texto1 = document.getElementById("numero1").value;
    let texto2 = document.getElementById("numero2").value;
    let numero1 = Number(texto1);
    let numero2 = Number(texto2);

    // isNaN verifica se o valor não é um número.
    if (texto1.trim() === "" || texto2.trim() === "" || !Number.isFinite(numero1) || !Number.isFinite(numero2)) {
        document.getElementById("resultado").innerHTML = "Digite dois números válidos. Use ponto nos decimais.";
    } else if (numero2 == 0) {
        document.getElementById("resultado").innerHTML = "Não é possível dividir por zero.";
    } else {
        let resultado = numero1 / numero2;
        document.getElementById("resultado").innerHTML = "Resultado: " + resultado;
    }
}
