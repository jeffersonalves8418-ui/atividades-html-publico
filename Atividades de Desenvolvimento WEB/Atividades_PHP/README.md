# Atividades de PHP — Exercícios 1, 2, 3 e 4

Projeto acadêmico em PHP + CSS, com menu lateral esquerdo, preparado para **Docker Desktop** e **XAMPP**.

A pasta se chama `Atividades_PHP` e ocupa no repositório o lugar da antiga `Tela_Login`. O login é o **exercício 4**.

## Estrutura do projeto

```text
Atividades_PHP/
├── site/
│   ├── index.php           # Início com os quatro exercícios
│   ├── cabecalho.php       # Menu lateral reutilizado
│   ├── exercicio1.php      # Nome e sobrenome
│   ├── exercicio2.php      # Salvar nomes.txt
│   ├── exercicio3.php      # Tabuada calculada no servidor
│   ├── login.php           # Exercício 4 (João / 1234)
│   ├── rodape.php
│   └── style.css
├── dados/
│   ├── .gitkeep            # Mantém a pasta no GitHub
│   └── .htaccess           # Bloqueia acesso direto a arquivos nesta pasta
├── compose.yaml
├── Dockerfile
├── .gitignore
├── LEIA_ME_PROFESSOR.txt
└── README.md
```

## Como executar no Docker Desktop

1. Abra o Docker Desktop.
2. Abra um terminal **dentro desta pasta**, onde estão `compose.yaml` e `Dockerfile`.
3. Execute:

```powershell
docker compose up --build -d
```

4. Abra **http://localhost:8080**.

O Docker monta os arquivos de `site/` em `/var/www/html` e mantém os nomes em um volume persistente, no caminho `/var/www/dados`. O projeto conserva o nome `atividade_php_docker` para poder reutilizar o volume dos testes anteriores, se ele ainda existir.

Para visualizar o arquivo de nomes, estando na pasta do projeto:

```powershell
docker compose exec site-php cat /var/www/dados/nomes.txt
```

No aplicativo Docker Desktop também é possível abrir Containers > contêiner `site-php` > Files > `var/www/dados/nomes.txt`. A aba Files pode não abrir o TXT ao clicar; o comando acima mostra o conteúdo.

Se o contêiner antigo ainda estiver usando a porta 8080, encerre-o antes de iniciar outra cópia do projeto. Para desligar, use `docker compose down` **sem `-v`**, para não apagar o volume de dados.

## Como executar no XAMPP (Windows)

1. Copie a pasta `Atividades_PHP` completa para `C:\xampp\htdocs\Atividades_PHP`.
2. No painel do XAMPP, inicie **Apache**. Não é necessário ligar o MySQL.
3. Abra **http://localhost/Atividades_PHP/site/**.
4. Os nomes gravados no Exercício 2 aparecem em `C:\xampp\htdocs\Atividades_PHP\dados\nomes.txt`, após salvar o primeiro registro. Abra com o Bloco de Notas.

Se a porta do Apache não for a padrão 80, use a porta que estiver configurada no XAMPP.

## Como verificar cada atividade

| Exercício | Teste | Resultado esperado |
|---|---|---|
| 1 — Nome completo | Nome Jefferson, sobrenome Alves | Campo com `Jefferson Alves` |
| 2 — Salvar nomes | Nome Maria, sobrenome Silva | Mensagem de sucesso, lista atualizada e uma linha `Maria Silva` em `nomes.txt` |
| 3 — Tabuada | Número 5 | Tabela de `5 × 1 = 5` a `5 × 10 = 50` |
| 4 — Login | Usuário `João`, senha `1234` | `Você está logado` |
| 4 — Login (erro) | Usuário `João`, senha `9999` | `Usuário ou senha errados` |

**Importante:** o Exercício **2** salva o nome e sobrenome em arquivo **TXT**, não em banco de dados SQL. O Exercício **3** calcula a tabuada.

## Como organizar no seu repositório GitHub

O conteúdo desta entrega é apenas a pasta `Atividades_PHP`. Mantenha todas as outras pastas já existentes no seu repositório.

- Faça uma cópia de segurança da antiga pasta `Tela_Login`, pois ela contém um projeto anterior (`painel.php`, por exemplo) que não faz parte destes quatro exercícios.
- Renomeie `Tela_Login` para `Atividades_PHP` ou remova a pasta antiga **depois de fazer o backup** e envie a pasta `Atividades_PHP` desta entrega.
- Se o seu `portfolio/index.html` tiver links apontando para `Tela_Login`, atualize-os para a nova pasta `Atividades_PHP/site/` quando o portfólio estiver sendo servido por PHP/Apache.
- O GitHub armazena e mostra os arquivos, mas o **GitHub Pages não executa PHP**. Os exercícios precisam de Docker Desktop, XAMPP ou de uma hospedagem com PHP para funcionar. Não confunda visualizar o código no GitHub com executar o site.
- A pasta `dados/` é enviada sem nomes reais; os arquivos `nomes.txt` gerados nos testes são ignorados pelo `.gitignore`.

Leia também `LEIA_ME_PROFESSOR.txt`, com o texto escrito para apresentar a atividade ao professor.
