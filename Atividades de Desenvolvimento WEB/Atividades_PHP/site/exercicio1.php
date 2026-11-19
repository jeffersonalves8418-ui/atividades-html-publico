<?php
// Exercício 1: recebe nome e sobrenome via POST e exibe em uma caixa de texto.
$nome = '';
$sobrenome = '';
$nomeCompleto = '';
$erro = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = trim($_POST['nome'] ?? '');
    $sobrenome = trim($_POST['sobrenome'] ?? '');
    if ($nome === '' || $sobrenome === '') {
        $erro = 'Preencha o nome e o sobrenome.';
    } else {
        $nomeCompleto = $nome . ' ' . $sobrenome;
    }
}
$titulo = 'Exercício 1 | Nome completo';
require __DIR__ . '/cabecalho.php';
?>
<header class="cabecalho-pagina">
    <span class="etiqueta">EXERCÍCIO 01 · FORMULÁRIOS</span>
    <h1>Nome e sobrenome</h1>
    <p>Preencha os campos para montar seu nome completo com PHP.</p>
</header>

<div class="grade-pagina">
    <section class="painel">
        <div class="cabecalho-painel"><span class="icone-painel">01</span><div><h2>Seus dados</h2><p>Digite as informações abaixo.</p></div></div>
        <form action="exercicio1.php" method="post">
            <div class="campos-duplos">
                <div class="campo"><label for="nome">Nome</label><input type="text" id="nome" name="nome" maxlength="80" required value="<?= htmlspecialchars($nome, ENT_QUOTES, 'UTF-8') ?>" placeholder="Ex.: Jefferson"></div>
                <div class="campo"><label for="sobrenome">Sobrenome</label><input type="text" id="sobrenome" name="sobrenome" maxlength="80" required value="<?= htmlspecialchars($sobrenome, ENT_QUOTES, 'UTF-8') ?>" placeholder="Ex.: Alves"></div>
            </div>
            <button class="botao" type="submit">Mostrar nome completo <span aria-hidden="true">→</span></button>
        </form>
        <?php if ($erro !== ''): ?><p class="mensagem erro" role="alert"><?= htmlspecialchars($erro, ENT_QUOTES, 'UTF-8') ?></p><?php endif; ?>
        <div class="resultado-box">
            <label for="nome-completo">Resultado gerado pelo PHP</label>
            <input type="text" id="nome-completo" value="<?= htmlspecialchars($nomeCompleto, ENT_QUOTES, 'UTF-8') ?>" readonly placeholder="Seu nome completo aparecerá aqui">
        </div>
    </section>
    <aside class="painel-ajuda">
        <span class="etiqueta">COMO FUNCIONA</span>
        <h3>O que o código faz?</h3>
        <ol class="etapas"><li>Você preenche nome e sobrenome.</li><li>O formulário envia os valores ao PHP.</li><li>O servidor une os dois textos e mostra o resultado.</li></ol>
        <div class="lembrete">O formulário usa o método <code>POST</code>.</div>
    </aside>
</div>
<?php require __DIR__ . '/rodape.php'; ?>
