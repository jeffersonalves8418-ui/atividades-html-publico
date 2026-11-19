// O HTML abre os links no iframe. Este código destaca a atividade selecionada.
const menu = document.querySelector(".lateral");

menu.addEventListener("click", function (evento) {
    const link = evento.target.closest('a[target="conteudo"]');

    if (!link || evento.ctrlKey || evento.metaKey || evento.shiftKey || evento.altKey) {
        return;
    }

    const selecionado = menu.querySelector('[aria-current="true"]');
    selecionado.removeAttribute("aria-current");
    link.setAttribute("aria-current", "true");
});
