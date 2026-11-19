<?php
// Cabecalho compartilhado entre todas as atividades.
$paginaAtual = basename($_SERVER['SCRIPT_NAME']);
$nomesPaginas = [
    'index.php' => 'Início',
    'exercicio1.php' => 'Nome completo',
    'exercicio2.php' => 'Salvar nomes',
    'exercicio3.php' => 'Tabuada',
    'login.php' => 'Login'
];
$nomePagina = $nomesPaginas[$paginaAtual] ?? 'Atividades';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($titulo ?? 'Atividades PHP', ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="layout">
    <aside class="lateral">
        <a class="lateral-titulo" href="index.php">Atividades PHP</a>

        <p class="titulo-menu">NAVEGAÇÃO</p>
        <nav class="menu" aria-label="Menu de exercícios">
            <a href="index.php" class="menu-inicio<?= $paginaAtual === 'index.php' ? ' ativo' : '' ?>" <?= $paginaAtual === 'index.php' ? 'aria-current="page"' : '' ?>>
                <span>Início</span>
            </a>
            <a href="exercicio1.php" <?= $paginaAtual === 'exercicio1.php' ? 'class="ativo" aria-current="page"' : '' ?>>
                <span class="item-numero">01</span><span>Nome completo</span>
            </a>
            <a href="exercicio2.php" <?= $paginaAtual === 'exercicio2.php' ? 'class="ativo" aria-current="page"' : '' ?>>
                <span class="item-numero">02</span><span>Salvar nomes</span>
            </a>
            <a href="exercicio3.php" <?= $paginaAtual === 'exercicio3.php' ? 'class="ativo" aria-current="page"' : '' ?>>
                <span class="item-numero">03</span><span>Tabuada</span>
            </a>
            <a href="login.php" <?= $paginaAtual === 'login.php' ? 'class="ativo" aria-current="page"' : '' ?>>
                <span class="item-numero">04</span><span>Login</span>
            </a>
        </nav>

        <div class="lateral-rodape">
            <span class="status-ponto"></span>
            <div><strong>Ambiente de prática</strong><small>PHP + Apache</small></div>
        </div>
    </aside>

    <div class="conteudo">
        <header class="barra-superior">
            <div class="trilha">Atividades <span>/</span> <strong><?= htmlspecialchars($nomePagina, ENT_QUOTES, 'UTF-8') ?></strong></div>
            <div class="selo-servidor"><span class="status-ponto"></span> PHP no servidor</div>
        </header>
        <main class="principal">
