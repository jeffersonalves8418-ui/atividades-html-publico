<?php
// Exercício 3: calcula a tabuada com um laço for no servidor.
$numero = '';
$tabuada = null;
$erro = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $numero = trim($_POST['numero'] ?? '');
    $valor = filter_var($numero, FILTER_VALIDATE_INT, ['options' => ['min_range' => 0, 'max_range' => 100]]);
    if ($valor === false) $erro = 'Digite um número inteiro de 0 a 100.';
    else $tabuada = $valor;
}
$titulo = 'Exercício 3 | Tabuada';
require __DIR__ . '/cabecalho.php';
?>
<header class="cabecalho-pagina">
    <span class="etiqueta">EXERCÍCIO 03 · REPETIÇÃO</span>
    <h1>Tabuada em PHP</h1>
    <p>Escolha um número para calcular a tabuada diretamente no servidor.</p>
</header>
<div class="grade-pagina">
    <div class="coluna-formulario">
        <section class="painel">
            <div class="cabecalho-painel"><span class="icone-painel">03</span><div><h2>Calcular tabuada</h2><p>Use um número inteiro entre 0 e 100.</p></div></div>
            <form action="exercicio3.php" method="post">
                <div class="campo campo-curto"><label for="numero">Número</label><input type="number" id="numero" name="numero" min="0" max="100" step="1" required value="<?= htmlspecialchars($numero, ENT_QUOTES, 'UTF-8') ?>" placeholder="Ex.: 5"></div>
                <button class="botao" type="submit">Calcular <span aria-hidden="true">→</span></button>
            </form>
            <?php if ($erro !== ''): ?><p class="mensagem erro" role="alert"><?= htmlspecialchars($erro, ENT_QUOTES, 'UTF-8') ?></p><?php endif; ?>
        </section>
        <?php if ($tabuada !== null): ?>
            <section class="painel registros">
                <div class="cabecalho-registros"><h2>Tabuada do <?= $tabuada ?></h2><span class="contador">1 a 10</span></div>
                <table><thead><tr><th>Operação</th><th>Resultado</th></tr></thead><tbody>
                    <?php for ($i = 1; $i <= 10; $i++): ?>
                    <tr><td><?= $tabuada ?> × <?= $i ?></td><td><?= $tabuada * $i ?></td></tr>
                    <?php endfor; ?>
                </tbody></table>
            </section>
        <?php endif; ?>
    </div>
    <aside class="painel-ajuda">
        <span class="etiqueta">COMO FUNCIONA</span><h3>Laço de repetição</h3>
        <ol class="etapas"><li>Informe um número.</li><li>O PHP executa um laço <code>for</code> de 1 até 10.</li><li>Cada multiplicação é mostrada na tabela.</li></ol>
        <div class="lembrete">Exemplo: <code>5 × 2 = 10</code>.</div>
    </aside>
</div>
<?php require __DIR__ . '/rodape.php'; ?>
