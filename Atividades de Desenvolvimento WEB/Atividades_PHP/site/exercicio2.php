<?php
// Exercício 2: grava cada nome completo em um arquivo de texto no servidor.
// No Docker: /var/www/dados/nomes.txt (volume persistente).
// No XAMPP: C:/xampp/htdocs/Atividades_PHP/dados/nomes.txt.
// A pasta "dados" fica ao lado da pasta "site" nos dois ambientes.
$diretorioDados = dirname(__DIR__) . '/dados';
$arquivo = $diretorioDados . '/nomes.txt';
$nome = '';
$sobrenome = '';
$mensagem = '';
$erro = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = trim($_POST['nome'] ?? '');
    $sobrenome = trim($_POST['sobrenome'] ?? '');
    if ($nome === '' || $sobrenome === '') {
        $erro = 'Preencha o nome e o sobrenome.';
    } elseif (preg_match('/[\r\n]/', $nome . $sobrenome)) {
        $erro = 'Digite o nome e o sobrenome em uma linha.';
    } else {
        $linha = $nome . ' ' . $sobrenome . PHP_EOL;
        // FILE_APPEND adiciona novos registros sem apagar os anteriores.
        $gravado = file_put_contents($arquivo, $linha, FILE_APPEND | LOCK_EX);
        if ($gravado === false) {
            $erro = 'Não foi possível gravar o arquivo nomes.txt.';
        } else {
            $mensagem = 'Nome salvo com sucesso no arquivo nomes.txt!';
            $nome = '';
            $sobrenome = '';
        }
    }
}
$nomesSalvos = file_exists($arquivo) ? file($arquivo, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) : [];
if ($nomesSalvos === false) $nomesSalvos = [];
$titulo = 'Exercício 2 | Salvar nomes';
require __DIR__ . '/cabecalho.php';
?>
<header class="cabecalho-pagina">
    <span class="etiqueta">EXERCÍCIO 02 · ARQUIVOS TXT</span>
    <h1>Salvar nomes</h1>
    <p>Grave nome e sobrenome em um arquivo no servidor, sem apagar os anteriores.</p>
</header>
<div class="grade-pagina">
    <div class="coluna-formulario">
        <section class="painel">
            <div class="cabecalho-painel"><span class="icone-painel">02</span><div><h2>Novo registro</h2><p>Os nomes serão salvos no servidor.</p></div></div>
            <form action="exercicio2.php" method="post">
                <div class="campos-duplos">
                    <div class="campo"><label for="nome">Nome</label><input type="text" id="nome" name="nome" maxlength="80" required value="<?= htmlspecialchars($nome, ENT_QUOTES, 'UTF-8') ?>" placeholder="Ex.: João"></div>
                    <div class="campo"><label for="sobrenome">Sobrenome</label><input type="text" id="sobrenome" name="sobrenome" maxlength="80" required value="<?= htmlspecialchars($sobrenome, ENT_QUOTES, 'UTF-8') ?>" placeholder="Ex.: Souza"></div>
                </div>
                <button class="botao" type="submit">Salvar nome <span aria-hidden="true">→</span></button>
            </form>
            <?php if ($mensagem !== ''): ?><p class="mensagem sucesso" role="status"><?= htmlspecialchars($mensagem, ENT_QUOTES, 'UTF-8') ?></p><?php endif; ?>
            <?php if ($erro !== ''): ?><p class="mensagem erro" role="alert"><?= htmlspecialchars($erro, ENT_QUOTES, 'UTF-8') ?></p><?php endif; ?>
        </section>
        <section class="painel registros">
            <div class="cabecalho-registros"><h2>Registros salvos</h2><span class="contador"><?= count($nomesSalvos) ?> nome(s)</span></div>
            <?php if (count($nomesSalvos) === 0): ?>
                <p class="sem-registros">Nenhum nome foi salvo ainda.</p>
            <?php else: ?>
                <ol class="lista-nomes"><?php foreach ($nomesSalvos as $registro): ?><li><?= htmlspecialchars($registro, ENT_QUOTES, 'UTF-8') ?></li><?php endforeach; ?></ol>
            <?php endif; ?>
        </section>
    </div>
    <aside class="painel-ajuda">
        <span class="etiqueta">COMO FUNCIONA</span><h3>Arquivo de texto</h3>
        <ol class="etapas"><li>Digite um nome e sobrenome.</li><li>O PHP acrescenta os dados em <code>nomes.txt</code>.</li><li>A lista mostra os registros já gravados.</li></ol>
        <div class="lembrete">Os dados ficam no arquivo <code>dados/nomes.txt</code> do projeto. No Docker, ele é mantido em um volume; no XAMPP, na pasta <code>dados</code>.</div>
    </aside>
</div>
<?php require __DIR__ . '/rodape.php'; ?>
