// Calcula as raízes reais da equação ax² + bx + c = 0.
function bhaskara() {
    let textoA = document.getElementById("a").value.trim();
    let textoB = document.getElementById("b").value.trim();
    let textoC = document.getElementById("c").value.trim();
    let a = Number(textoA);
    let b = Number(textoB);
    let c = Number(textoC);
    // Limpa a resposta anterior.
    document.getElementById("saida0").textContent = "";
    document.getElementById("saida1").textContent = "";
    document.getElementById("saida2").textContent = "";
    document.getElementById("saida3").textContent = "";
    if (textoA === "" || textoB === "" || textoC === "" || !Number.isFinite(a) || !Number.isFinite(b) || !Number.isFinite(c)) {
        document.getElementById("saida0").textContent = "Preencha a, b e c com números válidos.";
    } else if (a === 0) {
        document.getElementById("saida0").textContent = "O valor de a deve ser diferente de zero.";
    } else {
        let delta = b * b - 4 * a * c;
        document.getElementById("saida0").textContent = "Delta = " + delta;
        if (delta < 0) {
            document.getElementById("saida1").textContent = "A equação não possui raízes reais.";
        } else {
            let x1 = (-b + Math.sqrt(delta)) / (2 * a);
            let x2 = (-b - Math.sqrt(delta)) / (2 * a);
            document.getElementById("saida1").textContent = "x1 = " + x1;
            document.getElementById("saida2").textContent = "x2 = " + x2;
            if (delta === 0) {
                document.getElementById("saida3").textContent = "As duas raízes são iguais.";
            }
        }
    }
}
