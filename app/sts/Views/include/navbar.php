<?php

// Exemplo antiga versão nao deu certo
if (!defined('48b5ts')) {
    // Redirecionando para a Raiz do projeto
    header("Location: /");
    die("Erro: Página não encontrada!");
}
?>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-primary">
    <div class="container">
        <a class="navbar-brand" href="<?= URL; ?>">Celke</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample07">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= URL; ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= URL; ?>sobre-empresa">Sobre Empresa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= URL; ?>contato">Contato</a>
                </li>
            </ul>
        </div>
    </div>
</nav>