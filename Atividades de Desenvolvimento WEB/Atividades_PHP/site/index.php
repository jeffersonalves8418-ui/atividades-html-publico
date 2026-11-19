<?php
$titulo = 'Início | Atividades de PHP';
require __DIR__ . '/cabecalho.php';
?>
<section class="secao-atividades inicio-atividades">
    <div class="cabecalho-secao">
        <div>
            <span class="etiqueta">ATIVIDADES</span>
            <h1>Exercícios de PHP</h1>
            <p>Escolha uma atividade para abrir e testar.</p>
        </div>
        <span class="contador">4 exercícios</span>
    </div>

    <div class="grade-atividades">
        <a href="exercicio1.php" class="cartao-atividade">
            <div class="cartao-linha"><span class="numero-cartao">01</span><span class="seta-cartao" aria-hidden="true">↗</span></div>
            <h3>Nome completo</h3>
            <p>Receba nome e sobrenome e mostre o resultado em uma caixa de texto.</p>
            <span class="tag-cartao">Formulário PHP</span>
        </a>
        <a href="exercicio2.php" class="cartao-atividade">
            <div class="cartao-linha"><span class="numero-cartao">02</span><span class="seta-cartao" aria-hidden="true">↗</span></div>
            <h3>Salvar nomes</h3>
            <p>Grave nomes em um arquivo TXT e consulte os registros já salvos.</p>
            <span class="tag-cartao">Arquivo nomes.txt</span>
        </a>
        <a href="exercicio3.php" class="cartao-atividade">
            <div class="cartao-linha"><span class="numero-cartao">03</span><span class="seta-cartao" aria-hidden="true">↗</span></div>
            <h3>Tabuada</h3>
            <p>Digite um número e calcule a tabuada usando um laço no servidor.</p>
            <span class="tag-cartao">Laço for</span>
        </a>
        <a href="login.php" class="cartao-atividade">
            <div class="cartao-linha"><span class="numero-cartao">04</span><span class="seta-cartao" aria-hidden="true">↗</span></div>
            <h3>Tela de login</h3>
            <p>Teste a validação de um usuário e uma senha definidos na atividade.</p>
            <span class="tag-cartao">Condição if / else</span>
        </a>
    </div>
</section>
<?php require __DIR__ . '/rodape.php'; ?>
