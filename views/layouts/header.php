<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= h(APP_NAME) ?></title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>
    <header>
        <h1><?= h(APP_NAME) ?></h1>
        <nav>
            <a href="<?= base_url('?page=home') ?>">Início</a>
            <a href="<?= base_url('?page=menu') ?>">Cardápio</a>
            <a href="<?= base_url('?page=cart') ?>">Carrinho</a>
            <a href="<?= base_url('?page=login') ?>">Login</a>
        </nav>
    </header>
    <main></main>