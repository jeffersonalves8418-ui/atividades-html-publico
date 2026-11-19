<?php
// Exercício 4: valida credenciais fixas solicitadas pelo professor.
// Este exemplo é didático; não representa uma autenticação segura para uso real.
$usuario = '';
$mensagem = '';
$tipoMensagem = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = trim($_POST['usuario'] ?? '');
    $senha = $_POST['senha'] ?? '';
    if ($usuario === 'João' && $senha === '1234') {
        $mensagem = 'Você está logado';
        $tipoMensagem = 'sucesso';
    } else {
        $mensagem = 'Usuário ou senha errados';
        $tipoMensagem = 'erro';
    }
}
$titulo = 'Exercício 4 | Login';
require __DIR__ . '/cabecalho.php';
?>
<header class="cabecalho-pagina">
    <span class="etiqueta">EXERCÍCIO 04 · CONDIÇÕES</span>
    <h1>Tela de login</h1>
    <p>Envie os dados de acesso e veja a resposta da validação feita pelo PHP.</p>
</header>
<div class="grade-pagina">
    <section class="painel">
        <div class="cabecalho-painel"><span class="icone-painel">04</span><div><h2>Acessar o sistema</h2><p>Informe usuário e senha para testar.</p></div></div>
        <form action="login.php" method="post">
            <div class="campo"><label for="usuario">Usuário</label><input type="text" id="usuario" name="usuario" maxlength="80" required value="<?= htmlspecialchars($usuario, ENT_QUOTES, 'UTF-8') ?>" placeholder="Digite seu usuário" autocomplete="username"></div>
            <div class="campo"><label for="senha">Senha</label><input type="password" id="senha" name="senha" required placeholder="Digite sua senha" autocomplete="current-password"></div>
            <button class="botao" type="submit">Entrar <span aria-hidden="true">→</span></button>
        </form>
        <?php if ($mensagem !== ''): ?><p class="mensagem <?= $tipoMensagem ?>" role="status"><?= htmlspecialchars($mensagem, ENT_QUOTES, 'UTF-8') ?></p><?php endif; ?>
    </section>
    <aside class="painel-ajuda">
        <span class="etiqueta">COMO FUNCIONA</span><h3>Teste de login</h3>
        <p class="texto-ajuda">Use os dados definidos no enunciado:</p>
        <div class="credenciais"><div><span>Usuário</span><strong>João</strong></div><div><span>Senha</span><strong>1234</strong></div></div>
        <div class="lembrete">O PHP usa <code>if / else</code> para mostrar uma mensagem de acerto ou erro.</div>
    </aside>
</div>
<?php require __DIR__ . '/rodape.php'; ?>
